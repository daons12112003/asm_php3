@extends('admin.layout')
@section('content')
<a href="{{route('route_category_add')}}"><button class="btn btn-primary mb-5">Thêm Danh Mục</button></a>
<table class="table table-hover">
        <tr class="table-warning">
            <td>ID</td>
            <td>Tên Danh Mục</td>
            <td>Hành Động</td>
        </tr>
        @foreach($categorys as $ct)
        <tr>
            <td>{{$ct->id}}</td> 
            <td>{{$ct->name}}</td>
            <td>
                <a href="{{route('route_category_edit',$ct->id)}}"><button class="btn btn-success">Sửa</button></a>
                <a href="{{route('route_category_delete',$ct->id)}}"><button class="btn btn-danger">Xóa</button></a>
            </td>
        </tr>
        @endforeach
    </table>
    @endsection