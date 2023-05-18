@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/lessons/main.css')}}">
@endpush

@section('content')

    <section class="page_content_adv">

        <div class="left_side">

            <h1 class="global_margin">JavaScript</h1>





            <h2 class="block_title">Ինչ կսովորենք դասի ընթացքում</h2>
            <p class="mb-20 main">Javascript<b>(16 Դաս)</b></p>

            <ul class="list">
                <li>Ի՞նչ է բլոկ սխեման, ալգորիթմներ, փոփոխականներ, պայմաններ, օպերատորներ</li>
                <li>Ին՞չ է JavaScript - ը, փոփոխականներ, տվյալների տիպեր</li>
                <li>Օպերատորներ, ցիկլեր</li>
                <li>Ֆունկցիաներ, Ռեկուրսիվ ֆունկցիաներ</li>
                <li>Զանգվածներ, զանգվածների հետ աշխատող մեթոդներ</li>
                <li>Ին՞չ է ֆունկցիան, ֆունկցիաների օրինակեր</li>
            </ul>

            <p class="mb-20 main">jQuery, Oop<b>(8 Դաս)</b></p>

            <ul class="list">
                <li>Ինչպե՞ս պատրաստել հաշվիչ</li>
                <li>Ինչպե՞ս պատրաստել ավտոմատ ստուգող թեստ</li>
                <li>Class-ներ, Object-ներ</li>
                <li>Static & Not Static Methods</li>
                <li>LocalStorage, SessionStorage</li>
            </ul>

            <p class="mb-20 main">Խնդիրներ <b>(8 Դաս)</b></p>

            <ul class="list">
                <li>Խնդիրները իրենց մի քանի եղանակներով</li>
            </ul>

            <p class="mb-20 main">Interview <b>(4 Դաս)</b></p>

            <ul class="list">
                <li>Պատրաստվում ենք հարցազրույցի</li>
            </ul>








        </div>

        @include("globals.adv", ["img" => "/img/adv.png"])


    </section>




@endsection
