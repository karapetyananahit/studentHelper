@extends("layouts.admin")

@section("content")



    <div class="content pt-5" id="kt_content">

        <form class="card flex p-3 form-group" method="POST" action="">
            @csrf


            <div class="form-group">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
            </div>

            <div class="form-group">
                <label class="form-label">Img</label>
                <input type="text" class="form-control" name="img">
            </div>

            <div class="form-group">
                <label class="form-label">Author</label>
                <input type="text" class="form-control" name="author">
            </div>
            <div class="form-group">
                <label class="form-label">Date</label>
                <input type="text" class="form-control" name="date">
            </div>
            <div class="form-group">
                <label class="form-label">Description</label>
                <textarea  class="form-control" rows="10" name="description"></textarea>
            </div>

            <div class="form-group row">
                <label class="col-3 col-form-label pt-2">Active</label>
                <div class="col-3">
                <span class="switch switch-outline switch-primary">
                    <label>
                        <input type="checkbox" name="is_active" />
                        <span></span>
                    </label>
                </span>
                </div>


            </div>




            <div class="form-group">
                <input type="submit" class="btn btn-primary form-control" value="Create">
            </div>
        </form>

    </div>



@endsection
