@extends('admin.layout')
@section('content')
<a href="{{route('route_phone_add')}}"><button class="btn btn-primary mb-5">Thêm Sản Phẩm</button></a>
<table class="table table-card border border-4">
        <tr class="table-warning">
            <td>ID</td>
            <td>Tên Sản Phẩm</td>
            <td>Hình Ảnh</td>
            <td>Giá</td>
            <td>Mô tả</td>
            <td>Thương Hiệu</td>
            <td>Hành Động</td>
        </tr>
        @foreach($phones as $ph)
        <tr >
            <td>{{$ph->id}}</td>
            <td>{{$ph->name}}</td>
            <td><img src="{{ $ph->image?''.Storage::url($ph->image):''}}" style="width: 100px" alt=""></td>
            <td>{{$ph->price}}  VNĐ</td>
            <td>{{$ph->description}}</td>
            <td>
                @foreach($categorys as $ct)
                @if($ct->id == $ph->category_id)
                   {{$ct->name}}
                @endif
                @endforeach
            </td>
            <td>
            <a href="{{route('route_phone_edit',$ph->id)}}"><button class="btn btn-success " ><i class=" bx bxs-pencil ">Sửa</i></button></a>
            <a href="{{route('route_phone_delete',$ph->id)}}"><button class="btn btn-danger"><i class="bx bxs-trash">Xóa</i></button></a>
            </td>
        </tr>
        @endforeach
    </table>
    @endsection