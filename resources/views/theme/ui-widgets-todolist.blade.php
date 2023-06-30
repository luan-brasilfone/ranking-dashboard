<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mazer-assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer-assets/vendors/dragula/dragula.min.css') }}">

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

                        <li class="sidebar-item active has-sub">
                            <a href="#" class='sidebar-link'>
                                <i class="bi bi-pentagon-fill"></i>
                                <span>Widgets</span>
                            </a>
                            <ul class="submenu active">
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/ui-widgets-chatbox') }}">Chatbox</a>
                                </li>
                                <li class="submenu-item ">
                                    <a href="{{ url('/theme/ui-widgets-pricing') }}">Pricing</a>
                                </li>
                                <li class="submenu-item active">
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
                            <h3>Todo List</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/theme/index') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Todo List</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Task App Widget Starts -->
                <section class="tasks">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="card widget-todo">
                                <div
                                    class="card-header border-bottom d-flex justify-content-between align-items-center">
                                    <h4 class="card-title d-flex">
                                        <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Tasks
                                    </h4>
                                    <ul class="list-inline d-flex mb-0">
                                        <li class="d-flex align-items-center">
                                            <i class="bx bx-check-circle font-medium-3 me-50"></i>
                                            <div class="dropdown">
                                                <div class="dropdown-toggle me-1" role="button" id="dropdownMenuButton"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">All Task
                                                </div>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="d-flex align-items-center">
                                            <i class="bx bx-sort me-50 font-medium-3"></i>
                                            <div class="dropdown">
                                                <div class="dropdown-toggle" role="button" id="dropdownMenuButton2"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">All Task
                                                </div>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                                    <a class="dropdown-item" href="#">Option 1</a>
                                                    <a class="dropdown-item" href="#">Option 2</a>
                                                    <a class="dropdown-item" href="#">Option 3</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body px-0 py-1">
                                    <ul class="widget-todo-list-wrapper" id="widget-todo-list">
                                        <li class="widget-todo-item">
                                            <div
                                                class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                <div class="widget-todo-title-area d-flex align-items-center">
                                                    <i data-feather="list" class="cursor-move"></i>
                                                    <div class="checkbox checkbox-shadow">
                                                        <input type="checkbox" class="form-check-input" id="checkbox1">
                                                        <label for="checkbox1"></label>
                                                    </div>
                                                    <span class="widget-todo-title ml-50">Add SCSS and JS files if
                                                        required</span>
                                                </div>
                                                <div class="widget-todo-item-action d-flex align-items-center">
                                                    <div class="badge badge-pill badge-light-success me-1">frontend
                                                    </div>
                                                    <div class="avatar bg-warning">
                                                        <img src="{{ asset('mazer-assets/images/faces/1.jpg') }}" alt="" srcset="">
                                                    </div>
                                                    <i
                                                        class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="widget-todo-item">
                                            <div
                                                class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                <div class="widget-todo-title-area d-flex align-items-center">
                                                    <i data-feather="list" class="cursor-move"></i>
                                                    <div class="checkbox checkbox-shadow">
                                                        <input type="checkbox" class="form-check-input" id="checkbox2">
                                                        <label for="checkbox2"></label>
                                                    </div>
                                                    <span class="widget-todo-title ml-50">Check all the changes that you
                                                        did,
                                                        before you commit</span>
                                                </div>
                                                <div class="widget-todo-item-action d-flex align-items-center">
                                                    <div class="badge badge-pill badge-light-danger me-1">backend</div>
                                                    <div class="avatar bg-warning">
                                                        <img src="{{ asset('mazer-assets/images/faces/2.jpg') }}" alt="" srcset="">
                                                    </div>
                                                    <i
                                                        class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="widget-todo-item completed">
                                            <div
                                                class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                <div class="widget-todo-title-area d-flex align-items-center">
                                                    <i data-feather="list" class="cursor-move"></i>
                                                    <div class="checkbox checkbox-shadow">
                                                        <input type="checkbox" class="form-check-input" id="checkbox3"
                                                            checked>
                                                        <label for="checkbox3"></label>
                                                    </div>
                                                    <span class="widget-todo-title ml-50">Dribble, Behance, UpLabs &
                                                        Pinterest
                                                        Post</span>
                                                </div>
                                                <div class="widget-todo-item-action d-flex align-items-center">
                                                    <div class="badge badge-pill badge-light-primary me-1">UI/UX</div>
                                                    <div class="avatar bg-rgba-primary m-0 me-50">
                                                        <img src="{{ asset('mazer-assets/images/faces/3.jpg') }}" alt="" srcset="">
                                                    </div>
                                                    <i
                                                        class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="widget-todo-item">
                                            <div
                                                class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                <div class="widget-todo-title-area d-flex align-items-center">
                                                    <i data-feather="list" class="cursor-move"></i>
                                                    <div class="checkbox checkbox-shadow">
                                                        <input type="checkbox" class="form-check-input" id="checkbox4">
                                                        <label for="checkbox4"></label>
                                                    </div>
                                                    <span class="widget-todo-title ml-50">Fresh Design Web & Responsive
                                                        Miracle</span>
                                                </div>
                                                <div class="widget-todo-item-action d-flex align-items-center">
                                                    <div class="badge badge-pill badge-light-info me-1">Design</div>
                                                    <div class="avatar bg-warning">
                                                        <img src="{{ asset('mazer-assets/images/faces/4.jpg') }}" alt="" srcset="">
                                                    </div>
                                                    <i
                                                        class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="widget-todo-item">
                                            <div
                                                class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                <div class="widget-todo-title-area d-flex align-items-center">
                                                    <i data-feather="list" class="cursor-move"></i>
                                                    <div class="checkbox checkbox-shadow">
                                                        <input type="checkbox" class="form-check-input" id="checkbox5">
                                                        <label for="checkbox5"></label>
                                                    </div>
                                                    <span class="widget-todo-title ml-50">Add Calendar page and source
                                                        and
                                                        credit page in
                                                        documentation</span>
                                                </div>
                                                <div class="widget-todo-item-action d-flex align-items-center">
                                                    <div class="badge badge-pill badge-light-warning me-1">Javascript
                                                    </div>
                                                    <div class="avatar bg-warning">
                                                        <img src="{{ asset('mazer-assets/images/faces/5.jpg') }}" alt="" srcset="">
                                                    </div>
                                                    <i
                                                        class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="widget-todo-item">
                                            <div
                                                class="widget-todo-title-wrapper d-flex justify-content-between align-items-center mb-50">
                                                <div class="widget-todo-title-area d-flex align-items-center">
                                                    <i data-feather="list" class="cursor-move"></i>
                                                    <div class="checkbox checkbox-shadow">
                                                        <input type="checkbox" class="form-check-input" id="checkbox6">
                                                        <label for="checkbox6"></label>
                                                    </div>
                                                    <span class="widget-todo-title ml-50">Add Angular Starter-kit</span>
                                                </div>
                                                <div class="widget-todo-item-action d-flex align-items-center">
                                                    <div class="badge badge-pill badge-light-primary me-1">UI/UX</div>
                                                    <div class="avatar bg-warning">
                                                        <img src="{{ asset('mazer-assets/images/faces/1.jpg') }}" alt="" srcset="">
                                                    </div>
                                                    <i
                                                        class="bx bx-dots-vertical-rounded font-medium-3 cursor-pointer"></i>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="card widget-todo">
                                <div
                                    class="card-header border-bottom d-flex justify-content-between align-items-center">
                                    <h4 class="card-title d-flex">
                                        <i class="bx bx-check font-medium-5 pl-25 pr-75"></i>Progress
                                    </h4>

                                </div>
                                <div class="card-body px-0 py-1">
                                    <table class="table table-borderless">
                                        <tr>
                                            <td class="col-3">UI Design</td>
                                            <td class="col-6">
                                                <div class="progress progress-info">
                                                    <div class="progress-bar" role="progressbar" style="width: 60%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="col-3 text-center">60%</td>
                                        </tr>
                                        <tr>
                                            <td class="col-3">VueJS</td>
                                            <td class="col-6">
                                                <div class="progress progress-success">
                                                    <div class="progress-bar" role="progressbar" style="width: 35%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="col-3 text-center">30%</td>
                                        </tr>
                                        <tr>
                                            <td class="col-3">Laravel</td>
                                            <td class="col-6">
                                                <div class="progress progress-danger">
                                                    <div class="progress-bar" role="progressbar" style="width: 50%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="col-3 text-center">50%</td>
                                        </tr>
                                        <tr>
                                            <td class="col-3">ReactJS</td>
                                            <td class="col-6">
                                                <div class="progress progress-primary">
                                                    <div class="progress-bar" role="progressbar" style="width: 80%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="col-3 text-center">80%</td>
                                        </tr>
                                        <tr>
                                            <td class="col-3">Go</td>
                                            <td class="col-6">
                                                <div class="progress progress-secondary">
                                                    <div class="progress-bar" role="progressbar" style="width: 65%"
                                                        aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </td>
                                            <td class="col-3 text-center">65%</td>
                                        </tr>
                                    </table>
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

    <script src="{{ asset('mazer-assets/vendors/dragula/dragula.min.js') }}"></script>
    <script>
        dragula([document.getElementById("widget-todo-list")], { moves: function (e, a, t) { return t.classList.contains("cursor-move") } })
    </script>

    <script src="{{ asset('mazer-assets/js/main.js') }}"></script>
</body>

</html>