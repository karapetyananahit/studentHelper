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



    <div class="content pt-5" id="kt_content">

        <div class="mb-15">
            <h2>Migrates</h2>
            <form action="/admin/commands/migrate" method="POST" class="d-inline-block">
                @csrf
                <input type="submit" class="btn btn-primary" value="Migrate">
            </form>
        </div>

        <h2>Caches</h2>
        <form action="/admin/commands/cache-clear" method="POST" class="d-inline-block">
            @csrf
            <input type="submit" class="btn btn-primary" value="Cache: Clear">
        </form>

        <form action="/admin/commands/view-clear" method="POST" class="d-inline-block">
            @csrf
            <input type="submit" class="btn btn-primary" value="View: Clear">
        </form>

        <form action="/admin/commands/config-clear" method="POST" class="d-inline-block">
            @csrf
            <input type="submit" class="btn btn-primary" value="Config: Clear">
        </form>

        <form action="/admin/commands/all-clear" method="POST" class="d-inline-block">
            @csrf
            <input type="submit" class="btn btn-primary" value="All: Clear">
        </form>


    </div>



@endsection

