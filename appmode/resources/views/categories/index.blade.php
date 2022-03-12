@extends('layouts.master')


@section('content')

@foreach($products as $product)

<ul>
    <li>{{$product->name}}</li>
    <li>{{$product->price}}</li>
    <li>{{$product->description}}</li>
    <li>{{$product->visiblity}}</li>
    <li>{{$product->condition}}</li>
    <li>{{$product->reference}}</li>
</ul>

@endforeach

@endsection
