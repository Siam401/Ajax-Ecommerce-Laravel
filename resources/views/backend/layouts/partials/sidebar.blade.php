<!-- Page Sidebar -->
<div class="page-sidebar">
<a class="logo-box" href="{{ route('view.home') }}"><span>Flipmart</span><i class="icon-radio_button_unchecked" id="fixed-sidebar-toggle-button"></i>
            <i class="icon-close" id="sidebar-toggle-button-close"></i></a>
        <div class="page-sidebar-inner">
            <div class="page-sidebar-menu">
                <ul class="accordion-menu">
                    <li class="active-page">
                    <a href="{{ route('admin.home') }}">
                            <i class="menu-icon icon-home4"></i><span>Dashboard</span>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="email.html">
                            <i class="menu-icon icon-inbox"></i><span>Email</span>
                        </a>
                    </li> --}}
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-cubes"></i><span>Category</span>
                            <i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('categories.create') }}">Create</a></li>
                            <li><a href="{{ route('categories.index') }}">Manage</a></li>      
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-cubes"></i><span>Subcategory</span>
                            <i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('subcategories.create') }}">Create</a></li>
                            <li><a href="{{ route('subcategories.index') }}">Manage</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-cubes"></i><span>Sub subcat</span>
                            <i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('sub_subcategories.create') }}">Create</a></li>
                            <li><a href="{{ route('sub_subcategories.index') }}">Manage</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-industry"></i><span>Menufracturer</span>
                            <i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('manufacturers.create') }}">Create</a></li>
                            <li><a href="{{ route('manufacturers.index') }}">Manage</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon icon-dropbox"></i><span>Product</span>
                            <i class="accordion-icon fa fa-angle-left"></i>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="{{ route('products.create') }}">Create</a></li>
                            <li><a href="{{ route('products.index') }}">Manage</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('manage.order') }}">
                            <i class="menu-icon fa fa-file-archive-o"></i><span>Order</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </div><!-- /Page Sidebar -->