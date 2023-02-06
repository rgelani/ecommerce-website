<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\ChildSubCategory;
use App\Models\HsnCode;
use Excel;

class AddProductHsnCode extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'add:bulk-products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Category, Subcategory, ChildSubcategory and has-code from csv files.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $files = \File::files(public_path());
            foreach($files as $file) {
                if($file->getFileName() == 'main_listing_file.xlsx') {
                    $data = Excel::toArray([],$file->getRealPath());
                    $category_data = [];
                    $totalCategory = count($data[1]) - 1;
                    // create category is not available
                    foreach($data[1] as $data_key => $categories) {
                        foreach($categories as $category_key => $category_name) {
                            if($data_key > 1 && $category_key == 0 && !empty($category_name)) {
                                $category = Category::where('name', $category_name)->first();
                                if(empty($category->id)) {
                                    $category = Category::create([
                                        'name' => $category_name
                                    ]);
                                }
                                $category_data[] = [$category_name => $category->id];
                            }
                        }
                    }
                    // create sub category based on category
                    foreach($category_data as $category_data_key => $category_name) {
                        foreach($data[1] as $category_key => $categories) {
                            if($category_key >= 2) {
                                if(!empty($categories[$category_data_key + 1])) {
                                    $category_id = array_values($category_name);
                                    $subCategory = SubCategory::where('name', $categories[$category_data_key + 1])->where('id', $category_id[0])->first();
                                    if(empty($subCategory->id)) {  
                                        $subCategory = SubCategory::create([
                                            'name' => $categories[$category_data_key + 1],
                                            'category_id' => $category_id[0]
                                        ]);
                                    }
                                    $category_data[$category_data_key]['sub_category'][$subCategory->name] = $subCategory->id;
                                }
                            }
                        }
                    }

                    $subCategoryList = [];
                    $count = 1;
                    foreach($data[1] as $data_key => $categorise) {
                        foreach($categorise as $category_key => $category) {
                            if($category_key > count($category_data)) {
                                $subCategoryList[$data_key][$category_key] = $category;
                            }
                        }
                    }
                    for($i = 1; $i <= count($subCategoryList[0]); $i++) {
                        $childSubCategoryArray = [];
                        foreach($subCategoryList as $subCategoryKey => $subCategory) {
                                if($subCategoryKey == 0) {
                                    $subCategoryName = $subCategoryList[0][$i + count($category_data)];
                                    $subCategory = SubCategory::where('name', $subCategoryName)->first();
                                    $subCategoryId = $subCategory->id;
                                } elseif(!empty($subCategory[$i + count($category_data)])) {
                                    $childSubCategory = ChildSubCategory::where('name', $subCategory[$i + count($category_data)])->where('sub_category_id', $subCategoryId)->first();
                                    if(empty($childSubCategory->id)) {
                                        ChildSubCategory::create([
                                            'name' => $subCategory[$i + count($category_data)],
                                            'sub_category_id' => $subCategoryId
                                        ]);
                                    }
                                }
                        }
                    }
                    dd('DONE');
                }
            }
        } catch(\Exception $e) {
            Log::error('Error on AddProductHsnCode | Message : '.$e->getMessage().' | Line : '.$e->getLine());
        }
    }
}















    