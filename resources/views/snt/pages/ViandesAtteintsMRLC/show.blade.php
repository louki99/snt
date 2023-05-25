@extends('snt.pages.ViandesAtteintsMRLC.index')

@section('page')

@if ($page->childs)
<div id="accordion">
    @foreach ($page->childs as $item)
        <div class="card">
            <div class="card-header" id="{{ $item->id }}">
                <h5 class="mb-0">
                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="true"
                        aria-controls="collapse{{$item->id}}">
                        {{ $item->title }}
                    </button>
                </h5>
            </div>
            <div id="collapse{{$item->id}}" class="collapse" aria-labelledby="{{ $item->id }}" data-parent="#accordion">
                @if (!count($item->childs))
                    <div class="card-body">
                        {!! $item->content !!}
                    </div>
                    {{-- <div class="row">
                        @foreach ($item->getMedia('gpages') as $img)
                            <div class="col-md-3">
                                <div class="item post-card-1 border-radius-10 hover-up">
                                    <a href="{{$img->getUrl()}}" data-fancybox="gallery" title="{{$img->name}}">
                                        <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                            style='background-image: url("{{ $img->getUrl() }}");margin: 10px;'>
                                        </div>
                                        <p class="text-center title-g">{{ substr($img->name,0,80) }}...</p>
                                    </a>
                            </div>
                            </div>
                        @endforeach
                    </div> --}}
                @endif
                @if(count($item->childs))
                    <div id="accordion3">
                        @foreach ($item->childs as $ch)
                            <div class="card">
                                <div class="card-header" id="{{ $ch->id+1 }}">
                                    <h5 class="mb-0 mr-5">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse{{$ch->id+1}}" aria-expanded="true"
                                            aria-controls="collapse{{$ch->id+1}}">
                                            <small><u>{{ $ch->title }}</u></small>
                                        </button>
                                    </h5>
                                </div>
                                <div id="collapse{{$ch->id+1}}" class="collapse" aria-labelledby="{{ $ch->id+1 }}" data-parent="#accordion3">
                                    <div class="card-body">
                                        {!! $ch->content !!}

                                        <div class="row">
                                            @foreach ($ch->getMedia('gpages') as $cimg)
                                                <div class="col-md-3">
                                                    <div class="item post-card-1 border-radius-10 hover-up">
                                                        <a href="{{$cimg->getUrl()}}" data-fancybox="gallery" title="{{$cimg->name}}">
                                                            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                                style='background-image: url("{{ $cimg->getUrl() }}");margin: 10px;'>
                                                            </div>
                                                            <p class="text-center title-g">{{ substr($cimg->name,0,80) }}...</p>
                                                        </a>
                                                </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                @endif

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

    @if ($page->act)
        <div class="archive-header">
            <h2 class="font-weight-900">Conduite à tenir </h2>
            <div>
                {!! $page->act !!}
            </div>
        </div>
    @endif

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

@endsection
