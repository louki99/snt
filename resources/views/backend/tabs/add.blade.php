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
                    <div>New Page(tabs)
                        <div class="page-title-subheading">Tab just a simple page ,  content this page show only inside another page
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card p-2">
        <form method="post" action="{{ route('tabs.store') }}" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label>Title</label>
                <input type="text" name="title" class="form-control" />
            </div>

            <div class="form-group">
                <label>Content</label>
                {{-- <textarea class="editor"  name="content"></textarea> --}}
                <textarea id="summernote" name="content"></textarea>
            </div>

            <div class="form-group">
                <label for="gallaryImage">Images</label>
                <input type="file" name="images[]" multiple id="gallaryImage" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="gallaryImage">Page</label>
                <select name="page" id="page" class="form-control">
                   @foreach ($pages as $page)
                        <option value="{{ $page->id }}">{{ $page->title }}</option>
                   @endforeach
                </select>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-success btn-block">Publish</button>
            </div>

        </form>
    </div>

@endsection
