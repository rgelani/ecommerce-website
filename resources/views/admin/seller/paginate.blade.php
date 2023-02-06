<ul class="custom-pagination pagination-secondary pagination align-items-stretch">
    <li class="page-item">
        <a class="page-link" aria-label="Previous">
            <span aria-hidden="true" id="{{ $finalLinks['prev'] }}" class="pagination_number">Prev</span>
        </a>
    </li>
    @if(isset($finalLinks['links']))
    @foreach($finalLinks['links'] as $key => $link)
        @if($link == '...')
            <li class="page-item"><a class="page-link">{{ $link }}</a></li>
        @elseif($link == $finalLinks['active'])
            <li class="page-item active"><span class="page-link pagination_number" id="{{ $link }}">{{ $key }}</span></li>
        @else
            <li class="page-item"><a class="page-link pagination_number" id="{{ $link }}" class="pagination_number">{{ $key }}</a></li>
        @endif
    @endforeach
    @endif
    <li class="page-item">
        <a class="page-link" aria-label="Next">
            <span aria-hidden="true" id="{{ $finalLinks['next'] }}" class="pagination_number">Next</span>
        </a>
    </li>
</ul>