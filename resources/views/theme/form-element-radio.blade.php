<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mazer-assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer-assets/vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-assets/vendors/bootstrap-icons/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('mazer-assets/css/app.css') }}">
    <link rel="shortcut icon" href="{{ asset('mazer-assets/images/favicon.svg') }}" type="image/x-icon">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header">
                    <div class="d-flex justify-content-between">
                        <div class="logo">
                            <a href="{{ url('/theme/index') }}"><img src="{{ asset('mazer-assets/images/logo/logo.png') }}" alt="Logo" srcset=""></a>
                        </div>
                        <div class="toggler">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title">Menu</li>

                        <li class="sidebar-item  ">
                            <a href="{{ url('/theme/index') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-stack"></i>
                                <span>Components</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/component-alert') }}">Alert</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/component-badge') }}">Badge</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/component-breadcrumb') }}">Breadcrumb</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/component-button') }}">Button</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/component-card') }}">Card</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/component-carousel') }}">Carousel</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/component-dropdown') }}">Dropdown</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/component-list-group') }}">List Group</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/component-modal') }}">Modal</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/component-navs') }}">Navs</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/component-pagination') }}">Pagination</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/component-progress') }}">Progress</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/component-spinner') }}">Spinner</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/component-tooltip') }}">Tooltip</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Extra Components</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/extra-component-avatar') }}">Avatar</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/extra-component-sweetalert') }}">Sweet Alert</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/extra-component-toastify') }}">Toastify</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/extra-component-rating') }}">Rating</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/extra-component-divider') }}">Divider</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Layouts</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/layout-default') }}">Default Layout</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/layout-vertical-1-column') }}">1 Column</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/layout-vertical-navbar') }}">Vertical with Navbar</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/layout-horizontal') }}">Horizontal Menu</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Forms &amp; Tables</li>

                        <li class="sidebar-item active has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Form Elements</span>
                            </a>
                            <ul class="submenu active">
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/form-element-input') }}">Input</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/form-element-input-group') }}">Input Group</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/form-element-select') }}">Select</a>
                                </li>
                                <li class="submenu-item active">
                                    <a href="{{ url('/theme/form-element-radio') }}">Radio</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/form-element-checkbox') }}">Checkbox</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/form-element-textarea') }}">Textarea</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ url('/theme/form-layout') }}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-medical-fill"></i>
                                <span>Form Layout</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-pen-fill"></i>
                                <span>Form Editor</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/form-editor-quill') }}">Quill</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/form-editor-ckeditor') }}">CKEditor</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/form-editor-summernote') }}">Summernote</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/form-editor-tinymce') }}">TinyMCE</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ url('/theme/table') }}" class='sidebar-link'>
                                <i class="bi bi-grid-1x2-fill"></i>
                                <span>Table</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ url('/theme/table-datatable') }}" class='sidebar-link'>
                                <i class="bi bi-file-earmark-spreadsheet-fill"></i>
                                <span>Datatable</span>
                            </a>
                        </li>

                        <li class="sidebar-title">Extra UI</li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-pentagon-fill"></i>
                                <span>Widgets</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/ui-widgets-chatbox') }}">Chatbox</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/ui-widgets-pricing') }}">Pricing</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/ui-widgets-todolist') }}">To-do List</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-egg-fill"></i>
                                <span>Icons</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/ui-icons-bootstrap-icons') }}">Bootstrap Icons </a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/ui-icons-fontawesome') }}">Fontawesome</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/ui-icons-dripicons') }}">Dripicons</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-bar-chart-fill"></i>
                                <span>Charts</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/ui-chart-chartjs') }}">ChartJS</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/ui-chart-apexcharts') }}">Apexcharts</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ url('/theme/ui-file-uploader') }}" class='sidebar-link'>
                                <i class="bi bi-cloud-arrow-up-fill"></i>
                                <span>File Uploader</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-map-fill"></i>
                                <span>Maps</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/ui-map-google-map') }}">Google Map</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/ui-map-jsvectormap') }}">JS Vector Map</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Pages</li>

                        <li class="sidebar-item  ">
                            <a href="{{ url('/theme/application-email') }}" class='sidebar-link'>
                                <i class="bi bi-envelope-fill"></i>
                                <span>Email Application</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ url('/theme/application-chat') }}" class='sidebar-link'>
                                <i class="bi bi-chat-dots-fill"></i>
                                <span>Chat Application</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ url('/theme/application-gallery') }}" class='sidebar-link'>
                                <i class="bi bi-image-fill"></i>
                                <span>Photo Gallery</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="{{ url('/theme/application-checkout') }}" class='sidebar-link'>
                                <i class="bi bi-basket-fill"></i>
                                <span>Checkout Page</span>
                            </a>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-person-badge-fill"></i>
                                <span>Authentication</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/auth-login') }}">Login</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/auth-register') }}">Register</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/auth-forgot-password') }}">Forgot Password</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-x-octagon-fill"></i>
                                <span>Errors</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/error-403') }}">403</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/error-404') }}">404</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/error-500') }}">500</a>
                                </li>
                            </ul>
                        </li>

                        <li class="sidebar-title">Raise Support</li>

                        <li class="sidebar-item  ">
                            <a href="https://zuramai.github.io/mazer/docs" class='sidebar-link'>
                                <i class="bi bi-life-preserver"></i>
                                <span>Documentation</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="https://github.com/zuramai/mazer/blob/main/CONTRIBUTING.md" class='sidebar-link'>
                                <i class="bi bi-puzzle"></i>
                                <span>Contribute</span>
                            </a>
                        </li>

                        <li class="sidebar-item  ">
                            <a href="https://github.com/zuramai/mazer#donate" class='sidebar-link'>
                                <i class="bi bi-cash"></i>
                                <span>Donate</span>
                            </a>
                        </li>

                    </ul>
                </div>
                <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
            </div>
        </div>
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
                            <h3>Radio</h3>
                            <p class="text-subtitle text-muted">Choose one from the list with checkbox</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/theme/index') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Radio</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Default Radio</h4>
                                </div>
                                <div class="card-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Default radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="flexRadioDefault2" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Default checked radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                            id="flexRadioDisabled" disabled>
                                        <label class="form-check-label" for="flexRadioDisabled">
                                            Disabled radio
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDisabled"
                                            id="flexRadioCheckedDisabled" checked disabled>
                                        <label class="form-check-label" for="flexRadioCheckedDisabled">
                                            Disabled checked radio
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Colors</h4>
                                </div>
                                <div class="card-body">
                                    <p>Use class <code>.form-check-{color}</code> with <code>.form-check</code> to
                                        change radio
                                        color</p>
                                    <div class="form-check form-check-primary">
                                        <input class="form-check-input" type="radio" name="Primary" id="Primary"
                                            checked>
                                        <label class="form-check-label" for="Primary">
                                            Primary
                                        </label>
                                    </div>
                                    <div class="form-check form-check-secondary">
                                        <input class="form-check-input" type="radio" name="Secondary" id="Secondary"
                                            checked>
                                        <label class="form-check-label" for="Secondary">
                                            Secondary
                                        </label>
                                    </div>
                                    <div class="form-check form-check-warning">
                                        <input class="form-check-input" type="radio" name="Warning" id="Warning"
                                            checked>
                                        <label class="form-check-label" for="Warning">
                                            Warning
                                        </label>
                                    </div>
                                    <div class="form-check form-check-danger">
                                        <input class="form-check-input" type="radio" name="Danger" id="Danger" checked>
                                        <label class="form-check-label" for="Danger">
                                            Danger
                                        </label>
                                    </div>
                                    <div class="form-check form-check-success">
                                        <input class="form-check-input" type="radio" name="Success" id="Success"
                                            checked>
                                        <label class="form-check-label" for="Success">
                                            Success
                                        </label>
                                    </div>
                                    <div class="form-check form-check-dark">
                                        <input class="form-check-input" type="radio" name="Dark" id="Dark" checked>
                                        <label class="form-check-label" for="Dark">
                                            Dark
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Switches</h4>
                                </div>
                                <div class="card-body">
                                    <p>A switch has the markup of a custom checkbox but uses the
                                        <code>.form-switch</code> class to
                                        render a toggle switch. Switches also support the disabled attribute.</p>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Default switch
                                            checkbox
                                            input</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                            checked>
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch
                                            checkbox
                                            input</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" id="flexSwitchCheckDisabled"
                                            disabled>
                                        <label class="form-check-label" for="flexSwitchCheckDisabled">Disabled switch
                                            checkbox
                                            input</label>
                                    </div>
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox"
                                            id="flexSwitchCheckCheckedDisabled" checked disabled>
                                        <label class="form-check-label" for="flexSwitchCheckCheckedDisabled">Disabled
                                            checked switch
                                            checkbox input</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="section">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">With Buttons</h4>
                                </div>
                                <div class="card-body">
                                    <p>A switch has the markup of a custom checkbox but uses the
                                        <code>.form-switch</code> class to
                                        render a toggle switch. Switches also support the disabled attribute.</p>
                                    <input type="radio" class="btn-check" name="options-outlined" id="success-outlined"
                                        autocomplete="off" checked>
                                    <label class="btn btn-outline-success" for="success-outlined">Checked success
                                        radio</label>

                                    <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined"
                                        autocomplete="off">
                                    <label class="btn btn-outline-danger" for="danger-outlined">Danger radio</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="http://ahmadsaugi.com">A. Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset('mazer-assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>
    <script src="{{ asset('mazer-assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('mazer-assets/js/main.js') }}"></script>
</body>

</html>