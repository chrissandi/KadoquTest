@extends('layout.app')

@section('content')
    <h1>{{$item->title}}</h1>
    <p>{{$item->description}}</p>
    <p>Price : Rp.{{$item->price}}</p>
@endsection