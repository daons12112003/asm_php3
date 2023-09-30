<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhoneRequest;
use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;

class PhoneController extends Controller
{
    // public function index(Request $request){
    //     // dd(123);
    //     $phones = DB::table('phones')->get();
    //     return view('admin/phone.index', compact('phones'));
    // }
    public function index(Request $request){
        $categorys = DB::table('category')
        ->whereNull('deleted_at')->get();
        $phones = DB::table('phones')->get();
        return view('admin/phone.index', compact('phones', 'categorys'));
    }
    public function add(PhoneRequest $request){
        $categorys = DB::table('category')->whereNull('deleted_at')->get();
        if($request->post()){
            $params = $request->except('_token')   ;
            if($request->hasFile('image')&& $request->file('image')->isValid()){
               $params['image']= uploadFile('hinh',$request->file('image'));
            }
           $phone = Phone::create($params);
           if($phone->id){
               Session::flash('success', 'Thêm mới thành công ');
               return redirect()->route('route_phone_add');
           }
           }
           return view('admin/phone.add', compact('categorys'));
        }
        public function edit(PhoneRequest $request, $id){
            $categorys = DB::table('category')->whereNull('deleted_at')->get();
            $phone = Phone::find($id);
            if($request->post()){
                $params = $request->except('_token');
                if($request->hasFile('image') && $request->file('image')->isValid()){
                    $resultDL = Storage::delete('/public/'.$phone->image);
                    if($resultDL){
                        $params['image']= uploadFile('hinh',$request->file('image'));                }
                }else{
                    $params['image'] = $phone->image;
                }
               $result = Phone::where('id',$id)
                ->update($params);
                if($result){
                    Session::flash('success', 'Sửa thành công');
                     return redirect()->route('route_phone_edit',['id'=>$id]);
                }
            }
           
          return view('admin/phone.edit', compact('phone','categorys'));
        }
        public function delete($id) {
            Phone::where('id',$id)->delete();
            Session::flash('success','Xóa thành công sản phẩm có id là : '.$id);
            return redirect()->route('route_phone');
        }

}
