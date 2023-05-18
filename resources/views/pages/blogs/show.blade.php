@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/blogs/show.css')}}">
@endpush

@section('content')

    <section class="page_content_adv page_content_adv_blog">

        <div class="left_side left_side_blog">

            <div class="single_blog">
                <h3 class="block_title">{{$blog->title}}</h3>

                <div class="blog_description">{!! $blog->description !!}</div>

                <p class="global_margin"><b>Հրապարակվել է։</b> {{$blog->date}}</p>
            </div>

        </div>

    </section>


@endsection
