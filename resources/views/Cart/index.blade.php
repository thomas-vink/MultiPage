@extends('layouts.app')
@section('cart')

    <h1>{{$ShoppingCart['Product1']['amount']}}</h1>
    <?php
        print_r($ShoppingCart);
    ?>


@endsection