@extends('layouts.app')
@section('products')
  <div class="products">
  @foreach ($Products as $Product)
    <form action="/add" class="form-group">
      <div class="card" >
          <img class="card-img-top" src="URL::asset(Assets/Products/Laptop_{{$Product->ProductID }}.jpg" alt="Card image cap">
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

@section('cart')


<!-- Modal -->
<div class="modal fade" id="CartModal" tabindex="-1" role="dialog" aria-labelledby="CartModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="CartModalLabel">Shopping Cart</h5>
        <div class="testdata">

        </div>
      </div>
    </div>
  </div>
</div>





@endsection
