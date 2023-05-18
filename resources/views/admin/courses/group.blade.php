@extends("layouts.admin")

@push('_styles')
    {{-- <link rel="stylesheet" href="{{asset('css/front/about/index.css')}}"> --}}
    <style>
        .level{
            display: inline-block;
            width: 15px;
            height: 3px;
        }
        .td-level1 .level{
            background: green;
        }
        .td-level2 .level{
            background: darkgreen;
        }
        .td-level3 .level{
            background: yellow;
        }
        .td-level4 .level{
            background: orange;
        }
        .td-level5 .level{
            background: red;
        }
    </style>
@endpush

@push('_js')
    <script src="{{asset('js/dashboard/users/index.js')}}"></script>
@endpush

@section("content")



    <div class="page-header d-flex justify-content-between my-10">
        <h1 class="page-title">Courses | {{$group->name}} | {{$group->showPrice()}}</h1>

        <div>
            <a href="/admin/courses/create" class="btn btn-primary">New</a>
        </div>
    </div>

    <div>
        <div class="table-responsive mb-6">
            <table class="table table-striped table-dark text-center">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Slug</td>
                    <td>Duration</td>
                    <td>Level</td>
                    <td>Active</td>
                    <td>Free</td>
                    <td>Order</td>
                    <td>Action</td>
                </tr>
                @foreach($courses as $course)
                    <tr>
                        <td>{{$course->id}}</td>
                        <td>{{$course->name}}</td>
                        <td>{{$course->slug}}</td>
                        <td>{{$course->duration}}</td>

                        <td class="td-level{{$course->level}} text-left">
                            @for($i=0; $i<$course->level; $i++)
                                <span class="level"></span>
                            @endfor
                        </td>

                        <td>@if($group->is_active)  @include("svg.star",["class"=>"svg-icon svg-icon-success"]) @else @include("svg.x",["class"=>"svg-icon svg-icon-danger"]) @endif</td>
                        <td>@if($group->is_free)  @include("svg.star",["class"=>"svg-icon svg-icon-success"]) @else @include("svg.x",["class"=>"svg-icon svg-icon-danger"]) @endif</td>

                        <td>
                            <form action="/admin/courses/order/{{$course->id}}">
                                <input type="number" class="form-control w-70px" name="order" value="{{$course->order}}">
                            </form>
                        </td>

                        <td>
                            <a href="/admin/courses/{{$course->id}}" class="btn btn-primary">Edit</a>

                            <form action="/admin/groups/delete/{{$course->id}}" class="d-inline-block" method="POST">
                                @csrf
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
