@extends('layouts.app')

@section('content')
    <div class="login-signin">
        <div class="mb-20">
            <h3 class="opacity-40 font-weight-normal">Մուտք գործեք</h3>
            <p class="opacity-40">Մուտք գործելով դուք կունենաք հավելյալ հնարավորություններ</p>
        </div>
        <form class="form fv-plugins-bootstrap fv-plugins-framework" id="kt_login_signin_form" novalidate="novalidate" method="POST" action="{{ route('login') }}">

            @csrf

            <div class="form-group fv-plugins-icon-container">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('email') is-invalid @enderror" value="{{ old('email') }}"  type="text" placeholder="Էլ․ Հասցե" name="email" autocomplete="off">
                <div class="fv-plugins-message-container text-danger h3">
                    @error('email')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group fv-plugins-icon-container">
                <input class="form-control h-auto text-white bg-white-o-5 rounded-pill border-0 py-4 px-8 @error('password') is-invalid @enderror" type="password" placeholder="Գաղտնաբառ" name="password">
                <div class="fv-plugins-message-container text-danger h3">
                    @error('password')
                    <strong>{{ $message }}</strong>
                    @enderror
                </div>
            </div>

            <div class="form-group d-flex flex-wrap justify-content-between align-items-center px-8 opacity-60">
                <div class="checkbox-inline">
                    <label class="checkbox checkbox-outline checkbox-white text-white m-0">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span></span>Հիշիր ինձ
                    </label>
                </div>
                {{--                            <a href="javascript:;" id="kt_login_forgot" class="text-white font-weight-bold">Forget Password ?</a>--}}
            </div>
            <div class="form-group text-center mt-10">
                <button id="kt_login_signin_submit" class="btn btn-pill btn-primary opacity-90 px-15 py-3">Մուտք</button>
                <a href="/" id="kt_login_signup_cancel" class="btn btn-pill btn-outline-white opacity-70 px-15 py-3 m-2">Գլխավոր</a>
            </div>
            <input type="hidden"><div></div>
        </form>
        <div class="mt-10">
            <span class="opacity-40 mr-4">Չունե՞ս դեռ քո անձնական էջը</span>
            <a href="/register" id="kt_login_signup" class="text-white opacity-30 font-weight-normal">Գրանցվիր</a>
        </div>
    </div>
@endsection
