@extends('admin.layouts.master')
@section('extra-css')
<!-- CSS only -->

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<style>
    .col-md-6 {
        padding: 22px !important;
    }
</style>
@endsection
@section('content')
<ul class="category_main">
    <div class="category_hedding align-items-center justify-content-between d-flex pt-5">
        <a href="add_category.html" class=" mb-4">
            <h3 class="">HSN Code</h3>
        </a>
    </div>

    <!-- <div class="add_category_main"> -->
    <div class="add_category_main">
        <div class="add_main_category">
            <div class="row">
                <form action="{{ route('admin.hsncode.store') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="card">
                        <div class="card-header">
                            Add New HSN Code
                        </div>
                        <div class="card-body">
                            <select name="child_sub_category_id">
                                @foreach($chilSubCategory as $category)
                                <option value="{{ $category->id }}" {{old("child_sub_category_id") === $category->id ? "selected" : ""}}>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('child_sub_category_id')
                            <div class="text-danger">Please select child category</div>
                            @enderror
                        </div>
                        <div class="card-body">
                            <label for="hsn_code">Hsn Code</label>
                            <div id="showHsn">
                            </div>
                            <div class="input-group">
                                <input class="form-control col" type="text" id="hsn_code">
                                <button type="button" class="input-group-text" onclick="addHsnInput()"> + </button>
                            </div>
                            @error('hsn_code')
                            <div class="text-danger">Please enter HSN code</div>
                            @enderror
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="category-table">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Code</th>
                            <th>Child Sub Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</ul>

@endsection
@section('extra-js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
</script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    function addHsnInput() {
        let hsnValue = document.getElementById("hsn_code");
        let elem = document.getElementById("showHsn");
        if (hsnValue.value.length === 0) return
        elem.innerHTML += `
        <div class="input-group my-2">
            <input class="form-control col" type="text" name="hsn_code[]" value=${hsnValue.value} readonly>
            <button type="button" class="input-group-text" onclick="removeInput(this)"> - </button>
        </div>`
        hsnValue.value = "";
    }

    function removeInput(elem) {
        elem.parentElement.remove();
    }

    var table = $('.data-table').DataTable({
        dom: "<'entries-searchBox d-flex justify-content-between align-items-center pt-0 pb-3'<'category-entries'l><'category-searchBox'f>>r" +
            "t" +
            "<'category-footer mt-3 d-flex align-items-center justify-content-between'<'showing-category-entries'i><'category-pagination'<'custom-pagination pagination-secondary pagination align-items-stretch'p>>>",
        processing: true,
        serverSide: true,
        ajax: "{{ route('admin.hsncode.index') }}",
        columns: [{
                data: 'DT_RowIndex',
                name: '#',
                orderable: false,
                searchable: false
            },
            {
                data: 'code',
                name: 'code'
            },
            {
                data: 'childSubcategory',
                name: 'childSubcategory'
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
                        $(this).remove();
                    }
                });
            });
        },
    });
</script>
@endsection