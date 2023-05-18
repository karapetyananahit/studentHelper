@extends("layouts.admin")

@push('_styles')
	{{-- <link rel="stylesheet" href="{{asset('css/front/about/index.css')}}"> --}}
@endpush

@push('_js')
	<script src="{{asset('js/dashboard/users/index.js')}}"></script>
@endpush

@section("content")



    <h1 class="page-title my-10">Users</h1>

    <div class="page-header d-flex justify-content-between mb-10">

        <div>
            <form class="d-inline-block w-230px">
                <div class="row">
                    <div class="col-9 pr-0">
                        <input type="text" name="search" class="form-control">
                    </div>
                    <div class="col-3">
                        <input type="submit" value="Search" class="btn btn-primary">
                    </div>
                </div>

            </form>
        </div>

        <div>
            <div class="text-right mb-5">
                <form class="d-inline-block" action="/admin/users/questions/reset" method="POST">
                    @csrf
                    <input type="submit" value="Reset Tasks" class="btn btn-danger">
                </form>

                <a href="/admin/users/create" class="btn btn-primary">New</a>
            </div>


        </div>
	</div>

	<div>
        @if($isPaginate)
            <div class="mb-10">
                {{ $users->links() }}
            </div>
        @endif
		<div class="table-responsive mb-6">
			<table class="table table-striped table-dark text-center">
				<tr>
					<td>ID</td>
					<td>Position</td>
					<td>Fullname</td>
					<td>Email</td>
					<td>Admin</td>
                    <td>Questions</td>
                    <td>Today</td>
                    <td>Tasks</td>
                    <td>Points</td>
                    <td>Join</td>
                    <td>Last</td>
                    <td>Action</td>
				</tr>
                @php $position = 1; @endphp
				@foreach($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td><span class="badge badge-primary">{{$position}}</span></td>@php $position++; @endphp
					<td>{{$user->name}} {{$user->surname}}</td>
					<td>{{$user->email}}</td>

					<td>@if($user->is_admin)  @include("svg.star",["class"=>"svg-icon svg-icon-success"]) @else @include("svg.x",["class"=>"svg-icon svg-icon-danger"]) @endif</td>

                    <td>
                        <div>{{$user->questions_corrects}} / {{$user->questions_times}}</div>
                        @if($user->questions_times)
                        <div class="progress">
                            <div
                                class="progress-bar progress-bar-striped
                                    @if(round($user->questions_corrects / $user->questions_times * 100) > 66.6)
                                        bg-success
                                    @elseif(round($user->questions_corrects / $user->questions_times * 100) > 33.3)
                                        bg-warning
                                    @else
                                        bg-danger
                                    @endif
                                "
                                role="progressbar"
                                style="width: {{round($user->questions_corrects / $user->questions_times * 100)}}%"
                                aria-valuenow="{{round($user->questions_corrects / $user->questions_times * 100)}}"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            >
                            </div>
                        </div>
                        @endif
                    </td>

                    <td>
                        <div>{{$user->questions_times_today}} / 10</div>
                    </td>

                    <td>
                        <div>{{$user->tasks_corrects}} / {{$user->tasks_times}}</div>
                        @if($user->tasks_times)
                        <div class="progress">
                            <div
                                class="progress-bar progress-bar-striped
                                    @if(round($user->tasks_corrects / $user->tasks_times * 20) > 66.6)
                                        bg-success
                                    @elseif(round($user->tasks_corrects / $user->tasks_times * 20) > 33.3)
                                        bg-warning
                                    @else
                                        bg-danger
                                    @endif
                                "
                                role="progressbar"
                                style="width: {{round($user->tasks_corrects / $user->tasks_times * 20)}}%"
                                aria-valuenow="{{round($user->tasks_corrects / $user->tasks_times * 20)}}"
                                aria-valuemin="0"
                                aria-valuemax="100"
                            >
                            </div>
                        </div>
                        @endif
                    </td>

                    <td>{{$user->points}}</td>

                    <td>{{$user->created_at->format('d M Y')}}</td>
                    <td>{{$user->updated_at->diffForHumans()}}</td>

                    <td class="table-responsive_eddel">
                        <a href="/admin/users/{{$user->id}}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="/admin/users/delete/{{$user->id}}" class="d-inline-block" method="POST">
                            @csrf
                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                        </form>
                    </td>
				</tr>
				@endforeach



			</table>
		</div>

        @if($isPaginate)
            <div class="mb-10">
                {{$users->links()}}
            </div>
        @endif
	</div>

@endsection
