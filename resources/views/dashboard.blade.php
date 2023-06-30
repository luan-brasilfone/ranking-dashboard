@extends('layout')

@section('head')
    <title>{{ __('Number Ranking') }} - {{ __('Dashboard') }}</title>
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
                <h3>{{ __('Dashboard') }}</h3>
            </div>
            <div class="page-content">
                <section class="row">
                    <div class="col-12 row">
                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="stats-icon purple">
                                                <i class="iconly-boldShow"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <h6 class="text-muted font-semibold">{{ trans_choice('Ranked', 2) }}</h6>
                                            <h6 class="font-extrabold mb-0" id="ranks">0</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="stats-icon blue">
                                                <i class="iconly-boldProfile"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <h6 class="text-muted font-semibold">{{ trans_choice('Providers', 2) }}</h6>
                                            <h6 class="font-extrabold mb-0" id="providers">0</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="stats-icon green">
                                                <i class="iconly-boldAdd-User"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <h6 class="text-muted font-semibold">{{ __('Active MOs') }}</h6>
                                            <h6 class="font-extrabold mb-0" id="mos">0</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body px-3 py-4-5">
                                    <div class="row">
                                        <div class="col-4">
                                            <div class="stats-icon red">
                                                <i class="iconly-boldDanger"></i>
                                            </div>
                                        </div>
                                        <div class="col-8">
                                            <h6 class="text-muted font-semibold">{{ __('Error Logs') }}</h6>
                                            <h6 class="font-extrabold mb-0" id="logs">0</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9">
                        <!-- <div class="row">
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon purple">
                                                    <i class="iconly-boldShow"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">{{ trans_choice('Ranked', 2) }}</h6>
                                                <h6 class="font-extrabold mb-0" id="ranks">0</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="iconly-boldProfile"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">{{ trans_choice('Providers', 2) }}</h6>
                                                <h6 class="font-extrabold mb-0" id="providers">0</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">{{ __('Active MOs') }}</h6>
                                                <h6 class="font-extrabold mb-0" id="mos">0</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 d-lg-none col-md-3"></div>
                            <div class="col-6 col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="iconly-boldAdd-User"></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">{{ __('Active MOs') }}</h6>
                                                <h6 class="font-extrabold mb-0" id="mos">0</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 d-lg-none col-md-3"></div>
                        </div> -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>{{ trans_choice('Ranked', 2) }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-ranked"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>{{ __('Status over time') }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                        style="width:10px">
                                                        <use
                                                            xlink:href="{{ asset('mazer-assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill') }}" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">{{ __('Total') }}</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <h5 class="mb-0" id="ranked-total">0</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <svg class="bi text-success" width="32" height="32" fill="blue"
                                                        style="width:10px">
                                                        <use
                                                            xlink:href="{{ asset('mazer-assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill') }}" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">{{ __('Good') }}</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <h5 class="mb-0" id="ranked-good">0</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <svg class="bi text-danger" width="32" height="32" fill="blue"
                                                        style="width:10px">
                                                        <use
                                                            xlink:href="{{ asset('mazer-assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill') }}" />
                                                    </svg>
                                                    <h5 class="mb-0 ms-3">{{ __('Bad') }}</h5>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <h5 class="mb-0" id="ranked-bad">0</h5>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                <div id="chart-total"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>{{ __('Status') }}</h4>
                                    </div>
                                    <div class="card-body">
                                        <div id="chart-success-error"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-12 col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>{{ __('Ranked by provider') }}</h4>
                                    </div>
                                    <div style="max-height: 350px" class="card-body overflow-auto">
                                        <div class="table-responsive">
                                            <table class="table table-hover table-lg">
                                                <thead>
                                                    <tr>
                                                        <th>{{ trans_choice('Provider', 1) }}</th>
                                                        <th>{{ trans_choice('Ranked', 2) }}</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="d-none" id="ranked-by-provider">
                                                        <td class="col-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar avatar-md">
                                                                    <img src="{{ asset('mazer-assets/images/favicon-32x32.png') }}">
                                                                </div>
                                                                <p class="font-bold ms-3 mb-0" id="ranked-by-provider-name">0</p>
                                                            </div>
                                                        </td>
                                                        <td class="col-auto">
                                                            <p class=" mb-0" id="ranked-by-provider-total">0</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h4>{{ __('Last MOs') }}</h4>
                                    </div>
                                    <div class="card-content pb-4">
                                        <div class="recent-message d-flex px-4 py-3 d-none" id="last-mo">
                                            <div class="avatar avatar-lg">
                                                <img src="{{ asset('mazer-assets/images/android-chrome-192x192.png') }}">
                                            </div>
                                            <div class="name ms-4">
                                                <h5 class="mb-1">Hank Schrader</h5>
                                                <h6 class="text-muted mb-0">@johnducky</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="col-12 col-lg-3">
                        <!-- <div class="card">
                            <div class="card-body py-4 px-5">
                                <div class="d-flex align-items-center">
                                    <div class="">
                                        <img src="{{ asset('mazer-assets/images/button/error.png') }}" alt="Error">
                                    </div>
                                    <div class="ms-3 name">
                                        <h5 class="font-bold">0</h5>
                                        <h6 class="text-muted mb-0">{{ '@' }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- <div class="card">
                            <div class="card-header">
                                <h4>{{ __('Status') }}</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-success-error"></div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ __('Status over time') }}</h4>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-primary" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use
                                                    xlink:href="{{ asset('mazer-assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill') }}" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">{{ __('Total') }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0" id="ranked-total">0</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-total"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-success" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use
                                                    xlink:href="{{ asset('mazer-assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill') }}" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">{{ __('Good') }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0" id="ranked-good">0</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-good"></div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="d-flex align-items-center">
                                            <svg class="bi text-danger" width="32" height="32" fill="blue"
                                                style="width:10px">
                                                <use
                                                    xlink:href="{{ asset('mazer-assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill') }}" />
                                            </svg>
                                            <h5 class="mb-0 ms-3">{{ __('Bad') }}</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h5 class="mb-0" id="ranked-bad">0</h5>
                                    </div>
                                    <div class="col-12">
                                        <div id="chart-bad"></div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ __('Ranked by provider') }}</h4>
                            </div>
                            <div style="max-height: 338px" class="card-body overflow-auto">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg">
                                        <thead>
                                            <tr>
                                                <th>{{ trans_choice('Providers', 1) }}</th>
                                                <th>{{ trans_choice('Ranked', 2) }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="d-none" id="ranked-by-provider">
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ asset('mazer-assets/images/favicon-32x32.png') }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0" id="ranked-by-provider-name">0</p>
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0" id="ranked-by-provider-total">0</p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4>{{ __('Last MOs') }}</h4>
                            </div>
                            <div class="card-content pb-4">
                                <div class="recent-message d-flex px-4 py-3 d-none" id="last-mo">
                                    <div class="avatar avatar-lg">
                                        <img src="{{ asset('mazer-assets/images/android-chrome-192x192.png') }}">
                                    </div>
                                    <div class="name ms-4">
                                        <h5 class="mb-1">Hank Schrader</h5>
                                        <h6 class="text-muted mb-0">@johnducky</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    @include('layouts.script')
    <script src="{{ asset('mazer-assets/vendors/apexcharts/apexcharts.js') }}"></script>
    <script src="{{ asset('js/dashboard.js') }}"></script>

    <script>
        let config = {};

        fetch("{{ url('api/node/dashboard') }}")
            .then(response => response.json())
            .then(data => {

                let optionsRanked = { series: [{ name: "{{ trans_choice('Ranked', 2) }}", data: [] }], xaxis: { categories: [] } };
                let optionsSuccessError = {
                    labels: [
                        "{{ __('MO') }}",
                        "{{ __('Status 200') }}",
                        "{{ __('Status 404') }}",
                        "{{ __('Status 500') }}",
                        "{{ __('Status 503') }}",
                        "{{ __('Default') }}"
                    ],
                    series: [0, 0, 0, 0, 0, 0]
                };
                let optionsTotal = {
                    series: [
                        {name: '{{ __("Total") }}', data: [] },
                        {name: '{{ __("Good") }}', data: [] },
                        {name: '{{ __("Bad") }}', data: [] }
                    ], xaxis: { categories: [] }
                };
                let rankedTotal = 0, rankedGood = 0, rankedBad = 0;

                for (let i = 14; i >= 1; i--) {

                    let date = new Date(Date.now() - (i-1) * 86400000);
                    
                    optionsRanked.series[0].data.push(data.log_history[`ranked_day${i}`]);

                    // 86400000 = 1 day in milliseconds
                    optionsRanked.xaxis.categories.push("{{ __('Day') }} " + date.getDate());

                    optionsSuccessError.series[0] += parseInt(data.log_history[`ranked_day${i}_MO`]);
                    optionsSuccessError.series[1] += parseInt(data.log_history[`ranked_day${i}_s200`]);
                    optionsSuccessError.series[2] += parseInt(data.log_history[`ranked_day${i}_s404`]);
                    optionsSuccessError.series[3] += parseInt(data.log_history[`ranked_day${i}_s500`]);
                    optionsSuccessError.series[4] += parseInt(data.log_history[`ranked_day${i}_s503`]);
                    optionsSuccessError.series[5] += parseInt(data.log_history[`ranked_day${i}_default`]);

                    optionsTotal.series[0].data.push(parseInt(data.log_history[`ranked_day${i}`]));
                    rankedTotal += parseInt(data.log_history[`ranked_day${i}`]);

                    let good = parseInt(data.log_history[`ranked_day${i}_MO`]) + parseInt(data.log_history[`ranked_day${i}_s200`]);
                    optionsTotal.series[1].data.push(good);
                    rankedGood += good;

                    let bad = parseInt(data.log_history[`ranked_day${i}_s404`]) + parseInt(data.log_history[`ranked_day${i}_s500`])
                       bad += parseInt(data.log_history[`ranked_day${i}_s503`]) + parseInt(data.log_history[`ranked_day${i}_default`]);
                    optionsTotal.series[2].data.push(bad);
                    rankedBad += bad;

                    optionsTotal.xaxis.categories.push(date.toLocaleDateString( '{{ App::getLocale() }}'.replace("_", "-") ));
                }

                config.optionsRanked = optionsRanked;
                config.optionsSuccessError = optionsSuccessError;
                config.optionsTotal = optionsTotal;

                data.log_mo.forEach(mo => {
                    let element = document.getElementById('last-mo').cloneNode(true);
                    element.classList.remove('d-none');
                    element.querySelector('.name h5').innerHTML = mo.provider.charAt(0).toUpperCase() + mo.provider.slice(1);
                    element.querySelector('.name h6').innerHTML = "@"+mo.number;

                    fetch(`{{ url('mazer-assets/images/provider') }}/${mo.provider}.png`)
                        .then(response => response.blob())
                        .then(blob => {
                            if (blob.type == 'image/png'){
                                const img = URL.createObjectURL(blob);
                                element.querySelector('.avatar img').src = img;
                            }
                        });

                    document.querySelector('.card-content').appendChild(element);
                });

                data.ranked_by_provider.forEach(provider => {
                    let element = document.getElementById('ranked-by-provider').cloneNode(true);
                    element.classList.remove('d-none');
                    element.querySelector('#ranked-by-provider-name').innerHTML = provider.code.charAt(0).toUpperCase() + provider.code.slice(1);
                    element.querySelector('#ranked-by-provider-total').innerHTML = provider.count;

                    fetch(`{{ url('mazer-assets/images/provider') }}/${provider.code}.png`)
                        .then(response => response.blob())
                        .then(blob => {
                            if (blob.type == 'image/png'){
                                const img = URL.createObjectURL(blob);
                                element.querySelector('.avatar img').src = img;
                            }
                        });

                    document.querySelector('#ranked-by-provider').insertAdjacentElement('afterend', element);
                });

                delete data.log_history, delete data.log_mo, delete data.ranked_by_provider;
                
                document.getElementById('ranked-total').innerHTML = rankedTotal;
                document.getElementById('ranked-good').innerHTML = rankedGood;
                document.getElementById('ranked-bad').innerHTML = rankedBad;

                Object.keys(data).forEach(key => {
                    
                    document.getElementById(key).innerHTML = data[key];
                });

                initDashboard(config);
            });

        // window.onload = initDashboard(config);
    </script>
@endsection