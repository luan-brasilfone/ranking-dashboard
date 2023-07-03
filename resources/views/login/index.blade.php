@extends('layout')

@section('head')
    <title>{{ __('Number Ranking') }} - {{ __('Log in') }}</title>
    <link rel="stylesheet" href="{{ asset('mazer-assets/css/pages/auth.css') }}">
@endsection

@section('content')
    <div id="auth">

        <div class="row h-100">
            <div class="col-lg-5 col-12">
                <div id="auth-left">
                    <div class="auth-logo">
                        <a href="{{ url('/') }}"><img src="{{ asset('mazer-assets/images/logo/nr-logo-icon.png') }}" alt="Logo" style="width:250px; height:auto"></a>
                    </div>
                    <h1 class="auth-title">{{ __('Log in') }}.</h1>
                    <p class="auth-subtitle mb-5">{{ __('Log in with your registered data') }}.</p>

                    <form action="{{ url('/login') }}" method="post">
                        @csrf
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="text" name="username" placeholder="{{ __('Username') }}" class="form-control form-control-xl">
                            <div class="form-control-icon">
                                <i class="bi bi-person"></i>
                            </div>
                        </div>
                        <div class="form-group position-relative has-icon-left mb-4">
                            <input type="password" name="password" placeholder="{{ __('Password') }}" class="form-control form-control-xl">
                            <div class="form-control-icon">
                                <i class="bi bi-shield-lock"></i>
                            </div>
                        </div>
                        <!-- <div class="form-check form-check-lg d-flex align-items-end">
                            <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                {{ __('Keep me logged in') }}
                            </label>
                        </div> -->
                        <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">{{ __('Log in') }}</button>
                    </form>
                    <!-- <div class="text-center mt-5 text-lg fs-4">
                        <p class="text-gray-600">{{ __('Don\'t have an account') }}?
                            <a href="{{ url('/theme/auth-register') }}" class="font-bold">{{ __('Sign up') }}</a>.
                        </p>
                        <p><a class="font-bold" href="{{ url('/theme/auth-forgot-password') }}">{{ __('Forgot password') }}?</a></p>
                    </div> -->
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div id="auth-right">

                </div>
            </div>
        </div>

    </div>
    @include('layouts.script')
    <script src="{{ asset('mazer-assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script>
        window.onload = function () {
            @if (session()->has('username'))
                document.querySelector("input[type=text]").classList.add("border-danger");
                Swal.fire({
                    title: '{{ __("Error") }}!',
                    text: '{{ session()->get("username") }}.',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    backdrop: true
                });
            @endif
            @if (session()->has('password'))
                document.querySelector("input[type=password]").classList.add("border-danger");
                Swal.fire({
                    title: '{{ __("Error") }}!',
                    text: '{{ session()->get("password") }}.',
                    icon: 'error',
                    confirmButtonText: 'Ok',
                    backdrop: true
                });
            @endif
        };
    </script>
@endsection