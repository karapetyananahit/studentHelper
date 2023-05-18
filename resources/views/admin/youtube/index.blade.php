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



    <h1 class="page-title my-10">Youtube</h1>

    <div class="page-header d-flex justify-content-between mb-10">
        <table class='table table-dark table-bordered table-hover'>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Position</th>
                <th>Languages</th>
                <th>Date</th>
                <th>Types</th>
                <th>Playlists</th>
                <th>Followers</th>
                <th>Action</th>
            </tr>
            @foreach($youtube as $y)
                <tr>
                    <td>{{$y->id}}</td>
                    <td>
                        <a href="{{$y->url}}" target='_blank'>{{$y->name}}</a>
                    </td>
                    <td>{{$y->position}}</td>
                    <td>{{$y->languages}}</td>
                    <td>{{$y->date}}</td>
                    @php
                        $types=explode(',', $y->types);
                    @endphp
                    <td>
                        @foreach($types as $type)
                            @php
                                $type=explode('@', $type);
                            @endphp
                            <span class="label label-{{$colors[$type[1]]}} label-pill label-inline mr-2 mb-2 p-4" style="font-size: 12px">
                                <b>{{$type[0]}}</b>
                            </span>
                        @endforeach

                    </td>
                    <td>{{$y->playlists}}</td>
                    <td>{{$y->followers}}</td>
                    <td>
                        <a href="/admin/youtube/edit/{{$y->id}}" class='btn btn-sm btn-warning'>Edit</a>
                    </td>
                </tr>
            @endforeach 
        </table>
	</div>

@endsection
