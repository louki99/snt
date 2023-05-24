@extends('snt.pages.ConfigurationAnatomique.index')

@section('page')

    @if ($page->category->type == 'collapse')

        <div id="accordion">

            @foreach ($childs as $item)
                <div class="card">
                    <div class="card-header" id="{{ $item->id }}">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="true"
                                aria-controls="collapse{{$item->id}}">
                                {{ $item->title }}
                            </button>
                        </h5>
                    </div>

                    <div id="collapse{{$item->id}}" class="collapse show" aria-labelledby="{{ $item->id }}" data-parent="#accordion">
                        <div class="card-body">
                            {!! $item->content !!}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @endif

    @if ($page->content)
        <div>
            {!! $page->content !!}
        </div>
    @endif

    <div class="p-50">
        @if ($page->definition)
            <div class="archive-header">
                <h2 class="font-weight-900">Définition</h2>
                <p>{!! $page->definition !!}</p>
                <div class="bt-1 border-color-1 mt-30 mb-50"></div>
            </div>
        @endif

        @if ($page->inspiction)
            <div class="archive-header">
                <h2 class="font-weight-900">Inspection</h2>
                <p class="text-xs">{!! $page->inspiction !!}</p>
                <div class="bt-1 border-color-1 mt-30 mb-50"></div>
            </div>
        @endif

        @if ($page->parent->getMedia('gpages'))
            <div id="gallary">
                <div class="slick-carousel">
                    @foreach ($page->parent->getMedia('gpages') as $image)
                        <div class="item post-card-1 border-radius-10 hover-up">
                            <a href="{{ $image->getUrl() }}" data-fancybox="gallery" title="{{ $image->name }}">
                                <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                    style='background-image: url("{{ $image->getUrl() }}");margin: 10px;'>
                                </div>
                                <p class="text-center title-g">{{ substr($image->name, 0, 80) }}...</p>
                            </a>

                        </div>
                    @endforeach
                </div>
            </div>
        @endif


        {{-- @if ($parent->getMedia('gpages'))
        <div id="gallary">
            <div class="slick-carousel">
                @foreach ($page->getMedia('gpages') as $image)
                <div class="item post-card-1 border-radius-10 hover-up">
                    <a href="{{$image->getUrl()}}" data-fancybox="gallery" title="{{$image->name}}">
                        <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                            style='background-image: url("{{ $image->getUrl() }}");margin: 10px;'>
                        </div>
                        <p class="text-center title-g">{{ substr($image->name,0,80) }}...</p>
                    </a>

                </div>
                @endforeach
            </div>
        </div>
    @endif --}}

        @if ($page->act)
            <div class="archive-header">
                <h2 class="font-weight-900">Conduite à tenir </h2>
                <div>
                    {!! $page->act !!}
                </div>
            </div>
        @endif
    </div>

@endsection
