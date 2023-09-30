<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session ;

class CategoryController extends Controller
{
    public function index(Request $request){
        $categorys = DB::table('category')->whereNull('deleted_at')->get();
        return view('admin/category.index', compact('categorys'));
    }
    public function add(CategoryRequest $request){
        if($request->post()){
            // dd('dmv');
            $category = Category::create( $request->except('_token')); 
            if($category->id){
            
                Session::flash('success', 'Thêm mới thành công');
                return redirect()->route('route_category_add');
            }   
        }

        return view('admin/category.add');
    }
    public function edit(CategoryRequest $request, $id ){
       $category = Category::find($id);
        if($request->post()){
            $result = Category::where('id',$id)
            ->update($request->except('_token'));
            if($result){
                Session::flash('success', 'Sửa thành công sinh viên');
                 return redirect()->route('route_category_edit',['id'=>$id]);
            }
        }

        return view('admin/category.edit', compact('category'));

    }
    public function delete($id) {
        Category::where('id',$id)->delete();
        Session::flash('success','Xóa thành công sản phẩm có id là : '.$id);
        return redirect()->route('route_category');
    }
}
