@extends('admin.layout')
@section('content')
<a href="{{route('route_banner_add')}}"><button class="btn btn-primary mb-5">Thêm </button></a>
<table class="table table-hover border border-4">
        <tr class="table-warning">
            <td>ID</td>
            <td>Tên Banner</td>
            <td>Hình Ảnh</td>
            <td>Ngày Bắt Đầu</td>
            <td>Ngày Kết Thúc</td>
            <td>Hành Động</td>
        </tr>
        @foreach($banner as $bn)
        <tr >
            <td>{{$bn->id}}</td>
            <td>{{$bn->name}}</td>
            <td><img src="{{ $bn->image?''.Storage::url($bn->image):''}}" style="width: 100px" alt=""></td>
            <td>{{$bn->date_start}}</td>
            <td>{{$bn->date_end}}</td>
            <td>
            <a href="{{route('route_phone_edit',$bn->id)}}"><button class="btn btn-success">Sửa</button></a>
            <a href="{{route('route_banner_delete',$bn->id)}}"><button class="btn btn-danger">Xóa</button></a>
            </td>
        </tr>
        @endforeach
    </table>
    @endsection