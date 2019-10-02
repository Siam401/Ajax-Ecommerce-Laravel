@include('frontend.layouts.partials.header')

<!-- ============================================== HEADER : END ============================================== -->



<div class="body-content">
        <div class="container">
            <div class="sign-in-page">
                <div class="row">
                    <!-- Sign-in -->			
    <div class="col-md-6 col-sm-6 sign-in">
        <h4 class="">Sign in</h4>
        <p class="">Hello, Welcome to your account.</p>
        {{-- <div class="social-sign-in outer-top-xs">
            <a href="#" class="facebook-sign-in"><i class="fa fa-facebook"></i> Sign In with Facebook</a>
            <a href="#" class="twitter-sign-in"><i class="fa fa-twitter"></i> Sign In with Twitter</a>
        </div> --}}
        <form class="register-form outer-top-xs" role="form" action="{{ route('view.login') }}" method="post">
            @csrf
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label class="info-title" for="exampleInputEmail1">Email Address <span>*</span></label>
                <input type="email" name="email" class="form-control unicase-form-control text-input" id="exampleInputEmail1" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
              <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label class="info-title" for="exampleInputPassword1">Password <span>*</span></label>
                <input type="password" name="password" class="form-control unicase-form-control text-input" id="exampleInputPassword1" >
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="radio outer-xs">
                  <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Remember me!
                  </label>
                  <a href="#" class="forgot-password pull-right">Forgot your Password?</a>
            </div>
              <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
        </form>					
    </div>
    <!-- Sign-in -->
    
    <!-- create a new account -->
    <div class="col-md-6 col-sm-6 create-new-account">
        <h4 class="checkout-subtitle">Create a new account</h4>
        <p class="text title-tag-line">Create your new account.</p>
        {{-- @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
        @endif
        <form class="register-form outer-top-xs" role="form" action="{{ route('view.register') }}" method="post">
            @csrf
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label class="info-title" for="exampleInputEmail2">Email Address <span>*</span></label>
                <input type="email" class="form-control unicase-form-control text-input" id="exampleInputEmail2" name="email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
              </div>
            <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                <label class="info-title" for="exampleInputEmail1">Name <span>*</span></label>
                <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="name" value="{{ old('name') }}">
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('mobile_no') ? 'has-error' : '' }}">
                <label class="info-title" for="exampleInputEmail1">Phone Number <span>*</span></label>
                <input type="text" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="mobile_no" value="{{ old('mobile_no') }}">
                @if ($errors->has('mobile_no'))
                    <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                <label class="info-title" for="exampleInputEmail1">Password <span>*</span></label>
                <input type="password" class="form-control unicase-form-control text-input" id="exampleInputEmail1" name="password">
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group {{ $errors->has('confirm_password') ? 'has-error' : '' }}">
                    <label class="info-title" for="exampleInputEmail1">Confirm Password <span>*</span></label>
                    <input type="password" name="confirm_password" class="form-control unicase-form-control text-input" id="exampleInputEmail1">
                    @if ($errors->has('confirm_password'))
                    <span class="text-danger">{{ $errors->first('confirm_password') }}</span>
                @endif
            </div>
              <button type="submit" class="btn-upper btn btn-primary checkout-page-button">Sign Up</button>
        </form>
        
        
    </div>	
    <!-- create a new account -->			</div><!-- /.row -->
            </div><!-- /.sigin-in-->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
    
            <div class="logo-slider-inner">	
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item m-t-10">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand3.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand6.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand2.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand4.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand1.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="assets/images/brands/brand5.png" src="assets/images/blank.gif" alt="">
                        </a>	
                    </div><!--/.item-->
                </div><!-- /.owl-carousel #logo-slider -->
            </div><!-- /.logo-slider-inner -->
        
    </div><!-- /.logo-slider -->
    <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
    </div><!-- /.body-content -->

<!-- ============================================================= FOOTER ============================================================= -->
@include('frontend.layouts.partials.footer')

