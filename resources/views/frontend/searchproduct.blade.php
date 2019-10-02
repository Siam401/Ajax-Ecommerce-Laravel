@include('frontend.layouts.partials.header')

<!-- ============================================== HEADER : END ============================================== -->


<div class="body-content outer-top-xs">
    <div class='container'>
      <div class='row'>
        
        @include('frontend.layouts.partials.sidebar')
        
        <!-- /.sidebar -->
        <div class='col-md-9'> 
          <!-- ========================================== SECTION – HERO ========================================= -->
          
          {{-- <div id="category" class="category-carousel hidden-xs">
            <div class="item">
              <div class="image"> <img src="{{asset('ui/frontend/images/banners/cat-banner-1.jpg')}}" alt="" class="img-responsive"> </div>
              <div class="container-fluid">
                <div class="caption vertical-top text-left">
                  <div class="big-text"> Big Sale </div>
                  <div class="excerpt hidden-sm hidden-md"> Save up to 49% off </div>
                  <div class="excerpt-normal hidden-sm hidden-md"> Lorem ipsum dolor sit amet, consectetur adipiscing elit </div>
                </div>
              </div>
            </div>
          </div> --}}
          
       
          <div class="clearfix filters-container m-t-10">
            <div class="row">
              <div class="col col-sm-6 col-md-2">
                <div class="filter-tabs">
                  <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                    <li class="active"> <a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                    <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                  </ul>
                </div>
                <!-- /.filter-tabs --> 
              </div>
              <!-- /.col -->
              <div class="col col-sm-12 col-md-6">
                <div class="col col-sm-3 col-md-6 no-padding">
                  <div class="lbl-cnt"> <span class="lbl">Sort by</span>
                    <div class="fld inline">
                      <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                        <button data-toggle="dropdown" type="button" class="btn dropdown-toggle"> Position <span class="caret"></span> </button>
                        <ul role="menu" class="dropdown-menu">
                          <li role="presentation"><a href="#">position</a></li>
                          <li role="presentation"><a href="javascript:void(0)" onclick="sortByLowPriceOfProducts()">Price:Lowest first</a></li>
                          <li role="presentation"><a href="javascript:void(0)" onclick="sortByHighPriceOfProducts()">Price:HIghest first</a></li>
                          <li role="presentation"><a href="javascript:void(0)" onclick="sortByNameOfProducts()">Product Name:A to Z</a></li>
                        </ul>
                      </div>
                    </div>
                    <!-- /.fld --> 
                  </div>
                  <!-- /.lbl-cnt --> 
                </div>
                <!-- /.col -->
                
                <!-- /.col --> 
              </div>
              <!-- /.col -->
              
              <!-- /.col --> 
            </div>
            <!-- /.row --> 
          </div>
          <div class="search-result-container ">
            <div id="myTabContent" class="tab-content category-list">
              {{-- grid container --}}
              <div class="tab-pane active " id="grid-container">
                <div class="category-product">
                  <div class="row" id="grid-view-products">

                    @foreach($products as $product)
                    <div class="col-sm-6 col-md-4 wow fadeInUp">
                      <div class="products">
                        <div class="product">
                          <div class="product-image">
                            <div class="image"> <a href="{{ route('view.product',$product->id) }}">
                                <img src="{{asset('uploads/products/'.$product->picture1)}}" alt=""></a> </div>
                            <!-- /.image -->
                            
                            {{-- <div class="tag new"><span>new</span></div> --}}
                          </div>
                          <!-- /.product-image -->
                          
                          <div class="product-info text-left">
                            <h3 class="name"><a href="{{ route('view.product',$product->id) }}">{{ $product->title }}</a></h3>
                            {{-- <div class="rating rateit-small"></div> --}}
                            <div class="description"></div>
                            <div class="product-price"><span class="price">$ {{ $product->finalprice }}</span> <span class="price-before-discount">$ {{ $product->price }}</span> </div>
                            <!-- /.product-price --> 
                            
                          </div>
                          <!-- /.product-info -->
                          <div class="cart clearfix animate-effect">
                            <div class="action">
                              <ul class="list-unstyled">
                                <li class="add-cart-button btn-group">
                                  <a href="javascript:void(0)" onclick="addToCart('{{ $product->id }}')">
                                    <button class="btn btn-primary icon" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                    <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                  </a> 
                                </li>
                                <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                              </ul>
                            </div>
                            <!-- /.action --> 
                          </div>
                          <!-- /.cart --> 
                        </div>
                        <!-- /.product --> 
                      </div>
                      <!-- /.products --> 
                    </div>
                    @endforeach



                    <!-- /.item -->
                    <!-- /.item --> 
                  </div>
                  <!-- /.row --> 
                </div>
                <!-- /.category-product --> 
              </div>
              <!-- /.tab-pane -->
              {{-- lsit container --}}
              <div class="tab-pane "  id="list-container">
                <div class="category-product">
                  <div id="list-view-products">
                  @foreach($products as $product)
                  <div class="category-product-inner wow fadeInUp">
                    <div class="products">
                      <div class="product-list product">
                        <div class="row product-list-row">
                          <div class="col col-sm-4 col-lg-4">
                            <div class="product-image">
                              <div class="image"> <img src="{{asset('uploads/products/'.$product->picture1)}}" alt=""> </div>
                            </div>
                            <!-- /.product-image --> 
                          </div>
                          <!-- /.col -->
                          <div class="col col-sm-8 col-lg-8">
                            <div class="product-info">
                              <h3 class="name"><a href="{{ route('view.product',$product->id) }}">{{ $product->title }}</a></h3>
                              {{-- <div class="rating rateit-small"></div> --}}
                              <div class="product-price"> <span class="price"> ${{ $product->finalprice }} </span> <span class="price-before-discount">$ {{ $product->price }}</span> </div>
                              <!-- /.product-price -->
                              <div class="description m-t-10">{{ str_limit($product->description,180) }}</div>
                              <div class="cart clearfix animate-effect">
                                <div class="action">
                                  <ul class="list-unstyled">
                                      <a href="javascript:void(0)" onclick="addToCart('{{ $product->id }}')">
                                      <li class="add-cart-button btn-group">
                                        <button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button>
                                        <button class="btn btn-primary cart-btn" type="button">Add to cart</button>
                                    </li>
                                    </a>
                                    <li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li>
                                    <li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li>
                                  </ul>
                                </div>
                                <!-- /.action --> 
                              </div>
                              <!-- /.cart --> 
                              
                            </div>
                            <!-- /.product-info --> 
                          </div>
                          <!-- /.col --> 
                        </div>
                        <!-- /.product-list-row -->
                        <div class="tag new"><span>new</span></div>
                      </div>
                      <!-- /.product-list --> 
                    </div>
                    <!-- /.products --> 
                  </div>
                  <!-- /.category-product-inner -->
                  @endforeach
                  
                </div>
                </div>
                <!-- /.category-product --> 
              </div>
              <!-- /.tab-pane #list-container --> 
            </div>
            <!-- /.tab-content -->
            <!-- /.filters-container --> 
            
          </div>
          <!-- /.search-result-container --> 
          
        </div>
        <!-- /.col --> 
      </div>
      <!-- /.row --> 
      <!-- ============================================== BRANDS CAROUSEL ============================================== -->
      <div id="brands-carousel" class="logo-slider wow fadeInUp">
        <div class="logo-slider-inner">
          <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
            <div class="item m-t-15"> <a href="#" class="image"> <img data-echo="{{asset('ui/frontend/images/brands/brand1.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt=""> </a> </div>
            <!--/.item-->
            
            <div class="item m-t-10"> <a href="#" class="image"> <img data-echo="{{asset('ui/frontend/images/brands/brand2.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt=""> </a> </div>
            <!--/.item-->
            
            <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('ui/frontend/images/brands/brand3.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt=""> </a> </div>
            <!--/.item-->
            
            <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('ui/frontend/images/brands/brand4.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt=""> </a> </div>
            <!--/.item-->
            
            <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('ui/frontend/images/brands/brand5.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt=""> </a> </div>
            <!--/.item-->
            
            <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('ui/frontend/images/brands/brand6.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt=""> </a> </div>
            <!--/.item-->
            
            <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('ui/frontend/images/brands/brand2.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt=""> </a> </div>
            <!--/.item-->
            
            <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('ui/frontend/images/brands/brand4.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt=""> </a> </div>
            <!--/.item-->
            
            <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('ui/frontend/images/brands/brand1.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt=""> </a> </div>
            <!--/.item-->
            
            <div class="item"> <a href="#" class="image"> <img data-echo="{{asset('ui/frontend/images/brands/brand5.png')}}" src="{{asset('ui/frontend/images/blank.gif')}}" alt=""> </a> </div>
            <!--/.item--> 
          </div>
          <!-- /.owl-carousel #logo-slider --> 
        </div>
        <!-- /.logo-slider-inner --> 
        
      </div>
      <!-- /.logo-slider --> 
      <!-- ============================================== BRANDS CAROUSEL : END ============================================== --> </div>
    <!-- /.container --> 
    
  </div>
  <!-- /.body-content --> 

 
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


    {{-- $(".search-button").click(function(e){
      e.preventDefault();
      var search = $("input[name=search]").val();
      var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
      console.log(search);
      $.ajax({
        type:"POST",
        url:"{{ url('/search/products') }}",
        data: {_token: CSRF_TOKEN, search:search},
        dataType: "JSON",
        success:function(data){
          $('#grid-view-products').empty();
          $('#list-view-products').empty();
            var grid_products_div='';
            var list_products_div='';
            var id = data.id;
            var title = data.title;
            var picture = data.picture1;
            var description = data.description;
            var price = data.price;
            var finalprice = data.finalprice;
            
            var grid_products_div = '<div class="col-sm-6 col-md-4 wow fadeInUp">'+'<div class="products"><div class="product"><div class="product-image"><div class="image">'+'<a href="detail.html">'+'<img  src="{{asset("uploads/products/")}}'+'/'+picture+'" alt=""></a> </div></div><div class="product-info text-left"><h3 class="name">'+'<a href="detail.html">'+title+'</a></h3>'+'<div class="description">'+' '+'</div>'+'<div class="product-price"><span class="price">$ '+finalprice+'</span> <span class="price-before-discount">$ '+price+'</span> </div></div><div class="cart clearfix animate-effect"><div class="action"><ul class="list-unstyled"><li class="add-cart-button btn-group"><a href="javascript:void(0)" onclick="addToCart('+id+')"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button><button class="btn btn-primary cart-btn" type="button">Add to cart</button></a></li><li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li><li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li></ul></div></div></div></div></div>';

            var list_products_div='<div class="category-product-inner wow fadeInUp"><div class="products"><div class="product-list product"><div class="row product-list-row"><div class="col col-sm-4 col-lg-4"><div class="product-image"><div class="image">'+'<img  src="{{asset("uploads/products/")}}'+'/'+picture+'" alt=""></div></div></div><div class="col col-sm-8 col-lg-8"><div class="product-info"><h3 class="name"><a href="#">'+title+'</a></h3><div class="product-price"> <span class="price"> $ '+finalprice+'</span> <span class="price-before-discount">$ '+price+'</span> </div><div class="description m-t-10">'+description+'</div><div class="cart clearfix animate-effect"><div class="action"><ul class="list-unstyled"><a href="javascript:void(0)" onclick="addToCart('+id+')"><li class="add-cart-button btn-group"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button><button class="btn btn-primary cart-btn" type="button">Add to cart</button></li></a><li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li><li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li></ul></div></div></div></div></div><div class="tag new"><span>new</span></div></div></div></div>';

            $("#grid-view-products").append(grid_products_div); 
            $("#list-view-products").append(list_products_div); 
            $("input[name=search]").val("");

        },
        error : function (data) {
          alert('Ghorer Dim');
        }
      });
      
  }); --}}
    
    {{-- price range view products --}}
    $("#btn-submit").click(function(e){
        e.preventDefault();
        var range = $("input[name=range]").val();
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
          type:"POST",
          url:"{{ url('/product/price/range') }}",
          data: {_token: CSRF_TOKEN, range:range},
          dataType: "JSON",
          success:function(data){
            $('#grid-view-products').empty();
            $('#list-view-products').empty();
            var grid_products_div='';
            var lsit_products_div='';
              console.log(data.length);
              for(var i=0; i<data.length; i++){
                var id = data[i].id;
                var title = data[i].title;
                var picture = data[i].picture1;
                var description = data[i].description;
                var price = data[i].price;
                var finalprice = data[i].finalprice;
                
                var grid_products_div = '<div class="col-sm-6 col-md-4 wow fadeInUp">'+'<div class="products"><div class="product"><div class="product-image"><div class="image">'+'<a href="'+'{{url('product')}}'+'/'+id+'">'+'<img  src="{{asset("uploads/products/")}}'+'/'+picture+'" alt=""></a> </div></div><div class="product-info text-left"><h3 class="name">'+'<a href="'+'{{url('product')}}'+'/'+id+'">'+title+'</a></h3>'+'<div class="description">'+' '+'</div>'+'<div class="product-price"><span class="price">$ '+finalprice+'</span> <span class="price-before-discount">$ '+price+'</span> </div></div><div class="cart clearfix animate-effect"><div class="action"><ul class="list-unstyled"><a href="javascript:void(0)" onclick="addToCart('+id+')"><li class="add-cart-button btn-group"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button><button class="btn btn-primary cart-btn" type="button">Add to cart</button></li></a><li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li><li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li></ul></div></div></div></div></div>';

                var list_products_div='<div class="category-product-inner wow fadeInUp"><div class="products"><div class="product-list product"><div class="row product-list-row"><div class="col col-sm-4 col-lg-4"><div class="product-image"><div class="image">'+'<img  src="{{asset("uploads/products/")}}'+'/'+picture+'" alt=""></div></div></div><div class="col col-sm-8 col-lg-8"><div class="product-info"><h3 class="name"><a href="'+'{{url('product')}}'+'/'+id+'">'+title+'</a></h3><div class="product-price"> <span class="price"> $ '+finalprice+'</span> <span class="price-before-discount">$ '+price+'</span> </div><div class="description m-t-10">'+description+'</div><div class="cart clearfix animate-effect"><div class="action"><ul class="list-unstyled"><a href="javascript:void(0)" onclick="addToCart('+id+')"><li class="add-cart-button btn-group"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button><button class="btn btn-primary cart-btn" type="button">Add to cart</button></li></a><li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li><li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li></ul></div></div></div></div></div><div class="tag new"><span>new</span></div></div></div></div>';
  
                $("#grid-view-products").append(grid_products_div); 
                $("#list-view-products").append(grid_products_div); 
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
          var total = 0;
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
            total += data[i].price * data[i].quantity;
          }
          $('#subtotal').text(total);

          }

        },
        error: function (data) {
          alert('Ghorer Dim');
        }
      });
    }


    $('#cart_items').on('click', '.remove-from-cart', function(e) {
      e.preventDefault();

      var ele = $(this);

      {{-- if(confirm("Are you sure")) { --}}
          $.ajax({
              url: '{{ url('/product/cart/remove') }}',
              method: "DELETE",
              data: {_token: '{{ csrf_token() }}', id: ele.attr("data-id")},
              success: function (data) {
                var count = Object.keys(data).length;
                var keys = Object.keys(data);
                var total = 0;
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

                  total += data[i].price * data[i].quantity;
                }
                  

                }
                $('#subtotal').text(total);
              }
          });
      {{-- } --}}
    });

    
    function showCategoryProduct(id) {

      $.ajax({
        url: "{{ url('category') }}" + '/' + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('#grid-view-products').empty();
          $('#list-view-products').empty();
          var grid_products_div='';
          var list_products_div='';
            console.log(data.length);
            for(var i=0; i<data.length; i++){
              var id = data[i].id;
              var title = data[i].title;
              var picture = data[i].picture1;
              var description = data[i].description;
              var price = data[i].price;
              var finalprice = data[i].finalprice;
              
              var grid_products_div = '<div class="col-sm-6 col-md-4 wow fadeInUp">'+'<div class="products"><div class="product"><div class="product-image"><div class="image">'+'<a href="'+'{{url('product')}}'+'/'+id+'">'+'<img  src="{{asset("uploads/products/")}}'+'/'+picture+'" alt=""></a> </div></div><div class="product-info text-left"><h3 class="name">'+'<a href="'+'{{url('product')}}'+'/'+id+'">'+title+'</a></h3>'+'<div class="description">'+' '+'</div>'+'<div class="product-price"><span class="price">$ '+finalprice+'</span> <span class="price-before-discount">$ '+price+'</span> </div></div><div class="cart clearfix animate-effect"><div class="action"><ul class="list-unstyled"><li class="add-cart-button btn-group"><a href="javascript:void(0)" onclick="addToCart('+id+')"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button><button class="btn btn-primary cart-btn" type="button">Add to cart</button></a></li><li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li><li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li></ul></div></div></div></div></div>';

              var list_products_div='<div class="category-product-inner wow fadeInUp"><div class="products"><div class="product-list product"><div class="row product-list-row"><div class="col col-sm-4 col-lg-4"><div class="product-image"><div class="image">'+'<img  src="{{asset("uploads/products/")}}'+'/'+picture+'" alt=""></div></div></div><div class="col col-sm-8 col-lg-8"><div class="product-info"><h3 class="name"><a href="'+'{{url('product')}}'+'/'+id+'">'+title+'</a></h3><div class="product-price"> <span class="price"> $ '+finalprice+'</span> <span class="price-before-discount">$ '+price+'</span> </div><div class="description m-t-10">'+description+'</div><div class="cart clearfix animate-effect"><div class="action"><ul class="list-unstyled"><a href="javascript:void(0)" onclick="addToCart('+id+')"><li class="add-cart-button btn-group"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button><button class="btn btn-primary cart-btn" type="button">Add to cart</button></li><a href="javascript:void(0)" onclick="addToCart('+id+')"><li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li><li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li></ul></div></div></div></div></div><div class="tag new"><span>new</span></div></div></div></div>';

              $("#grid-view-products").append(grid_products_div);
              $("#list-view-products").append(list_products_div);
            }
        },
        error : function (data) {

          alert('Ghorer Dim');
        }
    });

    }

    function showManufacturerProduct(id) {

      $.ajax({
        url: "{{ url('manufacturer') }}" + '/' + id,
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('#grid-view-products').empty();
          $('#list-view-products').empty();
          var grid_products_div='';
          var list_products_div='';
            console.log(data.length);
            for(var i=0; i<data.length; i++){
              var id = data[i].id;
              var title = data[i].title;
              var picture = data[i].picture1;
              var description = data[i].description;
              var price = data[i].price;
              var finalprice = data[i].finalprice;
              
              var grid_products_div = '<div class="col-sm-6 col-md-4 wow fadeInUp">'+'<div class="products"><div class="product"><div class="product-image"><div class="image">'+'<a href="'+'{{url('product')}}'+'/'+id+'">'+'<img  src="{{asset("uploads/products/")}}'+'/'+picture+'" alt=""></a> </div></div><div class="product-info text-left"><h3 class="name">'+'<a href="'+'{{url('product')}}'+'/'+id+'">'+title+'</a></h3>'+'<div class="description">'+' '+'</div>'+'<div class="product-price"><span class="price">$ '+finalprice+'</span> <span class="price-before-discount">$ '+price+'</span> </div></div><div class="cart clearfix animate-effect"><div class="action"><ul class="list-unstyled"><li class="add-cart-button btn-group"><a href="javascript:void(0)" onclick="addToCart('+id+')"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button><button class="btn btn-primary cart-btn" type="button">Add to cart</button></a></li><li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li><li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li></ul></div></div></div></div></div>';

              var list_products_div='<div class="category-product-inner wow fadeInUp"><div class="products"><div class="product-list product"><div class="row product-list-row"><div class="col col-sm-4 col-lg-4"><div class="product-image"><div class="image">'+'<img  src="{{asset("uploads/products/")}}'+'/'+picture+'" alt=""></div></div></div><div class="col col-sm-8 col-lg-8"><div class="product-info"><h3 class="name"><a href="'+'{{url('product')}}'+'/'+id+'">'+title+'</a></h3><div class="product-price"> <span class="price"> $ '+finalprice+'</span> <span class="price-before-discount">$ '+price+'</span> </div><div class="description m-t-10">'+description+'</div><div class="cart clearfix animate-effect"><div class="action"><ul class="list-unstyled"><a href="javascript:void(0)" onclick="addToCart('+id+')"><li class="add-cart-button btn-group"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button><button class="btn btn-primary cart-btn" type="button">Add to cart</button></li></a><li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li><li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li></ul></div></div></div></div></div><div class="tag new"><span>new</span></div></div></div></div>';

              $("#grid-view-products").append(grid_products_div);
              $("#list-view-products").append(list_products_div);
            }
        },
        error : function (data) {

          alert('Ghorer Dim');
        }
    });

    }

    function sortByLowPriceOfProducts() {

      $.ajax({
        url: "{{ route('view.sortbypricelow') }}",
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('#grid-view-products').empty();
          $('#list-view-products').empty();
          var grid_products_div='';
          var list_products_div='';
            console.log(data.length);
            for(var i=0; i<data.length; i++){
              var id = data[i].id;
              var title = data[i].title;
              var picture = data[i].picture1;
              var description = data[i].description;
              var price = data[i].price;
              var finalprice = data[i].finalprice;
              
              var grid_products_div = '<div class="col-sm-6 col-md-4 wow fadeInUp">'+'<div class="products"><div class="product"><div class="product-image"><div class="image">'+'<a href="'+'{{url('product')}}'+'/'+id+'">'+'<img  src="{{asset("uploads/products/")}}'+'/'+picture+'" alt=""></a> </div></div><div class="product-info text-left"><h3 class="name">'+'<a href="'+'{{url('product')}}'+'/'+id+'">'+title+'</a></h3>'+'<div class="description">'+' '+'</div>'+'<div class="product-price"><span class="price">$ '+finalprice+'</span> <span class="price-before-discount">$ '+price+'</span> </div></div><div class="cart clearfix animate-effect"><div class="action"><ul class="list-unstyled"><li class="add-cart-button btn-group"><a href="javascript:void(0)" onclick="addToCart('+id+')"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button><button class="btn btn-primary cart-btn" type="button">Add to cart</button></a></li><li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li><li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li></ul></div></div></div></div></div>';

              var list_products_div='<div class="category-product-inner wow fadeInUp"><div class="products"><div class="product-list product"><div class="row product-list-row"><div class="col col-sm-4 col-lg-4"><div class="product-image"><div class="image">'+'<img  src="{{asset("uploads/products/")}}'+'/'+picture+'" alt=""></div></div></div><div class="col col-sm-8 col-lg-8"><div class="product-info"><h3 class="name"><a href="'+'{{url('product')}}'+'/'+id+'">'+title+'</a></h3><div class="product-price"> <span class="price"> $ '+finalprice+'</span> <span class="price-before-discount">$ '+price+'</span> </div><div class="description m-t-10">'+description+'</div><div class="cart clearfix animate-effect"><div class="action"><ul class="list-unstyled"><a href="javascript:void(0)" onclick="addToCart('+id+')"><li class="add-cart-button btn-group"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button><button class="btn btn-primary cart-btn" type="button">Add to cart</button></li></a><li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li><li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li></ul></div></div></div></div></div><div class="tag new"><span>new</span></div></div></div></div>';

              $("#grid-view-products").append(grid_products_div);
              $("#list-view-products").append(list_products_div);
            }
        },
        error : function (data) {

          alert('Ghorer Dim');
        }
    });

    }
    function sortByHighPriceOfProducts() {

      $.ajax({
        url: "{{ route('view.sortbypricehigh') }}",
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('#grid-view-products').empty();
          $('#list-view-products').empty();
          var grid_products_div='';
          var list_products_div='';
            console.log(data.length);
            for(var i=0; i<data.length; i++){
              var id = data[i].id;
              var title = data[i].title;
              var picture = data[i].picture1;
              var description = data[i].description;
              var price = data[i].price;
              var finalprice = data[i].finalprice;
              
              var grid_products_div = '<div class="col-sm-6 col-md-4 wow fadeInUp">'+'<div class="products"><div class="product"><div class="product-image"><div class="image">'+'<a href="'+'{{url('product')}}'+'/'+id+'">'+'<img  src="{{asset("uploads/products/")}}'+'/'+picture+'" alt=""></a> </div></div><div class="product-info text-left"><h3 class="name">'+'<a href="'+'{{url('product')}}'+'/'+id+'">'+title+'</a></h3>'+'<div class="description">'+' '+'</div>'+'<div class="product-price"><span class="price">$ '+finalprice+'</span> <span class="price-before-discount">$ '+price+'</span> </div></div><div class="cart clearfix animate-effect"><div class="action"><ul class="list-unstyled"><a href="javascript:void(0)" onclick="addToCart('+id+')"><li class="add-cart-button btn-group"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button><button class="btn btn-primary cart-btn" type="button">Add to cart</button></li></a><li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li><li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li></ul></div></div></div></div></div>';

              var list_products_div='<div class="category-product-inner wow fadeInUp"><div class="products"><div class="product-list product"><div class="row product-list-row"><div class="col col-sm-4 col-lg-4"><div class="product-image"><div class="image">'+'<img  src="{{asset("uploads/products/")}}'+'/'+picture+'" alt=""></div></div></div><div class="col col-sm-8 col-lg-8"><div class="product-info"><h3 class="name"><a href="'+'{{url('product')}}'+'/'+id+'">'+title+'</a></h3><div class="product-price"> <span class="price"> $ '+finalprice+'</span> <span class="price-before-discount">$ '+price+'</span> </div><div class="description m-t-10">'+description+'</div><div class="cart clearfix animate-effect"><div class="action"><ul class="list-unstyled"><a href="javascript:void(0)" onclick="addToCart('+id+')"><li class="add-cart-button btn-group"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button><button class="btn btn-primary cart-btn" type="button">Add to cart</button></li></a><li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li><li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li></ul></div></div></div></div></div><div class="tag new"><span>new</span></div></div></div></div>';

              $("#grid-view-products").append(grid_products_div);
              $("#list-view-products").append(list_products_div);
            }
        },
        error : function (data) {

          alert('Ghorer Dim');
        }
    });

    }

    function sortByNameOfProducts() {

      $.ajax({
        url: "{{ route('view.sortbyname') }}",
        type: "GET",
        dataType: "JSON",
        success: function(data) {
          $('#grid-view-products').empty();
          $('#list-view-products').empty();
          var grid_products_div='';
          var list_products_div='';
            console.log(data.length);
            for(var i=0; i<data.length; i++){
              var id = data[i].id;
              var title = data[i].title;
              var picture = data[i].picture1;
              var description = data[i].description;
              var price = data[i].price;
              var finalprice = data[i].finalprice;
              
              var grid_products_div = '<div class="col-sm-6 col-md-4 wow fadeInUp">'+'<div class="products"><div class="product"><div class="product-image"><div class="image">'+'<a href="'+'{{url('product')}}'+'/'+id+'">'+'<img  src="{{asset("uploads/products/")}}'+'/'+picture+'" alt=""></a> </div></div><div class="product-info text-left"><h3 class="name">'+'<a href="'+'{{url('product')}}'+'/'+id+'">'+title+'</a></h3>'+'<div class="description">'+' '+'</div>'+'<div class="product-price"><span class="price">$ '+finalprice+'</span> <span class="price-before-discount">$ '+price+'</span> </div></div><div class="cart clearfix animate-effect"><div class="action"><ul class="list-unstyled"><li class="add-cart-button btn-group"><a href="javascript:void(0)" onclick="addToCart('+id+')"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button><button class="btn btn-primary cart-btn" type="button">Add to cart</button></a></li><li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li><li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li></ul></div></div></div></div></div>';

              var list_products_div='<div class="category-product-inner wow fadeInUp"><div class="products"><div class="product-list product"><div class="row product-list-row"><div class="col col-sm-4 col-lg-4"><div class="product-image"><div class="image">'+'<img  src="{{asset("uploads/products/")}}'+'/'+picture+'" alt=""></div></div></div><div class="col col-sm-8 col-lg-8"><div class="product-info"><h3 class="name"><a href="'+'{{url('product')}}'+'/'+id+'">'+title+'</a></h3><div class="product-price"> <span class="price"> $ '+finalprice+'</span> <span class="price-before-discount">$ '+price+'</span> </div><div class="description m-t-10">'+description+'</div><div class="cart clearfix animate-effect"><div class="action"><ul class="list-unstyled"><a href="javascript:void(0)" onclick="addToCart('+id+')"><li class="add-cart-button btn-group"><button class="btn btn-primary icon" data-toggle="dropdown" type="button"> <i class="fa fa-shopping-cart"></i> </button><button class="btn btn-primary cart-btn" type="button">Add to cart</button></li></a><li class="lnk wishlist"> <a class="add-to-cart" href="detail.html" title="Wishlist"> <i class="icon fa fa-heart"></i> </a> </li><li class="lnk"> <a class="add-to-cart" href="detail.html" title="Compare"> <i class="fa fa-signal"></i> </a> </li></ul></div></div></div></div></div><div class="tag new"><span>new</span></div></div></div></div>';

              $("#grid-view-products").append(grid_products_div);
              $("#list-view-products").append(list_products_div);
            }
        },
        error : function (data) {

          alert('Ghorer Dim');
        }
    });

    }
</script>

</body>
      
<!-- Mirrored from www.themesground.com/flipmart-demo/HTML/category.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 15 Sep 2019 05:05:09 GMT -->
</html>