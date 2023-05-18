@extends("layouts.admin")

@section("content")



    <div class="content pt-5" id="kt_content">

        <form class="card flex p-3 form-group" method="POST" action="">
            @csrf


            <div class="form-group">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title" value="{{ $blog->title }}">
            </div>

            <div class="form-group">
                <label class="form-label">Img</label>
                <input type="text" class="form-control" name="img" value="{{ $blog->img }}">
            </div>

            <div class="form-group">
                <label class="form-label">Author</label>
                <input type="text" class="form-control" name="author" value="{{ $blog->author }}">
            </div>
            <div class="form-group">
                <label class="form-label">Date</label>
                <input type="text" class="form-control" name="date" value="{{ $blog->date }}">
            </div>
            <div class="form-group">
                <label class="form-label">Description</label>
                <textarea  class="form-control" rows="10" name="description">{{ $blog->description }}</textarea>
            </div>

            <div class="form-group row">
                <label class="col-3 col-form-label pt-2">Active</label>
                <div class="col-3">
                <span class="switch switch-outline switch-primary">
                    <label>
                        @if($blog->is_active)
                            <input type="checkbox" name="is_active" checked >
                        @else
                            <input type="checkbox" name="is_active" >
                        @endif
                        <span></span>
                    </label>
                </span>
                </div>


            </div>

            <input type="submit" value="Save" class="btn btn-primary">

        </form>

    </div>



@endsection
