<div class="flex items-center justify-center mt-4">
    @if ($paginator->hasPages())
        {{-- Previous Page Link --}}
        <div class="w-[30px]">
            @if ($paginator->onFirstPage())
                <span class="w-[30px] text-center disabled py-2 text-mid">&laquo;</span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="py-2 text-center text-mid hover:border-b-2 border-mid">&laquo;</a>
            @endif
        </div>

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="px-2 py-1">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                <div class="w-[30px] mx-3">
                    @if ($page == $paginator->currentPage())
                        <span class="py-2 text-center text-mid font-semibold border-b-2 border-mid">{{ $page }}</span>
                    @else
                        <a href="{{ $url }}" class="py-2 text-mid text-center hover:border-b-2 border-mid">{{ $page }}</a>
                    @endif
                </div>
                @endforeach
            @endif
        @endforeach

        {{-- Next Page Link --}}
        <div class="w-[30%]">
            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="py-2 text-center text-mid hover:border-b-2 border-mid">&raquo;</a>
            @else
                <span class="disabled py-2 text-center text-mid">&raquo;</span>
            @endif
        </div>
    @endif
</div>
