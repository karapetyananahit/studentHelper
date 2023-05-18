@extends("layouts.admin")

@push('_styles')
    {{-- <link rel="stylesheet" href="{{asset('css/front/about/index.css')}}"> --}}
@endpush

@push('_js')
    <script src="{{asset('js/dashboard/users/index.js')}}"></script>
@endpush

@section("content")



    <div class="page-header d-flex justify-content-between my-10">
        <h1 class="page-title">Groups</h1>

        <div>
            <a href="/admin/groups/create" class="btn btn-primary">New</a>
        </div>
    </div>

    <div>
        <div class="table-responsive mb-6">
            <table class="table table-striped table-dark text-center">
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Description</td>
                    <td>Videos</td>
                    <td>Price</td>
                    <td>Discount</td>
                    <td>Active</td>
                    <td>Show</td>
                    <td>Action</td>
                </tr>
                @foreach($groups as $group)
                    <tr>
                        <td>{{$group->id}}</td>
                        <td>{{$group->name}}</td>
                        <td style="min-width: 150px; max-width: 300px">{{$group->description}}</td>
                        <td>{{count($group->courses)}}</td>

                        @if($group->discount)
                            <td> <del>{{$group->showPrice()}}</del> <br> {{$group->showDiscount()}}</td>
                        @else
                            <td>{{$group->showPrice()}}</td>
                        @endif

                        <td>{{$group->discount}}</td>
                        <td>@if($group->is_active)  @include("svg.star",["class"=>"svg-icon svg-icon-success"]) @else @include("svg.x",["class"=>"svg-icon svg-icon-danger"]) @endif</td>
                        <td>@if($group->is_show)  @include("svg.star",["class"=>"svg-icon svg-icon-success"]) @else @include("svg.x",["class"=>"svg-icon svg-icon-danger"]) @endif</td>

                        <td>
                            <a href="/admin/courses/group/{{$group->id}}" class="btn btn-primary">Courses</a>
                            <a href="/admin/groups/{{$group->id}}" class="btn btn-warning">Edit</a>
                            <form action="/admin/groups/delete/{{$group->id}}" class="d-inline-block" method="POST">
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
