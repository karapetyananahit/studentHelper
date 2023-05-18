@extends("layouts.admin")

@push('page_name','Նորություններ')

@push('_styles')

@endpush

@section("content")

    <div class="container">
        <div class="container-with-adv">
            <div class="container-content">



                @php
                    $types = [
                        "success" => "Ավելացում",
                        "primary" => "Թարմացում",
                        "warning" => "Զգուշացում",
                        "danger" => "Հեռացում",
                        "dark" => "Այլն",
                    ]
                @endphp

                <div class="mb-30">
                    <h1 class="page-title my-5">Նորությունները</h1>
                    <div class="mb-10">
                        @foreach($types as $t => $text)
                        <span class="label label-lg label-inline label-light-{{$t}}">{{$text}}</span>
                        @endforeach
                    </div>


                    @foreach($news as $n)
                        <div class="alert bg-light-{{$n->type}}">
                            <h2>{{$types[$n->type]}}</h2>
                            <p class="font-size-h5 mb-5">{!! $n->description !!}</p>
                            <div class="text-right">
                                {{$n->date}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>



        </div>
    </div>


@endsection
