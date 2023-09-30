<?php

namespace App\Http\Controllers;

use App\Models\Bannner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class BannerController extends Controller
{
    public function index(Request $request){
        $banner = DB::table('bannner')->get();
        return view('admin/banner.index', compact('banner'));
    }
    public function add(Request $request){
        if($request->post()){
            $params = $request->except('_token')   ;
            if($request->hasFile('image')&& $request->file('image')->isValid()){
               $params['image']= uploadFile('hinh',$request->file('image'));
            }
           $banner = Bannner::create($params);
           if($banner->id){
               Session::flash('success', 'Thêm mới thành công ');
               return redirect()->route('route_banner_add');
           }
           }
           return view('admin/banner.add');
    }
    public function delete($id) {
        Bannner::where('id',$id)->delete();
        Session::flash('success','Xóa thành công sản phẩm có id là : '.$id);
        return redirect()->route('route_banner');
    }
}
