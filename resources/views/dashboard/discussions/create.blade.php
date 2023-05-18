@extends("layouts.admin")

@push('page_name','Dashboard')

@push('_js')

@endpush
@push('_styles')
    <style>
        textarea{
            resize: none;
        }
    </style>
@endpush

@section("content")

    <div class="container">
        <div class="container-with-adv">

            <div class="container-content">

                <div class="page-header d-flex justify-content-between mt-5 mb-10">
                    <h1 class="page-title">Նոր Քննարկում</h1>
                </div>

                <form method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Վերնագիր">
                    </div>

                    <div class="form-group">
                        <textarea rows="8" name="message" class="form-control" placeholder="Նամակ․․․"></textarea>
                    </div>

                    <div class="text-right">
                        <input type="submit" class="btn btn-primary" value="Ուղարկել">
                    </div>
                </form>

            </div>



        </div>
    </div>


@endsection
