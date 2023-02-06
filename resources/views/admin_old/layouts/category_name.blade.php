@foreach($categories as $category)
<li><a href="{{route('admin.category.show', [$category->id])}}" class="fw-bold ">{{ $category->name }}</a></li>
@endforeach