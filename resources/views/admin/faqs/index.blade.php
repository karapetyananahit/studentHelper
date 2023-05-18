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
        <h1 class="page-title">Faqs</h1>

        <a href="/admin/faqs/create" class="btn btn-primary">New</a>
    </div>

    <div class="table-responsive mb-6">
        <table class="table table-striped table-dark text-center">
            <tr>
                <td>ID</td>
                <td>Question</td>
                <td>Answer</td>
                <td>Action</td>
            </tr>
            @foreach($faqs as $faq)
                <tr>
                    <td><span class="badge badge-primary">{{$faq->id}}</span></td>
                    <td>{!! $faq->question !!}</td>
                    <td>{!! $faq->answer !!}</td>
                    <td>
                        <a href="/admin/faqs/edit/{{$faq->id}}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/admin/faqs/delete/{{$faq->id}}" method="POST" class="d-inline-block">
                            @csrf
                            <input type="submit" class="btn btn-sm btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach



        </table>
    </div>

@endsection
