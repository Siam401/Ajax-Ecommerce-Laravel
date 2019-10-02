<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.themesground.com/flipmart-demo/HTML/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Sep 2019 05:00:36 GMT -->
<head>
<!-- Meta -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="description" content="">
<meta name="author" content="">
<meta name="keywords" content="MediaCenter, Template, eCommerce">
<meta name="robots" content="all">
<meta name="csrf-token" content="{{ csrf_token() }}" />
<title>Flipmart</title>

<!-- Bootstrap Core CSS -->
<link rel="stylesheet" href="{{asset('ui/frontend/css/bootstrap.min.css')}}">

<!-- Customizable CSS -->
<link rel="stylesheet" href="{{asset('ui/frontend/css/main.css')}}">
<link rel="stylesheet" href="{{asset('ui/frontend/css/blue.css')}}">
<link rel="stylesheet" href="{{asset('ui/frontend/css/owl.carousel.css')}}">
<link rel="stylesheet" href="{{asset('ui/frontend/css/owl.transitions.css')}}">
<link rel="stylesheet" href="{{asset('ui/frontend/css/animate.min.css')}}">
<link rel="stylesheet" href="{{asset('ui/frontend/css/rateit.css')}}">
<link rel="stylesheet" href="{{asset('ui/frontend/css/jquery-ui.css')}}">
<link rel="stylesheet" href="{{asset('ui/frontend/css/bootstrap-select.min.css')}}">

<!-- Icons/Glyphs -->
<link rel="stylesheet" href="{{asset('ui/frontend/css/font-awesome.css')}}">

