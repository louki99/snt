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
                    <div>New Page
                        <div class="page-title-subheading">Tab just a simple page ,  content this page show only inside another page
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card p-2">
        <form method="post" action="{{ route('pages.store') }}" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" />
            </div>

            <div class="form-group">
                <label>Description</label>
                <textarea class="form-control"  name="description"></textarea>
            </div>

            <div class="form-group">
                <label>Content</label>
                <textarea class="editor"  name="content"></textarea>
            </div>

            <div class="form-group">
                <label for="gallaryImage">Images</label>
                <input type="file" name="images[]" multiple id="gallaryImage"/>
            </div>


            <div class="form-group text-center">
                <button type="submit" class="btn btn-success btn-block">Publish</button>
            </div>

        </form>
    </div>

@endsection
