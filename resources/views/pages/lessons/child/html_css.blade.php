@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/lessons/main.css')}}">
@endpush

@section('content')

    <section class="page_content_adv">

        <div class="left_side">

            <h1 class="global_margin">HTML & CSS</h1>

            <h2 class="block_title">Ինչ կսովորենք դասի ընթացքում</h2>
            <p class="mb-20 main">HTML, CSS, Bootstrap <b>(24 Դաս)</b></p>

            <ul class="list">
                <li>Ինչ է HTML-ը</li>
                <li>Տեգեր և ատրիբուտներ</li>
                <li>Ցանկեր և Աղյուսակներ</li>
                <li>Input դաշտեր</li>
                <li>Ինչ է CSS-ը</li>
                <li>color, background</li>
                <li>տառաչափ, տառատեսակ</li>
                <li>CSS-ի ժառանգություն, հատկությունների խմբագրում</li>
                <li>inline &amp; block</li>
                <li>flex box</li>
                <li>անիմացիա, CSS մեդիա</li>
                <li>Bootstrap-ի maximal ծանոթացում</li>
            </ul>






        </div>

        @include("globals.adv", ["img" => "/img/adv.png"])


    </section>




@endsection
