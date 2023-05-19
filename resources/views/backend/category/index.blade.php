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

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card p-2">
        <form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">

            @csrf

            <div class="form-group">
                <label>Type</label>
                <input type="text" name="type" class="form-control" placeholder="Saisir le type  EX: (maladie)" />
            </div>

            <div class="form-group">
                <label>Nom de catégorie</label>
                <input type="text" name="name" class="form-control" placeholder="Saisir le nom de la catégorie" />
            </div>

            <div class="form-group text-left">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
            <hr>

        </form>
    </div>

    <div class="card p-2">
       <table>
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Type</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody class="table table-hover">

            @foreach ($categories as $cat)
                <tr>
                    <td>00{{$cat->id}}</td>
                    <td>{{ $cat->name }}</td>
                    <td><u>{{ $cat->type }}</u></td>
                    <td>Action</td>
                </tr>
            @endforeach

        </tbody>
       </table>

      <div class="p-5">
        {{ $categories->links() }}
      </div>
    </div>

@endsection
