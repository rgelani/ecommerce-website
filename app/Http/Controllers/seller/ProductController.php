<?php

namespace App\Http\Controllers\seller;

use App\DataTables\ProductDataTable;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ChildSubCategory;
use App\Models\HsnCode;
use App\Models\Product;
use App\Models\Variant;
use App\Models\ProductVariantImage;
use App\Models\Seller;
use App\Models\SellerReferralAccount;
use App\Models\SellerWalletAmount;
use App\Models\SellerWalletHistory;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Excel;
use Log;
use App\Imports\ProductsImport;

class ProductController extends Controller
{
    public function product_upload () {
        return view('seller.product.product_upload', ["seller" => "sdfsfsd"]);
    }

    public function view(ProductDataTable $dataTable)
    {
        return $dataTable->render('seller.product.list');
    }

    public function index()
    {
        ini_set('memory_limit', '444M');

        // $tree = Category::with(['parent', 'child'])->whereNull('parent_id')->get();
        $tree = Category::get();
        $data = "<div class='first_menu common_menu_wrap'><div class='top_menu'><ul>";
        foreach ($tree as $category) {
            $data .= "<li><a href='#0' data-menu='{$category->name}' data-menuid='{$category->id}'>{$category->name}</a></li>";
        }
        $data .= "</ul></div></div><div class='sec_menu common_menu_wrap'>";

        // foreach ($tree as $category) {
        //     $data1 = "<div class='{$category->name}'><ul>";
        //     foreach ($category->child as $key => $category1) {
        //         $data1 .= "<li>
        //                     <a href='#0' data-menu='{$category1->name}'>{$category1->name}</a>
        //                 </li>";
        //     }
        //     $data1 .= "</ul></div>";
        //     if ($category->child->isNotEmpty())
        //         $data .= $data1;
        // }
        $data .= '</div><div class="third_menu common_menu_wrap">';

        // $third =  $tree->pluck('child')->collapse();

        // foreach ($third as $categorys) {
        //     $data2 = "";
        //     $data2 .= "<div class='{$categorys->name}'><ul>";
        //     foreach ($categorys->child as $key => $category12) {
        //         $data2 .= "<li>
        //                     <a href='#0' data-menu='{$category12->name}'>{$category12->name}</a>
        //                 </li>";
        //     }
        //     $data2 .= "</ul></div>";
        //     if ($categorys->child->isNotEmpty())
        //         $data .= $data2;
        // }
        $data .= "</div>";
        // $treesecond = "<div class='first_menu common_menu_wrap'><div class='top_menu'><ul>{$this->data($tree->child)}</ul></div></div>";

        // $child_sub_category = ChildSubCategory::get();
        $child_sub_category = DB::table('child_sub_categories')->join('sub_categories', 'sub_categories.id', '=', 'child_sub_categories.sub_category_id')
        ->join('categories', 'categories.id', '=', 'sub_categories.category_id')
        ->select("child_sub_categories.id", 'child_sub_categories.sub_category_id', "sub_categories.category_id", "child_sub_categories.name as child_sub_name", "sub_categories.name as sub_name", "categories.name as cat_name")->get();
        return view('seller.product.single_product_listing', compact('data', 'child_sub_category'));
    }

