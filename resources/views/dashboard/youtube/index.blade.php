@extends("layouts.admin")

@push('page_name','Dashboard')

@push('_styles')

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


    <div class="page-header d-flex justify-content-between mt-5 my-10">
        <h1 class="page-title">Youtube-յան ալիքներ</h1>
    </div>








    <div class="row">
        @foreach($youtube as $y)
            <div class="col-xl-4 col-md-6">
                <!--begin::Mixed Widget 7-->
                <div class="card card-custom gutter-b card-stretch">
                    <!--begin::Body-->
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center py-1 mb-10">
                            <!--begin:Pic-->
                            <div class="symbol symbol-80 symbol-light-danger mr-5">
                                <span class="symbol-label">
                                    <img src="/{{$y->img}}" class="w-100 align-self-center" alt="">
                                </span>
                            </div>
                            <!--end:Pic-->
                            <!--begin:Title-->
                            <div class="d-flex flex-column flex-grow-1 my-lg-0 my-2 pr-3">
                                <a href="{{$y->url}}" class="text-dark font-weight-bolder text-hover-primary font-size-h5" target="_blank">{{$y->name}} ({{$y->languages}})
                                    <br>{{$y->position}}</a>
                                <span class="text-muted font-weight-bold font-size-lg">{{$y->date}}</span>
                            </div>

                        </div>

                        <div class="w-100 mb-0">
                            <div class="text-dark mr-2 font-size-lg font-weight-bolder">Վիդեոների Փաթեթ: {{$y->playlists}}</div>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg"></span>
                        </div>

                        <div class="w-100 mb-4">
                            <div class="text-dark mr-2 font-size-lg font-weight-bolder">Followers: {{$y->followers}}</div>
                            <span class="text-dark-75 font-weight-bolder d-block font-size-lg"></span>
                        </div>

                        <div class="d-flex flex-column">
                            <div class="text-dark mr-2 font-size-lg font-weight-bolder pb-4">Կատեգորիաներ</div>

                            <div class="">
                                @foreach(explode(",", $y->types) as $type)
                                    @php $type = explode("@", $type); @endphp
                                    <span class="label label-{{$colors[$type[1]]}} label-pill label-inline mr-2 mb-2 p-4" style="font-size: 12px">
                                        <b>{{$type[0]}}</b>
                                    </span>
                                @endforeach
                            </div>
                        </div>

{{--                        <hr class="mb-10">--}}

{{--                        <div>--}}
{{--                            <a href="{{$y->url}}" class="w-100 btn btn-primary" target="_blank">Տեսնել</a>--}}
{{--                        </div>--}}
                            <!--end:Team-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Mixed Widget 7-->
            </div>
        @endforeach
    </div>


@endsection
