@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/lessons/main.css')}}">
@endpush

@section('content')

    <section class="page_content_adv">

        <div class="left_side">

            <h1 class="global_margin">JavaScript +</h1>

            <h2 class="block_title">Ինչ կսովորենք դասի ընթացքում</h2>
            <p class="mb-20 main">Javascript, Oop <b>(8 Դաս)</b></p>

            <ul class="list">
                <li>Զանգվածներ, զանգվածների հետ աշխատող մեթոդներ (մաս 2)</li>
                <li>Class-ներ, Object-ներ</li>
                <li>Static & Not Static Methods</li>
                <li>LocalStorage, SessionStorage</li>
            </ul>

            <p class="mb-20 main">Խնդիրներ տարբեր բարդության<b>(8 Դաս)</b></p>

            <ul class="list">
                <li>Խնդիրները իրենց մի քանի եղանակներով</li>
            </ul>

            <p class="mb-20 main">Interview <b>(3 Դաս)</b></p>

            <ul class="list">
                <li>Պատրաստվում ենք հարցազրույցի</li>
            </ul>





        </div>

        @include("globals.adv", ["img" => "/img/adv.png"])


    </section>




@endsection
