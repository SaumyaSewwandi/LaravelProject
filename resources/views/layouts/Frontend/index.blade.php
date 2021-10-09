@extends('layouts.Frontend.frontendpage')

@section('title')

@endsection

@section('header')

@endsection

@section('content')

@include('layouts.Frontend.slide')
<br>
    
    

 <div class="container ">
 <div class="row ">
 <div class="col-md-10">
            <h1 class="title-box"> Featured Products</h1>
          </div>
   @foreach($productlist as $product)
        <div class="col-md-3 mt-3">
            <div class="card" style="width: 18rem; height: 30rem">
              <img src="assets/uploads/{{$product->image}}" width ="200" height="250" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <span class= "float-start" style="color:red"><b>Rs. {{$product->saleprice}}</b></span>
                <span class="card-text float-end"><b>Rs. <s>{{$product->regularprice}}</s></b></span></br></br>
                <a href="#" class="btn btn-primary">Add to Cart</a>
            </div>
        </div>
    </div>
@endforeach
</div>
</div>





<br><br>


<div class="container ">
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled">Disabled</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
    <h5 class="card-title">Special title treatment</h5>
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
</div>
@endsection
