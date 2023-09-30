@extends('admin.layout')
@section('content')
<section class="main-content-section">
			<form action="{{route('user_update',['id'=>$users->id])}}" class="primari-box personal-info-box"  method="post" >
				@csrf
			
					
					<div class="mb-3">
						<label class="form-label"> Name <sup>*</sup></label>
						<input type="text" value="{{$users->name}}" name="name" 
							class="form-control ">
					</div>
					<div class="mb-3">
						<label  class="form-label">Email<sup>*</sup></label>
						<input type="email" value="{{$users->email}}" name="email"
							class="form-control ">
					</div>
					<div class="mb-3">
						<label  class="form-label">Password <sup>*</sup></label>
						<input type="text"  name="password" value="{{$users->password}}"
							class="form-control">
						
					</div>
                    <div class="mb-3">
						<label  class="form-label">Vai Trò<sup>*</sup></label>
						<input type="text"  name="role" value="{{$users->role}}"
							class="form-control">
						
					</div>
					
						<button type="submit" class="btn btn-success">Sửa</button>
							
			</form>

@endsection