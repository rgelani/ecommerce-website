@extends('admin.layouts.master')

@section('content')
<!--strat dashbord product view -->
<ul class="category_main">
  <div class="category_hedding align-items-center justify-content-between d-flex pt-5">
    <a href="add_category.html" class=" ">
      <h3 class="">Banner Image</h3>
    </a>
  </div>
  <!-- start add category -->
  <div class="edit_category_main ">
    <div class="" tabindex="-1">
      <div class="modal-dialog">
        <form action="{{ route('admin.bannerImage.update',[$image->id]) }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-content">
            <div class="modal-header ">
              <span class="category-edit-back-arrow d-inline me-2">
                <a href="{{ route('admin.category.list') }}">
                  <img src="{{ asset('admin/image/edit-category-arrow.png') }}" alt="">
                </a>
              </span>
              <span>
                <h5 class="modal-title d-inline">Edit Banner Image</h5>
              </span>
            </div>
            <div class="modal-body">
              <div style="margin : 20px auto;">
                <img src="{{ asset('bannerImages').'/'.$image->image }}" class="w-100">
              </div>
              <input type="file" name="image">
              <!-- <div class="modal-body">
                                              <div>Seller ID:</div>
                                                <input type="text" name="seller_id" id="seller_id">
                                              </div> -->
              <div class="modal-body">
                <div>Category :</div>
                <select name="category_id">
                  <option value="">Select Category</option>
                  @foreach($categories as $category)
                  <option value="{{ $category->id }}" @if($image->category_id == $category->id) selected @endif>{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="modal-body">
                <div>Select Type:</div>
                <select name="type">
                  <option value="">Select Type</option>
                  <option value="top" @if($image->type == 'top') selected @endif>Top</option>
                  <option value="center" @if($image->type == 'center') selected @endif>Center</option>
                  <option value="bottom" @if($image->type == 'bottom') selected @endif>Bottom</option>
                </select>
              </div>
            </div>
            <div class="modal-footer justify-content-start">
              <button type="submit" class=" ">Update</button>
              <button type="button" class=" ">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end add category -->
</ul>
@endsection