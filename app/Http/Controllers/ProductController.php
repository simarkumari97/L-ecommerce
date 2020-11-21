<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
 
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    function product(Request $request){
        $products= Product::all();
        return view('product',['product'=>$products]);
    }
    function detail($id){
        $products= Product::find($id);
        return view('detail',['product'=>$products]);
    }
    function search(Request $req){
        
        $products=Product::where('name','like','%'.$req->input('search').'%')->get();
        return view('search',['product'=>$products]);
        
    }

    function cart(Request $request){
        if($request->session()->has('user')){
            $cart=new Cart;
            $cart->user_id=$request->session()->get('user')['id'];
            $cart->product_id=$request->product_id;
            $cart->save();
            return redirect('/');

        }else{
            return redirect('/login');
        }
    }
    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    function view_cart(){
        $userId=Session::get('user')['id'];

        if(Cart::all()->count()==0){
            return redirect('/');
        }

        $products=DB::table('carts')->join('products' , 'carts.product_id', '=' ,'products.id')
        ->where('carts.user_id',$userId)
        ->select('products.*','carts.id as cart_id')
        ->get();

        $total=DB::table('carts')
        ->join('products' , 'carts.product_id', '=' ,'products.id')
        ->where('carts.user_id',$userId)
        ->sum('products.price');

        return view('view_cart',['product'=>$products,'total'=>$total]);

        
    }

    function removecart($id){
        Cart::destroy($id);
        return redirect('/view_cart');
    }

    function ordernow(){
        $userId=Session::get('user')['id'];
        $total=DB::table('carts')
        ->join('products' , 'carts.product_id', '=' ,'products.id')
        ->where('carts.user_id',$userId)
        ->sum('products.price');
        return view('ordernow',['total'=>$total]);
    }

    function orderplace(Request $req){
        $userId=Session::get('user')['id'];
        $cartList=Cart::where('user_id',$userId)->get();
        foreach($cartList as $cart){
            $order=new Order();
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$req->address;
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->payment_status="pending";
            $order->save();
            Cart::where('user_id',$userId)->delete();    
        }
        return redirect('/');
    }

    function myorder(){
        $userId=Session::get('user')['id'];
        $product=DB::table('orders')
        ->join('products' , 'orders.product_id', '=' ,'products.id')
        ->where('orders.user_id',$userId)
        ->get();
        return view('myorder',['product'=>$product]);
    }

}
