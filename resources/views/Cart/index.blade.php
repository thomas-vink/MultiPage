@extends('layouts.app')
@section('cart')
@foreach($viewData as $item)

    <div class="CartProduct">
        <div class="CartCardContent">
            <img class="cart-img" src="https://via.placeholder.com/150x125.png" alt="Card image cap">
            <h3 class="cart-title">{{$item->Name}}</h3>
            <h4 class="cart-price">€{{$item->Price}}</h4>
            <form action="/changeAmount/{{$item->ProductID}}" method="post">
                {{ csrf_field() }}
                <p>Amount:</p>
                <input type='number' value='{{$item->amount}}' name='quantity' min='0' max='99'>
                <input type="submit" value="Submit">
            </form>
        </div>
        <hr>
    </div>
@endforeach

@endsection