<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BillsController extends Controller
{
    public function index(Request $request){

        $categorys = DB::table('category')->get();
        $bill = DB::table('bills')->get();
        $cartItems = CartItem::where('user_id', Auth::id())->get();
        $sumCart = 0;
        foreach($cartItems as $cart){
            $sumCart += $cart->price * $cart->quantity;
        }
        
        return view('order.bills', compact('bill','categorys','cartItems','sumCart'));
    }
}
