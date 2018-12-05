@extends('layouts.app')
@section('cart')
    @foreach($ordersarray as $key => $id)
        <div class="CartProduct">
            <div class="CartCardContent">
                <img class="cart-img" src="https://via.placeholder.com/150x125.png" alt="Card image cap">
                <h3 class="cart-title">{{$Products[$key]->Name}}</h3>
                <p>Amount:{{$id}}</p>
            </div>
            <hr>
        </div>

    @endforeach
@endsection