@extends('snt.master')
@section('content')
    <div class="containr">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                        </i>
                    </div>
                    <div>
                        List pages
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container card p-2">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        <div class="row">
            @foreach ($images as $img)
                <div class="col-md-2 mb-5">
                    <a href="{{ route('pages.images.remove', $img->id) }}">
                        <svg xmlns="http://www.w3.org/2000/svg" class="svg" width="16" height="16" fill="currentColor"
                            class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                            <path
                                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                        </svg>
                    </a>
                    <img src="{{ $img->getUrl() }}" class="_img"/>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container card p-2 mt-5">
        <form method="post" action="{{ route('pages.images.add',$page->id) }}" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="gallaryImage">Photos</label>
                <input type="file" name="images[]" multiple id="gallaryImage" class="form-control" />
            </div>

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form>
    </div>
@endsection

<style>
    ._img{
        width: 150px;
        height: 150px;
        padding: 10px;
        background: white;
        border-radius: 5px;
        box-shadow: 1px 3px 2px #ccc;
    }
    .svg {
        color: rgb(255, 51, 51);
        background-color: white;
        border-radius: 50%;
        cursor: pointer;
        width: 20px;
        height: 20px;
        position: absolute;
    }
</style>
