@extends('backend.layouts.master')
@section('css')
    <link href="{{asset('ui/backend/plugins/datatables/css/jquery.datatables.min.css')}}" rel="stylesheet">
    <link href="{{asset('ui/backend/plugins/datatables/css/jquery.datatables_themeroller.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="page-inner">

        <div class="page-title">
            <h3 class="breadcrumb-header">Orders</h3>
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
                                                    <th>SL NO</th>
                                                    <th>Customer Name</th>
                                                    <th>Order Total</th>
                                                    <th>Order Status</th>
                                                    <th>Payment Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>SL NO</th>
                                                    <th>Customer Name</th>
                                                    <th>Order Total</th>
                                                    <th>Order Status</th>
                                                    <th>Payment Type</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @php($i=1)
                                                @foreach($orders as $order)
                                                    <tr>
                                                        <td>{{ $i++ }}</td>
                                                        <td>{{ $order->name }}</td>
                                                        <td>TK. {{ $order->order_total }}</td>
                                                        <?php if($order->status==0){?>
                                                        <td>pending</td>
                                                        <?php }else{ ?>
                                                        <td>Confirm</td>
                                                        <?php } ?>
                                                        <td>{{ $order->payment_type }}</td>
                                                        <td>
                                                            <a href="{{ route('view.order',$order->id) }}" class="btn btn-info btn-sm" title="View Order Details">View</a>
                                                            <a href="{{ route('delete.order',$order->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Want To Delete Permanently?')">Delete</a>
                                                            {{-- <a href="" class="btn btn-danger btn-sm">Invoice</a> --}}
                                
                                                        {{-- @if($order->status == 0)
                                                            <a href="" class="btn btn-warning btn-sm" title="View Order Details">Confirm</a>
                                                        @endif --}}
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