@extends('admin.layouts.master')

@section('extra-css')
<style>
    .category_table_index {
        margin-top: 20px;
    }

    #DataTables_Table_0_length,
    #DataTables_Table_0_filter,
    #DataTables_Table_0_info,
    #DataTables_Table_0_paginate {
        display: inline-block !important;
    }

    #DataTables_Table_0_filter,
    #DataTables_Table_0_paginate {
        float: right !important;
        margin-bottom: 19px !important;
    }

    #DataTables_Table_0_info {
        margin-top: 5px;
    }

    #DataTables_Table_0_paginate a,
    #DataTables_Table_0_paginate span a {
        color: #000;
        border: none;
        border-radius: 50%;
        width: 80px;
        height: 80px;
        line-height: 40px;
        padding: 0;
        margin: 0 5px;
        text-align: center;
        cursor: pointer
    }
</style>
@endsection
@section('content')

<ul class="category_main">
    <div class="category_hedding align-items-center justify-content-between d-flex pt-5">
        <a href="add_category.html" class=" mb-4">
            <h3 class="">
                @if($type == 'center') Center @elseif($type == 'top') Top @elseif($type == 'bottom') Bottom @endif Banner Images</h3>
        </a>
    </div>
    <!-- start add category -->
    <div class="add_category_main ">
        <!-- start main category -->
        <div class="add_main_category">
            <div class="category-list d-flex justify-content-between align-items-center">
                <div class="categoryList-col">
                    Banner Image List
                </div>
                <image type="hidden" name="current_image_type" id="current_image_type" value="{{ $type }}">
                    <div class="addCategory-btn">
                        <button class="" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Add Banner Image</button>
                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            Category <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header d-flex">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Banner Image</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form action="{{ route('admin.bannerImage.store') }}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <div class="modal-body">
                                            <div>Image:</div>
                                            <input type="file" name="image" id="category_image">
                                        </div>
                                        <!-- <div class="modal-body">
                                                            <div>Seller ID:</div>
                                                            <input type="text" name="seller_id" id="seller_id">
                                                        </div> -->
                                        <div class="modal-body">
                                            <div>Category ID:</div>
                                            <select name="category_id">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="modal-body">
                                            <div>Select Type:</div>
                                            <select name="type">
                                                <option value="">Select Type</option>
                                                <option value="top">Top</option>
                                                <option value="center">Center</option>
                                                <option value="bottom">Bottom</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="create_category" id="create_category">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        <div class="category-table">
            <table class="data-table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Banner Image Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <!-- end main category -->
</ul>
<!-- end add category -->
@endsection
@section('extra-js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    var image_type = '{{ $type }}';
    if (image_type != '') {
        var ajaxUrl = "{{ route('admin.bannerImage.list') }}?type=" + image_type;
    } else {
        var ajaxUrl = "{{ route('admin.bannerImage.list') }}";
    }
    console.log('ajaxUrl ', ajaxUrl);
    var table = $('.data-table').DataTable({
        dom: "<'entries-searchBox d-flex justify-content-between align-items-center pt-0 pb-3'<'category-entries'l><'category-searchBox'f>>r" +
            "t" +
            "<'category-footer mt-3 d-flex align-items-center justify-content-between'<'showing-category-entries'i><'category-pagination'<'custom-pagination pagination-secondary pagination align-items-stretch'p>>>",
        processing: true,
        serverSide: true,
        ajax: ajaxUrl,
        columns: [{
                data: 'DT_RowIndex',
                name: '#',
                orderable: false,
                searchable: false
            },
            {
                data: 'image',
                name: 'image'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
        ],
        "drawCallback": function(settings) {
            $('.category').click(function(e) {
                e.preventDefault();
                var categoryData = settings.json.data.find(x => x.id == $(this).attr('data-id'));
                var indexdata = $(this).closest('.categoryBox').index();

                $('.categoryBox').each(function(i, obj) {
                    if (i >= indexdata) {
                        console.log(i);

                        $(this).remove();
                    }
                });
            });
        },
    });
</script>
@endsection