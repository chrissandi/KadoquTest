@extends('layout.app')

@section('content')
    <h1>Add Item</h1>
    {!! Form::open(['action' => 'ItemsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('image','Upload Image')}}
            {{Form::file('image')}}
        </div>
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title of Item'])}}
        </div>
        <div class="form-group">
            {{Form::label('desc','Description')}}
            {{Form::textarea('desc', '', ['class' => 'form-control', 'placeholder' => 'Description of Item'])}}
        </div>
        <div class="form-group">
            {{Form::label('price','Price in rupiah')}}
            {{Form::number('price', '')}}
        </div>
        {{Form::submit('Submit', ['class' => "btn btn-primary"])}}
    {!! Form::close() !!}
@endsection