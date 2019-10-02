@extends('backend.layouts.master')


@section('content')
<div class="page-inner no-page-title">
        <div id="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-white">
                        <div class="panel-title">
                            Create Product
                        </div>    
                        <div class="panel-body">
                            <div class="row">
                                <center>
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                    <form class="form-horizontal" action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                                    @csrf    
                                    @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Category</label>
                                                <div class="col-sm-10">
                                                 <select class="form-control form-select-options" name="category_id" id="category">
                                                    <option></option>
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                                    @endforeach
                                                 </select>
                                                </div>
                                            </div>
                                            <div class="form-group" id="subcategory_div" style="display:none">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Subcategory</label>
                                                <div class="col-sm-10">
                                                 <select class="form-control form-select-options" id="subcategory_options" name="subcategory_id">
                                                    <option></option>
                                                 </select>
                                                </div>
                                            </div>
                                            <div class="form-group" id="sub_subcategory_div" style="display:none">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Sub_subcat</label>
                                                <div class="col-sm-10">
                                                 <select class="form-control form-select-options" id="sub_subcategory_options" name="sub_subcategory_id">
                                                    <option></option>
                                                 </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                    <label for="inputEmail3" class="col-sm-2 control-label">Manufacturer</label>
                                                    <div class="col-sm-10">
                                                     <select class="form-control form-select-options" name="manufacturer_id">
                                                        <option></option>
                                                        @foreach ($manufacturers as $manufacturers)
                                                            <option value="{{ $manufacturers->id }}">{{ $manufacturers->title }}</option>
                                                        @endforeach
                                                     </select>
                                                    </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Title</label>
                                                <div class="col-sm-10">
                                                <input type="text" class="form-control" name="title" id="inputEmail3" placeholder="Enter Product Title ....">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Description</label>
                                                <div class="col-sm-10">
                                                <textarea type="text" class="form-control" name="description" id="inputEmail3" placeholder="Enter Product Description ...."></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Picture1</label>
                                                <div class="col-sm-10">
                                                <input type="file" class="form-control" name="picture1" id="picture1" placeholder="Enter Product Image ....">
                                                </div>
                                            </div>
                                            <div class="form-group" id="picture2_div" style="display:none">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Picture2</label>
                                                <div class="col-sm-10">
                                                <input type="file" class="form-control" name="picture2" id="picture2" placeholder="Enter Product Image ....">
                                                </div>
                                            </div>
                                            <div class="form-group" id="picture3_div" style="display:none">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Picture3</label>
                                                <div class="col-sm-10">
                                                <input type="file" class="form-control" name="picture3" id="picture3">
                                                </div>
                                            </div>
                                            <div class="form-group" id="picture4_div" style="display:none">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Picture4</label>
                                                <div class="col-sm-10">
                                                <input type="file" class="form-control" name="picture4" id="picture4">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Price</label>
                                                <div class="col-sm-10">
                                                <input type="number" class="form-control" min="1" name="price" id="inputEmail3" placeholder="Enter Product Price ....">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Discount</label>
                                                <div class="col-sm-10">
                                                <input type="number" class="form-control" min="1" name="discount" id="inputEmail3" placeholder="Enter Product Discount ....">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Final Price</label>
                                                <div class="col-sm-10">
                                                <input type="number" class="form-control" min="1" name="finalprice" id="inputEmail3" placeholder="Enter Product Final Price ....">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputEmail3" class="col-sm-2 control-label">Quantity</label>
                                                <div class="col-sm-10">
                                                <input type="number" class="form-control" min="1" name="quantity" id="inputEmail3" placeholder="Enter Product Quantity ....">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-success horizontal-form-button">Create</button>
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

@section('script')

<script>
    $("#category").change(function(){
        var id=$(this).val();
        $.ajax({
            url: "{{ url('find/product/subcategories') }}" + '/' + id,
            method: 'GET',
            success: function(data) {
                if (data && data.length){
                    $('#subcategory_div').show();
                    $('#subcategory_options').empty();
                    for(i=0;i<data.length;i++){
                        var id=data[i].id;
                        var title=data[i].title;

                        var titles='<option value="'+id+'">'+title+'</option>';

                        $("#subcategory_options").append(titles);
                    }
                }else{
                    $('#subcategory_div').hide();
                }
            }
        });
    });

    $("#subcategory_options").change(function(){
        var id=$(this).val();
        $.ajax({
            url: "{{ url('find/product/sub_subcategories') }}" + '/' + id,
            method: 'GET',
            success: function(data) {
                if (data && data.length){
                    $('#sub_subcategory_div').show();
                    $('#sub_subcategory_options').empty();
                    for(i=0;i<data.length;i++){
                        var id=data[i].id;
                        var title=data[i].title;

                        var titles='<option value="'+id+'">'+title+'</option>';

                        $("#sub_subcategory_options").append(titles);
                    }
                }else{
                    $('#sub_subcategory_div').hide();
                }
            },
            error : function (data) {

            alert('Ghorer Dim');
            }
        });
    });
     
     
       

        $("#picture1").change(function(){
            $('#picture2_div').show();
        });
        $("#picture2").change(function(){
            $('#picture3_div').show();
        });
        $("#picture3").change(function(){
            $('#picture4_div').show();
        });
</script>

@endsection