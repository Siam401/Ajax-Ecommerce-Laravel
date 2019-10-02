@extends('backend.layouts.master')


@section('content')
<div class="page-inner no-page-title">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-title">
                            Update category
                        </div>    
                        <div class="panel-body">
                            <div class="row">
                                <center>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                    <form class="form-horizontal" action="{{ route('categories.update',$category->id) }}" method="post">
                                    @csrf    
                                            <input name="_method" type="hidden" value="PUT">
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="title" id="inputEmail3" value="{{ $category->title }}">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Fontawsome</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="fontawsome" id="inputEmail3" value="{{ $category->fontawsome }}">
                                                <p class="help-block help-block-p-text"></p>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-success horizontal-form-button">Update</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-md-2"></div>
                                </center>
                            </div>    
                        </div>    
                    </div>    
                </div>
            </div><!-- Row -->
        </div><!-- Main Wrapper -->
    </div><!-- /Page Inner -->

@endsection
