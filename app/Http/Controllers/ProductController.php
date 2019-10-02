<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Subcategory;
use App\Manufacturer;
use App\Sub_subcategory;
use Session;
use Response;
use Image;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    const UPLOAD_DIR = '/uploads/products/';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        // dd($products);
        return view('backend.products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $manufacturers=Manufacturer::all();
        return view('backend.products.create',compact('categories','manufacturers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=$request->except('_token');
        // dd($data);
        request()->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'sub_subcategory_id' => 'required',
            'manufacturer_id' => 'required',
            'picture1' => 'required',
        ]);
        if($request->hasFile('picture1')){
            $data['picture1'] = $this->uploadImage($request->picture1);
        }
        if($request->hasFile('picture2')){
            $data['picture2'] = $this->uploadImage($request->picture2);
        }
        if($request->hasFile('picture3')){
            $data['picture3'] = $this->uploadImage($request->picture3);
        }
        if($request->hasFile('picture4')){
            $data['picture4'] = $this->uploadImage($request->picture4);
        }
        // dd($data);
        Product::create($data);
        Session::flash('message','Created successfully');
        return redirect(route('products.index'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        $categories=Category::all();
        $product=Product::findOrFail($id);
        $manufacturers=Manufacturer::all();
        $subcategories=Subcategory::where('category_id',$product->category_id)->get();
        $sub_subcategories=Sub_subcategory::where('subcategory_id',$product->subcategory_id)->get();
        return view('backend.products.edit',compact('product','manufacturers','categories','subcategories','sub_subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Product=Product::findOrfail($id);
        $data=$request->all();
        request()->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'sub_subcategory_id' => 'required',
            'manufacturer_id' => 'required',
        ]);
        if($request->hasFile('picture1')){
            $data['picture1'] = $this->uploadImage($request->picture1);
        }
        if($request->hasFile('picture2')){
            $data['picture2'] = $this->uploadImage($request->picture2);
        }
        if($request->hasFile('picture3')){
            $data['picture3'] = $this->uploadImage($request->picture3);
        }
        if($request->hasFile('picture4')){
            $data['picture4'] = $this->uploadImage($request->picture4);
        }
        $Product->update($data);
        Session::flash('message','Updated successfully');
        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrfail($id);
        $this->unlink($product->picture1);
        $this->unlink($product->picture2);
        $this->unlink($product->picture3);
        $this->unlink($product->picture4);
        $product->delete();
        Session::flash('message','Deleted successfully');
        return redirect(route('products.index'));

    }

    public function findsubcategories($id){
        $subcategories=Subcategory::where('category_id',$id)->get();

        return Response::json($subcategories);
    }

    public function findsubsubcategories($id){
        $subsubcategories=Sub_subcategory::where('subcategory_id',$id)->get();

        return Response::json($subsubcategories);
    }

    private function uploadImage($file)
    {
        $random= rand(1,100);
        $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());//formatting the name for unique and readable
        $file_name =  $timestamp.'_'.$random.'.'.$file->getClientOriginalExtension();
        Image::make($file)->resize(300, 300)->save(public_path() . self::UPLOAD_DIR . $file_name);
        return $file_name;
    }

    private function unlink($file)
    {
        if ($file != '' && file_exists(public_path() . self::UPLOAD_DIR . $file)) {
            @unlink(public_path() . self::UPLOAD_DIR . $file);
        }
    }
}
