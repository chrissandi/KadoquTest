@extends('layout.app')

@section('content')
    <h1>Items</h1>
    @if (count($items) > 0)
        <div class="card-deck">
            @foreach ($items as $item)
                <div class="card">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                        <h5 class="card-title"> <a href="\items\{{$item->id}}"> {{$item->title}} </a> </h5>
                            <p class="card-text">{{$item->description}}</p>
                        </div>
                        <div class="card-body">
                            <p>Price : {{$item->price}}</p>
                        </div>
                        <div class="card-body">
                            <a href="#" class="card-link">Add to cart</a>
                        </div>
                        <small>Updated on {{$item->updated_at->format('m/d/Y')}}</small>
                </div>
            @endforeach
        </div>
        {{$items->links()}}
    @else
        <p>No items found</p>
    @endif
@endsection