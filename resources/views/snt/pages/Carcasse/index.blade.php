@extends('snt.main')

@section('content')

 <div class="pt-50">
    <div class="row">
        <div class="col-md-2 card">
            <div class="widget-header-2 position-relative">
                <h5 class="mt-5 mb-30">La carcasse</h5>
            </div>
            <div class="post-block-list post-module-1 post-module-5">
                <ul class="list-post" style="height:400px;overflow-y: scroll;">
                    @foreach ($menu as $m)
                        <li>
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                        <a class="mside" href="{{ route("show.carcasse",$m->slug) }}">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                                                </svg>
                                                  {{ $m->title }}
                                            </span>
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-10">
            <div class="container">
                    {{-- @if ($page->getMedia('gpages'))
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
                @yield("page")
            </div>
        </div>
    </div>
    <div class="mt-10"></div>
 </div>
@endsection
