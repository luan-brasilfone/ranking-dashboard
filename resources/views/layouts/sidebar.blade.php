<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="position-relative" style="background-image: url('<?= asset('mazer-assets/images/logo/nr-logo-icon.png') ?>'); width: 100%; height: 100px; background-repeat: no-repeat; background-position: center; background-size: cover;">
                    <a class="position-absolute" style="top: 0; left: 0; bottom: 0; right: 0" href="{{ url('/dashboard') }}"></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-title">Menu</li>

                <li class="sidebar-item">
                    <a href="{{ url('/dashboard') }}" class='sidebar-link'>
                        <i class="bi bi-grid-fill"></i>
                        <span>{{ __('Dashboard') }}</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="{{ url('/providers') }}" class='sidebar-link'>
                        <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                        <span>{{ trans_choice('Providers', 2) }}</span>
                    </a>
                </li>

                <script>
                    document.querySelector('a.sidebar-link[href="{{ Request::url() }}"]').parentElement.classList.add('active');
                </script>
            </ul>
        </div>

        @if (session()->has('user'))
            <div class="position-absolute bottom-0 p-2 w-100">
                <div class="d-flex align-items-center justify-content-around w-100">
                    <div class="row align-items-center">
                        <div class="col-3" style="padding-top: 10px">
                            <i class="bi bi-person-circle" style="font-size: 2rem;"></i>
                        </div>
                        <div class="col-9" style="font-weight: 600;">
                            <span style="margin-top: 5rem">{{ session()->get('user') }}</span>
                        </div>
                    </div>
                    <a href="{{ url('/login/logout') }}" class="btn text-white" style="background-color: #435ebe; font-weight: 600;">{{ __('Log out') }}</a>
                </div>
            </div>
        @endif

        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>