<!-- Fonts -->
<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
</head>
<body class="cnt-home">
<input type="hidden" id="mainurl" value="{{ URL::to('/') }}">
<!-- ============================================== HEADER ============================================== -->
<header class="header-style-1"> 
  
  <!-- ============================================== TOP MENU ============================================== -->
  <div class="top-bar animate-dropdown">
    <div class="container">
      <div class="header-top-inner">
        <div class="cnt-account">
          <ul class="list-unstyled">
            <li><a href="#"><i class="icon fa fa-user"></i>My Account</a></li>
            <li><a href="#"><i class="icon fa fa-heart"></i>Wishlist</a></li>
            <li><a href="{{ route('view.cart') }}"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
            @php
                $customer_id=session('customer_id')
            @endphp
            <?php if($customer_id != NULL){ ?>
              <li><a href="{{ route('view.checkout') }}"><i class="icon fa fa-check"></i>Checkout</a></li>
              <li><a href="{{ route('view.logout') }}"><i class="icon fa fa-unlock"></i>Logout</a></li>
            <?php }else{ ?>
              <li><a href="{{ route('view.loginview') }}"><i class="icon fa fa-lock"></i>Login</a></li>
            <?php }?>  
          </ul>
        </div>
        <!-- /.cnt-account -->
        
        {{-- <div class="cnt-block">
          <ul class="list-unstyled list-inline">
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">USD </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">USD</a></li>
                <li><a href="#">INR</a></li>
                <li><a href="#">GBP</a></li>
              </ul>
            </li>
            <li class="dropdown dropdown-small"> <a href="#" class="dropdown-toggle" data-hover="dropdown" data-toggle="dropdown"><span class="value">English </span><b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="#">English</a></li>
                <li><a href="#">French</a></li>
                <li><a href="#">German</a></li>
              </ul>
            </li>
          </ul>
        </div> --}}
        <!-- /.cnt-cart -->
        <div class="clearfix"></div>
      </div>
      <!-- /.header-top-inner --> 
    </div>
    <!-- /.container --> 
  </div>
  <!-- /.header-top --> 
  <!-- ============================================== TOP MENU : END ============================================== -->
  <div class="main-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-3 logo-holder"> 
          <!-- ============================================================= LOGO ============================================================= -->
          <div class="logo"> <a href="{{ route('view.home') }}"> <img src="{{asset('ui/frontend/images/logo.png')}}" alt="logo"> </a> </div>
          <!-- /.logo --> 
          <!-- ============================================================= LOGO : END ============================================================= --> </div>
        <!-- /.logo-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder"> 
          <!-- /.contact-row --> 
          <!-- ============================================================= SEARCH AREA ============================================================= -->
          <div class="search-area">
              <div class="control-group">
                {{-- <ul class="categories-filter animate-dropdown">
                  <li class="dropdown"> <a class="dropdown-toggle"  data-toggle="dropdown" href="category.html">Categories <b class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu" >
                    @foreach ($categories as $category)   
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="">{{ $category->title }}</a></li>
                    @endforeach  
                    </ul>
                  </li>
                </ul> --}}
                {{-- <input type="text" class="search-field " id="titles" placeholder="Search here..." name="search"/>
                <a class="search-button" href="javascript:void(0)"></a>  --}}
                <form action="{{ route('view.searchproducts') }}" method="post">
                  @csrf
                  <input type="text" class="search-field " id="titles" placeholder="Search here..." name="search"/>
                  <button class="search-button" type="submit"></button> 
                </form>
              </div>
          </div>
          {{-- <div class="autocomplete-suggestions">
            <ul>
              <li>asd</li>
              <li>asd</li>
              <li>asd</li>
              <li>asd</li>
              <li>asd</li>
              <li>asd</li>
            </ul>
          </div> --}}
          <!-- /.search-area --> 
          <!-- ============================================================= SEARCH AREA : END ============================================================= --> </div>
        <!-- /.top-search-holder -->
        
        <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row"> 
          <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->
          
          <div class="dropdown dropdown-cart"> <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
              <div class="basket"> <i class="glyphicon glyphicon-shopping-cart"></i> </div>
              <div class="basket-item-count"><span class="count">{{ count(session('cart')) }}</span></div>
              <div class="total-price-basket"> <span class="lbl">cart </span> <span class="total-price"> <span class="sign"></span><span class="value"></span> </span> </div>
            </div>
            </a>
            <ul class="dropdown-menu">
              <li>


        <div id="cart_items">
          <?php $total = 0 ?>
            @if(session('cart'))
              @foreach(session('cart') as $id => $details)
              <?php $total += $details['price'] * $details['quantity'] ?>
                <div class="cart-item product-summary">
                  <div class="row">
                    <div class="col-xs-4">
                      <div class="image"> <a href="detail.html">
                        <img src="{{asset('uploads/products/'.$details['photo'])}}" alt=""></a> </div>
                      </div>
                    <div class="col-xs-7">
                      <h3 class="name"><a href="#">{{ $details['name'] }}</a></h3>
                      <div class="price">{{ $details['quantity'] }} x</div>
                      <div class="price">{{ $details['price'] }}</div>
                    </div>
                    <div class="col-xs-1 action"> <a href="javascript:void(0)" class="remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash"></i></a> </div>
                  </div>
                </div>
                <!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>
              @endforeach
            @endif
        </div>


                <div class="clearfix cart-total">
                  <div class="pull-right"> <span class="text">Grand Total :</span><span class='price' id="subtotal">{{ $total }}</span> </div>
                  <div class="clearfix"></div>
                  <a href="{{ route('view.cart') }}" class="btn btn-upper btn-primary btn-block m-t-20">Cart</a>
                  @php
                      $customer_id=session('customer_id')
                  @endphp
                  <?php if($customer_id != NULL){ ?>
                    <a href="{{ route('view.checkout') }}" class="btn btn-upper btn-primary btn-block m-t-20">Checkout</a>
                  <?php } ?>
                <!-- /.cart-total--> 
                
              </li>
            </ul>
            <!-- /.dropdown-menu--> 
          </div>
          <!-- /.dropdown-cart --> 
          
          <!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= --> </div>
        <!-- /.top-cart-row --> 
      </div>
      <!-- /.row --> 
      
    </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.main-header --> 
  
  <!-- ============================================== NAVBAR ============================================== -->
  <div class="header-nav animate-dropdown">
    <div class="container">
      <div class="yamm navbar navbar-default" role="navigation">
        <div class="navbar-header">
       <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> 
       <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div class="nav-bg-class">
          <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
            <div class="nav-outer">
              <ul class="nav navbar-nav">
                <li class="dropdown yamm-fw {{ request()->route()->getName() == 'view.home' ? 'active' : '' }}"> <a href="{{ route('view.home') }}">Home</a> </li>

                {{-- Top navigation bar --}}
                @foreach ($categories as $category)  
                    @php
                    $subcategories = App\Category::find($category->id)->subcategories;
                    @endphp 
                    @if($subcategories->isNotEmpty()) 
                        <li class="dropdown yamm mega-menu"> <a href="home.html" data-hover="dropdown" class="dropdown-toggle" data-toggle="dropdown">{{ $category->title }}</a>
                            @php
                            $subcategories = App\Category::find($category->id)->subcategories;
                            @endphp 
                            @if($subcategories->isNotEmpty())
                            <ul class="dropdown-menu container">
                                <li>
                                  <div class="yamm-content ">
                                    <div class="row">
                                    @foreach ($subcategories as $subcategory)            
                                      <div class="col-xs-12 col-sm-6 col-md-3 col-menu">
                                        <h2 class="title">{{ $subcategory->title }}</h2>
                                        <ul class="links">
                                        @php
                                        $sub_subcategories = App\Subcategory::find($subcategory->id)->sub_subcategories;
                                        @endphp    
                                        @foreach ($sub_subcategories as $sub_subcategory)
                                          <li><a href="{{ route('view.categoryproduct',$sub_subcategory->id) }}">{{ $sub_subcategory->title }}</a></li>
                                        @endforeach  
                                        </ul>
                                      </div>
                                      <!-- /.col -->
                                    @endforeach  
                                    </div>
                                  </div>
                                </li>
                              </ul>  
                            @endif      
                        </li>
                    @endif
                    @if($subcategories->isEmpty())
                        <li class="dropdown"> <a href="">{{ $category->title }}</a> </li>
                    @endif
                @endforeach
  <!-- /.header-nav --> 
  <!-- ============================================== NAVBAR : END ============================================== --> 
  
</header>