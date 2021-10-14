@extends('layouts.Frontend.frontendpage')
@section('title')
Detail
@endsection
@section('content')

<main  class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Detail</span></li>
				</ul>
			</div>
			<div class="row">

				<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12 main-content-area">
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">
							  <ul class="slides">

							    <li data-thumb="assets/uploads/{{$product->image}}">
							    	<img src="assets/uploads/{{$product->image}}" alt="product thumbnail" />
							    </li>


							  </ul>
							</div>
						</div>
						<div class="detail-info">
							<div class="product-rating">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <a href="#" class="count-review">(05 review)</a>
                            </div>
                            <h2 class="product-name">{{$product->name}}</h2>
                            <div class="short-desc">
                                <P>
                                {{$product->description}}
                                </P>
                            </div>
                            <div class="wrap-social">
                            	<a class="link-socail" href="#"><img src="assets/img/social-list.png" alt=""></a>
                            </div>
                            <div class="wrap-price"><span class="product-price">Rs. {{$product->saleprice}}</span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<span class="product-price"><s>Rs. {{$product->regularprice}}</s></span></div>
                            
                            <div class="stock-info in-stock">
                                <p class="availability">Availability: <b>In Stock</b></p>
                            </div>
                            
                            <div class="wrap-butons">
								<a href="cart?id={{$product->id}}" class="btn add-to-cart">Add to Cart</a>
                                
							</div>
							
						</div>
						
					</div>
				</div><!--end main products area-->

				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 sitebar">
					<div class="widget widget-our-services ">
						<div class="widget-content">
							<ul class="our-services">

								<li class="service">
									<a class="link-to-service" >
										<i class="fa fa-truck" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Free Shipping</b>
											<span class="subtitle">On Oder Over Rs. 2000</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" >
										<i class="fa fa-gift" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Special Offer</b>
											<span class="subtitle">Get a gift!</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>

								<li class="service">
									<a class="link-to-service" >
										<i class="fa fa-reply" aria-hidden="true"></i>
										<div class="right-content">
											<b class="title">Order Return</b>
											<span class="subtitle">Return within 7 days</span>
											<p class="desc">Lorem Ipsum is simply dummy text of the printing...</p>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div><!-- Categories widget-->

					

				</div><!--end sitebar-->

				<div class="single-advance-box col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="wrap-show-advance-info-box style-1 box-in-site">
						<h3 class="title-box">Related Products</h3>
						
							

						<div class="container "> 
							<div class="row ">
									@foreach($relatedproduct as $product)
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
									
								


							
						
					
				

			</div><!--end row-->

		</div><!--end container-->

	</main>
    @endsection





