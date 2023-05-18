@extends("layouts.admin")

@push('_styles')
	{{-- <link rel="stylesheet" href="{{asset('css/front/about/index.css')}}"> --}}
@endpush

@push('_js')
	<script src="{{asset('js/dashboard/users/index.js')}}"></script>
@endpush

@section("content")



	<div class="page-header">
		<h1 class="page-title">New User</h1>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<form class="card flex p-3 form-group" method="POST" action="">
				@csrf


				<div class="row">
					<div class="col-md-3 col-sm-12">
						<div class="form-group">
							<label class="form-label">Name</label>
							<input type="text" class="form-control" name="name">
						</div>

						<div class="form-group">
							<label class="form-label">Surname</label>
							<input type="text" class="form-control" name="surname">
						</div>

						<div class="form-group">
							<label class="form-label">Email</label>
							<input type="email" class="form-control" name="email">
						</div>
					</div>
					<div class="col-md-3 col-sm-12">
						<div class="form-group">
							<label class="form-label">Passowrd</label>
							<input type="password" class="form-control" name="password">
						</div>
					</div>

					<div class="col-md-6 col-sm-12">
			            <label class="form-label">Roles</label>
			            <div class="form-group row">
							<label class="col-3 col-form-label pt-2">User</label>
							<div class="col-3">
								<span class="switch switch-outline switch-primary">
									<label>
										<input type="checkbox"name="is_admin" />
										<span></span>
									</label>
								</span>
							</div>


						</div>

					</div>
				</div>



	            <div class="form-group">
					<input type="submit" class="btn btn-primary form-control" value="Create">
				</div>
	        </form>
		</div>


	</div>


@endsection
