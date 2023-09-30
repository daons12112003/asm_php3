<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
  
    public function login(Request $request){
        $categorys = DB::table('category')->get();
        if($request->post()){
            if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password])){
                // Đăng nhập thành công
                $user = Auth::user();
                $role = auth()->user()->role;
                $request->session()->put('user', $user);
                if($role == 0){
                    return redirect()->route('home');
                }
                else{
                    return redirect()->route('route_phone');
                }
                
            }else{
                $categorys = DB::table('category')->whereNull('deleted_at')->get();

                // đăng nhập không thành công
                Session::flash('errors', 'Sai mật khẩu hoặc email');
                return redirect()->route('login');
            }
        }
        return view('login.login', compact('categorys'));
    }
    public function register(LoginRequest $request){
        $categorys = DB::table('category')->get();
        // $register = Register::find($id);
        if($request->isMethod('POST')){
            
            // Lấy toàn bộ dữ liệu trong form đăng ký mà chúng ta gửi lên
            $params = $request->except('_token');
            // Mã hóa mật khẩu người dùng cung cấp
            $params['password'] = Hash::make($request->password);
            // tạo bản ghi đăng ký
            $register = User::create($params);
            if($register){
                Session::flash('success', 'Đăng ký thành công');
                return redirect()->route('register');
            }
        }
        return view('login.register', compact('categorys'));
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
   
}
