@extends("layouts.admin")

@push('page_name','Dashboard')

@push('_styles')
    <style>
        .product {
            position: relative;
            box-shadow: inset #cdcdcd 0px 0px 3px 0px;
            border-radius: 5px;
            overflow: hidden;
            height: 120px;
        }
        .line{
            position: absolute;
            width: 200%;
            height: 170px;
            background: linear-gradient(#032e5d, #0072db);
            left: 0;
            bottom: 0;
            transform: rotate(
                120deg
            );
        }
        .product .price{
            position: absolute;
            bottom: 15px;
            right: 15px;
            color: white;
            font-size: 16px;
        }
        .product h5{
            color: #032e5d;
            font-weight: bold;
        }
    </style>
@endpush

@section("content")

    <div class="container">
        <div class="container-with-adv">

            <div class="container-content">

                <div class="page-header d-flex justify-content-between my-5">
                    <h1 class="page-title">Խանութ</h1>
                </div>

{{--                <div class="alert alert-light-primary">--}}
{{--                    <h2 class="mb-5">Շուտով...</h2>--}}
{{--                    <p>Շուտով այստեղ կտեսնեք թե ինչով կարող եք փոխարինել Ձեր միավորները</p>--}}
{{--                </div>--}}
                <div class="row">
                    @foreach($products as $p)
                        <div class="col-md-6 col-xs-12">
                            <div class="product px-5 pt-5 mb-10">
                                <div class="line"></div>
                                <h5>{!! $p["name"] !!}</h5>
                                <div class="price">{{$p["price"]}} միավոր</div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>


        </div>
    </div>


@endsection
