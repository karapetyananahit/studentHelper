@extends("layouts.admin")

@push('_styles')

@endpush

@push('_js')

@endpush

@section("content")



    <div class="page-header d-flex justify-content-between my-10">
        <h1 class="page-title mb-0">Task</h1>
    </div>

    <div class="live task" style="font-size: 18px">
        {!! $task->subject !!}
    </div>

    <form method="POST">
        @csrf

        <div class="form-group">
            <textarea name="subject" class="form-control resize-none" id="coding" cols="30" rows="10">{{$task->subject}}</textarea>
        </div>

        <input type="submit" value="Save" class="btn btn-primary">

    </form>

@endsection
