@extends("layouts.admin")

@push('_styles')

@endpush

@push('_js')

@endpush

@section("content")



    <div class="page-header d-flex justify-content-between my-10">
        <h1 class="page-title">New Faq</h1>
    </div>

    <form method="POST">
        @csrf
        <div class="form-group">
            <label>Question</label>
            <input type="text" name="question" class="form-control" value="{{$faq->question}}">
        </div>

        <div class="form-group">
            <label>Answer</label>
            <textarea name="answer" class="form-control resize-none" id="coding" cols="30" rows="10">{{$faq->answer}}</textarea>
        </div>

        <input type="submit" value="Save" class="btn btn-primary">

    </form>

@endsection
