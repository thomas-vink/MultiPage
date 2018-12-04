@extends('layouts.app')
@section('products')

  <div class="ProductMenu">
    {{$Products->links()}}
    <form action="/category" method="post">
      {{ csrf_field()}}
      <select name='category'>
          <option value="">Alle categoriën</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
      </select>
      <input type="submit" value="Submit">
    </form>
  </div>

  <div class="products">
    @foreach ($Products as $Product)
      <form action="/add" class="form-group">
          <div class="card" >
            <a href="{{url()->current()}}/product/{{ $Product->id }}">
              <img class="card-img-top" src="https://via.placeholder.com/250x200.png" alt="Card image cap">
            </a>
            <div class="card-body">
              <h5 class="card-title">{{ $Product->Name }}</h5>
              <a class="btn btn-primary addcart" data-id="{{ $Product->id }}">Add to Cart</a>
              <p class="card-text">{{ $Product->Description }}</p>
            </div>
          </div>
      </form>
    @endforeach
  </div>

@endsection