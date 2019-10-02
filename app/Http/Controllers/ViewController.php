<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Subcategory;
use App\Manufacturer;
use App\Customer;
use Response;
use Illuminate\Http\Request;
use DB;
use Session;

class ViewController extends Controller
{
    public function index(){
        $categories=Category::all();
        $products=Product::all();
        $manufacturers=Manufacturer::all();
        // dd($products);

        return view('frontend.home',compact('categories','manufacturers','products'));
    }

    public function allproducts(){
        $products=Product::all();
        return Response::json($products);
    }

    public function searchproducts(Request $request){
        $search=ucfirst($request->search);
        $manufacturers=Manufacturer::all();
        $categories=Category::all();

        $products = Product::latest()->where('title', 'Like', "%{$search}%")->get();

        // dd(count($products));
        // $product=Product::where('title', '=', $search)->first();
        // $products=Product::latest()->where('title', 'Like', "%{$search}%");
        if(count($products)==1){
            return redirect(route('view.product',$products[0]->id));
        }
        return view('frontend.searchproduct',compact('products','categories','manufacturers'));
    }

    public function sub_subcategoryproduct($id){

        $products=Product::where('sub_subcategory_id',$id)->get();
        
        // dd($products);
        
        // return view('frontend.categoryproduct',compact('categories','manufacturers','products'));
        
        return Response::json($products);
    }
    
    public function manufacturerproduct($id){
        $products=Product::where('manufacturer_id',$id)->get();
        // dd($products);
        return Response::json($products);
    }

    public function sortbypricerange(Request $request){
        $categories=Category::all();
        $manufacturers=Manufacturer::all();
        $range=explode(',',$request->range);
        $start=$range[0];
        $end=$range[1];
        $products = DB::table('products')->whereBetween('finalprice', [$start, $end])->get();
        // dd($products);
        // return view('frontend.categoryproduct',compact('categories','manufacturers','products'));
        return Response::json($products);
    }

    public function sortbypricelow(){
        $products=Product::orderBy('price','asc')->get();
        // dd($products);
        return Response::json($products);
    }

    public function sortbypricehigh(){
        $products=Product::orderBy('price','desc')->get();
        // dd($products);
        return Response::json($products);
    }

    public function sortbyname(){
        $categories=Category::all();
        $products=Product::orderBy('title')->get();
        $manufacturers=Manufacturer::all();
        // dd($products);
        return Response::json($products);
    }

    public function addtocart($id){
        $product = Product::findOrFail($id);
        // $data['title']=$product->title;
        // $count_cart_items=count(session('cart'));
        // dd($data);

        if($product->quantity>=1){
            $product->quantity=$product->quantity-1;
            DB::table('products')->where('id', $id)->update(['quantity' => $product->quantity]);
            if(!$product) {
                abort(404);
            }
    
            $cart = session()->get('cart');
    
            // if cart is empty then this the first product
            if(!$cart) {
                
                $cart = [
                        $id => [
                            "name" => $product->title,
                            "quantity" => 1,
                            "price" => $product->finalprice,
                            "photo" => $product->picture1
                        ]
                ];
    
                session()->put('cart', $cart);
    
                // return redirect()->back()->with('success', 'Product added to cart successfully!');
                return Response::json(session('cart'));
            }
    
            // if cart not empty then check if this product exist then increment quantity
            if(isset($cart[$id])) {
    
                $cart[$id]['quantity']++;
    
                session()->put('cart', $cart);
                
                // return redirect()->back()->with('success', 'Product added to cart successfully!');
                return Response::json(session('cart'));
    
            }
    
            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                "name" => $product->title,
                "quantity" => 1,
                "price" => $product->finalprice,
                "photo" => $product->picture1
            ];
    
            session()->put('cart', $cart);
            
            return Response::json(session('cart'));
            // return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
    }

