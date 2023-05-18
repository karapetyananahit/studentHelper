@extends("layouts.admin")

@push('_styles')
    {{-- <link rel="stylesheet" href="{{asset('css/front/about/index.css')}}"> --}}
@endpush

@push('_js')

@endpush

@section("content")


    <div style="font-size: 18px">
        <div class="page-header my-10">
            <h1 class="page-title">Բոլոր Մեդալակիրները</h1>
        </div>

        @include("dashboard.users.menu._partials.menu.top")

        @include("dashboard.users.menu._partials.menu.percentCount")

        @include("dashboard.users.menu._partials.menu.task")
    </div>


@endsection
