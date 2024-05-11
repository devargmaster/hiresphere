@if ($paginator->hasPages())
    <ul class="pagination flex list-none">

        @if ($paginator->onFirstPage())
            <li class="disabled"><span class="px-3 py-1 text-gray-500">&laquo;</span></li>
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="px-3 py-1 rounded hover:bg-gray-200">&laquo;</a></li>
        @endif


        @foreach ($elements as $element)

            @if (is_string($element))
                <li class="disabled"><span class="px-3 py-1 text-gray-500">{{ $element }}</span></li>
            @endif


            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span class="px-3 py-1 bg-blue-500 text-white rounded">{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $url }}" class="px-3 py-1 rounded hover:bg-gray-200">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach


        @if ($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next" class="px-3 py-1 rounded hover:bg-gray-200">&raquo;</a></li>
        @else
            <li class="disabled"><span class="px-3 py-1 text-gray-500">&raquo;</span></li>
        @endif
    </ul>
@endif
