@extends("layouts.admin")

@push('page_name','Dashboard')

@push('_styles')

@endpush

@section("content")

    <div class="container">
        <div class="container-with-adv">

            <div class="container-content">

                <div class="page-header d-flex justify-content-between mt-5 mb-10">
                    <h1 class="page-title">Մեդալներ</h1>
                </div>

                <div>
                    @foreach($medals as $medal)
                        @foreach($medal["images"] as $img)
                            <img src="{{$img}}" width="50" alt="" class="mr-10">
                        @endforeach
                        <h2>{{$medal["name"]}} <span class="label label-lg label-warning font-weight-bold label-inline">{{$medal["points"]}} միավոր</span></h2>
                        <p class="mb-10">{{$medal["text"]}}</p>
                    @endforeach
                </div>

            </div>



        </div>
    </div>


@endsection
