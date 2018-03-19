<?php
/**
 * Created by PhpStorm.
 * User: Donneh de beest
 * Date: 19-3-2018
 * Time: 14:50
 */


namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function index()
    {
        //
    }
    public function getProfile(){
        $orders = Auth::user()->orders;
        $orders->transform(function ($order,$key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('auth.profile', ['orders'=> $orders]);
    }

}