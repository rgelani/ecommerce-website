<script src="{{asset('admin-assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
<script src="{{asset('admin-assets/js/fusioncharts.theme.fusion.js')}}"></script>
<script src="{{asset('admin-assets/js/chart.js')}}"></script>
<script src="{{asset('admin-assets/js/Chart.min.js')}}"></script>
<script src="{{asset('admin-assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('admin-assets/js/anychart-core.min.js')}}"></script>
<script src="{{asset('admin-assets/js/anychart-pie.min.js')}}"></script>
<script src="{{asset('admin-assets/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('admin-assets/js/script.js')}}"></script>
<script type="text/javascript">
            $.ajax({
                type: "get",
                url: '{{ route('admin.category.getCategories') }}',
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    console.log(response);
                    $(document).find('.category-drop-down-icon').hide();
                    if(response) {
                        $(document).find('.category-drop-down-icon').show();
                        $(document).find('.category-name').append(response);
                    }
                }
            });

            $.ajax({
                type: "get",
                url: '{{ route('admin.subcategory.getSubCategories') }}',
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    console.log(response);
                    $(document).find('.sub-category-drop-down-icon').hide();
                    if(response) {
                        $(document).find('.sub-category-drop-down-icon').show();
                        $(document).find('.sub-category-name').append(response);
                    }
                }
            });
</script>