    public function sub_category ($id) {
        try{
            $response = SubCategory::where('category_id', $id)->get();
            return response($response);
        }catch (\Exception $e) {
            \Log::error('Error on productController sub_category function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
        }
    }

    public function child_sub_category ($id) 
    {
        try{
            $response = ChildSubCategory::where('sub_category_id', $id)->get();
            return response($response);
        }catch (\Exception $e) {
            \Log::error('Error on productController child_sub_category function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
        }
    }

    function search_child_sub_category (Request $request) {
        // $response = ChildSubCategory::where("name", "like","%$request->search%");
        $response = DB::table('child_sub_categories')->join('sub_categories', 'sub_categories.id', '=', 'child_sub_categories.sub_category_id')
        ->join('categories', 'categories.id', '=', 'sub_categories.category_id')
        ->select("child_sub_categories.id", 'child_sub_categories.sub_category_id', "sub_categories.category_id", "child_sub_categories.name as child_sub_name", "sub_categories.name as sub_name", "categories.name as cat_name")
        ->where("child_sub_categories.name", "like","%$request->search%")
        ->get();
        return response($response);
    }

    public function get_hsnlist ($id) {
        try{
            $response = HsnCode::where('child_sub_category_id', $id)->get();
            return response($response);
        }catch (\Exception $e) {
            \Log::error('Error on productController get_hsnlist function : Message : '.$e->getMessage().' | Line : '.$e->getLine().' | File : '.$e->getFile());
        }
    }

    public function store(Request $request)
    {
        $variants = json_decode($request->variants, true);

        $validatorVariant = Validator::make($variants, [
            '*.variant_size' => 'required',
            '*.SKU_id' => 'required',
            '*.variant_color' => 'required',
        ]);
        $validatorProduct = Validator::make($request->all(), [
            'sku' => 'required',
            'MRP' => 'required|integer',
            'selling_price' => 'required|integer',
            'hsn_code' => 'required_without:hsn_id',
            'hsn_id' => 'required_without:hsn_code',
            'GST' => 'required',
            'dispatch_in_day' => 'required|integer',
            'quantity' => 'required|integer',
            'local_delivery_charge' => 'required|integer',
            'zonal_delivery_charge' => 'required|integer',
            'national_delivery_charge' => 'required|integer',
            'length' => 'required|integer',
            'width' => 'required|integer',
            'weight' => 'required|integer',
            'height' => 'required|integer',
            'title' => 'required',
            'manufacturer' => 'required',
            'brand_name' => 'required',
            // 'description'=>'required',
            'keyword' => 'required',
            'key_features' => 'required',
            'meta_tags' => 'required',
            'return_order' => 'required',
            'return_order_in_day' => 'required',
            'country_of_origin' => 'required',
            'status' => 'required',
            'sale_price' => 'required',
            // 'product_image'=>'required',
            'color' => 'required',
            'size' => 'required',
            'model_no' => 'required',
            'pack_of' => 'required',
            'sale_start_date' => 'required',
            'sale_end_date' => 'required',
            // 'category_name' => 'required',
            // 'category_name_first' => 'required'
            'sub_category_id' => 'required',
            // 'category_id' => 'required',
            'child_sub_category_id' => 'required'
        ]);

        if ($validatorVariant->fails() || $validatorProduct->fails()) {
            return response()->json(['error' => $validatorVariant->errors()->merge($validatorProduct->errors())]);
        } else {
            // dd($request);
            if ($request->id) {
                $product = Product::find($request->id);
                $diff = (array_diff(explode(',', ProductVariantImage::where('product_id', $request->id)->first()->src ?? ''), array_filter($request->product_image_name)));
                if (!empty($diff)) {
                    foreach ($diff as $dif) {
                        unlink(public_path("storage/product/{$dif}"));
                    }
                }
            } else {
                $product = new Product;
            }
            $product->sku = $request->sku;
            $product->seller_id  = Auth::guard('seller')->user()->id;
            $product->MRP = $request->MRP;
            $product->selling_price = $request->selling_price;

            if(empty($request->hsn_code)){
                $product->hsn_id = $request->hsn_id;
            }else{
                $hsn_arr = ["code" => $request->hsn_code, "child_sub_category_id" => $request->child_sub_category_id];
                $hsn_check = HsnCode::where($hsn_arr)->first();
                if(empty($hsn_check)){
                    $hsn_arr["seller_id"] = Auth::guard('seller')->user()->id;
                    $hsn_check = HsnCode::create($hsn_arr);
                }
                $product->hsn_id = $hsn_check->id;
            }
            // $product->HSN_code = $request->HSN_code;
            $product->GST = $request->GST;
            $product->dispatch_in_day = $request->dispatch_in_day;
            $product->quantity = $request->quantity;
            $product->local_delivery_charge = $request->local_delivery_charge;
            $product->zonal_delivery_charge = $request->zonal_delivery_charge;
            $product->national_delivery_charge = $request->national_delivery_charge;
            $product->weight = $request->weight;
            $product->length = $request->length;
            $product->width = $request->width;
            $product->height = $request->height;
            $product->title = $request->title;
            $product->manufacturer = $request->manufacturer;
            $product->brand_name = $request->brand_name;
            $product->color = $request->color;
            $product->size = $request->size;
            $product->model_no = $request->model_no;
            $product->pack_of = $request->pack_of;
            $product->description = $request->description;
            $product->keyword = implode(',', $request->keyword);
            $product->key_features = implode(',', $request->key_features);
            $product->meta_tags = implode(',', $request->meta_tags);
            $product->return_order = $request->return_order;
            $product->return_order_in_day = $request->return_order_in_day;
            $product->sale_price = $request->sale_price;
            $product->sale_start_date = Carbon::parse($request->sale_start_date);
            $product->sale_end_date = Carbon::parse($request->sale_end_date);
            $product->country_of_origin = $request->country_of_origin;
            // $product->sub_category_id = Category::where('name', $request->category_name_first)->first()->id;
            $product->sub_category_id = $request->sub_category_id;
            $product->child_sub_category_id = $request->child_sub_category_id;
            // $product->category_id = Category::where('name', $request->category_name)->first()->id;
            $product->category_id = $request->category_id;
            $product->qc_status = 1;
            $product->status = $request->status;
            $product->save();

            $productImageName = implode(',', array_filter($request->product_image_name));
            // $product->variants()->dissociate();
            if ($request->product_image) {

                if ($productImageName) {
                    $productImageName .= ',';
                }
                foreach ($request->product_image as $key => $productImage) {
                    $imageName = 'product_' . $product->id . '_' . $key . '_' . Carbon::now()->timestamp . '.' . $productImage->getClientOriginalExtension();
                    $productImage->move(public_path('storage/product'), $imageName);
                    $productImageName .= $imageName . ',';
                }
                $productImageName = substr($productImageName, 0, -1);
            }
            $product->productImage()->delete();
            $product->productImage()->create(
                [
                    'src' => $productImageName,
                    'alt' => 'no image',
                ]
            );


            if (!empty(array_diff($product->variants()->get()->pluck('id')->toArray(), Arr::pluck($variants, 'variant_id')))) {
                $ProductVariantImages = ProductVariantImage::whereIn('variant_id', array_diff($product->variants()->get()->pluck('id')->toArray(), Arr::pluck($variants, 'variant_id')))->get();
                foreach ($ProductVariantImages as $key => $ProductVariantImage) {
                    foreach (array_filter(explode(',', $ProductVariantImage->src)) as $key => $value) {
                        unlink(public_path("storage/product/variant/{$value}"));
                    }
                }
                $variant = Variant::whereIn('id', array_diff($product->variants()->get()->pluck('id')->toArray(), Arr::pluck($variants, 'variant_id')))->delete();
            }

            foreach ($variants as $variant) {

                if ($variant['variant_id']) {
                    $ProductVariantImages = ProductVariantImage::where('variant_id', $variant['variant_id'])->first();
                    foreach (array_diff(array_filter(explode(',', $ProductVariantImages->src)), array_filter(explode(',', $variant['variant_image']['src'] ?? ''))) as $key => $value) {
                        unlink(public_path("storage/product/variant/{$value}"));
                    }
                    $variantData = $product->variants()->find($variant['variant_id'])->update(
                        [
                            'sku' => $variant['SKU_id'],
                            'size' => implode(',', $variant['variant_size']),
                            'color' => $variant['variant_color'],
                        ]
                    );
                    $variantImageName = $variant['variant_image']['src'] ?? '';
                    if (!empty($request['variantImages'][$variant['id']])) {

                        $imagekey = count(explode(',', array_filter($variantImageName))) - 1 ?? 0;
                        foreach ($request['variantImages'][$variant['id']] as $key => $images) {

                            $imageName = 'variant_' . $variant['variant_id'] . '_' . $imagekey . '_' . Carbon::now()->timestamp . '.' . $images->getClientOriginalExtension();
                            $images->move(public_path('storage/product/variant'), $imageName);
                            $variantImageName .= $imageName . ',';
                            $imagekey++;
                        }
                        $variantImageName = substr($variantImageName, 0, -1);
                    }
                    $product->variants()->find($variant['variant_id'])->variantImage->update(['alt' => 'no image', 'src' => $variantImageName]);
                } else {

                    $variantData = $product->variants()->create(
                        [
                            'sku' => $variant['SKU_id'],
                            'size' => implode(',', $variant['variant_size']),
                            'color' => $variant['variant_color'],
                        ]
                    );

                    $variantImageName = $variant['variant_image']['src'] ?? '';
                    if (!empty($request['variantImages'][$variant['id']])) {

                        foreach ($request['variantImages'][$variant['id']] as $key => $images) {
                            $imageName = 'variant_' . $variantData->id . '_' . $key . '_' . Carbon::now()->timestamp . '.' . $images->getClientOriginalExtension();
                            $images->move(public_path('storage/product/variant'), $imageName);
                            $variantImageName .= $imageName . ',';
                        }
                        $variantImageName = substr($variantImageName, 0, -1);
                    }
                    ProductVariantImage::create([
                        'src' => $variantImageName,
                        'alt' => 'no image',
                        'variant_id' => $variantData->id
                    ]);
                }
            }
        }

        // Add First Product Then Give Bonus If User Is Referral
        $sellerId = Auth::user()->id;
        $referUser = SellerReferralAccount::where(['seller_id' => $sellerId, 'bonus_status' => 0])->first();

        if ($referUser) {  // check user is refer or not

            $referUser->update(['bonus_status', 1]);
            $this->AddReferralBonus($sellerId, 500, 'Referral other seller winning amount ₹500 as per bonus system.');

            // seller referral
            $sellerReferId = $referUser->sponsor_seller_id;
            $sellerReferUser = Seller::where('seller_referred_id', $sellerReferId)->first();
            $this->AddReferralBonus($sellerReferUser->id, 1000, 'Congratulations you received ₹1000 using sponsored id when register your seller account.');
        }
        return response()->json(['success' => '']);
    }

    public function AddReferralBonus($id, $amount, $description)
    {
        $sellerWalletAmount = SellerWalletAmount::where('seller_id', $id)->first();
        if ($sellerWalletAmount) {
            $newBonusAmount = $sellerWalletAmount->total_amount + $amount;
            $sellerWalletAmount->update(['total_amount' => $newBonusAmount]);
        } else {
            SellerWalletAmount::create([
                'seller_id' => $id,
                'total_amount' => $amount
            ]);
        }

        // seller wallet history
        SellerWalletHistory::create([
            'seller_id' => $id,
            'amount' => $amount,
            'description' => $description,
        ]);
    }


    public function productPreview(Request $request)
    {
        $product = Product::with(['variants', 'productImage'])->find($request->id);

        $image = [];
        foreach (explode(',', $product->productImage->src) as $key => $value) {
            if ($value) {
                $image[] = asset('storage/product/' . $value);
            }
        }
        $data['image'] = $image;
        $data['title'] =  $product->title;
        $data['price'] =  $product->selling_price;
        $data['sku'] =  $product->sku;
        $data['stock'] = $product->quantity;
        $data['description'] = $product->description;
        $data['variant'] = $product->variants;
        // $data['HSN_code'] = $product->HSN_code;
        $data['hsn_id'] = $product->hsn_id;
        $data['meta_tags'] = $product->meta_tags;


        return response()->json($data);
    }

    public function delete(Product $product)
    {
        $product->delete();
        return response()->json();
    }

    public function edit($id)
    {
        $tree = Category::with(['parent', 'child'])->whereNull('parent_id')->get();
        $data = "<div class='first_menu common_menu_wrap'><div class='top_menu'><ul>";
        foreach ($tree as $category) {
            $data .= "<li><a href='#0' data-menu='{$category->name}'>{$category->name}</a></li>";
        }
        $data .= "</ul></div></div><div class='sec_menu common_menu_wrap'>";

        foreach ($tree as $category) {
            $data1 = "<div class='{$category->name}'><ul>";
            foreach ($category->child as $key => $category1) {
                $data1 .= "<li>
                            <a href='#0' data-menu='{$category1->name}'>{$category1->name}</a>
                        </li>";
            }
            $data1 .= "</ul></div>";
            if ($category->child->isNotEmpty())
                $data .= $data1;
        }
        $data .= '</div><div class="third_menu common_menu_wrap">';

        $third =  $tree->pluck('child')->collapse();
        foreach ($third as $categorys) {
            $data2 = "";
            $data2 .= "<div class='{$categorys->name}'><ul>";
            foreach ($categorys->child as $key => $category12) {
                $data2 .= "<li>
                            <a href='#0' data-menu='{$category12->name}'>{$category12->name}</a>
                        </li>";
            }
            $data2 .= "</ul></div>";
            if ($categorys->child->isNotEmpty())
                $data .= $data2;
        }
        $data .= "</div>";
        // $treesecond = "<div class='first_menu common_menu_wrap'><div class='top_menu'><ul>{$this->data($tree->child)}</ul></div></div>";



        $product = Product::with(['productImage', 'variants'])->find($id);

        return view('seller.product.single_product_listing', compact('product', 'data'));
    }

    public function variantEdit($id)
    {
        $variant = Variant::with('variantImage')->find($id);
        return response()->json($variant);
        # code...
    }

    public function variant($id)
    {
        return response()->json(Product::with(['productImage', 'variants'])->find($id)->variants);

        # code...
    }

    public function hsnCode(Request $request)
    {
        foreach (explode(',', $request->name) as $name) {
            $hsnCode[] = Category::where('name', $name)->first()->HSN_code;
        }
        return  implode(',', $hsnCode);
    }

    public function bluk_product()
    {
        return view("seller.product.bulk_product_listing");
    }

    public function image_bulk_upload()
    {
        return view("seller.product.image_bulk_upload");
    }

    public function uploadProducts(Request $request) {
        try {
            Excel::import(new ProductsImport, $request->bulk_sheet);
            return response()->json(['status' => 'success', 'code' => 200], 200);
        } catch(\Exception $e) {
            Log::error('Error on downloadCategory | Message : '.$e->getMessage().' | Line : '.$e->getLine());
        }
    }

    public function downloadCategory() {
        try {
            $new_sheet = [];
            $files = \File::files(public_path());
            foreach($files as $file) {
                if($file->getFileName() == 'main_listing_file.xlsx') {
                    return response()->download($file);
                }
            } 
        } catch(\Exception $e) {
            Log::error('Error on downloadCategory | Message : '.$e->getMessage().' | Line : '.$e->getLine());
        }
    }
}
