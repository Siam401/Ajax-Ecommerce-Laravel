<div class='col-md-3 sidebar'> 
        <!-- ================================== TOP NAVIGATION ================================== -->
        <div class="side-menu animate-dropdown outer-bottom-xs">
          <div class="head"><i class="icon fa fa-align-justify fa-fw"></i> Categories</div>
          <nav class="yamm megamenu-horizontal">
            <ul class="nav">
              
              @foreach ($categories as $category)
                  <li class="dropdown menu-item"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon fa {{ $category->fontawsome }}"></i>{{ $category->title }}</a>
                  @php
                  $subcategories = App\Category::find($category->id)->subcategories;
                  @endphp 
                  @if($subcategories->isNotEmpty()) 
                  <ul class="dropdown-menu mega-menu">
                          <li class="yamm-content">
                              <div class="row"> 
                                @foreach ($subcategories as $subcategory)
                                  <div class="col-sm-12 col-md-3">
                                      <h2 class="title">{{ $subcategory->title }}</h2>
                                      <ul class="links list-unstyled">
                                      @php
                                      $sub_subcategories = App\Subcategory::find($subcategory->id)->sub_subcategories;
                                      @endphp    
                                      @foreach ($sub_subcategories as $sub_subcategory)
                                          <li><a href="javascript:void(0)" onclick="showCategoryProduct('{{ $sub_subcategory->id }}')">{{ $sub_subcategory->title }}</a></li>
                                      @endforeach
                                      </ul>
                                    </div>
                                    <!-- /.col -->
                                @endforeach
                                
                              </div>
                            </li>
                        </ul>
                        @endif
                      </li>
              @endforeach
              
              
              
              
            </ul>
            <!-- /.nav --> 
          </nav>
          <!-- /.megamenu-horizontal --> 
        </div>
        <!-- /.side-menu --> 
        <!-- ================================== TOP NAVIGATION : END ================================== -->
        <div class="sidebar-module-container">
          <div class="sidebar-filter"> 
            <!-- ============================================== SIDEBAR CATEGORY ============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <h3 class="section-title">shop by</h3>
              <div class="widget-header">
                {{-- <h4 class="widget-title">Category</h4> --}}
              </div>
              <div class="sidebar-widget-body">
                <div class="accordion">
                  @php
                  $subcategories = App\Subcategory::all();
                  $i=0;
                  @endphp
                  @foreach ($subcategories as $subcategory)
                  <div class="accordion-group">
                    <div class="accordion-heading"> <a href="#{{ $i }}" data-toggle="collapse" class="accordion-toggle collapsed"> {{ $subcategory->title }} </a> </div>
                    <!-- /.accordion-heading -->
                    <div class="accordion-body collapse" id="{{ $i }}" style="height: 0px;">
                      <div class="accordion-inner">
                        <ul>
                          @php
                          $sub_subcategories = App\Subcategory::find($subcategory->id)->sub_subcategories;
                          @endphp
                          @foreach ($sub_subcategories as $sub_subcategory)
                          <li><a href="javascript:void(0)" onclick="showCategoryProduct('{{ $sub_subcategory->id }}')">{{ $sub_subcategory->title }}</a></li>
                          @endforeach
                        </ul>
                      </div>
                      <!-- /.accordion-inner --> 
                    </div>
                    <!-- /.accordion-body --> 
                  </div>
                  <!-- /.accordion-group -->
                  @php
                    $i++;
                  @endphp
                  @endforeach
                  
                  
                  
                </div>
                <!-- /.accordion --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== SIDEBAR CATEGORY : END ============================================== --> 
            
            <!-- ============================================== PRICE SILDER============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <div class="widget-header">
                <h4 class="widget-title">Price Slider</h4>
              </div>
              <div class="sidebar-widget-body m-t-10">
                {{-- <form method="Post" action="{{ route('view.sortbypricerange') }}">
                  {{csrf_field()}} --}}
                <form>
                  <div class="price-range-holder"> <span class="min-max"> <span class="pull-left">$0.00</span> <span class="pull-right">$800.00</span> </span>
                    <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                    <input type="text" name="range" class="price-slider" id="range">
                  </div>
                  <!-- /.price-range-holder --> 
                  <button type="submit" class="lnk btn btn-primary" id="btn-submit">Show Now</button> 
                </form>
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== PRICE SILDER : END ============================================== --> 
            <!-- ============================================== MANUFACTURES============================================== -->
            <div class="sidebar-widget wow fadeInUp">
              <div class="widget-header">
                <h4 class="widget-title">Manufactures</h4>
              </div>
              <div class="sidebar-widget-body">
                <ul class="list">
                  @foreach ($manufacturers as $manufacturer)
                  <li><a href="javascript:void(0)" onclick="showManufacturerProduct('{{ $manufacturer->id }}')">{{ $manufacturer->title }}</a></li>
                  @endforeach
                </ul>
                <!--<a href="#" class="lnk btn btn-primary">Show Now</a>--> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== MANUFACTURES: END ============================================== --> 
            <!-- ============================================== COLOR============================================== -->
            {{-- <div class="sidebar-widget wow fadeInUp">
              <div class="widget-header">
                <h4 class="widget-title">Colors</h4>
              </div>
              <div class="sidebar-widget-body">
                <ul class="list">
                  <li><a href="#">Red</a></li>
                  <li><a href="#">Blue</a></li>
                  <li><a href="#">Yellow</a></li>
                  <li><a href="#">Pink</a></li>
                  <li><a href="#">Brown</a></li>
                  <li><a href="#">Teal</a></li>
                </ul>
              </div>
              <!-- /.sidebar-widget-body --> 
            </div> --}}
            <!-- /.sidebar-widget --> 
            <!-- ============================================== COLOR: END ============================================== --> 
            <!-- ============================================== COMPARE============================================== -->
            <div class="sidebar-widget wow fadeInUp outer-top-vs">
              <h3 class="section-title">Compare products</h3>
              <div class="sidebar-widget-body">
                <div class="compare-report">
                  <p>You have no <span>item(s)</span> to compare</p>
                </div>
                <!-- /.compare-report --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
            <!-- ============================================== COMPARE: END ============================================== --> 
            <!-- ============================================== PRODUCT TAGS ============================================== -->
            <div class="sidebar-widget product-tag wow fadeInUp outer-top-vs">
              <h3 class="section-title">Product tags</h3>
              <div class="sidebar-widget-body outer-top-xs">
                <div class="tag-list"> <a class="item" title="Phone" href="category.html">Phone</a> <a class="item active" title="Vest" href="category.html">Vest</a> <a class="item" title="Smartphone" href="category.html">Smartphone</a> <a class="item" title="Furniture" href="category.html">Furniture</a> <a class="item" title="T-shirt" href="category.html">T-shirt</a> <a class="item" title="Sweatpants" href="category.html">Sweatpants</a> <a class="item" title="Sneaker" href="category.html">Sneaker</a> <a class="item" title="Toys" href="category.html">Toys</a> <a class="item" title="Rose" href="category.html">Rose</a> </div>
                <!-- /.tag-list --> 
              </div>
              <!-- /.sidebar-widget-body --> 
            </div>
            <!-- /.sidebar-widget --> 
          <!----------- Testimonials------------->
            <div class="sidebar-widget  wow fadeInUp outer-top-vs ">
              <div id="advertisement" class="advertisement">
                <div class="item">
                  <div class="avatar"><img src="{{asset('ui/frontend/images/testimonials/member1.png')}}" alt="Image"></div>
                  <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                  <div class="clients_author">John Doe <span>Abc Company</span> </div>
                  <!-- /.container-fluid --> 
                </div>
                <!-- /.item -->
                
                <div class="item">
                  <div class="avatar"><img src="{{asset('ui/frontend/images/testimonials/member3.png')}}" alt="Image"></div>
                  <div class="testimonials"><em>"</em>Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                  <div class="clients_author">Stephen Doe <span>Xperia Designs</span> </div>
                </div>
                <!-- /.item -->
                
                <div class="item">
                  <div class="avatar"><img src="{{asset('ui/frontend/images/testimonials/member2.png')}}" alt="Image"></div>
                  <div class="testimonials"><em>"</em> Vtae sodales aliq uam morbi non sem lacus port mollis. Nunc condime tum metus eud molest sed consectetuer.<em>"</em></div>
                  <div class="clients_author">Saraha Smith <span>Datsun &amp; Co</span> </div>
                  <!-- /.container-fluid --> 
                </div>
                <!-- /.item --> 
                
              </div>
              <!-- /.owl-carousel --> 
            </div>
            
            <!-- ============================================== Testimonials: END ============================================== -->
            
            <div class="home-banner"> <img src="{{asset('ui/frontend/images/banners/LHS-banner.jpg')}}" alt="Image"> </div>
          </div>
          <!-- /.sidebar-filter --> 
        </div>
        <!-- /.sidebar-module-container --> 
      </div>