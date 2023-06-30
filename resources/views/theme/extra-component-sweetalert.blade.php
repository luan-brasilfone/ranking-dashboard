<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sweet Alert - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mazer-assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer-assets/vendors/sweetalert2/sweetalert2.min.css') }}">

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

                        <li class="sidebar-item active has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-collection-fill"></i>
                                <span>Extra Components</span>
                            </a>
                            <ul class="submenu active">
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/extra-component-avatar') }}">Avatar</a>
                                </li>
                                <li class="submenu-item active">
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

                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-hexagon-fill"></i>
                                <span>Form Elements</span>
                            </a>
                            <ul class="submenu ">
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/form-element-input') }}">Input</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/form-element-input-group') }}">Input Group</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/form-element-select') }}">Select</a>
                                </li>
                                <li class="submenu-item ">
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
                            <h3>Sweet Alert</h3>
                            <p class="text-subtitle text-muted">A beautiful replacement for javascript alerts</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/theme/index') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Sweet Alert</li>
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
                                    <h4 class="card-title">Basic Sweet Alert</h4>
                                    <p class="text-muted">SweetAlert automatically centers itself on the page and looks
                                        great no
                                        matter if you're using a desktop computer, mobile or tablet. It's even highly
                                        customizable,
                                        as you can see below!</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <button id="basic" class="btn btn-outline-primary btn-lg btn-block">Basic
                                                Example</button>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <button id="title" class="btn btn-outline-primary btn-lg btn-block">A title
                                                with a text
                                                under</button>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <button id="footer" class="btn btn-outline-primary btn-lg btn-block">With
                                                Footer</button>
                                        </div>
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
                                    <h4 class="card-title">Types</h4>
                                    <p class='text-muted'>The type of the modal. SweetAlert comes with 5 built-in types
                                        which will
                                        show a corresponding icon animation: "warning", "error", "success" and "info".
                                        You can also
                                        set it as "input" to get a prompt modal. It can either be put in the object
                                        under the key
                                        "icon" or passed as the third parameter of the function.</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <button id="success"
                                                class="btn btn-outline-success btn-lg btn-block">Success</button>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <button id="error"
                                                class="btn btn-outline-danger btn-lg btn-block">Error</button>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <button id="warning"
                                                class="btn btn-outline-warning btn-lg btn-block">Warning</button>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6 col-12">
                                            <button id="info"
                                                class="btn btn-outline-info btn-lg btn-block">Info</button>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <button id="question"
                                                class="btn btn-outline-secondary btn-lg btn-block">Question</button>
                                        </div>
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
                                    <h4 class="card-title">Alert Input</h4>
                                    <p class='text-muted'>The type of the modal. SweetAlert comes with 5 built-in types
                                        which will
                                        show a corresponding icon animation: "warning", "error", "success" and "info".
                                        You can also
                                        set it as "input" to get a prompt modal. It can either be put in the object
                                        under the key
                                        "icon" or passed as the third parameter of the function.</p>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-4 col-12">
                                            <button id="text"
                                                class="btn btn-outline-success btn-lg btn-block">Text</button>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <button id="email"
                                                class="btn btn-outline-danger btn-lg btn-block">Email</button>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <button id="url"
                                                class="btn btn-outline-warning btn-lg btn-block">URL</button>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-4 col-12">
                                            <button id="password"
                                                class="btn btn-outline-info btn-lg btn-block">Password</button>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <button id="textarea"
                                                class="btn btn-outline-secondary btn-lg btn-block">Textarea</button>
                                        </div>
                                        <div class="col-md-4 col-12">
                                            <button id="select"
                                                class="btn btn-outline-secondary btn-lg btn-block">Select</button>
                                        </div>
                                    </div>
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

    <script src="{{ asset('mazer-assets/js/extensions/sweetalert2.js') }}"></script>
    <script src="{{ asset('mazer-assets/vendors/sweetalert2/sweetalert2.all.min.js') }}"></script>

    <script src="{{ asset('mazer-assets/js/main.js') }}"></script>
</body>

</html>