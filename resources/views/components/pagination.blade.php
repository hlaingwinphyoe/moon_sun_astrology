@if ($paginator->hasPages())
    <div class="pagination-container wow zoomIn mar-b-1x" data-wow-duration="0.5s">
        <ul class="pagination">
            @if ($paginator->onFirstPage())
                <li class="pagination-item--wide first disabled">
                    <p class="pagination-link--wide first" style="font-size: 13.5px;">Previous</->
                </li>
            @else
                <li class="pagination-item--wide first">
                    <a class="pagination-link--wide first" href="{{ $paginator->previousPageUrl() }}">Previous</a>
                </li>
            @endif
            @foreach ($elements as $element)
                @if (is_string($element))
                    <p disabled aria-disabled="true"><span>{{ $element }}</span></p>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="pagination-item is-active">
                                <a class="pagination-link" href="javascript:void(0)">{{ $page }}</a>
                            </li>
                        @else
                            <li class="pagination-item">
                                <a class="pagination-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach
            @if ($paginator->hasMorePages())
                <li class="pagination-item--wide last">
                    <a class="pagination-link--wide last" href="{{ $paginator->nextPageUrl() }}">Next</a>
                </li>
            @else
                <li class="pagination-item--wide last disabled">
                    <p class="pagination-link--wide last" style="font-size: 13.5px;">Next</p>
                </li>
            @endif

        </ul>

    </div>
@endif
