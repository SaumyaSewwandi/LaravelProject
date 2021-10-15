@extends('layouts.Frontend.frontendpage')
@section('title')
Shoping cart 
@endsection
@section('content')
    @if(Session::has('cart'))
<main class="main-site">

		<div class="container">

			<div class="wrap-breadcrumb">
				<ul>
					<li class="item-link"><a href="/" class="link">home</a></li>
					<li class="item-link"><span>Cart</span></li>
				</ul>
			</div>
			<div class=" main-content-area">

				<div class="wrap-iten-in-cart">
					<h3 class="box-title">Products Name</h3>
					<ul class="products-cart">
					@foreach($products as $product)
						<li class="pr-cart-item">
							<div class="product-image" style= "width:100px">
								<figure><img src="assets/uploads/{{ $product['item']['image'] }}" alt=""></figure>
							</div>
							<div class="product-name" style= "width:350px">
								<a class="link-to-product" href="detail?id={{ $product['item']['id'] }}">{{ $product['item']['name'] }}</a>
							</div>
							<div class="price-field produtc-price" style= "width:100px"><p class="price">{{ $product['item']['saleprice'] }}</p></div>
							<div class="price-field quantity" style= "width:100px">
							<span class="index">{{ $product['qty']}}</span>
							</div>
							<div class="price-field sub-total " style= "width:100px"><p class="price">{{ $product['price'] }}</p></div>
							<div class="price-field btn-group" style= "width:100px">
							
                                    <button type="button" class="btn btn-primary btn-xs dropdown-toogle" data-toggle="dropdown">Action <span class="caret"></span></button>
                                    <ul class="dropdown-menu">
                                        <li><a href="getReduceByOne?id={{ $product['item']['id'] }}">Reduce by 1</a></li>
                                        <li><a href="getRemoveItem?id={{ $product['item']['id'] }}">Reduce All</a></li>
                                    </ul>
                        	</div>
						</li>
						@endforeach											
					</ul>
				</div>
			
				<div class="summary">
					<div class="order-summary">
						<h4 class="title-box">Order Summary</h4>
						<p class="summary-info"><span class="title">Subtotal</span><b class="index">Total: {{ $totalPrice }}</b></p>
						<p class="summary-info"><span class="title">Shipping</span><b class="index">Free Shipping</b></p>
						<p class="summary-info total-info "><span class="title">Total</span><b class="index">Total: {{ $totalPrice }}</b></p>
					</div>

					

					<div class="checkout-info">
						
						<a class="btn btn-checkout" href="checkout.html">Check out</a>
						<a class="link-to-shop" href="/">Continue Shopping<i class="fa fa-arrow-circle-right" aria-hidden="true"></i></a>
					</div>
					<div class="update-clear">
						<a class="btn btn-clear" href="#">Clear Shopping Cart</a>
						<a class="btn btn-update" href="#">Update Shopping Cart</a>
					</div>
				</div>

				

			</div><!--end main content area-->
			@else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No Items in Cart!</h2>
            </div>
        </div>
    @endif
		</div><!--end container-->

	</main>
	<!--main area-->
    @endsection