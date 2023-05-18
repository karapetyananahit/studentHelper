@extends("layouts.admin")

@push('_styles')
	{{-- <link rel="stylesheet" href="{{asset('css/front/about/index.css')}}"> --}}
@endpush

@push('_js')
	<script src="{{asset('js/dashboard/facebook/index.js')}}"></script>
@endpush

@section("content")



	<div class="page-header">
		<h1 class="page-title">{{$user->fullname}}</h1>
	</div>

	<div class="row">

		<div class="col-lg-12">
			<form class="card p-3 form-group" method="POST" action="">
				@csrf

	            <div class="row">
					<div class="col-md-3 col-sm-12">
						<div class="form-group">
							<label class="form-label">Name</label>
							<input type="text" class="form-control" name="name" value="{{$user->name}}">
						</div>

						<div class="form-group">
							<label class="form-label">Surname</label>
							<input type="text" class="form-control" name="surname" value="{{$user->surname}}">
						</div>

						<div class="form-group">
							<label class="form-label">Email</label>
							<input type="email" class="form-control" name="email" value="{{$user->email}}">
						</div>

                        <div class="form-group row">
                            <label class="col-3 col-form-label pt-2">User</label>
                            <div class="col-3">
								<span class="switch switch-outline switch-primary">
									<label>
										<input type="checkbox" name="is_admin" @if($user->is_admin) checked="" @endif/>
										<span></span>
									</label>
								</span>
                            </div>
                        </div>
					</div>

					<div class="col-md-3 col-sm-12">
						<div class="form-group">
							<label class="form-label">Passowrd</label>
							<input type="password" class="form-control" name="password">
						</div>
						<div class="form-group">
							<label class="form-label">Task times</label>
							<input type="number" class="form-control" name="tasks_times" value="{{$user->tasks_times}}">
						</div>
						<div class="form-group">
							<label class="form-label">Tasks Corrects</label>
							<input type="number" class="form-control" name="tasks_corrects" value="{{$user->tasks_corrects}}">
						</div>
					</div>


					<div class="col-md-3 col-sm-12">
						<div class="form-group">
							<label class="form-label">Medal gold</label>
							<input type="number" class="form-control" name="medal_gold" value="{{$user->medal_gold}}">
						</div>
						<div class="form-group">
							<label class="form-label">Medal silver</label>
							<input type="number" class="form-control" name="medal_silver" value="{{$user->medal_silver}}">
						</div>
						<div class="form-group">
							<label class="form-label">Medal bronze</label>
							<input type="number" class="form-control" name="medal_bronze" value="{{$user->medal_bronze}}">
						</div>
                        <div class="form-group">
                            <label class="form-label">Medal top 10</label>
                            <input type="number" class="form-control" name="medal_top_10" value="{{$user->medal_top_10}}">
                        </div>
					</div>

					<div class="col-md-3 col-sm-12">
						<div class="form-group">
							<label class="form-label">Medal task</label>
							<input type="number" class="form-control" name="medal_task" value="{{$user->medal_task}}">
						</div>
						<div class="form-group">
							<label class="form-label">Medal count</label>
							<input type="number" class="form-control" name="medal_count" value="{{$user->medal_count}}">
						</div>
						<div class="form-group">
							<label class="form-label">Medal percent</label>
							<input type="number" class="form-control" name="medal_percent" value="{{$user->medal_percent}}">
						</div>
					</div>
				</div>

	            <div class="form-group">
					<input type="submit" class="btn btn-primary form-control" value="Save">
				</div>
	        </form>
		</div>


	</div>


@endsection
