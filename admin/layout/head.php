
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Dashboard  | Admin - Clinic System.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Hospital Management System" name="description" />
    <meta content="Doctorly" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://doctorly.themesbrand.website/assets/images/favicon.ico">
    <!-- App css -->
    <link href="https://doctorly.themesbrand.website/assets/css/bootstrap-dark.min.css" id="bootstrap-dark" disabled rel="stylesheet" type="text/css" />
<link href="https://doctorly.themesbrand.website/assets/css/bootstrap.min.css" id="bootstrap-light" rel="stylesheet" type="text/css" />
<link href="https://doctorly.themesbrand.website/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href="https://doctorly.themesbrand.website/assets/css/app-rtl.min.css" id="app-rtl" disabled rel="stylesheet"  type="text/css" />
<link href="https://doctorly.themesbrand.website/assets/css/app-dark.min.css" id="app-dark" disabled rel="stylesheet" type="text/css" />
<link href="https://doctorly.themesbrand.website/assets/css/app.min.css" id="app-light" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="https://doctorly.themesbrand.website/assets/libs/toastr/toastr.min.css">

</head>

<body data-topbar="dark" data-layout="horizontal">
    
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner-chase">
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
                <div class="chase-dot"></div>
            </div>
        </div>
    </div>
    <!-- Begin page -->
    <div id="layout-wrapper">
        <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="https://doctorly.themesbrand.website" class="logo logo-dark">
                        <span class="logo-lg">
                            <img src="https://doctorly.themesbrand.website/assets/images/logo-dark.png" alt="" height="22">
                        </span>
                        <span class="logo-sm">
                            <img src="https://doctorly.themesbrand.website/assets/images/logo-dark1.png" alt="" height="17">
                        </span>
                    </a>
                    <a href="https://doctorly.themesbrand.website" class="logo logo-light">
                        <span class="logo-lg">
                            <img src="https://doctorly.themesbrand.website/assets/images/logo-light.png" alt="" height="22">
                        </span>
                        <span class="logo-sm">
                            <img src="https://doctorly.themesbrand.website/assets/images/logo-light1.png" alt="" height="19">
                        </span>
                    </a>
                </div>
                <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light"
                    data-toggle="collapse" data-target="#topnav-menu-content">
                    <i class="fa fa-fw fa-bars"></i>
                </button>
            </div>
            <div class="d-flex">
                <div class="dropdown d-inline-block d-lg-none ml-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                        aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- App Search-->
            </div>
            <div class="d-flex">
                <div class="dropdown d-inline-block d-lg-none ml-2">
                    <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="mdi mdi-magnify"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                        aria-labelledby="page-header-search-dropdown">
                        <form class="p-3">
                            <div class="form-group m-0">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search ..."
                                        aria-label="Recipient's username">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit"><i
                                                class="mdi mdi-magnify"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="dropdown d-none d-lg-inline-block ml-1">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                        <i class="bx bx-fullscreen"></i>
                    </button>
                </div>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                                                    <img src="https://doctorly.themesbrand.website/assets/images/flags/us.svg" class="rounded" alt="Header Language"
                                    height="20">
                                        </button>
                    <div class="dropdown-menu dropdown-menu-end">
    
                        <!-- item-->
                        <a href="https://doctorly.themesbrand.website/index/en" class="dropdown-item notify-item language py-2" data-lang="en"
                            title="English">
                            <img src="https://doctorly.themesbrand.website/assets/images/flags/us.svg" alt="user-image"
                                class="me-2 rounded" height="20">
                            <span class="align-middle">English</span>
                        </a>
    
                        <!-- item-->
                        <a href="https://doctorly.themesbrand.website/index/sp" class="dropdown-item notify-item language" data-lang="sp"
                            title="Spanish">
                            <img src="https://doctorly.themesbrand.website/assets/images/flags/spain.svg" alt="user-image"
                                class="me-2 rounded" height="20">
                            <span class="align-middle">Española</span>
                        </a>
    
                        <!-- item-->
                        <a href="https://doctorly.themesbrand.website/index/gr" class="dropdown-item notify-item language" data-lang="gr"
                            title="German">
                            <img src="https://doctorly.themesbrand.website/assets/images/flags/germany.svg" alt="user-image"
                                class="me-2 rounded" height="20"> <span class="align-middle">Deutsche</span>
                        </a>
    
                        <!-- item-->
                        <a href="https://doctorly.themesbrand.website/index/it" class="dropdown-item notify-item language" data-lang="it"
                            title="Italian">
                            <img src="https://doctorly.themesbrand.website/assets/images/flags/italy.svg" alt="user-image"
                                class="me-2 rounded" height="20">
                            <span class="align-middle">Italiana</span>
                        </a>
    
                        <!-- item-->
                        <a href="https://doctorly.themesbrand.website/index/ru" class="dropdown-item notify-item language" data-lang="ru"
                            title="Russian">
                            <img src="https://doctorly.themesbrand.website/assets/images/flags/russia.svg" alt="user-image"
                                class="me-2 rounded" height="20">
                            <span class="align-middle">русский</span>
                        </a>
    
                        <!-- item-->
                        <a href="https://doctorly.themesbrand.website/index/ch" class="dropdown-item notify-item language" data-lang="ch"
                            title="Chinese">
                            <img src="https://doctorly.themesbrand.website/assets/images/flags/china.svg" alt="user-image"
                                class="me-2 rounded" height="20">
                            <span class="align-middle">中国人</span>
                        </a>
    
                        <!-- item-->
                        <a href="https://doctorly.themesbrand.website/index/fr" class="dropdown-item notify-item language" data-lang="fr"
                            title="French">
                            <img src="https://doctorly.themesbrand.website/assets/images/flags/french.svg" alt="user-image"
                                class="me-2 rounded" height="20">
                            <span class="align-middle">français</span>
                        </a>
                        <!-- item-->
                        <a href="https://doctorly.themesbrand.website/index/ae" class="dropdown-item notify-item language" data-lang="ae"
                            title="Arabic">
                            <img src="https://doctorly.themesbrand.website/assets/images/flags/ae.svg" alt="user-image"
                                class="me-2 rounded" height="18">
                            <span class="align-middle">Arabic</span>
                        </a>
                    </div>
                </div>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-notifications-dropdown" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="bx bx-bell bx-tada"></i>
                        <span class="badge badge-danger badge-pill">10</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                        aria-labelledby="page-header-notifications-dropdown">
                        <div class="p-3">
                            <div class="row align-items-center">
                                <div class="col">
                                    <h6 class="m-0"> Notifications</h6>
                                </div>
                                <div class="col-auto">
                                    <a href="https://doctorly.themesbrand.website/notification-list" class="small"> View All</a>
                                </div>
                            </div>
                        </div>
                        <div data-simplebar class="notification-list-scroll overflow-auto" style="max-height: 230px;">
                                                        <a href="/notification/3533"
                                    class="text-reset notification-item bg-light ">
                                    <div class="media">
                                        <img src=" https://doctorly.themesbrand.website/storage/images/users/1698418992.PNG"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">
                                                Doctor Doctorly</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Appointment Added</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                    16 hours ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                                        <a href="/notification/3531"
                                    class="text-reset notification-item bg-light ">
                                    <div class="media">
                                        <img src=" https://doctorly.themesbrand.website/storage/images/users/1698418992.PNG"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">
                                                Doctor Doctorly</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Appointment Added</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                    16 hours ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                                        <a href="/notification/3529"
                                    class="text-reset notification-item bg-light ">
                                    <div class="media">
                                        <img src=" https://doctorly.themesbrand.website/storage/images/users/1698418992.PNG"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">
                                                Doctor Doctorly</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Appointment Added</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                    23 hours ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                                        <a href="/notification/3527"
                                    class="text-reset notification-item bg-light ">
                                    <div class="media">
                                        <img src=" https://doctorly.themesbrand.website/storage/images/users/1698418992.PNG"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">
                                                Doctor Doctorly</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Appointment Added</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                    23 hours ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                                        <a href="/notification/3523"
                                    class="text-reset notification-item bg-light ">
                                    <div class="media">
                                        <img src=" https://doctorly.themesbrand.website/storage/images/users/1698418992.PNG"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">
                                                Doctor Doctorly</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Appointment completed successfully</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                    1 day ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                                        <a href="/notification/3521"
                                    class="text-reset notification-item bg-light ">
                                    <div class="media">
                                        <img src=" https://doctorly.themesbrand.website/storage/images/users/1698418992.PNG"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">
                                                Doctor Doctorly</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Appointment completed successfully</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                    1 day ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                                        <a href="/notification/3519"
                                    class="text-reset notification-item bg-light ">
                                    <div class="media">
                                        <img src=" https://doctorly.themesbrand.website/storage/images/users/1698418992.PNG"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">
                                                Doctor Doctorly</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Appointment Added</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                    1 day ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                                        <a href="/notification/3517"
                                    class="text-reset notification-item bg-light ">
                                    <div class="media">
                                        <img src=" https://doctorly.themesbrand.website/storage/images/users/1698418992.PNG"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">
                                                Doctor Doctorly</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Appointment completed successfully</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                    1 day ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                                        <a href="/notification/3515"
                                    class="text-reset notification-item bg-light ">
                                    <div class="media">
                                        <img src=" https://doctorly.themesbrand.website/storage/images/users/1698418992.PNG"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">
                                                Doctor Doctorly</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Appointment completed successfully</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                    1 day ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                                        <a href="/notification/3513"
                                    class="text-reset notification-item bg-light ">
                                    <div class="media">
                                        <img src=" https://doctorly.themesbrand.website/storage/images/users/1698418992.PNG"
                                            class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">
                                                Doctor Doctorly</h6>
                                            <div class="font-size-12 text-muted">
                                                <p class="mb-1">Appointment Added</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>
                                                    1 day ago </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                                </div>
                        <div class="p-2 border-top">
                            <a class="btn btn-sm btn-link font-size-14 btn-block text-center"
                                href="https://doctorly.themesbrand.website/notification-list">
                                <i class="mdi mdi-arrow-right-circle mr-1"></i> View More..
                            </a>
                        </div>
                    </div>
                </div>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="rounded-circle header-profile-user"
                            src=" https://doctorly.themesbrand.website/storage/images/users/1698418992.PNG"
                            alt="Avatar">
                        <span class="d-none d-xl-inline-block ml-1">Admin</span>
                        <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right">
                        <!-- item-->
                                                <a class="dropdown-item" href="https://doctorly.themesbrand.website/profile-edit"><i
                                    class="bx bx-user font-size-16 align-middle mr-1"></i>
                                Change Profile</a>
                            <a class="dropdown-item" href="https://doctorly.themesbrand.website/payment-key"><i
                                    class="bx bx-key font-size-16 align-middle mr-1"></i>
                                Add Api Key</a>
                            <a class="dropdown-item" href="https://doctorly.themesbrand.website/app-setting"><i
                                    class="bx bx-cog font-size-16 align-middle mr-1"></i>
                                App Settings</a>
                                            <a class="dropdown-item d-block" href="https://doctorly.themesbrand.website/change-password"><i
                                class="bx bx-wrench font-size-16 align-middle mr-1"></i>
                            Change Password</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item text-danger" href="javascript:void();"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i>
                            Logout </a>
                        <form id="logout-form" action="/logout" method="POST" style="display: none;">
                            <input type="hidden" name="_token" value="a7KNvFDGbrY46H6kn0fs8nPcH8Az0PRnh1tBmR3u">                    </form>
                    </div>
                </div>
                <div class="dropdown d-inline-block">
                    <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect ">
                        <i class="bx bx-cog bx-spin"></i>
                    </button>
                </div>
            </div>
        </div>
    </header>
        <div class="topnav">
        <div class="container-fluid">
            <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
                <div class="collapse navbar-collapse" id="topnav-menu-content">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://doctorly.themesbrand.website">
                                <i class="bx bx-home-circle mr-2"></i>Dashboard
                            </a>
                        </li>
                                                <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-user-circle mr-2"></i>Doctors <div class="arrow-down">
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topnav-layout">
                                    <a href="https://doctorly.themesbrand.website/doctor" class="dropdown-item">List of Doctors</a>
                                    <a href="https://doctorly.themesbrand.website/doctor/create"
                                        class="dropdown-item">Add New Doctor</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-user-circle mr-2"></i>Patients <div
                                        class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topnav-layout">
                                    <a href="https://doctorly.themesbrand.website/patient"
                                        class="dropdown-item">List of Patients</a>
                                    <a href="https://doctorly.themesbrand.website/patient/create"
                                        class="dropdown-item">Add New Patient</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-user-circle mr-2"></i>Receptionist <div
                                        class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="topnav-layout">
                                    <a href="https://doctorly.themesbrand.website/receptionist"
                                        class="dropdown-item">List of Receptionist</a>
                                    <a href="https://doctorly.themesbrand.website/receptionist/create"
                                        class="dropdown-item">Add New Receptionist</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://doctorly.themesbrand.website/pending-appointment">
                                    <i class='bx bx-list-plus mr-2'></i>Appointment List
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://doctorly.themesbrand.website/transaction">
                                    <i class='bx bx-list-check mr-2'></i>Transaction
                                </a>
                            </li>
                                        </ul>
                </div>
            </nav>
        </div>
    </div>