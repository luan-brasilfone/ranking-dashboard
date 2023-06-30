<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable - Mazer Admin Dashboard</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('mazer-assets/css/bootstrap.css') }}">

    <link rel="stylesheet" href="{{ asset('mazer-assets/vendors/simple-datatables/style.css') }}">

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

                        <li class="sidebar-item active ">
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
                            <h3>DataTable</h3>
                            <p class="text-subtitle text-muted">For user to check they list</p>
                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ url('/theme/index') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Simple Datatable
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>City</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Graiden</td>
                                        <td>vehicula.aliquet@semconsequat.co.uk</td>
                                        <td>076 4820 8838</td>
                                        <td>Offenburg</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Dale</td>
                                        <td>fringilla.euismod.enim@quam.ca</td>
                                        <td>0500 527693</td>
                                        <td>New Quay</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Nathaniel</td>
                                        <td>mi.Duis@diam.edu</td>
                                        <td>(012165) 76278</td>
                                        <td>Grumo Appula</td>
                                        <td>
                                            <span class="badge bg-danger">Inactive</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Darius</td>
                                        <td>velit@nec.com</td>
                                        <td>0309 690 7871</td>
                                        <td>Ways</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Oleg</td>
                                        <td>rhoncus.id@Aliquamauctorvelit.net</td>
                                        <td>0500 441046</td>
                                        <td>Rossignol</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kermit</td>
                                        <td>diam.Sed.diam@anteVivamusnon.org</td>
                                        <td>(01653) 27844</td>
                                        <td>Patna</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Jermaine</td>
                                        <td>sodales@nuncsit.org</td>
                                        <td>0800 528324</td>
                                        <td>Mold</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ferdinand</td>
                                        <td>gravida.molestie@tinciduntadipiscing.org</td>
                                        <td>(016977) 4107</td>
                                        <td>Marlborough</td>
                                        <td>
                                            <span class="badge bg-danger">Inactive</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kuame</td>
                                        <td>Quisque.purus@mauris.org</td>
                                        <td>(0151) 561 8896</td>
                                        <td>Tresigallo</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Deacon</td>
                                        <td>Duis.a.mi@sociisnatoquepenatibus.com</td>
                                        <td>07740 599321</td>
                                        <td>Karapınar</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Channing</td>
                                        <td>tempor.bibendum.Donec@ornarelectusante.ca</td>
                                        <td>0845 46 49</td>
                                        <td>Warrnambool</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Aladdin</td>
                                        <td>sem.ut@pellentesqueafacilisis.ca</td>
                                        <td>0800 1111</td>
                                        <td>Bothey</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cruz</td>
                                        <td>non@quisturpisvitae.ca</td>
                                        <td>07624 944915</td>
                                        <td>Shikarpur</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Keegan</td>
                                        <td>molestie.dapibus@condimentumDonecat.edu</td>
                                        <td>0800 200103</td>
                                        <td>Assen</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ray</td>
                                        <td>placerat.eget@sagittislobortis.edu</td>
                                        <td>(0112) 896 6829</td>
                                        <td>Hofors</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Maxwell</td>
                                        <td>diam@dapibus.org</td>
                                        <td>0334 836 4028</td>
                                        <td>Thane</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Carter</td>
                                        <td>urna.justo.faucibus@orci.com</td>
                                        <td>07079 826350</td>
                                        <td>Biez</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Stone</td>
                                        <td>velit.Aliquam.nisl@sitametrisus.com</td>
                                        <td>0800 1111</td>
                                        <td>Olivar</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Berk</td>
                                        <td>fringilla.porttitor.vulputate@taciti.edu</td>
                                        <td>(0101) 043 2822</td>
                                        <td>Sanquhar</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Philip</td>
                                        <td>turpis@euenimEtiam.org</td>
                                        <td>0500 571108</td>
                                        <td>Okara</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kibo</td>
                                        <td>feugiat@urnajustofaucibus.co.uk</td>
                                        <td>07624 682306</td>
                                        <td>La Cisterna</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bruno</td>
                                        <td>elit.Etiam.laoreet@luctuslobortisClass.edu</td>
                                        <td>07624 869434</td>
                                        <td>Rocca d"Arce</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Leonard</td>
                                        <td>blandit.enim.consequat@mollislectuspede.net</td>
                                        <td>0800 1111</td>
                                        <td>Lobbes</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hamilton</td>
                                        <td>mauris@diam.org</td>
                                        <td>0800 256 8788</td>
                                        <td>Sanzeno</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Harding</td>
                                        <td>Lorem.ipsum.dolor@etnetuset.com</td>
                                        <td>0800 1111</td>
                                        <td>Obaix</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Emmanuel</td>
                                        <td>eget.lacus.Mauris@feugiatSednec.org</td>
                                        <td>(016977) 8208</td>
                                        <td>Saint-Remy-Geest</td>
                                        <td>
                                            <span class="badge bg-success">Active</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
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

    <script src="{{ asset('mazer-assets/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="{{ asset('mazer-assets/js/main.js') }}"></script>
</body>

</html>