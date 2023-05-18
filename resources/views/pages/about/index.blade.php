@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/about/index.css')}}">
@endpush

@section('content')

    <section class="page_content_adv page_content_adv_blog">

        <div class="left_side left_side_blog">

            @include("pages.about._partials.me")

            @include("globals.instagram")
            @include("pages.home._partials.what_i_do")
        </div>

    </section>


@endsection
