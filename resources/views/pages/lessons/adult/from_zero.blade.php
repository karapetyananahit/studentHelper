@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/lessons/main.css')}}">
@endpush

@section('content')

    <section class="page_content_adv">

        <div class="left_side">

            <h1 class="global_margin">Ծրագրավորում 0-ից</h1>





            <h2 class="block_title">Ինչ կսովորենք դասի ընթացքում</h2>
            <p class="mb-20 main">HTML, CSS, Bootstrap <b>(12 Դաս)</b></p>

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

            <p class="mb-20 main">Javascript<b>(12 Դաս)</b></p>

            <ul class="list">
                <li>Ի՞նչ է բլոկ սխեման, ալգորիթմներ, փոփոխականներ, պայմաններ, օպերատորներ</li>
                <li>Ին՞չ է JavaScript - ը, փոփոխականներ, տվյալների տիպեր</li>
                <li>Օպերատորներ, ցիկլեր</li>
                <li>Ֆունկցիաներ, Ռեկուրսիվ ֆունկցիաներ</li>
                <li>Զանգվածներ, զանգվածների հետ աշխատող մեթոդներ</li>
                <li>Ին՞չ է ֆունկցիան, ֆունկցիաների օրինակեր</li>
            </ul>

            <p class="mb-20 main">jQuery, Oop<b>(6 Դաս)</b></p>

            <ul class="list">
                <li>Ինչպե՞ս պատրաստել հաշվիչ</li>
                <li>Ինչպե՞ս պատրաստել ավտոմատ ստուգող թեստ</li>
                <li>Class-ներ, Object-ներ</li>
                <li>Static & Not Static Methods</li>
                <li>LocalStorage, SessionStorage</li>
            </ul>

            <p class="mb-20 main">Խնդիրներ <b>(3 Դաս)</b></p>

            <ul class="list">
                <li>Խնդիրները իրենց մի քանի եղանակներով</li>
            </ul>

            <p class="mb-20 main">Interview <b>(3 Դաս)</b></p>

            <ul class="list">
                <li>Պատրաստվում ենք հարցազրույցի</li>
            </ul>

            <p class="mb-20 main">PHP, MySQL & OOP <b>(24 Դաս)</b></p>

            <ul class="list">
                <li>Ինչպե՞ս գրել PHP կոդ, փոփոխականներ, հաստատուններ, տվյալների տիպեր։</li>
                <li>Ցիկլեր, Զանգվածներ, Ֆունկցիաներ, Փոփոխականների տեսանելիության տիրույթ, Ռեկուրսիա:</li>
                <li>Սուպերգլոբալ փոփոխականներ:Քուքիներ, սեսսիաներ:</li>
                <li>Include, require ֆունկցիաներ:</li>
                <li>Տվյալների բազաներ: Գործիքներ, որոնք աշխատում են MySql տվյալների բազայի հետ:
                    <ul>
                        <li>Select</li>
                        <li>Update</li>
                        <li>Insert</li>
                        <li>Where In</li>
                        <li>Group By</li>
                        <li>Join, Left Join, Right Join</li>
                    </ul>
                </li>
                <li>Ի՞նչ է OOP - ն, գաղափար օբյեկտ կողմնորոշված ծրագրավորման մասին։</li>
                <li>Գաղափար կոնստրուկտորի մասին, հասանելիության տիրույթը, կախարդական մեթոդներ։</li>
                <li>Ի՞նչ է Framework-ը։</li>
            </ul>

            <p class="mb-20 main">Laravel <b>(12 Դաս)</b></p>

            <ul class="list">
                <li>Ինչպես install անել Ձեր առաջին Laravel project-ը</li>
                <li>Composer, գաղափար նրա մասին</li>
                <li>Գաղափար Model, View, Controller-ների մասին</li>
                <li>Routing</li>
                <li>Migration</li>
                <li>Seed</li>
                <li>Factory</li>
                <li>Validation</li>
                <li>Middleware</li>
                <li>Կստեղծենք Մեր Սեփական project-ը։</li>
                <li>Պատրաստվում ենք գլխավոր հարցազրույցին</li>
            </ul>








        </div>

        @include("globals.adv", ["img" => "/img/adv.png"])


    </section>




@endsection
