@extends("layouts.admin")

@push('_styles')
    {{-- <link rel="stylesheet" href="{{asset('css/front/about/index.css')}}"> --}}
@endpush

@push('_js')
    {{--    <script src="{{asset('js/admin/users/index.js')}}"></script>--}}
@endpush

@section("content")



    <div class="page-header my-5">
        <h1 class="page-title">Edit Group</h1>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <form class="card flex p-3 form-group" method="POST" action="">
                @csrf


                <div class="row">
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name" value="{{$group->name}}">
                        </div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <label class="form-label">Settings</label>
                                <div class="form-group row">
                                    <label class="col-3 col-form-label pt-2">Active</label>
                                    <div class="col-3">
                                    <span class="switch switch-outline switch-primary">
                                        <label>
                                            <input type="checkbox" name="is_active" @if($group->is_active) checked="" @endif>
                                            <span></span>
                                        </label>
                                    </span>
                                    </div>

                                    <label class="col-3 col-form-label pt-2">Show</label>
                                    <div class="col-3">
                                    <span class="switch switch-outline switch-primary">
                                        <label>
                                            <input type="checkbox" name="is_show" @if($group->is_show) checked="" @endif>
                                            <span></span>
                                        </label>
                                    </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12">
                        <div class="form-group">
                            <label class="form-label">Price</label>
                            <input type="number" class="form-control" name="price" value="{{$group->price}}">
                        </div>

                        <div class="form-group">
                            <label class="form-label">Discount</label>
                            <input type="number" class="form-control" name="discount" value="{{$group->discount}}">
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label">Description</label>
                            <textarea type="text" class="form-control" rows="5" name="description"> {{$group->description}}</textarea>
                        </div>
                    </div>


                </div>



                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" value="Create">
                </div>
            </form>
        </div>


    </div>


@endsection
