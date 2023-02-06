<?php

namespace App\Services\Product;

use App\Models\Product;
use App\Models\Category;

class ProductsService {
    public function __construct() {

    }

    public function getProducts($request){
        try{
            $category_id = $request->category_id;
            $sub_category_id = (@$request->sub_category_id) ?: '';
            $price = explode('-', $request->price);
            $sort_by = explode('-', $request->sort_by);
            $filter = $request->filter;

            $query = Product::select('id', 'title', 'brand_name', 'selling_price', 'sale_price', 'MRP')
                                ->with('productImage')
                                ->where('category_id', $category_id)
                                ->whereBetween('selling_price', $price);

                        if(!empty($filter)){
                            foreach($filter as $k=>$f){
                                $t = ($k == 'tag') ? 'keyword': $t;
                                $query->whereIN($t, $f);
                            }
                        }

                        // Search in Sub category
                        if($sub_category_id){
                            $query->where(function ($query) use ($sub_category_id) {
                                $query->where('sub_category_id', '=', $sub_category_id)
                                      ->orWhere('child_sub_category_id', '=', $sub_category_id);
                            });
                        }

                        // Sort By filter
                        $query->orderBy($sort_by[0], $sort_by[1]);
                        $products = $query->paginate(10);
                        
            $filters =  Product::select('brand_name', 'color', 'size', 'keyword','key_features')->where('category_id', $category_id)->get();           
            $categories = Category::where('id', $category_id)->with(['subCategory' => function($q1) {
                            $q1->with('childSubCategory');
                        }])->first();

                     
            $totalProduct = Product::count();
            $filter_count = '(Showing <span>'. $products->firstItem() .'</span> - <span>'. $products->lastItem() .'</span> products of <span>'. $products->total() .'</span> products of <span>'.$totalProduct.'</span> products)';            
            $data['html'] = $this->productHTML($products); 
            $data['paginate']['html'] = $this->pagination($products);
            $data['paginate']['filter_count'] = $filter_count;
            $data['categories'] = $this->categoriesHTML($categories);
            $data['filters'] = $this->filtersHTML($filters);      
            return $data;
        }catch(\Exception $e){
            logger($e);
        }
    }

    public function productHTML($products){
        $html = '';
        if(count($products) > 0){
            foreach($products as $key=>$product){
                $alt = (@$product->productImage->alt) ? "'". $product->productImage->alt ."'" : ''; 
                $html .= '<div class="col-lg-3" data-aos="flip-left">
                        <div class="product-item">';
                            $src = asset('storage/product/' . explode(',', $product->productImage->src ?? '')[0]);
                            $html .= '<a href="#">
                                <img src="'.$src.'" class="product-image" alt='. $alt .'>
                                <div class="like-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="20"
                                        viewBox="0 0 23 20" fill="none">
                                        <path
                                            d="M16.1581 0C13.7966 0 12.3059 1.14933 11.4406 2.1885C10.5755 1.14929 9.08494 0 6.72255 0C2.70128 0 0 3.72521 0 7.20428C0 12.2692 9.72855 19.0571 10.8379 19.8142C11.0195 19.9381 11.23 20 11.4406 20C11.6511 20 11.8616 19.9379 12.0432 19.8142C13.1525 19.0571 22.8811 12.2692 22.8811 7.20428C22.8811 3.72521 20.1795 0 16.1581 0Z"
                                            fill="black" fill-opacity="0.2" />
                                        <path
                                            d="M11.0563 2.50838L11.4405 2.96994L11.8248 2.50845C12.6226 1.55037 13.9832 0.5 16.1581 0.5C19.8364 0.5 22.3811 3.92927 22.3811 7.20428C22.3811 8.32125 21.839 9.59336 20.9308 10.9228C20.0296 12.2421 18.8069 13.5613 17.5351 14.7609C14.9927 17.1588 12.3085 19.0277 11.7615 19.4011C11.6647 19.467 11.5528 19.5 11.4406 19.5C11.328 19.5 11.2161 19.467 11.1196 19.4011C10.5726 19.0278 7.8884 17.1589 5.34601 14.7609C4.07413 13.5613 2.85153 12.2421 1.95028 10.9228C1.04206 9.59336 0.5 8.32125 0.5 7.20428C0.5 3.92923 3.04441 0.5 6.72255 0.5C8.89837 0.5 10.2588 1.55037 11.0563 2.50838Z"
                                            stroke="black" stroke-opacity="0.2" />
                                    </svg>
                                </div>
                            </a>
                            <div class="product-details">
                                <a href="">
                                    <p class="product-compney">'. $product->brand_name .'</p>
                                </a>
                                <a href="">
                                    <p class="product-name">'.$product->title.'</p>
                                </a>
                                <div class="product-price d-flex">
                                    <p class="product-ikart-price">Rs.'.$product->selling_price .'</p>';
                                    if($product->selling_price != $product->MRP){
                                        $html .= '<p class="product-original-price"> Rs.'.$product->MRP.'</p>
                                        <p class="product-discount">'. ceil((($product->MRP - $product->selling_price)*100/$product->MRP)) .'% off</p>';
                                    }
                                $html .= '</div>
                            </div>
                        </div>
                    </div>
                ';
            }
        }else{
            $html .= 'No data available';
        }  
        return $html;
    }

