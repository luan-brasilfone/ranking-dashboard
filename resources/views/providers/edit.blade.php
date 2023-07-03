@extends('layout')

@section('head')
    <title>{{ __('Number Ranking') }} - {{ __('Edit') }} {{ trans_choice('Providers', 1) }}</title>
    <link rel="stylesheet" href="{{ asset('mazer-assets/vendors/sweetalert2/sweetalert2.min.css') }}">
@endsection

@section('content')
    <div id="app">
        @include('layouts.sidebar')
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>

            <div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last"></div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Menu</li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('/providers') }}">{{ trans_choice('Providers', 2) }}</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <a href="{{ url('/providers/edit/'.$code) }}">{{ __('Edit') }} {{ trans_choice('Providers', 1) }}</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="row section">
                    <div class="col-xl-6 col-12 card">
                        <div class="card-header">
                            <h4 class="card-title">{{ __('Edit') }} {{ trans_choice('Providers', 1) }}</h4>
                            <p class="text-subtitle text-muted mb-0">{{ __('Edit a provider reliability by status') }}</p>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                @include('providers.form')
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-12"></div>
                </section>
            </div>
        </div>
    </div>
    @include('layouts.script')

    <script>
        let main = () => {
            let code = '{{ $code }}';

            fetch(`{{ url("/api/node/providers") }}/${code}`)
            .then(response => response.json())
            .then(data => {
                data = JSON.parse(data);

                let fields = {
                    "code": "code",
                    "s200": "s200",
                    "s404": "s404",
                    "s500": "s500",
                    "s503": "s503",
                    "mo": "mo",
                    "default": "default"
                }

                document.querySelector(`input[name="code"]`).value = code;
                document.querySelector(`input[name="code"]`).setAttribute('readonly', true);

                Object.keys(data).forEach(key => {
                    document.querySelector(`input[name="${fields[key]}"]`).value = data[key];
                })
            })
        }

        window.onload = main;
    </script>
@endsection