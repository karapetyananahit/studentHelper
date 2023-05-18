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
        <h1 class="page-title">Կայքեր որոնք կօգնեն սովորել ծրագրավորում</h1>
    </div>

    <div class="row">
        @foreach($websites as $w)
            <div class="col-md-6">
                <div class="card py-3 px-6">
                    <!--begin::Mixed Widget 7-->

                    <a href="{{$w->url}}" class="font-weight-bolder text-hover-primary font-size-h5" target="_blank">{{$w->name}}</a>
                    <a href="{{$w->url}}" class="text-dark font-weight-bolder text-hover-primary font-size-h6 mb-5" target="_blank">{{$w->url}}</a>

                    <div class="d-flex flex-column">
                        <div class="">
                            @foreach(explode(",", $w->languages) as $type)
                                @php $type = explode("@", $type); @endphp
    {{--                                    {{dd($type)}}--}}
                                <span class="label label-{{$colors[$type[1]]}} label-pill label-inline mr-2 mb-2 p-4" style="font-size: 12px">
                                    <b>{{$type[0]}}</b>
                                </span>
                            @endforeach
                        </div>
                    </div>
                    <!--end::Mixed Widget 7-->
                </div>
            </div>
        @endforeach
    </div>


@endsection
