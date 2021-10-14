@extends('layouts.Frontend.frontendpage')
@section('title')
search
@endsection
@section('content')

<main  class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Search</span></li>
				</ul>
			</div>
			<div class="row">
            @if(count($productlist)>0)
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

              @else
              <div class="alert alert-success" role="alert">
                            <div class="ms-12">
                                <div><strong>No Products Found !</strong></div>
                            </div>
                        </div>

              @endif
             
            </div>
  
        

		</div><!--end container-->

	</main>
    @endsection




