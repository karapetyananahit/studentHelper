@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/lessons/main.css')}}">
@endpush

@section('content')

    <section class="page_content_adv">

        <div class="left_side">

            <h1 class="global_margin">Php & Laravel</h1>





            <h2 class="block_title">Ինչ կսովորենք դասի ընթացքում</h2>
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
                <li>Պատրաստվում ենք հարցազրույցին</li>
            </ul>








        </div>

        @include("globals.adv", ["img" => "/img/adv.png"])


    </section>




@endsection
