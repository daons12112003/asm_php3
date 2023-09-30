@extends('user.client')
@section('content')
<section class="main-content-section">
	<div class="container">
		<!-- BSTORE-BREADCRUMB START -->
		<div class="bstore-breadcrumb">
			<a href="index.html">HOMe</a>
			<span><i class="fa fa-caret-right	"></i></span>
			<span>Authentication</span>
		</div>
		<!-- BSTORE-BREADCRUMB END -->
		
		<h2 class="page-title">Create an account</h2>			
		
		<!-- PERSONAL-INFOMATION START -->
		<div class="personal-infomation">
			<form action="{{route('register')}}" class="primari-box personal-info-box"  method="post" >
				@csrf
				<h3 class="box-subheading">Your personal information</h3>
				<div class="personal-info-content">
					
					<div class="form-group primary-form-group p-info-group">
						<label for="lastname"> Name <sup>*</sup></label>
						<input type="text" value="" name="name" 
							class="form-control input-feild">
					</div>
					<div class="form-group primary-form-group p-info-group">
						<label for="email">Email<sup>*</sup></label>
						<input type="email" value="" name="email"
							class="form-control input-feild">
					</div>
					<div class="form-group primary-form-group p-info-group">
						<label for="password">Password <sup>*</sup></label>
						<input type="password"  name="password"
							class="form-control input-feild">
						
					</div>
					<div class="form-group primary-form-group p-info-group">
						<label for="password">Required Password <sup>*</sup></label>
						<input  type="password" class="form-control input-feild" name="password_confirmation" required autocomplete="new-password">

					</div>
				
					
					<div class="submit-button p-info-submit-button">
						<button type="submit" class="btn main-btn">
							<span>
								
								Register
								<i class="fa fa-chevron-right"></i>
							</span>
						</button>
						<span class="required-field"><sup>*</sup>Required field</span>
					</div>
				</div>
			</form>
		</div>
		<!-- PERSONAL-INFOMATION END -->
	</div>
</section>
@endsection