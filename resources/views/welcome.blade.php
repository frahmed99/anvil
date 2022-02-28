<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title>Anvil ERP</title>

    <meta name="description"
        content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">

    <!-- Open Graph Meta -->
    <meta property="og:title" content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework">
    <meta property="og:site_name" content="Codebase">
    <meta property="og:description"
        content="Codebase - Bootstrap 5 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
    <meta property="og:type" content="website">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{ asset('/media/favicons/favicon.png') }}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('/media/favicons/favicon-192x192.png') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/media/favicons/apple-touch-icon-180x180.png') }}">
    <!-- END Icons -->

    <!-- Stylesheets -->

    <!-- Fonts and Codebase framework -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap">
    <link rel="stylesheet" id="css-main" href="{{ mix('/css/codebase.css') }}">

    <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
    <!-- <link rel="stylesheet" id="css-theme" href="assets/css/themes/flat.min.css"> -->
    <!-- END Stylesheets -->
</head>

<body>
    <!-- Page Container -->
    <!--
      Available classes for #page-container:

      GENERIC

        'remember-theme'                            Remembers active color theme and dark mode between pages using localStorage when set through
                                                    - Theme helper buttons [data-toggle="theme"],
                                                    - Layout helper buttons [data-toggle="layout" data-action="dark_mode_[on/off/toggle]"]
                                                    - ..and/or Codebase.layout('dark_mode_[on/off/toggle]')

      SIDEBAR & SIDE OVERLAY

        'sidebar-r'                                 Right Sidebar and left Side Overlay (default is left Sidebar and right Side Overlay)
        'sidebar-mini'                              Mini hoverable Sidebar (screen width > 991px)
        'sidebar-o'                                 Visible Sidebar by default (screen width > 991px)
        'sidebar-o-xs'                              Visible Sidebar by default (screen width < 992px)
        'sidebar-dark'                              Dark themed sidebar

        'side-overlay-hover'                        Hoverable Side Overlay (screen width > 991px)
        'side-overlay-o'                            Visible Side Overlay by default

        'enable-page-overlay'                       Enables a visible clickable Page Overlay (closes Side Overlay on click) when Side Overlay opens

        'side-scroll'                               Enables custom scrolling on Sidebar and Side Overlay instead of native scrolling (screen width > 991px)

      HEADER

        ''                                          Static Header if no class is added
        'page-header-fixed'                         Fixed Header

      HEADER STYLE

        ''                                          Classic Header style if no class is added
        'page-header-modern'                        Modern Header style
        'page-header-dark'                          Dark themed Header (works only with classic Header style)
        'page-header-glass'                         Light themed Header with transparency by default
                                                    (absolute position, perfect for light images underneath - solid light background on scroll if the Header is also set as fixed)
        'page-header-glass page-header-dark'        Dark themed Header with transparency by default
                                                    (absolute position, perfect for dark images underneath - solid dark background on scroll if the Header is also set as fixed)

      MAIN CONTENT LAYOUT

        ''                                          Full width Main Content if no class is added
        'main-content-boxed'                        Full width Main Content with a specific maximum width (screen width > 1200px)
        'main-content-narrow'                       Full width Main Content with a percentage width (screen width > 1200px)

      DARK MODE

        'sidebar-dark page-header-dark dark-mode'   Enable dark mode (light sidebar/header is not supported with dark mode)
    -->
    <div id="page-container"
        class="sidebar-dark side-scroll page-header-fixed page-header-glass main-content-boxed remember-theme">

        <!-- Sidebar -->
        <nav id="sidebar">
            <!-- Sidebar Content -->
            <div class="sidebar-content">
                <!-- Side Header -->
                <div class="content-header justify-content-lg-center bg-black-10">
                    <!-- Logo -->
                    <div>
                        <span class="smini-visible fw-bold tracking-wide fs-lg">
                            c<span class="text-primary">b</span>
                        </span>
                        <a class="link-fx fw-bold tracking-wide mx-auto" href="index.html">
                            <span class="smini-hidden">
                                <i class="fa fa-fire text-primary"></i>
                                <span class="fs-4 text-dual">anvil</span><span class="fs-4 text-primary">ERP</span>
                            </span>
                        </a>
                    </div>
                    <!-- END Logo -->

                    <!-- Options -->
                    <div>
                        <!-- Close Sidebar, Visible only on mobile screens -->
                        <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
                        <button type="button" class="btn btn-sm btn-alt-danger d-lg-none" data-toggle="layout"
                            data-action="sidebar_close">
                            <i class="fa fa-fw fa-times"></i>
                        </button>
                        <!-- END Close Sidebar -->
                    </div>
                    <!-- END Options -->
                </div>
                <!-- END Side Header -->

                <!-- Sidebar Scrolling -->
                <div class="js-sidebar-scroll">
                    <!-- Side Main Navigation -->
                    <div class="content-side content-side-full">
                        <!--
              Mobile navigation, desktop navigation can be found in #page-header

              If you would like to use the same navigation in both mobiles and desktops, you can use exactly the same markup inside sidebar and header navigation ul lists
              -->
                        <ul class="nav-main">
                            <li class="nav-main-item">
                                <a class="nav-main-link active" href={{ url('/') }}>
                                    <i class="nav-main-link-icon fa fa-home"></i>
                                    <span class="nav-main-link-name">Home</span>
                                </a>
                            </li>
                            <li class="nav-main-heading">Heading</li>
                            <li class="nav-main-item">
                                <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu"
                                    aria-haspopup="true" aria-expanded="false" href="#">
                                    <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                                    <span class="nav-main-link-name">Products</span>
                                </a>
                                <ul class="nav-main-submenu">
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="javascript:void(0)">
                                            <span class="nav-main-link-name">Anvil Accounts</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="javascript:void(0)">
                                            <span class="nav-main-link-name">Anvil HR(Coming Soon)</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="javascript:void(0)">
                                            <span class="nav-main-link-name">Anvil HRM(Coming Soon)</span>
                                        </a>
                                    </li>
                                    <li class="nav-main-item">
                                        <a class="nav-main-link" href="javascript:void(0)">
                                            <span class="nav-main-link-name">Anvil ERP(Coming Soon)</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-main-heading">Vital</li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="javascript:void(0)">
                                    <i class="nav-main-link-icon fa fa-wrench"></i>
                                    <span class="nav-main-link-name">Page</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="javascript:void(0)">
                                    <i class="nav-main-link-icon fa fa-wrench"></i>
                                    <span class="nav-main-link-name">Page</span>
                                </a>
                            </li>
                            <li class="nav-main-item">
                                <a class="nav-main-link" href="javascript:void(0)">
                                    <i class="nav-main-link-icon fa fa-wrench"></i>
                                    <span class="nav-main-link-name">Page</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- END Side Main Navigation -->
                </div>
                <!-- END Sidebar Scrolling -->
            </div>
            <!-- Sidebar Content -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <header id="page-header">
            <!-- Header Content -->
            <div class="content-header">
                <!-- Left Section -->
                <div class="space-x-1">
                    <!-- Logo -->
                    <a class="link-fx fw-bold" href="{{ url('/') }}">
                        <i class="fa fa-fire text-primary"></i>
                        <span class="fs-4 text-dual">anvil</span><span class="fs-4 text-primary">ERP</span>
                    </a>
                    <!-- END Logo -->
                </div>
                <!-- END Left Section -->

                <!-- Right Section -->
                <div class="d-flex align-items-center space-x-2">
                    <!-- Header Navigation -->
                    <!-- Desktop Navigation, mobile navigation can be found in #sidebar -->
                    <ul class="nav-main nav-main-horizontal nav-main-hover d-none d-lg-block">
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="gs_landing.html">
                                <i class="nav-main-link-icon fa fa-home"></i>
                                <span class="nav-main-link-name">Home</span>
                            </a>
                        </li>
                        <li class="nav-main-heading">Heading</li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                                <span class="nav-main-link-name">Products</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Anvil Accounts</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Anvil HRM(Coming Soon)</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Anvil CRM(Coming Soon)</span>
                                    </a>
                                </li>
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Anvil ERP(Coming Soon)</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true"
                                aria-expanded="false" href="#">
                                <i class="nav-main-link-icon fa fa-puzzle-piece"></i>
                                <span class="nav-main-link-name">Services</span>
                            </a>
                            <ul class="nav-main-submenu">
                                <li class="nav-main-item">
                                    <a class="nav-main-link" href="javascript:void(0)">
                                        <span class="nav-main-link-name">Support</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="gs_landing.html">
                                <i class="nav-main-link-icon fa fa-home"></i>
                                <span class="nav-main-link-name">Pricing</span>
                            </a>
                        </li>
                        <li class="nav-main-item">
                            <a class="nav-main-link active" href="gs_landing.html">
                                <i class="nav-main-link-icon fa fa-home"></i>
                                <span class="nav-main-link-name">Blog</span>
                            </a>
                        </li>
                    </ul>

                    @if (Route::has('login'))
                        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                            @auth
                                <a href="{{ url('/dashboard') }}" type="button" class="btn btn-sm btn-primary me-1 mb-1">
                                                    <i class="
                                    fa-solid fa-right-to-bracket opacity-50 me-1"></i></i>Your Account
                                </a>
                            @else
                                <a href="{{ route('login') }}" type="button" class="btn btn-sm btn-primary me-1 mb-1">
                                    <i class="fa-solid fa-right-to-bracket opacity-50 me-1"></i></i>Login
                                </a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" type="button"
                                        class="btn btn-sm btn-primary me-1 mb-1">
                                        <i class="fa-solid fa-registered opacity-50 me-1"></i></i>Register
                                    </a>
                                @endif
                            @endauth
                        </div>
                    @endif

                    <!-- Toggle Sidebar -->
                    <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                    <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>
                    <!-- END Toggle Sidebar -->
                </div>
                <!-- END Right Section -->
            </div>
            <!-- END Header Content -->

            <!-- Header Search -->
            <div id="page-header-search" class="overlay-header bg-body-extra-light">
                <div class="content-header">
                    <form class="w-100" action="be_pages_generic_search.html" method="POST">
                        <div class="input-group">
                            <!-- Close Search Section -->
                            <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                            <button type="button" class="btn btn-secondary" data-toggle="layout"
                                data-action="header_search_off">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                            <!-- END Close Search Section -->
                            <input type="text" class="form-control" placeholder="Search or hit ESC.."
                                id="page-header-search-input" name="page-header-search-input">
                            <button type="submit" class="btn btn-secondary">
                                <i class="fa fa-fw fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Header Search -->

            <!-- Header Loader -->
            <div id="page-header-loader" class="overlay-header bg-primary">
                <div class="content-header">
                    <div class="w-100 text-center">
                        <i class="far fa-sun fa-spin text-white"></i>
                    </div>
                </div>
            </div>
            <!-- END Header Loader -->
        </header>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Hero -->
            <div class="bg-body-extra-light overflow-hidden">
                <div class="hero">
                    <div class="hero-inner">
                        <div class="content content-full text-center">
                            <h1 class="display-3 fw-bold mb-2">
                                Hero Title
                            </h1>
                            <h2 class="fw-medium text-muted mb-5">
                                Hero Subtitle
                            </h2>
                            <a class="btn btn-lg btn-primary fw-semibold me-1 mb-2" href="javascript:void(0)">
                                <i class="fa fa-rocket opacity-50 me-1"></i> Call to Action
                            </a>
                            <a class="btn btn-lg btn-alt-primary fw-semibold mb-2" href="javascript:void(0)">
                                <i class="fa fa-rocket opacity-50 me-1"></i> Call to Action
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END Hero -->

            <!-- Content #1 -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="py-5 text-center">
                        <h3 class="fw-bold mb-2">Heading 1</h3>
                        <h4 class="fw-normal text-muted mb-0">Content..</h4>
                    </div>
                </div>
            </div>
            <!-- END Content #1 -->

            <!-- Content #2 -->
            <div class="bg-body-extra-light">
                <div class="content content-full">
                    <div class="py-5 text-center">
                        <h3 class="fw-bold mb-2">Heading 2</h3>
                        <h4 class="fw-normal text-muted mb-0">Content..</h4>
                    </div>
                </div>
            </div>
            <!-- END Content #2 -->

            <!-- Content #3 -->
            <div class="bg-body-light">
                <div class="content content-full">
                    <div class="py-5 text-center">
                        <h3 class="fw-bold mb-2">Heading 3</h3>
                        <h4 class="fw-normal text-muted mb-0">Content..</h4>
                    </div>
                </div>
            </div>
            <!-- END Content #3 -->
        </main>
        <!-- END Main Container -->

        <!-- Footer -->
        <footer id="page-footer" class="bg-body-extra-light">
            <div class="content content-full">
                <!-- Footer Navigation -->
                <div class="row items-push-2x mt-4">
                    <div class="col-6 col-md-4">
                        <h3 class="h5 fw-bold">Heading</h3>
                        <ul class="list list-simple-mini fs-sm">
                            <li>
                                <a class="link-fx fw-semibold" href="javascript:void(0)">Link #1</a>
                            </li>
                            <li>
                                <a class="link-fx fw-semibold" href="javascript:void(0)">Link #2</a>
                            </li>
                            <li>
                                <a class="link-fx fw-semibold" href="javascript:void(0)">Link #3</a>
                            </li>
                            <li>
                                <a class="link-fx fw-semibold" href="javascript:void(0)">Link #4</a>
                            </li>
                            <li>
                                <a class="link-fx fw-semibold" href="javascript:void(0)">Link #5</a>
                            </li>
                            <li>
                                <a class="link-fx fw-semibold" href="javascript:void(0)">Link #6</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-6 col-md-4">
                        <h3 class="h5 fw-bold">Heading</h3>
                        <ul class="list list-simple-mini fs-sm">
                            <li>
                                <a class="link-fx fw-semibold" href="javascript:void(0)">Link #1</a>
                            </li>
                            <li>
                                <a class="link-fx fw-semibold" href="javascript:void(0)">Link #2</a>
                            </li>
                            <li>
                                <a class="link-fx fw-semibold" href="javascript:void(0)">Link #3</a>
                            </li>
                            <li>
                                <a class="link-fx fw-semibold" href="javascript:void(0)">Link #4</a>
                            </li>
                            <li>
                                <a class="link-fx fw-semibold" href="javascript:void(0)">Link #5</a>
                            </li>
                            <li>
                                <a class="link-fx fw-semibold" href="javascript:void(0)">Link #6</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h3 class="h5 fw-bold">Reach IT</h3>
                        <div class="fs-sm mb-4">
                            Plot 11068A, Ngwezi Road, Roma<br>
                            Lusaka, Zambia<br>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </div>
                        <h3 class="h5 fw-bold">Our Newsletter</h3>
                        <form>
                            <div class="input-group">
                                <input type="email" class="form-control" id="ld-subscribe-email"
                                    name="ld-subscribe-email" placeholder="Your email..">
                                <button type="submit" class="btn btn-secondary">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Footer Navigation -->

                <!-- Copyright Info -->
                <div class="row g-0 fs-sm border-top pt-3">
                    <div class="col-sm-6 order-sm-2 py-1 text-center text-sm-end">
                        Crafted with <i class="fa fa-heart text-danger"></i> by <a class="fw-semibold"
                            href="https://reachitzm.com" target="_blank">Reach IT</a>
                    </div>
                    <div class="col-sm-6 order-sm-1 py-1 text-center text-sm-start">
                        <a class="fw-semibold" href="https://reachitzm.com" target="_blank">Reach IT</a>
                        &copy; <span data-toggle="year-copy"></span>
                    </div>
                </div>
                <!-- END Copyright Info -->
            </div>
        </footer>
        <!-- END Footer -->
    </div>
    <!-- END Page Container -->

    <!--
        Codebase JS

        Core libraries and functionality
        webpack is putting everything together at assets/_js/main/app.js
    -->
    <script src="{{ mix('js/codebase.app.js') }}"></script>
</body>

</html>
