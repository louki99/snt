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
                    <div>Edit Page
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card p-2">
        <form method="post" action="{{ route('pages.update') }}" enctype="multipart/form-data">

            @csrf


            <input type="hidden" name="id" value="{{ $page->id }}">

            <div class="form-group">
                <label>Titre</label>
                <input type="text" name="title" value="{{ $page->title }}" class="form-control" />
            </div>

            <div class="form-group">
                <label>Layout</label>
                <select name="category" id="layout" class="form-control">
                    @foreach ($categories as $cat)
                        <option value="{{ $cat->id }}"
                            option @if ( $cat->id==$page->category_id) selected @endif value="{{ $cat->id }}">{{ $cat->name}}</option>
                    @endforeach
                </select>
            </div>

            <div id="sectioncontext">
                <div class="card">
                    <div id="ps-form" class="form-group">
                        <label>Cntexte page</label>
                        <textarea class="summernote" name="content">
                            {!! $page->content !!}
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Parent</label>

                @if ($page->parent)
                    <select name="parent" id="parent" class="form-control">
                        <option value="">----Select parent----</option>
                        @foreach ($parents as $parent)
                        <option value="{{ $parent->id }}"
                            option @if ( $parent->id==$page->parent->id) selected @endif value="{{ $parent->id }}">{{ $parent->title}}</option>
                        @endforeach
                    </select>
                @else
                    <select name="parent" id="parent" class="form-control">
                        <option value="">----Select parent----</option>
                        @foreach ($parents as $parent)
                            <option value="{{ $parent->id }}">{{ $parent->title }}</option>
                        @endforeach
                    </select>
                @endif

            </div>

            <div class="sectionNormalPage">

                <div id="pn-form">
                    <div class="form-group">
                        <label>Définition</label>
                        <textarea class="summernote" name="definition">
                            {!! $page->definition !!}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label>Inspection</label>
                        <textarea class="summernote" name="inspiction">
                            {!! $page->inspiction !!}
                        </textarea>
                    </div>

                    <div class="form-group">
                        <label for="gallaryImage">Photos</label>
                        <input type="file" name="images[]" multiple id="gallaryImage" class="form-control" />
                    </div>

                    <div class="form-group">
                        <label>Conduite à tenir</label>
                        <textarea class="summernote" name="act">
                            {!! $page->act !!}
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="form-group text-left">
                <button type="submit" class="btn btn-primary">Sauvegarder la modification</button>
            </div>

        </form>
    </div>
@endsection
