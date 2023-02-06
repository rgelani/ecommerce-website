@extends('admin.layouts.master')
@section('extra-css')
<!-- CSS only -->

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<style>
    .col-md-6 {
        padding: 22px !important;
    }
</style>
@endsection
@section('content')
<div class="product_view_rating">
    <!-- strat product listing main -->

    <!-- Start seller profile -->

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid mt-5" >
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Child Category Edit Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="row category-table categoryBox">
            <div class="col-md-12 ">
                <div class="row">
                    <form action="{{ route('admin.childsubcategory.update',[$category->id]) }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}    
                        <div class="card">
                            Category name
                            <div class="card-body">
                                <label for="child-sub-category">Name</label>
                                <input class="form-control" type="text" name="childsubcategory" id="child-sub-category" value="{{ $category->name }}">
                            </div>
                            <div class="card-body">
                                <select name="main_category">
                                    <option id="1">Select Category</option>
                                    @foreach($subCategory as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success" id="main_category_submit">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- JavaScript Bundle with Popper -->

    </div>

</div>

@endsection
@section('extra-js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">

</script>
@endsection
