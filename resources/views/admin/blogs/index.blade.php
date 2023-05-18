@extends("layouts.admin")

@section("content")



    <div class="content pt-5" id="kt_content">

        <a href="/admin/blogs/create" class="btn btn-primary mb-5">Create</a>

        <div class="table-responsive mb-6">
            <table class="table table-striped table-dark text-center">
                <tr>
                    <td>ID</td>
                    <td>Title</td>
                    <td>Shown</td>
                    <td>Action</td>
                </tr>

                @foreach($blogs as $blog)
                    <tr>
                        <td>{{ $blog->id }}</td>
                        <td>{{ $blog->title }}</td>
                        <td>
                            @if($blog->is_active)
                                Yes
                            @else
                                No
                            @endif
                        </td>
                        <td>
                            <a href="/admin/blogs/edit/{{ $blog->id }}" class="btn btn-warning">Edit</a>


                            @if($blog->is_active)

                                <form action="/admin/blogs/hide/{{ $blog->id }}" method="POST" class="d-inline-block">
                                    @csrf
                                    <input type="submit" class="btn btn-danger" value="Hide">
                                </form>

                            @else

                                <form action="/admin/blogs/show/{{ $blog->id }}" method="POST" class="d-inline-block">
                                    @csrf
                                    <input type="submit" class="btn btn-success" value="Show">
                                </form>

                            @endif


                        </td>
                    </tr>

                @endforeach

            </table>
        </div>


    </div>



@endsection
