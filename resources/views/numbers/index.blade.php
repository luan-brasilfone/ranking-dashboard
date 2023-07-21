@extends('layout')

@section('head')
    <title>{{ __('Number Ranking') }} - {{ trans_choice('Numbers', 2) }}</title>
    <link rel="stylesheet" href="{{ asset('mazer-assets/vendors/simple-datatables/style.css') }}">
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
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>{{ trans_choice('Numbers', 2) }}</h3>
                            <p class="text-subtitle text-muted">{{ __('Search a needle on a haystack') }}</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">Menu</li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        <a href="{{ url('/numbers') }}">{{ trans_choice('Numbers', 2) }}</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>{{ trans_choice('Numbers', 1) }}</th>
                                        <th>{{ __('Ranked SMSs') }}</th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    </div>
    
    @include('layouts.script')
    @include('layouts.dataTable')

    <script>
        setData({
            url: 'numbers',
            fields: ['count'],
            useId: true,
            buttons: ['inspect']
        });
    </script>
@endsection