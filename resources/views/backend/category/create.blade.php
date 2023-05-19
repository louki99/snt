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
                        New Category
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card p-2">
        <form method="post" action="{{ route('pages.store') }}" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label>Type</label>
                <input type="text" name="title" class="form-control" />
            </div>

            <div class="form-group">
                <label>Name</label>
                <textarea class="summernote" name="definition"></textarea>
            </div>

            <div class="form-group text-center">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

        </form>
    </div>

@endsection
