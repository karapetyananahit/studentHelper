@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/lessons/index.css')}}">
@endpush

@section('content')

    <section class="page_content">

        <h1 class="global_margin">Դասընթացներ</h1>

        <h2 class="block_title">Սկսնակ մակարդակ</h2>

        <div class="lessons">
            @foreach($childLessons as $lesson)
                <div class="lesson">
                    <div class="lesson_img">
                        <img src="{{$lesson['img']}}" alt="" width="100%">
                    </div>
                    <div class="lesson_info">

                        <div class="lesson_name"></div>

                        <p>Շաբաթական։ {{$lesson['week']}}</p>
                        <p>Տևողությունը։ {{$lesson['duration']}}</p>

                        <div class="lesson_button">
                            <a href="{{$lesson['slug']}}" class="button button_main">Ավելին</a>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>

        @include("globals.instagram")

        <h2 class="block_title">Խորացված մակարդակ</h2>

        <div class="lessons">
            @foreach($adultLessons as $lesson)
                <div class="lesson">
                    <div class="lesson_img">
                        <img src="{{$lesson['img']}}" alt="" width="100%">
                    </div>
                    <div class="lesson_info">

                        <div class="lesson_name">{{$lesson['name']}}</div>

                        <p>Շաբաթական։ {{$lesson['week']}}</p>
                        <p>Տևողությունը։ {{$lesson['duration']}}</p>

                        <div class="lesson_button">
                            @if($lesson['slug'])
                                <a href="{{$lesson['slug']}}" class="button button_main">Ավելին</a>
                            @else
                                <a class="button button_secondary_without_hover">Շուտով</a>
                            @endif
                        </div>

                    </div>
                </div>
            @endforeach

        </div>

    </section>





@endsection
