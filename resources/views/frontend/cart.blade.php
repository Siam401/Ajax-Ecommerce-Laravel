@include('frontend.layouts.partials.header')

<!-- ============================================== HEADER : END ============================================== -->



<div class="body-content outer-top-xs">
        <div class="container">
            <div class="row ">
                <div class="shopping-cart">
                    <div class="shopping-cart-table ">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th class="cart-romove item">Remove</th>
                        <th class="cart-description item">Image</th>
                        <th class="cart-product-name item">Product Name</th>
                        <th class="cart-qty item">Quantity</th>
                        <th class="cart-sub-total item">Price</th>
                        <th class="cart-total last-item">Subtotal</th>
                        <th class="cart-edit item">Update</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="shopping-cart-btn">
                                <span class="">
                                    <a href="{{ route('view.home') }}" class="btn btn-upper btn-primary pull-right outer-right-xs">Continue Shopping</a>
                                    {{-- <a href="#" class="btn btn-upper btn-primary pull-right outer-right-xs">Update shopping cart</a> --}}
                                </span>
                            </div>
                        </td>
                    </tr>
                </tfoot>
                <tbody>
                <?php $total = 0 ?>
                @if(session('cart'))
                    @foreach(session('cart') as $id => $details)
                    @php
                        $product = App\Product::findOrFail($id);
                        $product_quantity=$details['quantity']+$product->quantity;
                    @endphp 
                    <?php $total += $details['price'] * $details['quantity'] ?>
                    <tr>
                        <td class="romove-item"><a href="javascript:void(0)" title="cancel" class="remove-from-cart" data-id="{{ $id }}"><i class="fa fa-trash-o"></i></a></td>
                        <td class="cart-image">
                            <a class="entry-thumbnail" href="{{ route('view.product',$product->id) }}">
                                <img src="{{asset('uploads/products/'.$details['photo'])}}" alt="">
                            </a>
                        </td>
                        <td class="cart-product-name-info">
                            <h4 class='cart-product-description'><a href="{{ route('view.product',$product->id) }}">{{ $details['name'] }}</a></h4>
                            {{-- <div class="row">
                                <div class="col-sm-4">
                                    <div class="rating rateit-small"></div>
                                </div>
                                <div class="col-sm-8">
                                    <div class="reviews">
                                        (06 Reviews)
                                    </div>
                                </div>
                            </div>
                            <div class="cart-product-info">
                                                <span class="product-color">COLOR:<span>Blue</span></span>
                            </div> --}}
                        </td>
                        <td class="cart-product-quantity" data-th="Quantity">
                            <div class="quant-input">
                            <input class="form-control quantity" name="quantity" type="number" min="1" max="{{ $product_quantity }}" value="{{ $details['quantity'] }}">
                            </div>
                        </td>
                        <td class="cart-product-sub-total"><span class="cart-sub-total-price">{{ $details['price'] }}</span></td>
                        <td class="cart-product-grand-total"><span class="cart-grand-total-price">{{ $details['quantity']*$details['price'] }}</span></td>
                        <td  data-th="" class="cart-product-edit"><button class="btn btn-upper btn-warning update-cart" id="updatecart" data-id="{{ $id }}">Update</button></td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>				
    
    {{-- <div class="col-md-4 col-sm-12 estimate-ship-tax">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <span class="estimate-title">Estimate shipping and tax</span>
                        <p>Enter your destination to get shipping and tax.</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label class="info-title control-label">Country <span>*</span></label>
                                <select class="form-control unicase-form-control selectpicker">
                                    <option>--Select options--</option>
                                    <option>India</option>
                                    <option>SriLanka</option>
                                    <option>united kingdom</option>
                                    <option>saudi arabia</option>
                                    <option>united arab emirates</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="info-title control-label">State/Province <span>*</span></label>
                                <select class="form-control unicase-form-control selectpicker">
                                    <option>--Select options--</option>
                                    <option>TamilNadu</option>
                                    <option>Kerala</option>
                                    <option>Andhra Pradesh</option>
                                    <option>Karnataka</option>
                                    <option>Madhya Pradesh</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="info-title control-label">Zip/Postal Code</label>
                                <input type="text" class="form-control unicase-form-control text-input" placeholder="">
                            </div>
                            <div class="pull-right">
                                <button type="submit" class="btn-upper btn btn-primary">GET A QOUTE</button>
                            </div>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div> --}}
    
    {{-- <div class="col-md-4 col-sm-12 estimate-ship-tax">
        <table class="table">
            <thead>
                <tr>
                    <th>
                        <span class="estimate-title">Discount Code</span>
                        <p>Enter your coupon code if you have one..</p>
                    </th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <input type="text" class="form-control unicase-form-control text-input" placeholder="You Coupon..">
                            </div>
                            <div class="clearfix pull-right">
                                <button type="submit" class="btn-upper btn btn-primary">APPLY COUPON</button>
                            </div>
                        </td>
                    </tr>
            </tbody>
        </table>
    </div> --}}
    
    <div class="col-md-4 col-sm-12 cart-shopping-total pull-right" >
        <table class="table">
            <thead>
                <tr>
                    <th>
                        {{-- <div class="cart-sub-total">
                            Subtotal<span class="inner-left-md">$600.00</span>
                        </div> --}}
                        <div class="cart-grand-total">
                            Grand Total<span class="inner-left-md">{{ $total }}</span>
                        </div>
                    </th>
                </tr>
            </thead><!-- /thead -->
            <tbody>
                    <tr>
                        <td>
                            <div class="cart-checkout-btn pull-right">
                                <a href="{{ route('view.checkout') }}" class="btn btn-primary checkout-btn">PROCCED TO CHEKOUT</a>
                                {{-- <span class="">Checkout with multiples address!</span> --}}
                            </div>
                        </td>
                    </tr>
            </tbody><!-- /tbody -->
        </table><!-- /table -->
    </div><!-- /.cart-shopping-total -->			</div><!-- /.shopping-cart -->
            </div> <!-- /.row -->
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
    <div id="brands-carousel" class="logo-slider wow fadeInUp">
    
            <div class="logo-slider-inner">	
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                            <img data-echo="{{asset('ui/frontend/images/brands/brand1.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item m-t-10">
                        <a href="#" class="image">
                            <img data-echo="{{asset('ui/frontend/images/brands/brand2.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="{{asset('ui/frontend/images/brands/brand3.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="{{asset('ui/frontend/images/brands/brand4.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="{{asset('ui/frontend/images/brands/brand5.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="{{asset('ui/frontend/images/brands/brand6.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="{{asset('ui/frontend/images/brands/brand2.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="{{asset('ui/frontend/images/brands/brand4.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="{{asset('ui/frontend/images/brands/brand1.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt="">
                        </a>	
                    </div><!--/.item-->
    
                    <div class="item">
                        <a href="#" class="image">
                            <img data-echo="{{asset('ui/frontend/images/brands/brand5.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt="">
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

         $(".update-cart").click(function (e) {
            e.preventDefault();
  
            var ele = $(this);
  
             $.ajax({
                url: '{{ url('/cart/update') }}',
                method: "patch",
                data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id"), quantity: ele.parents("tr").find(".quantity").val()},
                success: function (response) {
                    window.location.reload();
                }
             });
         });
    
	  
    </script>	

	

</body>

</html>
