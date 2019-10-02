@extends('backend.layouts.master')
@section('css')
    <link href="{{asset('ui/backend/plugins/datatables/css/jquery.datatables.min.css')}}" rel="stylesheet">
    <link href="{{asset('ui/backend/plugins/datatables/css/jquery.datatables_themeroller.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="page-inner">

        <div class="page-title">
            <h3 class="breadcrumb-header">Order Details</h3>
        </div>
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-title">
                            <h4 class="text-center text-info">Payment Info For This Order</h4>
                        </div>
                        <div class="panel-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Payment Type</th>
                                        <td>{{ $payment->payment_type }}</td>
                                    </tr>
                                    <tr>
                                        <th>Payment Status</th>
                                        <?php if($payment->status==0){?>
                                        <td>pending</td>
                                        <?php }else{?>
                                        <td>Confirm</td>
                                        <?php }?>
                                    </tr>
                                </table>
                                <br>
                                <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-title">
                            <h4 class="text-center text-info">Customer Info For This Order</h4>
                        </div>
                        <div class="panel-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Customer Name</th>
                                    <td>{{ $customer->name }}</td>
                                </tr>
                                <tr>
                                    <th>Email Address</th>
                                    <td>{{ $customer->email }}</td>
                                </tr>
                                <tr>
                                    <th>Phone Number</th>
                                    <td>{{ $customer->mobile_no }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-title">
                            <h4 class="text-center text-info">Shipping Info For This Order</h4>
                        </div>
                        <div class="panel-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Full Name</th>
                                        <td>{{ $shipping->shipping_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Email Address</th>
                                        <td>{{ $shipping->shipping_email }}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone Number</th>
                                        <td>{{ $shipping->shipping_customer_no }}</td>
                                    </tr>
                                    <tr>
                                        <th>Address</th>
                                        <td>{{ $shipping->shipping_address }}</td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="panel panel-white">
                        <div class="panel-title">
                            <h4 class="text-center text-info">Order Info For This Order</h4>
                        </div>
                        <div class="panel-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Order Id</th>
                                        <td>{{ $order->id }}</td>
                                    </tr>
                                    <tr>
                                        <th>Order Total</th>
                                        <td>TK. {{ $order->order_total }}</td>
                                    </tr>
                                    <tr>
                                        <th>Order Status</th>
                                        <?php if($order->status==0){?>
                                        <td>pending</td>
                                        <?php }else{?>
                                        <td>Confirm</td>
                                        <?php }?>
                                    </tr>
                                    <tr>
                                        <th>Order Date</th>
                                        <td>{{ $order->created_at }}</td>
                                    </tr>
                                </table>
                        </div>
                    </div>
                </div>
            </div><!-- Row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-title">
                            <h4 class="text-center text-info">Product Info For This Order</h4>
                        </div>
                        <div class="panel-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Product Quantity</th>
                                        <th>Total Price</th>
                                    </tr>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{ $product->title }}</td>
                                            <td>{{ $product->price }}</td>
                                            <td>{{ $product->quantity }}</td>
                                            <td>{{ $product->price*$product->quantity }}</td>
                                        </tr>
                                    @endforeach
                                </table>
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