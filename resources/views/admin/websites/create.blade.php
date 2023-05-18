@extends("layouts.admin")

@push('_styles')
    {{-- <link rel="stylesheet" href="{{asset('css/front/about/index.css')}}"> --}}
@endpush

@push('_js')
    <script src="{{asset('js/dashboard/facebook/index.js')}}"></script>
@endpush

@section("content")



    <div class="page-header">
        <h1 class="page-title">Նոր Կայք</h1>
    </div>

    <div class="row">

        <div class="col-lg-12">
            <form class="card p-3 form-group" method="POST" action="">
                @csrf

                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="form-group">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control" name="url">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <label class="form-label">Languages</label>
                            <textarea type="text" rows="20" class="form-control" name="languages"></textarea>
                        </div>
                    </div>
                </div>


                <div class="form-group">
                    <input type="submit" class="btn btn-primary form-control" value="Save">
                </div>
            </form>
        </div>


    </div>


@endsection
