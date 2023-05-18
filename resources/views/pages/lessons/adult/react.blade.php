@extends('layouts.main')


@push('_title', "Կուրսեր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/lessons/main.css')}}">
@endpush

@section('content')

    <section class="page_content_adv">

        <div class="left_side">

            <h1 class="global_margin">React & Redux</h1>





            <h2 class="block_title">Ինչ կսովորենք դասի ընթացքում</h2>
            <p class="mb-20 main">React + Redux <b>(24 Դաս)</b></p>

            <ul class="list">
                <li>NPM versions, lock JSON</li>
                <li>Npm list</li>
                <li>Docs</li>
                <li>Virtual DOM,</li>
                <li>components architecture</li>
                <li>Ծանոթացում Life cycle հետ</li>
                <li>state & props</li>
                <li>State async (one single update)</li>
                <li>React-router-dom</li>
                <li>Կպատրաստենք Todo list</li>
                <li>Կստեղծենք մեր project-ը</li>
                <li>Պատրաստվում ենք հարցազրույցի</li>
            </ul>










        </div>

        @include("globals.adv", ["img" => "/img/adv.png"])


    </section>




@endsection
