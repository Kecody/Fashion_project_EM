@extends('layouts.master')

@section('content')

 @foreach($products as $product)
{{-- Rendre cliquable le titre suivant $product->id --}}
{{-- <p>This is product <a href="{{ route('product', $product) }}">{{ $product->name }}</a></p> --}}
{{-- ICI affichez les noms des produits, vérifiez qu'ils existent avant --}}
{{-- Faire un foreach Laravel pour afficher --}}

<ul>
    <li> {{$product->name}} </li>
    <li> {{$product->price}} </li>
    <li> {{$product->description}} </li>
    <li> {{$product->visibility}} </li>
    <li> {{$product->condition}} </li>
    <li> {{$product->reference}} </li>
</ul>
@endforeach


@endsection