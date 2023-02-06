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
                        <h1 class="m-0">Sub Categories</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="row category-table categoryBox">
            <div class="col-md-12">
                <div class="row">
                    <input type="hidden" id="sub_categiry_id" name="sub_categiry_id" value="{{ $id }}">
                <form action="{{ route('admin.childsubcategory.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-header">
                            Main category
                        </div>
                        <div class="card-body">
                            <label for="child-sub-category">Name</label>
                            <input class="form-control" type="text" name="childsubcategory" id="child-sub-category">
                        </div>
                        <div class="card-body">
                            <select name="sub_category">
                                <option id="1">Select SubCategory</option>
                                @foreach($subCategories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success" id="main_category_submit">Submit</button>
                        </div>
                    </div>
                </form>
                </div>
                <div class="row category_table_index">
                    <div class="card">
                        <div class="card-body">
                            <table class="data-table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
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
    var categoryId = $('#sub_categiry_id').val();
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.subcategory.getChildSubCategory') }}?id="+categoryId,
        columns: [
            {  data: 'DT_RowIndex', name: '#', orderable: false, searchable: false },
            { data: 'name', name: 'name'},
            { data: 'action', name: 'action',  orderable: false, searchable: false },
        ],
        "drawCallback": function(settings) {
            $('.category').click(function(e) {
                e.preventDefault();
                var categoryData = settings.json.data.find(x => x.id == $(this).attr('data-id'));
                var indexdata = $(this).closest('.categoryBox').index();

                $('.categoryBox').each(function(i,obj){
                    if(i>=indexdata)
                    {
                console.log(i);

                        $(this).remove();
                    }
                });

                // subCategory(categoryData);

            });
        },
    });

</script>
@endsection
