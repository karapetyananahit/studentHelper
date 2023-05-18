@extends("layouts.admin")

@section("content")



    <div class="content pt-5" id="kt_content">

        <form class="card flex p-3 form-group" method="POST" action="">
            @csrf


            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{  $books->name  }}">
            </div>
            <div class="form-group">
                <label class="form-label">Author</label>
                <input type="text" class="form-control" name="author" value="{{ $books->author }}">
            </div>

            <div class="form-group">
                <label class="form-label">Pages</label>
                <input type="text" class="form-control" name="pages" value="{{ $books->pages }}">
            </div>
            <div class="form-group">
                <label class="form-label">Image</label>
                <input type="text" class="form-control" name="img" value="{{ $books->img }}">
            </div>            <div class="form-group">
                <label class="form-label">To show</label>
                <input type="text" class="form-control" name="to_show" value="{{ $books->to_show }}">
            </div>            <div class="form-group">
                <label class="form-label">Download</label>
                <input type="text" class="form-control" name="download" value="{{ $books->download }}">
            </div>

            <input type="submit" value="Save" class="btn btn-primary">

        </form>

    </div>



@endsection
