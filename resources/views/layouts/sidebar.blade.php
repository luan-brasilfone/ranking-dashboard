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
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>