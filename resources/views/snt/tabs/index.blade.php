@extends('snt.main')


@section('content')
    <div class="container">
        @foreach ($tabs as $tab)

            <div class="entry-header entry-header-style-1 mb-50 pt-50">
                <h1 class="entry-title mb-50 font-weight-900">
                    {{ $tab->title }}
                </h1>
            </div>

            <div class="row">
                @foreach ($tab->getMedia('gtabs') as $image)
                    <article class="col-md-3 mb-40 wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="post-card-1 border-radius-10 hover-up">
                            <div class="post-card-1 border-radius-10 hover-up">
                                <div class="post-thumb thumb-overlay img-hover-slide position-relative" style="background-image: url({{$image->getUrl()}});"></div>
                                <div class="post-content">
                                    <div class="d-flex post-card-content mt-sm-3" style="min-height: 0px;">
                                        <p class="post-title mb-20 font-weight-200">
                                            <small>Lorem ipsum dolor, sit amet consectetur adipisicing elit</small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>



            <div class="editor">
                {!! $tab->content !!}
            </div>
        @endforeach
    </div>
@endsection
