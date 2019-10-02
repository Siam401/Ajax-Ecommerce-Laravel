@extends('backend.layouts.master')
@section('css')
    <link href="{{asset('ui/backend/plugins/datatables/css/jquery.datatables.min.css')}}" rel="stylesheet">
    <link href="{{asset('ui/backend/plugins/datatables/css/jquery.datatables_themeroller.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="page-inner">

        <div class="page-title">
            <h3 class="breadcrumb-header">Categories</h3>
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
                                                    <th>Title</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Action</th>
                                                </tr>
                                            </tfoot>
                                            <tbody>
                                                @foreach ($categories as $category)
                                                    <tr>
                                                        <td>{{ $category->title }}</td>
                                                        <td>
                                                        <form action="{{ route('categories.destroy',$category->id) }}" method="POST"> 
                                                        @csrf
                                                        <a href="{{ route('categories.edit',$category->id) }}" type="button" class="btn btn-info btn-rounded">Update</a>
                                                        <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit" class="btn btn-danger btn-rounded">Delete</button>
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