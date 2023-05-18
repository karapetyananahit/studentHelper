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

    <a href="/admin/websites/create" class="btn btn-sm btn-primary mb-10">New</a>

    <div class="page-header d-flex justify-content-between mb-10">
        <table class='table table-dark table-bordered table-hover'>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Languages</th>
                <th>Action</th>
            </tr>
            @foreach($websites as $w)
                <tr>
                    <td>{{$w->id}}</td>
                    <td>
                        <a href="{{$w->url}}" target='_blank'>{{$w->name}}</a>
                    </td>
                    @php
                        $types=explode(',', $w->languages);
                        $prevType = "";
                    @endphp
                    <td>
                        @foreach($types as $type)
                            @php
                                $type=explode('@', $type);
                                $currentType =$type[1];
                                if(!$prevType) {
                                    $prevType = $type[1];
                                }
                            @endphp

                            @if($currentType != $prevType)

                                <br>
                            @endif

                            <span class="label label-{{$colors[$type[1]]}} label-pill label-inline mr-2 mb-2 p-4" style="font-size: 12px">
                                <b>{{$type[0]}}</b>
                            </span>

                            @php
                                $prevType = $currentType;
                            @endphp
                        @endforeach

                    </td>
                    <td>
                        <a href="/admin/websites/edit/{{$w->id}}" class='btn btn-sm btn-warning'>Edit</a>
                        <form action="/admin/websites/edit/{{$w->id}}" method="POST" class="d-inline-block">
                            @csrf
                            <input type="submit" value="Delete" class='btn btn-sm btn-danger'>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
