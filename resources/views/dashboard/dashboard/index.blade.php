@extends("layouts.admin")

@push('page_name','Dashboard')

@push('create_link')
{{--	<a href="" class="btn btn-primary font-weight-bolder btn-sm">New</a>--}}
@endpush


@push('_styles')
	<style>
		.card {
			border: 1px solid #c1c1c1;
		}
	</style>
@endpush

@push('_js')
{{--	<script src="{{asset('js/dashboard/emails/index.js')}}"></script>--}}
@endpush

@section("content")



    <div class="content pt-0 d-flex flex-column flex-column-fluid" id="kt_content">



        <div class="container-fluid">

            @include("dashboard.dashboard._partials.statuses")

            @include("dashboard.dashboard._partials.news")

            @include("globals.adv.js_lessons")

            @include("globals.instagram_admin")

            <div>
                <h2 class="mb-5">Թոփ 20 մասնակիցները</h2>
                @include("globals.users.points_big_table", ["showMe" => false, "showTH" => false])
            </div>


        </div>



    </div>

@endsection
