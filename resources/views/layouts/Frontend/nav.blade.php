<nav class="navbar navbar-expand-md navbar-default bg-default shadow-sm">

<div class="container">                  

            
                <a class="navbar-brand " href="{{ url('/') }}">
               <h6><span class="fa fa-mobile"></span>  Hotline: (+011) 444 555</h6>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                    <!-- Left Side Of Navbar -->
                   

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <li class="nav menu-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                               
                    </li>
                    <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Category
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						@foreach($categorylist as $category)
						<a class="dropdown-item" href="selectcategory?category_id={{$category->id}}">{{$category->name}}</a>
						@endforeach
						
				</li>
                   
                    
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest

                    <li class="nav-item ">
                    <a class="nav-link" href="#">Contact us</a>
                    </li>
                    </ul>
                </div>                  
            </div>      
        </div>
</nav>

<header  class="header header-style-1">
		<div class="container-fluid">
			<div class="row">
				<div class="topbar-menu-area">
					<div class="container">
					<div class="mid-section main-info-area">

						<div class="wrap-logo-top left-section">
							<a href="index.html" class="link-to-home"><img src="assets/img/logo-top-1.png" alt="mercado"></a>
						</div>

						<div class="wrap-search center-section">
							<div class="wrap-search-form">
								<form method="POST" action="searchdata" id="form-search-top" name="form-search-top" >
								@csrf
									<input type="text" name="search" value="" placeholder="Search here...">
									<button form="form-search-top" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
								
								</form>
							</div>
						</div>
						<div class="wrap-icon right-section">
							<div class="wrap-icon-section wishlist">
								<a href="#" class="link-direction">
									<i class="fa fa-heart" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">0 item</span>
										<span class="title">Wishlist</span>
									</div>
								</a>
							</div>
							<div class="wrap-icon-section minicart">
								<a href="shopingcart" class="link-direction">
									<i class="fa fa-shopping-basket" aria-hidden="true"></i>
									<div class="left-info">
										<span class="index">{{ Session::has('cart') ? Session::get('cart')->totalQty : '' }} items</span>
										<span class="title">CART</span>
									</div>
								</a>
							</div>
							
				</div>
				

				
            </div>
          
		</div>
        
	</header>
	
 <div class="row ">
 	<div class="wrap-show-advance-info-box ">
	 
   <marquee class="title-box" direction ="left"  scrollamount="8" behavior="alternate" > Welcome to Emart , Emart is the Best Online plateform to buy products as you like...</marquee>

		</div>
	</div>
                  
       