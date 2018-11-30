@extends('layouts.app')
@section('products')


    <div class="Details-Body">
        <h1 class="Details-Title">{{$products->Name}}</h1>
        <img class="Details-img" src="https://via.placeholder.com/500x400.png" alt="Card image cap">
        <div class="Details-Text">
          <p>{{$products->Description}}</p>
            <h3>€{{$products->Price}}</h3>
            <a class="btn btn-primary addcart" data-id="{{$products->ProductID}}">Add to Cart</a>
        </div>
    </div>

@endsection