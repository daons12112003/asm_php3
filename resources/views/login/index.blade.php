@extends('admin.layout')
@section('content')
<table class="table table-card border border-4">
        <tr class="table-warning">
            <td>ID</td>
            <td>Tên Người Dùng</td>
            <td>Email</td>
            <td>Password</td>
            <td>Vai trò</td>
            <td>Hành Động</td>
        </tr>
        @foreach($user as $us)
        <tr >
            <td>{{$us->id}}</td>
            <td>{{$us->name}}</td>
            <td>{{$us->email}}</td>
            <td>{{$us->password}}</td>
            <td>{{$us->role}}</td>
            <td>
            <a href="{{route('user_update',$us->id)}}"><button class="btn btn-success " ><i class=" bx bxs-pencil ">Sửa</i></button></a>
            <a href="{{route('user_delete',$us->id)}}"><button class="btn btn-danger"><i class="bx bxs-trash">Xóa</i></button></a>
            </td>
        </tr>
        @endforeach
    </table>
    @endsection