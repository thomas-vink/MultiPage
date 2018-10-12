@extends('layouts.app')
@section('products')
  <div class="products"> 
  @foreach ($Products as $Product) 
      <div class="card" >
          <img class="card-img-top" src="URL::asset(Assets/Products/Laptop_{{$Product->ProductID }}.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">{{ $Product->Name }}</h5>
          <a class="btn btn-primary addcart" data-id="{{ $Product->ProductID }}">Go somewhere</a>
          <p class="card-text">{{ $Product->Description }}</p>
        </div>
      </div>
  @endforeach
</div> 


<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





@endsection

