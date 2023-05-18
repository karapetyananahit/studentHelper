@extends("layouts.admin")

@push('_styles')

@endpush

@push('_js')

@endpush

@section("content")


    <div class="py-10">
        <div class="mb-6 h2">{{Auth::user()->questions_corrects}} / {{Auth::user()->questions_times}}</div>
            @if(Auth::user()->questions_times)
                <div class="progress bg-secondary mb-6">
                    <div
                        class="progress-bar progress-bar-striped
                            @if(round(Auth::user()->questions_corrects / Auth::user()->questions_times * 100) > 66.6)
                                bg-success
                            @elseif(round(Auth::user()->questions_corrects / Auth::user()->questions_times * 100) > 33.3)
                                bg-warning
                            @else
                                bg-danger
                            @endif
                        "
                        role="progressbar"
                        style="width: {{round(Auth::user()->questions_corrects / Auth::user()->questions_times * 100)}}%"
                        aria-valuenow="{{round(Auth::user()->questions_corrects / Auth::user()->questions_times * 100)}}"
                        aria-valuemin="0"
                        aria-valuemax="100"
                    >
                    </div>
                </div>


            @endif
        </div>

        <div class="py-10 text-center">
            <h2 class="mb-6">Այսօր դու խաղացել ես {{Auth::user()->questions_times_today}} / 10</h2>



            @if(app('request')->input("q") == "true")
                <div class="text-success mb-5 h3">Դուք պատասխանեցիք ճիշտ</div>
            @elseif(app('request')->input("q") == "false")
                <div class="text-danger mb-5 h3">Դուք պատասխանեցիք սխալ</div>
            @elseif(app('request')->input("q") == "hack")
                <div class="text-danger mb-5 h3">Ձեր պատասխանը ընդունվեց սխալ, քանի որ դուք լքեցիք էջը</div>
            @elseif(app('request')->input("q") == "time")
                <div class="text-danger mb-5 h3">Ձեր պատասխանը ընդունվեց սխալ, քանի որ սպառվեց Ձեր ժամանակը</div>
            @endif




            @if(Auth::user()->questions_times_today < 10)
                <a href="/dashboard/questions/start" class="btn btn-light-primary border-primary">
                    @if(app('request')->input("q") == null)
                        Սկսել խաղալ
                    @else
                        Հաջորդը
                    @endif
                </a>
            @else
                <div class="text-danger mb-5 h3">Այսօր սպառել եք Ձեզ հատկացված քանակը։ Վերադաձեք վաղը։</div>
            @endif
        </div>





@endsection
