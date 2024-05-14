
    
<section id="custom" class="custom">


<div class="custom-pagination d-grid gap-2 col-3 mx-auto">
    <ul class="justify-content-center">
        @if($paginator->onFirstPage())
        
        @else
            <li><a href="{{ $paginator->previousPageUrl() }}">Prev</a></li>
        @endif
        @foreach ($elements as $element)
            @if (is_string($element))
                <li class="active"><span>{{ $element }}</span></li>
            @endif

            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><a href="{{ $url }}">{{ $page }}</a></li>
                    @else
                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach
        @if($paginator->hasMorePages())
            <li><a href="{{ $paginator->nextPageUrl() }}">Next</a></li>
        @else
            
        @endif
    </ul>
</section>
