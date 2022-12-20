<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;
class AdminController extends Controller
{
    public function admin_login(){
        return view('admin.login');
    }

    public function makelogin(Request $request){
       $data = array(
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role
       );

       if(Auth::attempt($data)){
            return redirect()->route('admin.dashboard');
       }
       else{
        return back()->withErrors(['message'=>'invalid email or password']);
       }
    }

    public function dashboard(){
        return view ('admin.dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }

    public function order(){
        $order = order::all();
        return view('admin.order',compact('order'));
    }
}
