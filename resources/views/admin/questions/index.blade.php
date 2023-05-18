@extends("layouts.admin")

@push('_styles')
    {{-- <link rel="stylesheet" href="{{asset('css/front/about/index.css')}}"> --}}
    <style>
        .code{
            font-size: 14px!important;
            padding: 10px 20px;
        }
    </style>
@endpush

@push('_js')
{{--    <script src="{{asset('js/dashboard/users/index.js')}}"></script>--}}
@endpush

@section("content")



    <div class="page-header d-flex justify-content-between my-10">
        <h1 class="page-title">Questions</h1>

        <div>
            <form class="d-inline-block w-230px">
                <div class="row pr-6">
                    <div class="col-9 pr-0">
                        <input type="text" name="search" class="form-control">
                    </div>
                    <div class="col-3">
                        <input type="submit" value="Search" class="btn btn-primary">
                    </div>
                </div>

            </form>


        </div>
    </div>

    <div class="text-right">
        <a href="/admin/questions/create" class="btn btn-primary">New</a>
    </div>

    @if($isPaginate)
        <div class="mb-10">
            {{ $questions->links() }}
        </div>
    @endif

    @foreach($questions as $question)
        <div class="code">
            <div class="w400">
                {!! $question->question !!}
            </div>
            <br>
            <div class="d-flex justify-content-between">
                <a href="/admin/questions/edit/{{$question->id}}" class="btn btn-sm btn-warning">Edit</a>

                <form action="/admin/questions/delete/{{$question->id}}" method="POST">
                    @csrf
                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                </form>
            </div>
        </div>
    @endforeach

    @if($isPaginate)
        <div class="mb-10">
            {{ $questions->links() }}
        </div>
    @endif

@endsection