<script>
        $.ajax({
          url: "{{ route('view.allproducts') }}",
          type: "GET",
          dataType: "JSON",
          success: function(data) {
            var titles=[];
            for(var i=0; i<data.length; i++){
              var title = data[i].title;
              titles.push(title); 
            }
            $( "#titles" ).autocomplete({ 
              source: function(request, response) {
                var results = $.ui.autocomplete.filter(titles, request.term);
        
                response(results.slice(0, 10));
            }
            }); 
          },
          error : function (data) {
    
            alert('Ghorer Dim');
          }
        });
    
    
        $("#addtocartwithquantity").click(function(e){
          e.preventDefault();
          var id = $("input[name=id]").val();
		  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
		  var quantity= $("input[name=quantity]").val();
          console.log(id);
          console.log(quantity);
          $.ajax({
            type:"POST",
            url:"{{ url('/product/cart/add') }}",
            data: {_token: CSRF_TOKEN, id:id, quantity:quantity},
            dataType: "JSON",
            success:function(data){
              console.log(data);
			  var count = Object.keys(data).length;
			  var keys = Object.keys(data);
			  $('#cart_items').empty();
			  $('.count').empty();
			  $('.count').text(count);
	
			  var cart_items_div='';
			  
			  for(var i=1; i<=Math.max.apply(Math, keys); i++){
			   if(data[i] != null){
				var title = data[i].name;
				var photo = data[i].photo;
				var quantity = data[i].quantity;
				var price = data[i].price;
	
				var cart_items_div='<div class="cart-item product-summary"><div class="row"><div class="col-xs-4"><div class="image"> <a href="detail.html">'+'<img  src="{{asset("uploads/products/")}}'+'/'+photo+'" alt="">'+'</a> </div></div><div class="col-xs-7"><h3 class="name"><a href="#">'+title+'</a></h3><div class="price">'+quantity+' x</div><div class="price">'+price+'</div></div><div class="col-xs-1 action"> <a href="javascript:void(0)" class="remove-from-cart" data-id="'+i+'"><i class="fa fa-trash"></i></a> </div></div></div><div class="clearfix"></div><hr>';
	
				$("#cart_items").append(cart_items_div);
			  }
				
	
			  }
            },
            error : function (data) {
              alert('Ghorer Dim');
            }
          });
          
	  });
	  
	  function addToCart(id) {
		$.ajax({
		  url: "{{ url('/product/cart/add') }}" + '/' + id,
		  type: "GET",
		  dataType: "JSON",
		  success: function(data) {
			console.log(data);
			var count = Object.keys(data).length;
			var keys = Object.keys(data);
			$('#cart_items').empty();
			$('.count').empty();
			$('.count').text(count);
  
			var cart_items_div='';
			
			for(var i=1; i<=Math.max.apply(Math, keys); i++){
			 if(data[i] != null){
			  var title = data[i].name;
			  var photo = data[i].photo;
			  var quantity = data[i].quantity;
			  var price = data[i].price;
  
			  var cart_items_div='<div class="cart-item product-summary"><div class="row"><div class="col-xs-4"><div class="image"> <a href="detail.html">'+'<img  src="{{asset("uploads/products/")}}'+'/'+photo+'" alt="">'+'</a> </div></div><div class="col-xs-7"><h3 class="name"><a href="#">'+title+'</a></h3><div class="price">'+quantity+' x</div><div class="price">'+price+'</div></div><div class="col-xs-1 action"> <a href="javascript:void(0)" class="remove-from-cart" data-id="'+i+'"><i class="fa fa-trash"></i></a> </div></div></div><div class="clearfix"></div><hr>';
  
			  $("#cart_items").append(cart_items_div);
			}
			  
  
			}
  
		  },
		  error: function (data) {
			alert('Ghorer Dim');
		  }
		});
	  }
        
        
    </script>	

	

</body>

<!-- Mirrored from www.themesground.com/flipmart-demo/HTML/detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Sep 2019 05:05:09 GMT -->
</html>
