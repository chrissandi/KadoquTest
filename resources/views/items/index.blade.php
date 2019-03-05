@extends('layout.app')

@section('content')
    <h1>Items</h1>
    @php
        $count = 0;
    @endphp
    @if (count($items) > 0)
            @foreach ($items as $item)
                @if ($count % 3 == 0)
                    @php
                        echo '<div class="card-deck" style="margin-top:50px">';
                    @endphp
                @endif
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
                @if ($count % 3 == 2 || $count == count($items)-1)
                    @php
                        echo '</div>';
                    @endphp
                @endif
                @php
                    $count+=1;
                @endphp
            @endforeach
        {{$items->links()}}
    @else
        <p>No items found</p>
    @endif
@endsection