<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Category;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ShowController extends Controller
{
    // public function index(Request $request){
      
    //    $category = DB::table('category')->get();
    //    $banners = DB::table('bannner')->get();
    //    $phones = DB::table('phones')->get();
    // //    $phone = Phone::findOrFail($id);
    //    return view('user.home', compact('phones', 'banners', 'category'));
    // }
    public function index(Request $request)
    {
        // Kiểm tra nếu có tham số categoryId trong URL
        if ($request->has('category_id')) {
            // Lấy danh sách sản phẩm trong một danh mục cụ thể
            $categoryId = $request->input('category_id');
            $category = Category::findOrFail($categoryId);
            $products = $category->phones;
            $categorys = DB::table('category')->get();
            $phones = DB::table('phones')->get();
            return view('user.iphone', compact('category', 'products','categorys','phones'));
        } else {
            // Lấy danh sách tất cả sản phẩm
               $categorys = DB::table('category')->get();
               $banners = DB::table('bannner')->get();
               $phones = DB::table('phones')->get();
            //    $phone = Phone::findOrFail($id);
               return view('user.home', compact('phones', 'banners', 'categorys'));
        }
    }
    public function detail(Request $request){
        if ($request->has('id')) {
            // Lấy danh sách sản phẩm trong một danh mục cụ thể
            $phone = $request->input('id');
            $product = Phone::findOrFail($phone);
            $phones = DB::table('phones')->get();
            $categorys = DB::table('category')->get();
            $cartItems = CartItem::where('user_id', auth()->id())->get();


            return view('user.product', compact( 'product','phones','categorys','cartItems'));
        } else {
            // Lấy danh sách tất cả sản phẩm
               $category = DB::table('category')->get();
               $banners = DB::table('bannner')->get();
               $phones = DB::table('phones')->get();
            //    $phone = Phone::findOrFail($id);
               return view('user.home', compact('phones', 'banners', 'category'));
        }
    }

    
}
