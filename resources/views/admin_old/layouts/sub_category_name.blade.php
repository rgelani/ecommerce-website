@foreach($subCategories as $category)
<li><a href="{{route('admin.subcategory.show', [$category->id])}}" class="fw-bold ">{{ $category->name }}</a></li>
@endforeach