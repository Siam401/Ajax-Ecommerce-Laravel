<?php

namespace App\Http\Controllers;

use App\Category;
use App\Subcategory;
use App\Sub_subcategory;
use Session;
use Response;
use Illuminate\Http\Request;

class Sub_subcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_subcategories=Sub_subcategory::all();

        return view('backend.sub_subcategories.index',compact('sub_subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('backend.sub_subcategories.create',compact('categories'));
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
        Sub_subcategory::create($data);
        Session::flash('message','Created successfully');
        return redirect(route('sub_subcategories.index'));

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
        $sub_subcategory=Sub_subcategory::findOrFail($id);
        $subcategories=Subcategory::where('category_id',$sub_subcategory->category_id)->get();
        return view('backend.sub_subcategories.edit',compact('sub_subcategory','categories','subcategories'));
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
        $sub_subcategory=Sub_subcategory::findOrfail($id);
        $data=$request->all();
        $sub_subcategory->update($data);
        Session::flash('message','Updated successfully');
        return redirect(route('sub_subcategories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sub_subcategory=Sub_subcategory::findOrfail($id);
        $sub_subcategory->delete();
        Session::flash('message','Deleted successfully');
        return redirect(route('sub_subcategories.index'));

    }

    public function findsubcategories($id){
        $subcategories=Subcategory::where('category_id',$id)->get();

        return Response::json($subcategories);
    }
}
