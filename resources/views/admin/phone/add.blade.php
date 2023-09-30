@extends('admin.layout')
@section('content')
<form action="{{route('route_phone_add')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label">Tên Sản Phẩm</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label class="col-md-3 col-sm-4 control-label">Hình ảnh</label>
        <div class="col-md-9 col-sm-8">
            <div class="row">
                <div class="col-xs-6">
                    <img id="mat_truoc_preview" src="https://png.pngtree.com/element_our/png/20181206/users-vector-icon-png_260862.jpg" alt="your image" style="max-width: 200px; height:100px; margin-bottom: 10px;" class="img-fluid" />
                    <input type="file" name="image" accept="image/*" class="form-control-file @error('image') is-invalid @enderror" id="cmt_truoc">
                </div>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label">Giá</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="mb-3">
        <label class="form-label">Mô tả</label>
        <input type="text" class="form-control" name="description">
    </div>
    <div class="mb-3">
        <label class="form-label">Thương Hiệu</label>
        <select name="category_id" class="form-select" >
            @foreach($categorys as $ct)
            <option value="{{$ct->id}}">{{$ct->name}}</option>
            @endforeach
        </select>
    </div>

    <button class="btn btn-success" type="submit">Thêm</button>
</form>
@endsection
@section('script')
<script>
    $(function() {
        function readURL(input, selector) {
            if (input.files && input.files[0]) {
                let reader = new FileReader();

                reader.onload = function(e) {
                    $(selector).attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#cmt_truoc").change(function() { // #cmt_truoc id của input file
            readURL(this, '#mat_truoc_preview');
        });

    });
</script>
@endsection