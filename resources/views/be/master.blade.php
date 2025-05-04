<!DOCTYPE html>

<html lang="en" class="material-style layout-fixed">

<head>
    <title>{{$title}}</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Empire Bootstrap admin template made using Bootstrap 4, it has tons of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="Empire, bootstrap admin template, bootstrap admin panel, bootstrap 4 admin template, admin template">
    <meta name="author" content="Srthemesvilla" />
    <link rel="icon" type="image/x-icon" href="{{asset ('be/img/favicon.png') }}">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">

    <!-- Icon fonts -->
    <link rel="stylesheet" href="{{asset ('be/fonts/fontawesome.css') }}">
    <link rel="stylesheet" href="{{asset ('be/fonts/ionicons.css') }}">
    <link rel="stylesheet" href="{{asset ('be/fonts/linearicons.css') }}">
    <link rel="stylesheet" href="{{asset ('be/fonts/open-iconic.css') }}">
    <link rel="stylesheet" href="{{asset ('be/fonts/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{asset ('be/fonts/feather.css') }}">

    <!-- Core stylesheets -->
    <link rel="stylesheet" href="{{asset ('be/css/bootstrap-material.css') }}">
    <link rel="stylesheet" href="{{asset ('be/css/shreerang-material.css') }}">
    <link rel="stylesheet" href="{{asset ('be/css/uikit.css') }}">

    <!-- Libs -->
    <link rel="stylesheet" href="{{asset ('be/libs/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{asset ('be/libs/flot/flot.css') }}">

</head>

