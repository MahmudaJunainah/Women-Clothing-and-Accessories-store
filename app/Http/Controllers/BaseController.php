<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Profile;
use Hash;


use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
    public function index(){
        $products = Product::get();
        $new_products = Product::limit(8)->latest()->get();
        return view('front.index',compact('products','new_products'));
    }

    public function cart(){
        $carts = [];
        if (Auth::user()){
            $user_id = Auth::user()->id;
            $carts = Cart::where('user_id',$user_id)->get();
        }
        return view('front.cart',compact('carts'));
    }

    public function productView(Request $request){
        $id = $request-> id;
        $product = Product::with('ProductDetail')->first();
        return view('front.productView',compact('product'));
    }

    public function login(){
        return view('front.login');
    }

    public function product(){
        $products = Product::get();
        
        
       
        return view('front.product',compact('products'));
    }

    public function register(){
        return view('front.registration');
    }
    public function logincheck(Request $request){
        $data = array(
            'email' => $request -> email,
            'password' => $request -> password,
            

        );
        if(Auth::attempt($data)){
            if(Auth::user()->role == 'admin'){
                return redirect()->route('admin.dashboard');
            }
            else{
                return redirect()->route('index');}

        }
        
        else{
            return back()->withErrors(['message'=>'invalid email or password']);
        }
    }

    public function user_store(Request $request){
        $data = array(
            'name' => $request -> name,
            'email' => $request -> email,
            'password' => Hash::make($request->password),
            'role' => 'user'

        );
        $user = User::create($data);
        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function cash_order(){
        $user = Auth::user();
        $userid = $user->id;
        
        $data=Cart::where('user_id','=',$userid)->get();
        
        
        foreach($data as $data)
        {
            $order = new order;
            $order -> user_id=$data->user_id;
            $order -> product_id=$data->product_id;
            $order -> quantity=$data->quantity;
            $order -> payment_status='cash on delivery';
            $order -> delivery_status='delivered';
            $name = Auth::user()->name;
            $order -> name=$name;
            $email = Auth::user()->email;
            $order -> email=$email;
           /* $productname = product::where('id','=',$data->product_id)->get('name');
            $order -> product_name=$productname;
            $productimage = product::where('id','=',$data->product_id)->get('image');
            $order -> image=$productimage;*/
            $product=product::find($data->product_id);
            $order->price=$product->price;
            $order->product_name=$product->name;
            $order->image=$product->image;
            $profile = profile::where('user_id','=',$data->user_id)->get('address');
            $order -> address=$profile;
            $profilephone = profile::where('user_id','=',$data->user_id)->get('phone');
            $order -> phone=$profilephone;
            $order -> save();
            $cart_id = $data->id;
            $cart=cart::find($cart_id);
            $cart->delete();
        }
        
        return redirect()->back();
    }

    public function userdashboard(){
        return view ('user.dashboard');
    }
    
    public function show_order(){
        if (Auth::id())
        {
            $user = Auth::user();
            $userid = $user -> id;
            $order = order::where('user_id','=',$userid)->get();
            return view ('front.order',compact('order'));

        }
        else{
            return redirect('login');
        }

    }
}
