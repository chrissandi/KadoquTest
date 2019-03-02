@extends('layout.app')

@section('content')
    <h1>{{$title}}</h1>
    {{-- <p>this is items</p> --}}
    @if (count($items) > 0)
        <ul class="list-group">
            @foreach ($items as $item)
            
                <li class="list-group-item">{{$item}}</li>
            @endforeach
        </ul>
    @endif
@endsection