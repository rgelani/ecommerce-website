@extends('admin.layouts.master')
@section('content')
<ul class="category_main">
            <div class="category_hedding d-flex align-items-center justify-content-between pt-5 ps-5">
              <a href="category.html" class="category_active"><h5 class="">Category</h5></a>
              <a href="{{ route('admin.category.list') }}"><h5 class="">Add category</h5></a>
            </div>
            <ul class="start_category d-flex mt-5">
              <div class="category_colum category_first_colum">
                <div class="main_category ">
                  <li class="d-inline ms-5 ps-4">Fashion</li><span class="d-inline ms-5 ps-3"><img
                      src="image/category_arrow.png" alt=""></span>
                </div>
                <li class="">Electronics</li>
                <li class="">Home</li>
                <li class="">Beauty & Personal Care</li>
                <li class="">Men's Grooming</li>
                <li class=""> Nutrition & Health Care</li>
                <li class=""> Baby Care</li>
                <li class=""> Toys & School Supplies</li>
                <li class=""> Sports & Fitness</li>
                <li class=""> Books & Music</li>
              </div>
              <div class="category_colum category_second_colum d-none">
                <div class="main_category ">
                  <li class="d-inline ms-5 ps-4">Fashion</li><span class="d-inline ms-5 ps-3"><img
                      src="image/category_arrow.png" alt=""></span>
                </div>
                <li class="">Electronics</li>
                <li class="">Home</li>
                <li class="">Beauty & Personal Care</li>
                <li class="">Men's Grooming</li>
                <li class=""> Nutrition & Health Care</li>
                <li class=""> Baby Care</li>
                <li class=""> Toys & School Supplies</li>
                <li class=""> Sports & Fitness</li>
                <li class=""> Books & Music</li>
              </div>
              <div class="category_colum category_third_colum d-none">
                <div class="main_category ">
                  <li class="d-inline ms-5 ps-4">Fashion</li><span class="d-inline ms-5 ps-3"><img
                      src="image/category_arrow.png" alt=""></span>
                </div>
                <li class="">Electronics</li>
                <li class="">Home</li>
                <li class="">Beauty & Personal Care</li>
                <li class="">Men's Grooming</li>
                <li class=""> Nutrition & Health Care</li>
                <li class=""> Baby Care</li>
                <li class=""> Toys & School Supplies</li>
                <li class=""> Sports & Fitness</li>
                <li class=""> Books & Music</li>
              </div>
            </ul>
          </ul>
@endsection