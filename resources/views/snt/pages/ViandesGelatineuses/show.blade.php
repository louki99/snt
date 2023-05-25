@extends('snt.pages.ViandesGelatineuses.index')

@section('page')

@if ($page->content)
<div>
    {!! $page->content !!}
</div>
@endif

<div class="p-50">
    @if ($page->getMedia('gpages'))
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
    @endif
</div>

@if ($page->parent->getMedia('gpages'))
<div id="gallary">
    <div class="slick-carousel">
        @foreach ($page->parent->getMedia('gpages') as $image)
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
@endif

@endsection
