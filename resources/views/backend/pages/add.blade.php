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
                <label>Titre</label>
                <input type="text" name="title" class="form-control" />
            </div>

            <div class="form-group">
                <label>Définition</label>
                <textarea class="summernote" name="definition"></textarea>
            </div>

            <div class="form-group">
                <label>Inspection</label>
                <textarea class="summernote" name="inspiction"></textarea>
            </div>

            <div class="form-group">
                <label for="gallaryImage">Photos</label>
                <input type="file" name="images[]" multiple id="gallaryImage" class="form-control" />
            </div>

            <div class="form-group">
                <label>Conduite à tenir</label>
                <textarea class="summernote" name="act"></textarea>
            </div>

            <div class="form-group">
                <label>Catégorie</label>
                <select name="category" id="category" class="form-control">
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id  }}">{{$cat->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group text-left">
                <button type="submit" class="btn btn-primary">Sauvegarder la modification</button>
            </div>

        </form>
    </div>

@endsection
