<?php
/**
 * Created by PhpStorm.
 * User: Donneh de beest
 * Date: 12-3-2018
 * Time: 14:59
 */

namespace App\Http\Controllers;

 use \App\Product;
 use \App\Cart;
 use \App\Order;

 use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\Session;


 class ShoppingCartController extends Controller
{

     public function index()
     {
         return view('shoppingcart');
     }
    public function getAddToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart',$cart);
//        dd($request->session()->get('cart'));
        return redirect()->route('home');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        return view('shoppingcart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout(){
        if (!Session::has('cart')) {
            return view('shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request){
        if (!Session::has('cart')) {
            return redirect()->route('shoppingcart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        try{
            $order = new Order();
            $order->cart = serialize($cart);
            $order->address = $request->input('address');
            $order->city = $request->input('city');
            $order->country = $request->input('country');
            $order->name = $request->input('name');

            Auth::user()->orders()->save($order);
        }catch (\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }

        Session::forget('cart');
        return redirect()->route('home')->with('success', 'Succesfully purchased products!');
    }


}