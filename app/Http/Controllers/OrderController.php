<?php

namespace App\Http\Controllers;

use App\Shipping;
use App\Order;
use App\Payment;
use App\Order_detail;
use App\Product;
use App\Customer;
use Session;
use DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request){

        if(!session('cart')) {
            return redirect(route('view.home'));
        }

        request()->validate([
            'name' => 'required|min:2|max:50',
            'address' => 'required',            
            'email' => 'required|email|',
            'phone' => 'required|numeric', 
        ], [
            'name.required' => 'Name is required',
            'name.min' => 'Name must be at least 2 characters.',
            'name.max' => 'Name should not be greater than 50 characters.',
        ]);

        $paymentType = $request->payment_type;
        // dd($request->all());
        if($paymentType == 'Cash') {
            $shipping = new Shipping();
            $shipping->shipping_name = $request->name;
            $shipping->shipping_address = $request->address;
            $shipping->shipping_email = $request->email;
            $shipping->shipping_customer_no = $request->phone;
            $shipping->save();
            Session::put('shipping_id', $shipping->id);


            $total = 0;
            if(session('cart')){
                foreach(session('cart') as $id => $details){
                    $total += $details['price'] * $details['quantity'];
                }
            }
            $order = new Order();
            $order->customer_id = Session::get('customer_id');
            $order->shipping_id = Session::get('shipping_id');
            $order->order_total = $total;
            $order->save();

            $payment = new Payment();
            $payment->order_id = $order->id;
            $payment->payment_type = $paymentType;
            $payment->save();


            if(session('cart')){
                foreach(session('cart') as $id => $details){
                    $orderDetail = new Order_detail();
                    $orderDetail->order_id = $order->id;
                    $orderDetail->product_id = $id;
                    $orderDetail->title = $details['name'];
                    $orderDetail->picture = $details['photo'];
                    $orderDetail->price = $details['price'];
                    $orderDetail->quantity	= $details['quantity'];
                    $orderDetail->save();
                    $product=Product::findOrFail($id);
                    $product->quantity=$product->quantity-$details['quantity'];
                    DB::table('products')
                        ->where('id', $id)
                        ->update(['quantity' => $product->quantity]);
                }
            }


            Session::forget('cart');

            return redirect(route('view.home'));

        } else if ($paymentType == 'Paypal') {
            return 'In Paypal Method';
        } else if ($paymentType == 'Bkash') {
            return 'In Bkash Method';
        }
    }




    public function manageOrder(){
        $orders = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->join('payments', 'orders.id', '=', 'payments.order_id')
            ->select('orders.*', 'customers.name', 'payments.payment_type', 'payments.status')
            ->get();
        return view('backend.orders.index',compact('orders'));
    }

    public function viewOrderDetail($id){
        $order = Order::findOrFail($id);
        $customer = Customer::findOrFail($order->customer_id);
        $shipping = Shipping::findOrFail($order->shipping_id);
        $payment = Payment::where('order_id', $order->id)->first();
        $products = Order_detail::where('order_id', $order->id)->get();

        return view('backend.orders.view', [
            'order' => $order,
            'customer' => $customer,
            'shipping' => $shipping,
            'payment' => $payment,
            'products' => $products
        ]);
    }

    public function deleteOrder($id) {
        $order = Order::findOrFail($id);
        $shipping = Shipping::findOrFail($order->shipping_id);
        $payment = Payment::where('order_id', $order->id)->first();

        DB::table('order_details')->where('order_id', $order->id)->delete();
        $payment->delete();
        $order->delete();
        $shipping->delete();

        return redirect()->back();
    }
}
