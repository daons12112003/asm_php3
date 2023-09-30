<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(){
        $categorys = DB::table('category')->get();
        $cartItems = CartItem::where('user_id', auth()->id())->get();
        
        $sumCart = 0;
        foreach($cartItems as $cart){
            $sumCart += $cart->price * $cart->quantity;
        }
        return view('user.cart', compact('categorys', 'cartItems','sumCart'));
    }
    public function add(Request $request)
    {
          // Kiểm tra xem người dùng đã đăng nhập hay chưa
          if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để thêm sản phẩm vào giỏ hàng.');
        }
        // Lấy thông tin sản phẩm từ yêu cầu POST
        $product_id = $request->input('phone_id');
        // dd($product_id);
        $quantity = $request->input('quantity', 1); // Số lượng mặc định là 1

        // Lấy thông tin sản phẩm từ cơ sở dữ liệu
        $product = Phone::find($product_id);
       
        
        // Lưu thông tin vào giỏ hàng (trong Database)
        CartItem::updateOrCreate([
            'user_id' => auth()->id(), // Nếu bạn muốn theo dõi giỏ hàng của người dùng đã đăng nhập
            'phone_id' => $product_id
        ], [
            'quantity' => DB::raw('quantity + ' . $quantity),
            'image_url' => $product->image,
            'price' => $product->price,
            'name' => $product->name
        ]);
        return redirect()->route('cart_index');
    }

    public function update(Request $request, CartItem $cartItem)
    {
        
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (!auth()->check()) {
            return redirect()->route('login')->with('error', 'Bạn cần đăng nhập để cập nhật số lượng.');
        }

        // Kiểm tra xem người dùng chỉnh sửa số lượng thành giá trị hợp lệ (>= 1)
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        // Cập nhật số lượng sản phẩm trong giỏ hàng
        $cartItem->quantity = $request->input('quantity');
        $cartItem->save();

        return redirect()->route('cart_index')->with('success', 'Đã cập nhật số lượng sản phẩm trong giỏ hàng.');
    }



    public function delete($id) {
        CartItem::where('id',$id)->delete();
        Session::flash('success','Xóa thành công sản phẩm có id là : '.$id);
        return redirect()->route('cart_index');
    }
}