    public function categoriesHTML($categories){
        $html = '';
        if(count($categories->subCategory) > 0){
            foreach($categories->subCategory as $key=>$sub_category){
                $html .= '<h3>'. $sub_category->name .'</h3>';

                if(count($sub_category->childSubCategory) > 0){
                    $html .= '<ul class="mens-top-wear">';
                    foreach($sub_category->childSubCategory as $key=>$child_category){
                        $html .= '<li>'. $child_category->name .'</li>';
                    }
                    $html .= '</ul>';
                }
            } 
        }else{
            $html = 'No Subcategories found.';
        }

        return $html;
    }

    public function filtersHTML($filters){
        $html = '';
        $filterData = [
            'color' => [],
            'size' => [],
            'brand_name' => [],
            'tag' => [],
        ];
        
        if(count($filters) > 0){
            foreach($filters as $filter){
                $filterData['color'][] = $filter->color;
                $filterData['size'][] = $filter->size;
                $filterData['brand_name'][] = $filter->brand_name;
                $filterData['tag'] = array_merge($filterData['tag'], explode(',', $filter->key_features));
                $filterData['tag'] = array_merge($filterData['tag'], explode(',', $filter->keyword));
            }
        }
        
        $i = 0;
        foreach($filterData as $key => $filter){
            if(count($filter) > 0){
                $html .= '<div class="accordion-item">';
                $html .= '<h2 class="accordion-header" id="heading'.$i.'">';
                $html .= '<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$i.'" aria-expanded="false" aria-controls="collapse'.$i.'">'. strtoupper($key) .'</button>';
                $html .= '</h2>';
                $html .= '<div id="collapse'.$i.'" class="accordion-collapse collapse" aria-labelledby="heading'.$i.'" data-bs-parent="#accordionExample">';
                $html .= '<div class="accordion-body">';
                $html .= '<ul class="brannd-checkbox">';
            }
        
        $filter = array_unique($filter);
            foreach($filter as $data){
                $html .= '<li>';
                $html .= '<label>';
                $html .= '<input type="checkbox" name="'.$key.'" class="chk_filters" value="'. $data .'">';
                $html .= '<span>'. $data .'</span>';
                $html .= '</label>';
                $html .= '</li>';
            }
        
        $html .= '</ul>';
        $html .= '</div>';
        $html .= '</div>';
        $html .= '</div>';
        $i++;
        }
        return $html;

    }

    public function pagination($products){
        try{
            $html = '';
            $currentPage = $products->currentPage();
            $totalPages = $products->lastPage();
            $range = 3;

            $html .= '
            <span class="pe-3"> <b>Total Page</b> - <span id="total-page">'. $totalPages .'</span></span>
            <div class="categories-tabs-center">';

            if ($products->onFirstPage()) {
                $html .= '<button disabled>Prev</button><ul>';
            } else {
                $html .= '<button onClick="getProducts('.($currentPage - 1).')">Prev</button><ul>';
            }

            if($currentPage > 3) {
                $html .= '<li><a onClick="getProducts(1)">1</a></li>';
            }

            if($currentPage > 4) {
                $html .= '<li><a href="#">...</a></li>';
            }

            for($i = 1; $i <= $totalPages; $i++) {
                if($i >= ($currentPage - $range) && $i <= ($currentPage + $range)) {
                    if ($i == $currentPage) {
                        // 'highlight' it but don't make a link
                        $html .= '<li class="active"><a>'.$i.'</a></li>';
                    } else {
                        // make it a link
                        $html .= '<li><a onClick="getProducts('. $i .')">'.$i.'</a></li>';
                    }
                }
            }

            if($currentPage < $totalPages - $range) {
                $html .= '<li><a href="#">...</a></li>';
            }

            if($currentPage < $totalPages - ($range - 1)) {
                $html .= '<li><a onClick="getProducts('.$totalPages.')">'.$totalPages.'</a></li>';
            }

            if ($products->hasMorePages()) {
                $html .= '<button onClick="getProducts('.($currentPage + 1).')">Next</button>';
            } else {
                $html .= '<button disabled>Next</button>';
            }

            $html .= '
            </ul>
            </div>
            <div class="categories-tabs-center categories-tabs-right ps-lg-5">
                <button class="product-first" onClick="getProducts(1)">First</button>
                <button class="product-last" onClick="getProducts('.$totalPages.')">Last</button>
            </div>';

            return $html;
        } catch(\Exception $e){
            logger($e);
        }
    }
}