    public function addtocartwithquantity(Request $request){
        $id = $request->id;
        $quantity = $request->quantity;
        // dd($quantity);
        $product = Product::findOrFail($id);

        // $data['title']=$product->title;
        // $count_cart_items=count(session('cart'));
        // dd($product);
        if($product->quantity>=$quantity){
            $product->quantity=$product->quantity-$quantity;
            DB::table('products')->where('id', $id)->update(['quantity' => $product->quantity]);
            if(!$product) {
                abort(404);
            }
            $cart = session()->get('cart');
            // if cart is empty then this the first product
            if(!$cart) {
                $cart = [
                        $id => [
                            "name" => $product->title,
                            "quantity" => $quantity,
                            "price" => $product->finalprice,
                            "photo" => $product->picture1
                        ]
                ];
                session()->put('cart', $cart);
                // return redirect()->back()->with('success', 'Product added to cart successfully!');
                return Response::json(session('cart'));
            }
            // if cart not empty then check if this product exist then increment quantity
            if(isset($cart[$id])) {
                $cart[$id]["quantity"]=$cart[$id]['quantity']+$quantity;
                session()->put('cart', $cart);       
                // return redirect()->back()->with('success', 'Product added to cart successfully!');
                return Response::json(session('cart'));
            }
            // if item not exist in cart then add to cart with quantity = 1
            $cart[$id] = [
                "name" => $product->title,
                "quantity" => $quantity,
                "price" => $product->finalprice,
                "photo" => $product->picture1
            ];
            session()->put('cart', $cart);

            
            return Response::json(session('cart'));
            // return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
        
    }

    public function cartupdate(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;
        $product = Product::findOrFail($id);
        $cart = session()->get('cart');
        $product_quantity=$cart[$id]['quantity']+$product->quantity;
        if($product_quantity>=$quantity){
            if($request->id and $request->quantity)
            {
                $product->quantity=$product_quantity-$quantity;
                DB::table('products')->where('id', $id)->update(['quantity' => $product->quantity]);
                $cart[$request->id]["quantity"] = $request->quantity;
                session()->put('cart', $cart);
                return Response::json(session('cart'));

            }
        }    
    }
 
    public function remove(Request $request)
    {
        

        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                $product = Product::findOrFail($request->id);
                $product->quantity=$product->quantity+$cart[$request->id]['quantity'];
                DB::table('products')->where('id', $request->id)->update(['quantity' => $product->quantity]);

                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            // session()->flash('success', 'Product removed successfully');
        }
        return Response::json(session('cart'));
    }

    public function viewproduct($id){
        $manufacturers=Manufacturer::all();
        $categories=Category::all();
        $product=Product::findOrFail($id);

        $related_products=Product::where('sub_subcategory_id',$product->sub_subcategory_id)->get();
        // dd($related);
        

        return view('frontend.product_details',compact('product','categories','manufacturers','related_products'));
    }

    public function categoryproduct($id){
        $manufacturers=Manufacturer::all();
        $categories=Category::all();
        $products=Product::where('sub_subcategory_id',$id)->get();

        // dd($products);

        return view('frontend.categoryproduct',compact('products','categories','manufacturers'));
    }



    public function loginview(){
        $categories=Category::all();

        return view('frontend.login_register',compact('categories'));
    }
    
    public function login(Request $request){
        $manufacturers=Manufacturer::all();
        $categories=Category::all();
        $products=Product::all();

        request()->validate([           
            'email' => 'required|email',
            'password' => 'required',                
        ]);

        $data=$request->except('_token');
        $email=$data['email'];
        $password=md5($data['password']);
        $result=DB::table('customers')->where('email',$email)->where('password',$password)->first();
        if($result==NULL){
            return redirect()->back()->withErrors(['error' => 'Wrong username or password',]);
        }else{
            $customer_name=$result->name;
            $customer_id=$result->id;
            if($result!=null){
                session()->put('customer_id',$customer_id);
                session()->put('customer_name',$customer_name);
            }
            $categories=Category::all();

            return view('frontend.home',compact('manufacturers','categories','products'))->with('success', 'Successfully Login.');
        }
        
    }
    
    public function register(Request $request){
        $manufacturers=Manufacturer::all();
        $categories=Category::all();
        $products=Product::all();

        request()->validate([
            'name' => 'required|min:2|max:50',
            'mobile_no' => 'required|numeric',            
            'email' => 'required|email|unique:customers',
            'password' => 'required|min:6',                
            'confirm_password' => 'required|min:6|max:20|same:password',
        ], [
            'name.required' => 'Name is required',
            'name.min' => 'Name must be at least 2 characters.',
            'name.max' => 'Name should not be greater than 50 characters.',
        ]);

        $data=$request->except('_token','confirm_password');
        $data['password'] = md5(request()->password);
        $customer_name=$request->name;
        $customer_id=DB::table('customers')->insertGetId($data);
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$customer_name);


        return view('frontend.home',compact('manufacturers','categories','products'))->with('success', 'User created successfully.');
        // return view('frontend.login_register',compact('categories'))->with('success', 'User created successfully.');
    }

    public function logout_customer()
    {
        Session::forget('customer_id');
        Session::forget('customer_name');
        return redirect(route('view.home'));
    }
    
    
    public function viewcart()
    {
        $categories=Category::all();
        
        return view('frontend.cart',compact('categories'));
    }
   
    public function viewcheckout()
    {
        $customer_id=session('customer_id');
        $categories=Category::all();
        $customer=Customer::findOrFail($customer_id);
        return view('frontend.checkout',compact('categories','customer'));
    }

    


}
