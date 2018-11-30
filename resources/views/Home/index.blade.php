@extends('layouts.app')
@section('products')
  <div class="products">
  @foreach ($Products as $Product)
    <form action="/add" class="form-group">
        <div class="card" >
          <a href="{{url()->current()}}/product/{{ $Product->ProductID }}">
            <img class="card-img-top" src="https://via.placeholder.com/250x200.png" alt="Card image cap">
          </a>
          <div class="card-body">
            <h5 class="card-title">{{ $Product->Name }}</h5>
            <a class="btn btn-primary addcart" data-id="{{ $Product->ProductID }}">Add to Cart</a>
            <p class="card-text">{{ $Product->Description }}</p>
          </div>
        </div>
    </form>
  @endforeach
</div>
  @endsection
@section('Footer')
  <div class="footer">
    {{$Products->links()}}
  </div>
@endsection