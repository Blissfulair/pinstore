@if ($paginator->hasPages())
    <ul class="pagination" role="navigation">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
          <a class="page-link nav-text nav-text-prev" href="#" aria-label="Previous">
            <span aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
            <span>PREVIOUS</span>
          </a>
        </li>
        @else
        <li class="page-item">
          <a class="page-link nav-text nav-text-prev" href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
            <span aria-hidden="true"><i class="fa fa-arrow-left"></i></span>
            <span>PREVIOUS</span>
          </a>
        </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="page-item active" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                    @else
                        <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
        <li class="page-item">
          <a class="page-link nav-text nav-text-next" rel="next" aria-label="@lang('pagination.next')" href="{{ $paginator->nextPageUrl() }}">
            <span>NEXT</span>
            <span aria-hidden="true"><i class="fa fa-arrow-right"></i></span>
          </a>
        </li>
        @else
        <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
          <a class="page-link nav-text nav-text-next" href="#" aria-label="NEXT">
            <span>NEXT</span>
            <span aria-hidden="true"><i class="fa fa-arrow-right"></i></span>
          </a>
        </li>
        @endif
    </ul>
@endif
