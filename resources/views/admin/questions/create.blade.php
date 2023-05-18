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

@endpush

@section("content")



    <div class="page-header d-flex justify-content-between my-10">
        <h1 class="page-title">New Question</h1>
    </div>

    <div class="code">
        <div class="w400 live"></div>
    </div>

    <form method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Answer</label>
                    <input type="text" name="answer" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Seconds</label>
                    <input type="number" name="seconds" class="form-control">
                </div>
            </div>
        </div>

        <div class="form-group">
            <label>Question</label>
            <textarea name="question" class="form-control resize-none" id="coding" cols="30" rows="10"></textarea>
        </div>

        <div class="form-group">
            <label>Form</label>
            <textarea name="form" class="form-control resize-none" id="coding" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" value="Save" class="btn btn-primary">

    </form>

@endsection
