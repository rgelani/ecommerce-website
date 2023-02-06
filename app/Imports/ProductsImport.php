<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Model\Product;
use App\Model\Category;
use App\Model\SubCategory;
use App\Model\ChildSubCategory;
use App\Model\ProductVariantImage;

class ProductsImport implements ToModel, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function model(array $collection)
    {
        \Log::info('Collection data : '. json_encode($collection));
        if(!empty($collection[3]) && !empty($collection[4]) && !empty($collection[5] && 
        !empty($collection[6]) && !empty($collection[7]))) {
            $category = Category::where('name', $collection[3])->first();
            if(isset($category->id)) {
                $subCategory = SubCategory::where('name', $collection[4])->where('category_id', $category->id)->first();
                if(isset($subCategory->id)) {
                    $childSubCategory = ChildSubCategory::where('name', $collection[5])->where('sub_category_id', $subCategory->id)->first();
                    $productAvailable = Product::where('sku', $collection[7])
                                            ->where('category_id', $category->id)
                                            ->where('sub_category_id', $subCategory->id)
                                            ->where('child_sub_category_id', $childSubCategory->id)
                                            ->first();
                        if(!isset($productAvailable->id)) {
                            $product = Product::create([
                                'category_id' => $category->id,
                                'sub_category_id' => $subCategory->id,
                                'child_sub_category_id' => $childSubCategory->id,
                                'hsn_id' => $collection[6],
                                'sku' => $collection[7],
                                'dispatch_in_day' => $collection[8],
                                'quantity' => $collection[9],
                                'title' => $collection[10],
                                'color' => $collection[11],
                                'size' => $collection[12],
                                'model_no' => $collection[13],
                                'pack_of' => $collection[14],
                                'description' => $collection[15],
                                'keyword' => $collection[16], // SEO
                                'key_features' => $collection[17],
                                'meta_tags' => $collection[18],
                                'return_order' => $collection[19],
                                'return_order_in_day' => $collection[20],
                                'country_of_origin' => $collection[21],
                                'local_delivery_charge' => $collection[22],
                                'zonal_delivery_charge' => $collection[23],
                                'national_delivery_charge' => $collection[24],
                                'weight' => $collection[25],
                                'length' => $collection[26],
                                'width' => $collection[27],
                                'height' => $collection[28],
                                // collection[29] => image 1
                                // collection[30] => image 2
                                // collection[31] => image 3
                                // collection[32] => image 4
                                // collection[33] => image 5
                                // collection[34] => image 6
                                // collection[35] => image 7
                                // collection[36] => video 1
                                'sale_start_date' => $collection[37],
                                'sale_end_date' => $collection[38],
                                'sale_price' => $collection[39]
                            ]);
                            $productImages = [];
                            for($i = 29; $i <= 36; $i++) {
                                if(!empty($collection[$i])) {
                                    $productImages[] = [
                                        'product_id' => $product->id,
                                        'src' => $collection[$i]
                                    ];
                                }
                            }
                            if(!empty($productImages)) {
                                ProductVariantImage::insert($productImages);
                            }
                        }
                }
            } 
        }
    }
}
