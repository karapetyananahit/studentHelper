@if(count($errors) > 0)
	<div class="errors-block mt-5">
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li><i class="fas fa-times-circle"></i> {{$error}}</li>
				@endforeach
			</ul>
		</div>
	</div>
@endif

@if(session("success"))
	<div class="errors-block mt-5">
		<div class="alert alert-success">
			{{session("success")}}
		</div>
	</div>
@endif

@if(session("error"))
	<div class="errors-block mt-5">
		<div class="alert alert-danger">
			{{session("error")}}
		</div>
	</div>
@endif
