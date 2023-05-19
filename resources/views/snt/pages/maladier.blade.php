@extends('snt.main')

@section('content')
    <div class="row">
        <div class="col-md-3 card">
            <div class="widget-header-2 position-relative">
                <h5 class="mt-5 mb-30">You might be interested in</h5>
            </div>
            <div class="post-block-list post-module-1 post-module-5">
                <ul class="list-post">
                    @foreach ($pages as $page)
                        <li>
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-content media-body">
                                    <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                        <a href="{{ route("pages.get.maladie",$page->slug) }}">
                                            {{ $page->title }}
                                        </a>
                                    </h6>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-9">
            @yield("page")
        </div>
    </div>
    <div class="mt-10"></div>
@endsection

