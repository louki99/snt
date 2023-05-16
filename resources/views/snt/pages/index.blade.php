@extends('snt.main')

@section('content')
    <div class="container">
         <div class="archive-header pt-50">
            <h2 class="font-weight-900">Description</h2>
            <p>{{ $page->description }}</p>
            <div class="bt-1 border-color-1 mt-30 mb-50"></div>
        </div>

        <div class="images">
            <div class="row">
                @foreach ($page->getMedia('gpages') as $image)
                    <article class="col-md-3 mb-40 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-card-1 border-radius-10 hover-up">
                                <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                    style="background-image: url({{$image->getUrl()}});">
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>

        <div class="container mt-5 editor">
            {!! $page->content !!}
        </div>

    </div>
@endsection
