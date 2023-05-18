@extends("layouts.admin")

@section("content")



    <div class="content pt-5" id="kt_content">

        <form class="card flex p-3 form-group" method="POST" action="">
            @csrf


            <div class="form-group">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{  $youtube->name  }}">
            </div>
            <div class="form-group">
                <label class="form-label">Position</label>
                <input type="text" class="form-control" name="position" value="{{ $youtube->position }}">
            </div>

            <div class="form-group">
                <label class="form-label">Url</label>
                <input type="text" class="form-control" name="url" value="{{ $youtube->url }}">
            </div>
            <div class="form-group">
                <label class="form-label">Language</label>
                <input type="text" class="form-control" name="languages" value="{{ $youtube->languages }}">
            </div>            <div class="form-group">
                <label class="form-label">Date</label>
                <input type="text" class="form-control" name="date" value="{{ $youtube->date }}">
            </div>            <div class="form-group">
                <label class="form-label">Types</label>
                <input type="text" class="form-control" name="types" value="{{ $youtube->types }}">
            </div>            <div class="form-group">
                <label class="form-label">Playlist</label>
                <input type="text" class="form-control" name="playlists" value="{{ $youtube->playlists  }}">
            </div>            <div class="form-group">
                <label class="form-label">Image</label>
                <input type="text" class="form-control" name="img" value="{{ $youtube->img }}">
            </div>            <div class="form-group">
                <label class="form-label">Followers</label>
                <input type="text" class="form-control" name="followers" value="{{ $youtube->followers }}">
            </div>


            <input type="submit" value="Save" class="btn btn-primary">

        </form>

    </div>



@endsection
