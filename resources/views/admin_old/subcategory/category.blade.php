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
                <form action="{{ route('admin.subcategory.store') }}" method="post" enctype="multipart/form-data">
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
                            <select name="main_category">
                                <option id="1">Select Category</option>
                                @foreach($categories as $category)
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
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.subcategory.index') }}",
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




    // function subCategory(categoryData) {

    //     var data = `<div class="col-md-6 categoryBox">
    //                     <div class="row">
    //                         <div class="card">
    //                             <div class="card-header">
    //                                 ${categoryData.name}
    //                             </div>
    //                             <div class="card-body">
    //                                 <label for="sub_category_name">Name</label>
    //                                 <input type="hidden" name="sub_category_parent_id_${categoryData.id}" id="sub_category_parent_id_${categoryData.id}" value=${categoryData .id}>
    //                                 <input type="text" name="sub_category_name_${categoryData.id}" id="sub_category1_name_${categoryData.id}" class="form-control">
    //                                 <label for="sub_category_name">HSN code</label>
    //                                 <textarea name="HSN_code_${categoryData.id}" id="HSN_code_${categoryData.id}" rows="2" class="form-control"></textarea>
    //                             </div>
    //                             <div class="card-footer">
    //                                 <input type="submit" value="submit" class="btn btn-success" id="sub_category_submit_${categoryData.id}">
    //                             </div>
    //                         </div>
    //                     </div>
    //                     <div class="row category_table_index_${categoryData.id}">
    //                         <div class="card">
    //                             <div class="card-body">
    //                                 <table class="data-table-subcategory_${categoryData.id}">
    //                                     <thead>
    //                                         <tr>
    //                                             <th>No</th>
    //                                             <th>Name</th>
    //                                             <th>HSN</th>
    //                                             <th>Action</th>
    //                                         </tr>
    //                                     </thead>
    //                                     <tbody>
    //                                     </tbody>
    //                                 </table>
    //                             </div>
    //                         </div>
    //                     </div>
    //                 </div>`;
    //     $('.category-table').append(data);
    //     var subcategorytable1 = $(`.data-table-subcategory_${categoryData.id}`).DataTable({
    //         processing: true,
    //         serverSide: true,
    //         ajax: "{{ route('admin.category.subcategory') }}?id=" + categoryData.id,
    //         columns: [{ data: 'DT_RowIndex', name: '#', orderable: false, searchable: false },
    //             { data: 'name', name: 'name' },
    //             { data: 'HSN_code', name: 'HSN_code' },
    //             { data: 'action', name: 'action', orderable: false, searchable: false },
    //         ],
    //     "drawCallback": function(settings) {


    //         $(`.category_${categoryData.id}`).click(function(e) {
    //             e.preventDefault();

    //             var categoryData = settings.json.data.find(x => x.id == $(this).attr('data-id'));
    //             var indexdata = $(this).closest('.categoryBox').index();
    //             $('.categoryBox').each(function(i,obj){
    //                 if(i>indexdata)
    //                 {
    //                     $(this).remove();
    //                 }
    //             });

    //             subCategory(categoryData);


    //         });
    //     },
    //     });
    //     $(`#sub_category_submit_${categoryData.id}`).click(function(e) {
    //         e.preventDefault();

    //         $.ajax({
    //             type: "post",
    //             url: '{{ route('admin.category.sub.create') }}',
    //             data: {
    //                 HSN_code:$(`textarea[name=HSN_code_${categoryData.id}]`).val(),
    //                 parent_id:$(`input[name=sub_category_parent_id_${categoryData.id}]`).val(),
    //                 name: $(`input[name=sub_category_name_${categoryData.id}]`).val(),
    //                 _token: "{{ csrf_token() }}"
    //             },
    //             success: function(response) {
    //                 subcategorytable1.ajax.reload();
    //                 $(`textarea[name=HSN_code_${categoryData.id}]`).val('');
    //                 $(`input[name=sub_category_name_${categoryData.id}]`).val('')
    //             }
    //         });
    //     });
    // }

</script>
@endsection
