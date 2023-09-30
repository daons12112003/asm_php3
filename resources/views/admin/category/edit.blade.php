@extends('admin.layout')
@section('content')
<form action="{{route('route_category_edit', ['id'=>$category->id])}}" method="POST" >
    @csrf
    <div class="mb-3">
        <label class="form-label">Tên Danh Mục</label>
        <input type="text" class="form-control" value="{{$category->name}}" name="name">
    </div>
    <button class="btn btn-success" type="submit">Sửa</button>
</form>
@endsection