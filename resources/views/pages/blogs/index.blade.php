@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('css/pages/blogs/index.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/blogs/owl_slider.css')}}">
@endpush

@section('content')

    <section class="page_content_adv">

        <div class="left_side">

            @admin
            <div class="mb-20">
                @if(Route::currentRouteName() === "blogs.hidden")
                    <a href="/blogs" class="button button_main">Shown Blogs</a>
                @else
                    <a href="/blogs/hidden" class="button button_main">Hidden Blogs</a>
                @endif
            </div>
            @endadmin

            @if(count($blogs))
                <div class="container">
                    <div class="owl-carousel">
                        @foreach($blogs as $blog)
                            <div class="blogs">
                                <a class="blog" href="/blogs/show/{{$blog->id}}">
                                    <img src="{{$blog->img}}" width="100%" alt="{{$blog->title}}">
                                    <p>{{$blog->title}}</p>
                                    <p>{{$blog->date}}</p>
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>

            @else

                <h1>Շուտով</h1>

            @endif

        </div>

    </section>

@endsection
