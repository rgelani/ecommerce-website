<div class="main-category">
        <div class="container-fluid ">
            <div class="school-options-dropdown categories">
                @foreach($categories as $category)
                <div class="category ">
                    <div class="category-image"><a href="#"><img src="{{ $category->image_url }}" class=""></a>
                    </div>
                    <div class="dropdown">
                        <a id="dLabel" class="dropdown-toggle category-name catname wdcategory" data-toggle="dropdown"
                            data-target="#" href="#">
                            {{ $category->name }}
                                @if(count($category->subCategory) > 0)
                                <svg width="14" height="8" viewBox="0 0 14 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.8423 0.167368C14.0526 0.390524 14.0526 0.752333 13.8423 0.97549L7.38075 7.83263C7.17047 8.05579 6.82953 8.05579 6.61925 7.83263L0.157711 0.97549C-0.0525703 0.752333 -0.0525703 0.390524 0.157711 0.167368C0.367994 -0.055789 0.708928 -0.055789 0.919211 0.167368L7 6.62045L13.0808 0.167368C13.2911 -0.0557892 13.632 -0.0557892 13.8423 0.167368Z" fill="black"/>
                                </svg>
                                @endif
                        </a>
                        @if(count($category->subCategory) > 0)
                        <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                            @foreach($category->subCategory as $subCategory)
                            <li class="dropdown-submenu">
                                <div class="cat justify-content-between align-items-center">
                                    <div class="col-sm-12">
                                        <a tabindex="-1" href="#" class="category_items">
                                            {{ $subCategory->name }}</a>
                                    </div>
                                    @if(count($subCategory->childSubCategory) > 0)
                                        <div class=""><img src="assets/images/category-arrow.png" alt="">
                                        </div>
                                    @endif
                                </div>
                                @if(count($subCategory->childSubCategory) > 0)
                                <ul class="dropdown-menu">
                                    @foreach($subCategory->childSubCategory as $childSUbCategory)
                                    <li class="sub-cat"><a tabindex="-1" href="#"
                                            class="category_items sub-cat-heading">{{ $childSUbCategory->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                            @endforeach
                            <!-- <li class="divider"><img src="assets/imgs/devider.png" alt=""></li> -->
                        </ul>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>