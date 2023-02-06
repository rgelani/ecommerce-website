@extends('admin.layouts.master')

@section('content')
<!--strat dashbord product view -->
<ul class="category_main">
  <div class="category_hedding align-items-center justify-content-between d-flex pt-5">
    <a href="add_category.html" class=" ">
      <h3 class="">Category</h3>
    </a>
  </div>
  <!-- start add category -->
  <div class="edit_category_main ">
    <div class="" tabindex="-1">
      <div class="modal-dialog">
        <form action="{{ route('admin.category.update',[$category->id]) }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="modal-content">
            <div class="modal-header ">
              <span class="category-edit-back-arrow d-inline me-2">
                <a href="{{ route('admin.category.list') }}">
                  <img src="{{ asset('admin/image/edit-category-arrow.png') }}" alt="">
                </a>
              </span>
              <span>
                <h5 class="modal-title d-inline">Edit category</h5>
              </span>
            </div>
            <div class="modal-body">
              <div>Name</div>
              <input type="text" type="category_name" id="category_name" name="category_name" value="{{ $category->name }}">
              <div style="margin : 20px auto;">
                <img src="{{ asset('categoryImages').'/'.$category->image }}" class="w-100">
              </div>
              <input type="file" name="image">
            </div>
            <div class="modal-footer justify-content-start">
              <button type="submit" class=" ">Update</button>
              <button type="button" class="reset-button">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end add category -->
</ul>
@endsection

@section('extra-js')
<script>
$(document).ready(function() {
    $(".reset-button").click(function() {
        $("#category_name").val('');
    });
});
</script>
@endsection