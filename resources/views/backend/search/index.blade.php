@extends('snt.main')

@section('content')
<div class="p-50 container">
     @if ($pages)
            @foreach ($pages as $item)
                <div class="card">
                    <h2 class="font-weight-900">{{ $item->title }}</h2>
                    @if ($item->content)
                        <div class="p-3">
                            {!! $item->content !!}
                        </div>
                    @endif

                    @if ($item->definition)
                        <div class="archive-header p-3">
                            <h2 class="font-weight-900">Définition</h2>
                            <p>{!! $item->definition  !!}</p>
                        </div>
                    @endif
                </div>
            @endforeach

     @else
        <div class="container">
            no data found
        </div>
     @endif
</div>
@endsection

