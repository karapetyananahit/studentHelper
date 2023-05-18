@extends("layouts.admin")

@push('page_name','Dashboard')

@push('_styles')

@endpush

@section("content")

    <div class="container mt-5">
        <div class="container-with-adv">
            <div class="container-content">
                <form method="POST">
                    @csrf

                    <div class="form-group">
                        <label>Ուղարկիր հարցը և մենք կպատասխանենք առաջիկա 24 ժամվա ընթացքում։</label>
                        <textarea name="subject" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <input type="submit" value="Ուղարկել" class="btn btn-primary">
                </form>
            </div>





        </div>
    </div>


@endsection
