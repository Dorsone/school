@if ($paginator->hasPages())
    <div class="row no-gutters my-5">
        <div class="col text-center">
            <div class="block-27">
                <ul>
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li><a href="javascript:void(0)"><i class="ion-ios-arrow-back"></i></a></li>
                    @else
                        <li><a href="{{ $paginator->previousPageUrl() }}"><i class="ion-ios-arrow-back"></i></a></li>
                    @endif

                    @if($paginator->currentPage() > 3)
                        <li><a href="{{ $paginator->url(1) }}">1</a></li>
                    @endif
                    @if($paginator->currentPage() > 4)
                        <li><a href="javascript:void(0)"><i class="ion-ios-remove"></i></a></li>
                    @endif
                    @foreach(range(1, $paginator->lastPage()) as $i)
                        @if($i >= $paginator->currentPage() - 2 && $i <= $paginator->currentPage() + 2)
                            @if ($i == $paginator->currentPage())
                                <li class="active"><a href="javascript:void(0)">{{ $i }}</a></li>
                            @else
                                <li class=""><a href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                            @endif
                        @endif
                    @endforeach
                    @if($paginator->currentPage() < $paginator->lastPage() - 3)
                        <li><a href="javascript:void(0)"><i class="ion-ios-remove"></i></a></li>
                    @endif
                    @if($paginator->currentPage() < $paginator->lastPage() - 2)
                        <li class=""><a href="{{ $paginator->url($paginator->lastPage()) }}">{{ $paginator->lastPage() }}</span></a></li>
                    @endif

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li><a href="{{ $paginator->nextPageUrl() }}"><i class="ion-ios-arrow-forward"></i></a></li>
                    @else
                        <li><a href="javascript:void(0)"><i class="ion-ios-arrow-forward"></i></a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endif
