@extends('layouts.app')

@section('content')
    <div class="login-signup">
        <div class="mb-20">
            <h3 class="opacity-40 font-weight-normal">Գրանցվել</h3>
            <p class="opacity-40">Գրանցվելով դուք կունենաք հավելյալ հնարավորություններ</p>
        </div>
        <form class="form text-center fv-plugins-bootstrap fv-plugins-framework" id="kt_login_signup_form" method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group fv-plugins-icon-container">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text" placeholder="Անուն" value="{{ old('name') }}" name="name">
                <div class="fv-plugins-message-container text-danger h3">
                    @error('name')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group fv-plugins-icon-container">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text" placeholder="Ազգանուն" value="{{ old('surname') }}" name="surname">
                <div class="fv-plugins-message-container text-danger h3">
                    @error('surname')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group fv-plugins-icon-container">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="text" placeholder="Էլ․ Հասցե" value="{{ old('email') }}" name="email" autocomplete="off">
                <div class="fv-plugins-message-container text-danger h3">
                    @error('email')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group fv-plugins-icon-container">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password" placeholder="Գաղտնաբառ" name="password">
                <div class="fv-plugins-message-container text-danger h3">
                    @error('password')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group fv-plugins-icon-container">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8" type="password" placeholder="Կրկ․ Գաղտնաբառ" name="password_confirmation">
                <div class="fv-plugins-message-container"></div>
            </div>

            <div class="form-group">
                <button id="kt_login_signup_submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3 m-2" type="submit">Գրանցվել</button>
                <a href="/" id="kt_login_signup_cancel" class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Գլխավոր</a>
            </div>
        </form>
        <div class="mt-10">
            <span class="opacity-40 mr-4">Արդեն օգտատե՞ր ես</span>
            <a href="{{route("login")}}" id="kt_login_signup" class="text-white opacity-30 font-weight-normal">Մուտք գործիր</a>
        </div>
    </div>
@endsection
