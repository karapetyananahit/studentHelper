@extends('layouts.main')


@push('_title', "Գլխավոր")

@push('_styles')
    <link rel="stylesheet" href="{{asset('css/pages/home/index.css')}}">
@endpush

@section('content')

    @include("pages.home._partials.welcome")

@endsection
