@extends("layouts.admin")

@push('_styles')
	{{-- <link rel="stylesheet" href="{{asset('css/front/about/index.css')}}"> --}}
@endpush

@push('_js')
	<script src="{{asset('js/dashboard/users/index.js')}}"></script>
@endpush

@section("content")
    @php
        $colors = [
            "css" => "light-success",
            "front" => "light-warning",
            "back" => "light-danger",
            "other" => "light-info",
        ];
    @endphp



    <h1 class="page-title my-10">Books</h1>

    <div class="page-header d-flex justify-content-between mb-10">
        <table class='table table-dark table-bordered table-hover'>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Author</th>
                <th>Pages</th>
                <th>Image</th>
                <th>To Show</th>
                <th>Download</th>
            </tr>
            @foreach($books as $book)
                <tr>
                    <td>{{$book->id}}</td>
                    <td>
                        {{$book->name}}
                    </td>
                    <td>{{$book->author}}</td>
                    <td>{{$book->pages}}</td>
                    <td>{{$book->img}}</td>
                    <td>{{$book->to_show}}</td>
                    <td>{{$book->download}}</td>
                    <td>
                        <a href="/admin/books/edit/{{$book->id}}" class='btn btn-sm btn-warning'>Edit</a>
                    </td>
                </tr>
            @endforeach
        </table>
	</div>

@endsection
