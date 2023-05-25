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

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="card p-2">
    <form action="{{ route('list.pages') }}" method="GET">
        <input type="text" name="search" placeholder="Search...">
        <button type="submit">Search</button>
    </form>
    <table class="table">
     <thead>
         <tr>
             <th>#</th>
             <th>Title</th>
             <th>Slug</th>
             <th>Layout</th>
             <th>parent</th>
             <th>Action</th>
         </tr>
     </thead>
     <tbody class="table table-hover">

         @foreach ($pages as $page)
             <tr>
                 <td><b>00{{$page->id}}</b></td>
                 <td>{{ $page->title }}</td>
                 <td><u>{{ $page->slug }}</u></td>
                 <td><u>{{ $page->category->name }}</u></td>
                 <td>
                    @if ($page->parent)
                        <b>{{ $page->parent->title }}</b>
                    @else
                        <b>........................................</b>
                    @endif
                 </td>
                 <td>
                    <a href="{{ route("pages.edit",$page->slug) }}" class="btn btn-primary">
                        modifier
                    </a>
                 </td>
             </tr>
         @endforeach

     </tbody>
    </table>

   <div class="p-5">
    {{ $pages->onEachSide(3)->links() }}

   </div>
 </div>

@endsection
