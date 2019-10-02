@extends('backend.layouts.master')
@section('css')
    <link href="{{asset('ui/backend/plugins/datatables/css/jquery.datatables.min.css')}}" rel="stylesheet">
    <link href="{{asset('ui/backend/plugins/datatables/css/jquery.datatables_themeroller.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="page-inner">

        <div class="page-title">
            <h3 class="breadcrumb-header">Products</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-body">
                            @if(Session::has('message'))
                            <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                            @endif
                            <div class="table-responsive">
                                    <table id="example" class="display table table-data-width">
                                            <thead>
                                                <tr>
                                                    <th>Category</th>
                                                    <th>Subcategory</th>
                                                    <th>Sub_subcat</th>
                                                    <th>Manufact</th>
                                                    <th>Title</th>
                                                    <th>Description</th>
                                                    <th>Picture</th>
                                                    <th>Price</th>
                                                    <th>Discount</th>
                                                    <th>Finalprice</th>
                                                    <th>Quantity</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                        <th>Category</th>
                                                        <th>Subcategory</th>
                                                        <th>Sub_subcat</th>
                                                        <th>Manufact</th>
                                                        <th>Title</th>
                                                        <th>Description</th>
                                                        <th>Picture</th>
                                                        <th>Price</th>
                                                        <th>Discount</th>
                                                        <th>Finalprice</th>
                                                        <th>Quantity</th>
                                                        <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach ($products as $product)
                                                    <tr>
                                                        <td>{{ $product->category->title }}</td>
                                                        <td>{{ $product->subcategory->title }}</td>
                                                        <td>{{ $product->sub_subcategory->title }}</td>
                                                        <td>{{ $product->manufacturer->title }}</td>
                                                        <td>{{ $product->title }}</td>
                                                        <td>{{ str_limit($product->description, 40) }}</td>
                                                        <td>
                                                            <img class="img-responsive" alt="" src="{{asset('uploads/products/'.$product->picture1)}}" />
                                                        </td>
                                                        <td>{{ $product->price }}</td>
                                                        <td>{{ $product->discount }}</td>
                                                        <td>{{ $product->finalprice }}</td>
                                                        <td>{{ $product->quantity }}</td>
                                                        <td>
                                                        <form action="{{ route('products.destroy',$product->id) }}" method="POST"> 
                                                        @csrf
                                                        <a href="{{ route('products.edit',$product->id) }}" type="button" class="btn btn-info btn-rounded"><i class="menu-icon fa fa-pencil"></i><span></a>
                                                        <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit" class="btn btn-danger btn-rounded"><i class="menu-icon fa fa-trash"></i></button>
                                                        </form>    
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                           </table>  
                                           </table>  
                            </div>    
                        </div>    
                    </div>    
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->

        
    </div><!-- /Page Inner -->

@endsection

@section('script')
<script src="{{asset('ui/backend/plugins/datatables/js/jquery.datatables.min.js')}}"></script>    
<script src="{{asset('ui/backend/js/pages/table-data.js')}}"></script>    
@endsection