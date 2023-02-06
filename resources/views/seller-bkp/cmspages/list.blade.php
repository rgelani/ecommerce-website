@extends('seller.layouts.master')
@section('content')

<section class="content d-flex flex-column flex-column-fluid page_content form_content_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="title">CMS Pages Information</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="content_box">
                    <div class="d-flex py-3 mb-3 align-items-center justify-content-between border-bottom">
                        <h5 class="box-title">CMS Pages</h5>
                        <a href="{{ route('seller.cmspages_create')}}" title="{{ trans('messages.actiontext.add') }}" class="btn btn-sm btn-theme-drk"><i class="icon-plus"></i>{{ trans('messages.actiontext.add') }}</a>
                    </div>
                    <div class="table-responsive">
                        <table id="cmspages_datatable" class="table align-middle table-row-dashed fs-7 gy-5 dataTable no-footer">
                            <thead>
                                <tr class="fw-normal fs-8 bg-light text-gray-500">
                                    <th class="w-10px text-center" >id</th>
                                    <th class="w-225px text-center">Title</th>
                                    <th class="w-225px text-center">Slug</th>
                                    <th class="w-225px text-center">Publish</th>
                                    <th class="w-50px text-center">{{ trans('messages.actiontext.action') }}</th>
                                </tr>
                            </thead>
                            <tbody class="fs-8 text-gray-800">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript">
    $(document).ready(function () {
        var table = $('#cmspages_datatable').DataTable({
            "pageLength": parseInt("{{ config('datatables.record_length') }}"),
            processing: true,
            serverSide: true,
            ajax: {
				"url" : "{{ route('seller.cmspages') }}",
				global: false,
			},
            columns: [
                {data: 'id', name: 'id',orderable: false, searchable: false},
                {data: 'title', name: 'title'},
                {data: 'slug', name: 'slug'},
                {data: 'active', name: 'active',orderable: false, searchable: false},
                {data: 'action', name: 'action', orderable: false, searchable: false},
            ],
        });
    });
</script>
@endsection