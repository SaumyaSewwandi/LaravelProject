@extends('layouts.Frontend.frontendpage')

@section('title')
Emart 
@endsection


@section('content')

@include('layouts.Frontend.slide')
<br>
 <div class="container "> 
    <div class="row ">
 	    <div class="wrap-show-advance-info-box ">
	 
            <h3 class="title-box"> Featured Products</h3>
       </div>

         
       
                @foreach($productlist as $product)
                    <div class="col-lg-3 col-sm-4 col-md-6 col-xs-12 mt-3">
                        <div class="card" >
                          <img src="assets/uploads/{{$product->image}}" width ="200" height="250" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <span class= "float-start" style="color:red"><b>Rs. {{$product->saleprice}}</b></span>
                            <span class="card-text float-end"><b>Rs. <s>{{$product->regularprice}}</s></b></span></br></br>
                            <a href="detail?id={{$product->id}}"class="btn btn-primary">More Detail</a>
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
    @foreach($categorylist as $category)
      <li class="nav-item nv">
        <a class="nav-link active" aria-current="true" href="selectcategory?category_id={{$category->id}}">{{$category->name}}</a>
      </li>
      @endforeach
									
										
    </ul>
  </div>
  <div class="card-body">
      <div class="container "> 
           <div class="row ">
           
           @foreach($productlist1 as $product)
                    <div class="col-lg-3 col-sm-4 col-md-6 col-xs-12 mt-3">
                        <div class="card" >
                          <img src="assets/uploads/{{$product->image}}" width ="200" height="250" class="card-img-top" alt="...">
                          <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <span class= "float-start" style="color:red"><b>Rs. {{$product->saleprice}}</b></span>
                            <span class="card-text float-end"><b>Rs. <s>{{$product->regularprice}}</s></b></span></br></br>
                            <a href="detail?id={{$product->id}}"class="btn btn-primary">More Detail</a>
                          </div>
                        </div>
                    </div>

                  
              @endforeach
            
          </div>
      </div>
  </div>
</div>
</div>


@endsection


@section('scripts')
<script>
$('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>
@endsection