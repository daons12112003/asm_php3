<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $user = DB::table('users')->get();
        return view('login.index', compact('user'));
    }
    public function update(Request $request, $id){
        $users = User::find($id);
        if($request->post()){
            $result = User::where('id',$id)
            ->update($request->except('_token'));
            if($result){
                Session::flash('success', 'Sửa thành công');
                 return redirect()->route('user_update',['id'=>$id]);
            }
        }

        return view('login.update', compact('users'));
       
    }
    public function delete($id) {
        User::where('id',$id)->delete();
        Session::flash('success','Xóa thành công người dùng có id là : '.$id);
        return redirect()->route('user_index');
    }
}
