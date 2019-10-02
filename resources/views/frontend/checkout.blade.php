@include('frontend.layouts.partials.header')

<!-- ============================================== HEADER : END ============================================== -->



<div class="body-content outer-top-xs">
        <div class="container">
            <div class="checkout-box ">
                <div class="row">
                    <div class="col-md-12">
                      <form method="POST" action="{{ route('order.store') }}">
                        @csrf
                        <div class="panel-group checkout-steps" id="accordion">
                            <!-- checkout-step-01  -->
                              <div class="panel panel-default checkout-step-01">
                                  <div class="panel-heading">
                                      <h4 class="unicase-checkout-title">
                                        <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseOne">
                                          <span>1</span>Order Review                                    
                                        </a>
                                      </h4>
                                    </div>
                                    
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                    <div class="shipping_address panel-body"> 
                                                                      
                                        <table class="shop_table woocommerce-checkout-review-order-table table">
                                          <thead>
                                            <tr>
                                              <th class="cart-description item">Image</th>
                                              <th class="cart-product-name item">Product</th>
                                              <th class="cart-sub-total item">Price</th>
                                              <th class="cart-qty item">Quantity</th>
                                              <th class="cart-total last-item">Total</th>
                                            </tr>
                                          </thead>
                                        <tbody>
                                      <?php $total = 0 ?>
                                      @if(session('cart'))
                                          @foreach(session('cart') as $id => $details)
                                          <?php $total += $details['price'] * $details['quantity'] ?>

                                            <tr class="woocommerce-cart-form__cart-item cart_item">
                                              <td class="cart-image">
                                                <a href=""><img width="100" height="100" src="{{asset('uploads/products/'.$details['photo'])}}" class="attachment-100x100 size-100x100" alt="" /></a>					</td>
                                              <td class="cart-product-name-info" data-title="Product">
                                                <h4 class='cart-product-description'>
                                                    <a href="#">{{ $details['name'] }}</a>  
                                                </h4>
                                                <div class="cart-product-info"></div>					
                                              </td>
                                              <td class="cart-product-sub-total" data-title="Price">
                                                <span class="woocs_special_price_code" ><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">
                                                  &#36;
                                                </span>{{ $details['price'] }}</span></span>					
                                              </td>
                                              <td class="cart-product-quantity" data-title="Quantity">
                                                <strong class="product-quantity">X {{ $details['quantity'] }}</strong>					
                                              </td>
                                              <td class="cart-product-grand-total" data-title="Total">
                                                <span class="woocs_special_price_code" ><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;</span>{{ $details['quantity']*$details['price'] }}</span></span>					
                                              </td>
                                            </tr>
                                        @endforeach
                                      @endif
                                        </tbody>
                                        <tfoot>
                                        <tr class="order-total">
                                        <th colspan="4">Total</th>
                                        <td colspan="4"><strong><span class="woocs_special_price_code" >
                                          <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#36;{{ $total }}</span></span></span></strong> 
                                        </td>
                                        </tr>
                                        </tfoot>
                                        </table>
                                        
                                    </div>
                              </div>
                                  
                              </div>
                              <!-- checkout-step-01  -->
                            <!-- checkout-step-02  -->
                              <div class="panel panel-default checkout-step-02">
                                <div class="panel-heading">
                                  <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseTwo">
                                      <span>2</span>Shipping Address
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseTwo" class="panel-collapse collapse">
                                  <div class="panel-body">
                                  <form>
                                    <div class="form-group row form-row-first validate-required {{ $errors->has('name') ? 'has-error' : '' }}">
                                      <label for="name">Full Name</label>
                                      <span class="woocommerce-input-wrapper">
                                        <input type="text" class="form-control input-text unicase-form-control" name="name" value="{{ $customer->name }}">
                                      </span>
                                      @if ($errors->has('name'))
                                          <span class="text-danger">{{ $errors->first('name') }}</span>
                                      @endif
                                    </div>    
                                    <div class="form-group row form-row-first {{ $errors->has('address') ? 'has-error' : '' }}">
                                      <label for="name">Address</label>
                                      <span class="woocommerce-input-wrapper">
                                        <input type="text" class="form-control input-text unicase-form-control" name="address" value="{{ old('address') }}">
                                      </span>
                                      @if ($errors->has('address'))
                                          <span class="text-danger">{{ $errors->first('address') }}</span>
                                      @endif
                                    </div>    
                                    <div class="form-group row form-row-first {{ $errors->has('phone') ? 'has-error' : '' }}">
                                      <label for="mobile_no">Mobile No</label>
                                      <span class="woocommerce-input-wrapper">
                                          <input type="text" class="form-control input-text unicase-form-control" name="phone" value="{{ $customer->mobile_no }}">
                                      </span>
                                      @if ($errors->has('phone'))
                                          <span class="text-danger">{{ $errors->first('phone') }}</span>
                                      @endif
                                    </div>    
                                    <div class="form-group row form-row-first validate-required {{ $errors->has('phone') ? 'has-error' : '' }}">
                                      <label for="name">Email</label>
                                      <span class="woocommerce-input-wrapper">
                                        <input type="text" class="form-control input-text unicase-form-control" name="email" value="{{ $customer->email }}">
                                      </span>
                                      @if ($errors->has('email'))
                                          <span class="text-danger">{{ $errors->first('email') }}</span>
                                      @endif
                                    </div>    
                                  </form>
                                  </div>
                                </div>
                              </div>
                              <!-- checkout-step-02  -->
    
                            <!-- checkout-step-03  -->
                              <div class="panel panel-default checkout-step-03">
                                <div class="panel-heading">
                                  <h4 class="unicase-checkout-title">
                                    <a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseThree">
                                           <span>3</span>Payment Information
                                    </a>
                                  </h4>
                                </div>
                                <div id="collapseThree" class="panel-collapse collapse">
                                  <div class="shipping_address panel-body">
                                    <div class="col-md-12">
                                      <div class="wc_payment_methods payment_methods methods">
                                        <div class="wc_payment_method payment_method_cod radio radio-checkout-unicase">
                                            <input id="payment_method_cod" type="radio" class="input-radio" name="payment_type" value="Cash"  data-order_button_text="" />
                                          
                                            <label for="payment_method_cod">
                                              Cash on delivery 	</label>
                                                <div class="payment_box payment_method_cod outer-top-xs" id="cash_on_delivary" 
                                                style="display:none;">
                                                  <p>Pay with cash upon delivery.</p>
                                                  <br>
                                                </div>
                                          </div>
                                      </div>
                                      <div class="wc_payment_methods payment_methods methods">
                                        <div class="wc_payment_method payment_method_cod radio radio-checkout-unicase">
                                            <input id="payment_method_bkash" type="radio" class="input-radio" name="payment_type" value="cod"  data-order_button_text="" />
                                          
                                            <label for="payment_method_bkash">
                                              Bkash 	</label>
                                                <div class="payment_box payment_method_cod outer-top-xs" id="bybkash" style="display:none;">
                                                    <div class="form-group row form-row-first validate-required">
                                                        <label for="name">Mobile No</label>
                                                        <span class="woocommerce-input-wrapper">
                                                          <input type="text" class="form-control input-text unicase-form-control">
                                                        </span>
                                                      </div>
                                                </div>
                                          </div>
                                      </div>
                                      <div class="wc_payment_methods payment_methods methods">
                                        <div class="wc_payment_method payment_method_cod radio radio-checkout-unicase">
                                            <input id="payment_method_bank" type="radio" class="input-radio" name="payment_type" value="cod" data-order_button_text="" />
                                          
                                            <label for="payment_method_bank">
                                              Bank Payment	</label>
                                                <div class="payment_box payment_method_cod outer-top-xs" id="bybank" style="display:none;">
                                                    <div class="form-group row form-row-first validate-required">
                                                        <label for="name">Account No</label>
                                                        <span class="woocommerce-input-wrapper">
                                                          <input type="text" class="form-control input-text unicase-form-control">
                                                        </span>
                                                      </div>
                                                <div class="payment_box payment_method_cod">
                                                    <div class="form-group row form-row-first validate-required">
                                                        <label for="name">Key</label>
                                                        <span class="woocommerce-input-wrapper">
                                                          <input type="text" class="form-control input-text unicase-form-control">
                                                        </span>
                                                      </div>
                                                </div>
                                          </div>
                                      </div>
                                    </div>
                                    <br>
                                      <div class="wc_payment_methods payment_methods methods">
                                        <div class="wc_payment_method payment_method_cod radio radio-checkout-unicase">
                                            <button type="submit" class="btn-upper btn btn-primary alt" id="place_order">Place order</button>            
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!-- checkout-step-03  -->
                              
                        </div><!-- /.checkout-steps -->
                    </div>
                  </form>

                    <div class="col-md-4">
                        <!-- checkout-progress-sidebar -->
    {{-- <div class="checkout-progress-sidebar ">
        <div class="panel-group">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="unicase-checkout-title">Your Checkout Progress</h4>
                </div>
                <div class="">
                    <ul class="nav nav-checkout-progress list-unstyled">
                        <li><a href="#">Billing Address</a></li>
                        <li><a href="#">Shipping Address</a></li>
                        <li><a href="#">Shipping Method</a></li>
                        <li><a href="#">Payment Method</a></li>
                    </ul>		
                </div>
            </div>
        </div>
    </div>  --}}
    <!-- checkout-progress-sidebar -->				</div>
                </div><!-- /.row -->
            </div><!-- /.checkout-box -->
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


        $(".remove-from-cart").click(function (e) {
          e.preventDefault();
    
          var ele = $(this);
    
          {{-- if(confirm("Are you sure")) { --}}
              $.ajax({
                  url: '{{ url('/product/cart/remove') }}',
                  method: "DELETE",
                  data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
                  success: function (data) {
                      window.location.reload();
                  }
              });
          {{-- } --}}
        });

        $("#payment_method_cod").click(function(){
          $('#cash_on_delivary').show();
          $('#bybkash').hide();
          $('#bybank').hide();
          $('#place_order').text('Place Order');
        });
        $("#payment_method_bkash").click(function(){
          $('#cash_on_delivary').hide();
          $('#bybkash').show();
          $('#bybank').hide();
          $('#place_order').text('Procced with Bkash');
        });
        $("#payment_method_bank").click(function(){
          $('#cash_on_delivary').hide();
          $('#bybkash').hide();
          $('#bybank').show();
          $('#place_order').text('Procced with Bank');
        });
	  
    </script>	

	

</body>

<!-- Mirrored from www.themesground.com/flipmart-demo/HTML/detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Sep 2019 05:05:09 GMT -->
</html>