<body>
    <!-- [ Preloader ] Start -->
    <div class="page-loader">
        <div class="bg-primary"></div>
    </div>
    <!-- [ Preloader ] End -->

    <!-- [ Layout wrapper ] Start -->
    <div class="layout-wrapper layout-2">
        <div class="layout-inner">
            <!-- [ Layout sidenav ] Start -->
            <div id="layout-sidenav" class="layout-sidenav sidenav sidenav-vertical bg-white logo-dark">
                <div class="app-brand demo">
                    <span class="app-brand-logo demo">
                        <img src="{{asset ('be/img/logo.png') }}" alt="Brand Logo" class="img-fluid">
                    </span>
                    <a href="#" class="app-brand-text demo sidenav-text font-weight-normal ml-2">Penglipuran Data</a>
                    <a href="javascript:" class="layout-sidenav-toggle sidenav-link text-large ml-auto">
                        <i class="ion ion-md-menu align-middle"></i>
                    </a>
                </div>
                @if (auth()->user()->level == 'admin')
                <div class="sidenav-divider mt-0"></div>

                <!-- Links -->
                <ul class="sidenav-inner py-1">

                    <!-- Dashboards -->
                    <li class="sidenav-item">
                        <a href="dashboard" class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Dashboards</div>
                            <div class="pl-1 ml-auto">
                                <div class="badge badge-danger">Hot</div>
                            </div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="userM" class="sidenav-link">
                            <i class="sidenav-icon feather icon-users"></i>
                            <div>User Management</div>
                        </a>
                    </li>
                    <li class="sidenav-item">
                        <a href="newsM" class="sidenav-link">
                            <i class="sidenav-icon feather icon-file-text"></i>
                            <div>News Management</div>
                        </a>
                    </li>
                </ul>
            </div>
            @endif
            
            
            @if (auth()->user()->level == 'pemilik')
            <div class="sidenav-divider mt-0"></div>

                <!-- Links -->
                <ul class="sidenav-inner py-1">

                    <!-- Dashboards -->
                    <li class="sidenav-item active">
                        <a href="#" class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Dashboards</div>
                            <div class="pl-1 ml-auto">
                                <div class="badge badge-danger">Hot</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            @endif
            @if (auth()->user()->level == 'bendahara')
            <div class="sidenav-divider mt-0"></div>

                <!-- Links -->
                <ul class="sidenav-inner py-1">

                    <!-- Dashboards -->
                    <li class="sidenav-item active">
                        <a href="/bendahara" class="sidenav-link">
                            <i class="sidenav-icon feather icon-home"></i>
                            <div>Dashboards</div>
                            <div class="pl-1 ml-auto">
                                <div class="badge badge-danger">Hot</div>
                            </div>
                        </a>
                    </li>
                    <li class="sidenav-item active">
                        <a href="/wisata-list" class="sidenav-link">
                            <i class="sidenav-icon feather icon-package"></i>
                            <div>Paket Wisata</div>
                        </a>
                    </li>
                    <li class="sidenav-item active">
                        <a href="/homestay" class="sidenav-link">
                            <i class="sidenav-icon feather icon-briefcase"></i>
                            <div>Homestay</div>
                        </a>
                    </li>
                </ul>
            </div>
            @endif

            <!-- [ Layout sidenav ] End -->
            <!-- [ Layout container ] Start -->
            <div class="layout-container">
                <!-- [ Layout navbar ( Header ) ] Start -->
                <nav class="layout-navbar navbar navbar-expand-lg align-items-lg-center bg-dark container-p-x sticky" id="layout-navbar">
                    <a href="index.html" class="navbar-brand app-brand demo d-lg-none py-0 mr-4">
                        <span class="app-brand-logo demo">
                            <img src="{{asset ('be/img/logo-dark.png') }}" alt="Brand Logo" class="img-fluid">
                        </span>
                        <span class="app-brand-text demo font-weight-normal ml-2">Penglipuran Data</span>
                    </a>
                    <div class="layout-sidenav-toggle navbar-nav d-lg-none align-items-lg-center mr-auto">
                        <a class="nav-item nav-link px-0 mr-lg-4" href="javascript:">
                            <i class="ion ion-md-menu text-large align-middle"></i>
                        </a>
                    </div>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#layout-navbar-collapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="navbar-collapse collapse" id="layout-navbar-collapse">
                        <!-- Divider -->
                        <hr class="d-lg-none w-100 my-2">

                        <div class="navbar-nav align-items-lg-center">
                            <!-- Search -->
                            <label class="nav-item navbar-text navbar-search-box p-0 active">
                                <i class="feather icon-search navbar-icon align-middle"></i>
                                <span class="navbar-search-input pl-2">
                                    <input type="text" class="form-control navbar-text mx-2" placeholder="Search...">
                                </span>
                            </label>
                        </div>

                        <div class="navbar-nav align-items-lg-center ml-auto">
                            <div class="demo-navbar-notifications nav-item dropdown mr-lg-3">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                    <i class="feather icon-bell navbar-icon align-middle"></i>
                                    <span class="badge badge-danger badge-dot indicator"></span>
                                    <span class="d-lg-none align-middle">&nbsp; Notifications</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                                        4 New Notifications
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-home bg-secondary border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">Login from 192.168.1.1</div>
                                                <div class="text-light small mt-1">
                                                    Aliquam ex eros, imperdiet vulputate hendrerit et.
                                                </div>
                                                <div class="text-light small mt-1">12h ago</div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-user-plus bg-info border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">You have
                                                    <strong>4</strong> new followers</div>
                                                <div class="text-light small mt-1">
                                                    Phasellus nunc nisl, posuere cursus pretium nec, dictum vehicula tellus.
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-power bg-danger border-0 text-white"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">Server restarted</div>
                                                <div class="text-light small mt-1">
                                                    19h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <div class="ui-icon ui-icon-sm feather icon-alert-triangle bg-warning border-0 text-dark"></div>
                                            <div class="media-body line-height-condenced ml-3">
                                                <div class="text-dark">99% server load</div>
                                                <div class="text-light small mt-1">
                                                    Etiam nec fringilla magna. Donec mi metus.
                                                </div>
                                                <div class="text-light small mt-1">
                                                    20h ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all notifications</a>
                                </div>
                            </div>

                            <div class="demo-navbar-messages nav-item dropdown mr-lg-3">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-toggle="dropdown">
                                    <i class="feather icon-mail navbar-icon align-middle"></i>
                                    <span class="badge badge-success badge-dot indicator"></span>
                                    <span class="d-lg-none align-middle">&nbsp; Messages</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <div class="bg-primary text-center text-white font-weight-bold p-3">
                                        4 New Messages
                                    </div>
                                    <div class="list-group list-group-flush">
                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="{{asset ('be/img/avatars/6-small.png') }}" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor consectetuer elit.</div>
                                                <div class="text-light small mt-1">
                                                    Josephin Doe &nbsp;·&nbsp; 58m ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="{{asset ('be/img/avatars/4-small.png') }}" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet, consectetuer.</div>
                                                <div class="text-light small mt-1">
                                                    Lary Doe &nbsp;·&nbsp; 1h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="{{asset ('be/img/avatars/5-small.png') }}" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet elit.</div>
                                                <div class="text-light small mt-1">
                                                    Alice &nbsp;·&nbsp; 2h ago
                                                </div>
                                            </div>
                                        </a>

                                        <a href="javascript:" class="list-group-item list-group-item-action media d-flex align-items-center">
                                            <img src="{{asset ('be/img/avatars/11-small.png') }}" class="d-block ui-w-40 rounded-circle" alt>
                                            <div class="media-body ml-3">
                                                <div class="text-dark line-height-condenced">Lorem ipsum dolor sit amet consectetuer amet elit dolor sit.</div>
                                                <div class="text-light small mt-1">
                                                    Suzen &nbsp;·&nbsp; 5h ago
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <a href="javascript:" class="d-block text-center text-light small p-2 my-1">Show all messages</a>
                                </div>
                            </div>

                            <!-- Divider -->
                            <div class="nav-item d-none d-lg-block text-big font-weight-light line-height-1 opacity-25 mr-3 ml-1">|</div>
                           
                            <div class="demo-navbar-user nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                                    <span class="d-inline-flex flex-lg-row-reverse align-items-center align-middle">                                        
                                        <span class="px-1 mr-lg-2 ml-2 ml-lg-0">admin
                                        </span>
                                    </span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{ route('logout') }}" class="dropdown-item">
                                        <i type="logout" class="feather icon-power text-danger"></i> &nbsp; Log Out</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </nav>
                <!-- [ Layout navbar ( Header ) ] End -->

                <!-- [ Layout content ] Start -->
                <div class="layout-content">

                    <!-- [ content ] Start -->
                    <div class="container-fluid flex-grow-1 container-p-y">
                        @if($title == 'Admin Dashboard')<h1  class="font-weight-bold py-3 mb-0">Dashboard Admin</h1>@endif
                        @if($title == 'Owner Dashboard')<h1  class="font-weight-bold py-3 mb-0">Dashboard Owner</h1>@endif
                        @if($title == 'Bendahara Dashboard')<h1  class="font-weight-bold py-3 mb-0">Dashboard Bendahara</h1>@endif                    
                        @if($title == 'User Management')<h1  class="font-weight-bold py-3 mb-0">User Management</h1>@endif
                        @if($title == 'News Management')<h1  class="font-weight-bold py-3 mb-0">News Management</h1>@endif

                        <div class="text-muted small mt-0 mb-4 d-block breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#">Library</a></li>
                                <li class="breadcrumb-item active">Data</li>
                            </ol>
                        </div>
                        @if($title == 'Admin Dashboard')
                            @yield('content')
                        @endif
                        @if($title == 'User Management')
                            @yield('content')
                        @endif
                        @if($title == 'News Management')
                            @yield('content')
                        @endif
                        @if($title == 'Owner Dashboard')
                            @yield('content')
                        @endif
                        @if($title == 'Bendahara Dashboard')
                            @yield('content')
                        @endif
                        @if($title == 'Homestay')
                            @yield('content')
                        @endif
                        @if($title == 'Wisata-List')
                            @yield('content')
                        @endif
                    <!-- [ content ] End -->

                </div>
                <!-- [ Layout content ] Start -->
            </div>
            <!-- [ Layout container ] End -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-sidenav-toggle"></div>
    </div>
    <!-- [ Layout wrapper] End -->

    <!-- Core scripts -->
    <script src="{{asset ('be/js/pace.js') }}"></script>
    <script src="{{asset ('be/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{asset ('be/libs/popper/popper.js') }}"></script>
    <script src="{{asset ('be/js/bootstrap.js') }}"></script>
    <script src="{{asset ('be/js/sidenav.js') }}"></script>
    <script src="{{asset ('be/js/layout-helpers.js') }}"></script>
    <script src="{{asset ('be/js/material-ripple.js') }}"></script>

    <!-- Libs -->
    <script src="{{asset ('be/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{asset ('be/libs/eve/eve.js') }}"></script>
    <script src="{{asset ('be/libs/flot/flot.js') }}"></script>
    <script src="{{asset ('be/libs/flot/curvedLines.js') }}"></script>
    <script src="{{asset ('be/libs/chart-am4/core.js') }}"></script>
    <script src="{{asset ('be/libs/chart-am4/charts.js') }}"></script>
    <script src="{{asset ('be/libs/chart-am4/animated.js') }}"></script>

    <!-- Demo -->
    <script src="{{asset ('be/js/demo.js') }}"></script>
    <script src="{{asset ('be/js/analytics.js') }}"></script>
    <script src="{{asset ('be/js/pages/dashboards_index.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidenavToggle = document.querySelector('.layout-sidenav-toggle');
            const layoutWrapper = document.querySelector('.layout-wrapper');

            if (sidenavToggle && layoutWrapper) {
                sidenavToggle.addEventListener('click', function () {
                    layoutWrapper.classList.toggle('layout-sidenav-collapsed');
                });
            }
        });
    </script>
</body>

</html>
