@extends('layouts.app')
@section('cart')
    @foreach($orders as $details)

        <div class="CartProduct">
            <a href="/orderdetails/{{$details->id}}">
                <div class="CartCardContent">
                    <h3 class="cart-title">Order:{{$details->id}}</h3>
                </div>
                <hr>
            </a>
        </div>

    @endforeach
@endsection