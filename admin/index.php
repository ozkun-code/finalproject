
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Dashboard  | Doctorly - Hospital & Clinic Management Laravel System.</title>
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
                    <form id="logout-form" action="https://doctorly.themesbrand.website/logout" method="POST" style="display: none;">
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
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <!-- Start content -->
            <div class="container-fluid">
                                    <!-- start page title -->
<div class="row">
    <div class="col-12">
        <div class="page-title-box d-flex align-items-center justify-content-between">
            <h4 class="mb-0 font-size-18">Dashboard</h4>
            <div class="page-title-right">
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item active">Welcome to Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- end page title -->
<div class="row">
    <div class="col-xl-4">
        <div class="card overflow-hidden">
            <div class="bg-soft-primary">
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back !</h5>
                            <p>Dashboard</p>
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="https://doctorly.themesbrand.website/assets/images/profile-img.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
            <div class="card-body pt-0">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="avatar-md profile-user-wid mb-4">
                            <img src="https://doctorly.themesbrand.website/storage/images/users/1698418992.PNG" alt="" class="img-thumbnail rounded-circle">
                        </div>
                        <h5 class="font-size-15 text-truncate"> Admin Themesbrand </h5>
                        <p class="text-muted mb-0 text-truncate">Super Admin</p>
                    </div>
                    <div class="col-sm-8">
                        <div class="pt-4">
                            <div class="row">
                                <div class="col-6">
                                    <a href="https://doctorly.themesbrand.website/doctor" class="mb-0 font-weight-medium font-size-15">
                                        <h5 class="mb-0">10</h5>
                                    </a>
                                    <p class="text-muted mb-0">Doctors</p>
                                </div>
                                <div class="col-6">
                                    <a href="https://doctorly.themesbrand.website/patient" class="mb-0 font-weight-medium font-size-15">
                                        <h5 class="mb-0">8</h5>
                                    </a>
                                    <p class="text-muted mb-0">Patients</p>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-6">
                                    <a href="https://doctorly.themesbrand.website/receptionist"
                                        class="mb-0 font-weight-medium font-size-15">
                                        <h5 class="mb-0">3
                                        </h5>
                                    </a>
                                    <p class="text-muted mb-0">Receptionist</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Monthly Earning</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="text-muted">This month</p>
                        <h3>$2,221</h3>
                        <p class="text-muted">
                            <span class=" text-danger  mr-2">
                                -99.99% <i class="mdi  mdi-arrow-down "></i>
                            </span>From previous month
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div id="radialBar-chart" class="apex-charts"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card mini-stats-wid">
                <div class="card-body">
                    <div class="media">
                                                                                                    <div class="media-body">
                            <p class="text-muted font-weight-medium">Display items per page</p>
                            <button
                                class="btn  btn-primary  btn-sm mr-2 per-page-items  mb-md-1"
                                data-page="10">10</button>
                            <button
                                class="btn  btn-info  btn-sm mr-2 per-page-items  mb-md-1"
                                data-page="25">25</button>
                            <button
                                class="btn  btn-info  btn-sm mr-2 per-page-items  mb-md-1"
                                data-page="50">50</button>
                            <button
                                class="btn  btn-info  btn-sm mr-2 per-page-items  mb-md-1"
                                data-page="100">100</button>
                        </div>
                        <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                            <span class="avatar-title rounded-circle bg-primary">
                                <i class="bx bx-book-open font-size-24"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-8">
        <div class="row">
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted font-weight-medium">Appointments</p>
                                <h4 class="mb-0">571</h4>
                            </div>
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bxs-calendar-check font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted font-weight-medium">Revenue</p>
                                <h4 class="mb-0">$343,248,736.92</h4>
                            </div>
                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bx-dollar font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted font-weight-medium">Today&#039;s Earning</p>
                                <h4 class="mb-0">$0.00</h4>
                            </div>
                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bxs-dollar-circle  font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted font-weight-medium">Today&#039;s Appointments</p>
                                <a href="https://doctorly.themesbrand.website/today-appointment"
                                    class="mb-0 font-weight-medium font-size-24">
                                    <h4 class="mb-0">0</h4>
                                </a>
                            </div>
                            <div class="mini-stat-icon avatar-sm rounded-circle bg-primary align-self-center">
                                <span class="avatar-title">
                                    <i class="bx bx-calendar font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted font-weight-medium">Tomorrow Appointments</p>
                                <h4 class="mb-0">4</h4>
                            </div>
                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class="bx bx-calendar-event font-size-24"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">
                        <div class="media">
                            <div class="media-body">
                                <p class="text-muted font-weight-medium">Upcoming Appointments</p>
                                <a href="https://doctorly.themesbrand.website/upcoming-appointment"
                                    class="mb-0 font-weight-medium font-size-24">
                                    <h4 class="mb-0">19
                                    </h4>
                                </a>
                            </div>
                            <div class="avatar-sm rounded-circle bg-primary align-self-center mini-stat-icon">
                                <span class="avatar-title rounded-circle bg-primary">
                                    <i class='bx bxs-calendar-minus font-size-24'></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- end row -->
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Monthly Registered Users</h4>
                <div id="monthly_users" class="apex-charts" dir="ltr"></div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Latest Users</h4>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#Doctors" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-user-md"></i></span>
                            <span class="d-none d-sm-block">Doctors</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Receptionist" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-user-tie"></i></span>
                            <span class="d-none d-sm-block">Receptionist</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#Patients" role="tab">
                            <span class="d-block d-sm-none"><i class="fas fa-user-injured"></i></span>
                            <span class="d-none d-sm-block">Patients</span>
                        </a>
                    </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content p-3 text-muted">
                    <div class="tab-pane active" id="Doctors" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Name</th>
                                        <th>Degree</th>
                                        <th>Contact No</th>
                                        <th>Email</th>
                                        <th>View Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td>1</td>
                                            <td>tak tak</td>
                                            <td>dasd</td>
                                            <td>1234567890</td>
                                            <td>tak@gmail.com</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="https://doctorly.themesbrand.website/doctor/183">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td>2</td>
                                            <td>demozxzxc dadasd</td>
                                            <td>sdfdd</td>
                                            <td>1234567890</td>
                                            <td>demo4@gmail.com</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="https://doctorly.themesbrand.website/doctor/182">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td>3</td>
                                            <td>abcdfsdfsdfs abcsdfsdfs</td>
                                            <td>dasdasd</td>
                                            <td>1234567890</td>
                                            <td>demo3@gmail.com</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="https://doctorly.themesbrand.website/doctor/181">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td>4</td>
                                            <td>abc abc</td>
                                            <td>adadasdas</td>
                                            <td>1234567890</td>
                                            <td>demo2@gmail.com</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="https://doctorly.themesbrand.website/doctor/180">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td>5</td>
                                            <td>demo demo</td>
                                            <td>dasdadasdasda</td>
                                            <td>1234567890</td>
                                            <td>demo1@gmail.com</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="https://doctorly.themesbrand.website/doctor/179">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                                                    </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                    <div class="tab-pane" id="Receptionist" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Name</th>
                                        <th>Contact No</th>
                                        <th>Email</th>
                                        <th>View Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td>1</td>
                                            <td>Nyasha Maranga
                                            </td>
                                            <td>0242115544</td>
                                            <td>nyashamaranga@gmail.com</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="https://doctorly.themesbrand.website/receptionist/164">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td>2</td>
                                            <td>Rudo Mhaka
                                            </td>
                                            <td>0242808729</td>
                                            <td>rudomhaka@gmail.com</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="https://doctorly.themesbrand.website/receptionist/163">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td>3</td>
                                            <td>joaquin Nuriddinov
                                            </td>
                                            <td>8942440523</td>
                                            <td>receptionist@themesbrand.website</td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="https://doctorly.themesbrand.website/receptionist/31">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                                                    </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                    <div class="tab-pane" id="Patients" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Name</th>
                                        <th>Contact No</th>
                                        <th>Email</th>
                                        <th>View Details</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td> 1 </td>
                                            <td> ABC EFG </td>
                                            <td> 0171363968 </td>
                                            <td> mazharulislamtito@gmail.com </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="https://doctorly.themesbrand.website/patient/187">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td> 2 </td>
                                            <td> Juan Perez </td>
                                            <td> 5697567654 </td>
                                            <td> vmedelv@gmail.com </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="https://doctorly.themesbrand.website/patient/185">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td> 3 </td>
                                            <td> Ranga Mafaro </td>
                                            <td> 0242335544 </td>
                                            <td> rangamafaro@gmail.com </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="https://doctorly.themesbrand.website/patient/176">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td> 4 </td>
                                            <td> Ray Marasha </td>
                                            <td> 0242456987 </td>
                                            <td> raymarasha@gmail.com </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="https://doctorly.themesbrand.website/patient/175">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                                                            <tr>
                                            <td> 5 </td>
                                            <td> Ruvarashe Zimba </td>
                                            <td> 0424332211 </td>
                                            <td> ruvazimba@gmail.com </td>
                                            <td>
                                                <!-- Button trigger modal -->
                                                <a href="https://doctorly.themesbrand.website/patient/173">
                                                    <button type="button"
                                                        class="btn btn-primary btn-sm btn-rounded waves-effect waves-light"
                                                        data-toggle="modal" data-target=".exampleModal">
                                                        View Details
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                                                    </tbody>
                            </table>
                        </div>
                        <!-- end table-responsive -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end row -->
                        </div> <!-- content -->
        </div>
        <footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                2023 © Doctorly
            </div>
            <div class="col-sm-6">
                <div class="text-sm-right d-none d-sm-block">
                    Design &amp; Develop by Themesbrand
                </div>
            </div>
        </div>
    </div>
</footer>
    </div>
    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->
</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
<!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-right">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>
                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center">Choose Layouts</h6>
                <div class="p-4">
                    <div class="mb-2">
                        <img src="https://doctorly.themesbrand.website/assets/images/layouts/layout-1.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="light-mode-switch"
                            checked />
                        <label class="custom-control-label" for="light-mode-switch">Light Mode</label>
                    </div>
                    <div class="mb-2">
                        <img src="https://doctorly.themesbrand.website/assets/images/layouts/layout-2.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-3">
                        <input type="checkbox" class="custom-control-input theme-choice" id="dark-mode-switch"
                            data-bsStyle="https://doctorly.themesbrand.website/assets/css/bootstrap-dark.min.css"
                            data-appStyle="https://doctorly.themesbrand.website/assets/css/app-dark.min.css" />
                        <label class="custom-control-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
                    <div class="mb-2">
                        <img src="https://doctorly.themesbrand.website/assets/images/layouts/layout-3.jpg" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="custom-control custom-switch mb-5">
                        <input type="checkbox" class="custom-control-input theme-choice" id="rtl-mode-switch"
                            data-appStyle="https://doctorly.themesbrand.website/assets/css/app-rtl.min.css" />
                        <label class="custom-control-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>
                    <a href="javascript::void(0);" class="btn btn-primary btn-block mt-3" target="_blank"><i
                            class="mdi mdi-cart mr-1"></i> Purchase Now</a>
                </div>
            </div> <!-- end slim-scroll-menu-->
        </div>
        <!-- /Right-bar -->
<!-- END Right Sidebar -->

<!-- JAVASCRIPT -->
        <script src="https://doctorly.themesbrand.website/assets/libs/jquery/jquery.min.js"></script>
        <script src="https://doctorly.themesbrand.website/assets/libs/bootstrap/bootstrap.min.js"></script>
        <script src="https://doctorly.themesbrand.website/assets/libs/metismenu/metismenu.min.js"></script>
        <script src="https://doctorly.themesbrand.website/assets/libs/simplebar/simplebar.min.js"></script>
        <script src="https://doctorly.themesbrand.website/assets/libs/node-waves/node-waves.min.js"></script>
        <script src="https://doctorly.themesbrand.website/assets/libs/toastr/toastr.min.js"></script>

                <!-- Plugin Js-->
        <script src="https://doctorly.themesbrand.website/assets/libs/apexcharts/apexcharts.min.js"></script>
        <script src="https://doctorly.themesbrand.website/assets/js/pages/dashboard.init.js"></script>
            <!-- App js -->
        <script src="https://doctorly.themesbrand.website/assets/js/app.min.js"></script>
        <script>
                                                    function notifyCount(){
                var load_count = $('.badge-pill').html();
                var token = $("input[name='_token']").val();
                $.ajax({
                type: "get",
                url: "/notification-count",
                data:{
                _token: token,
                },
                success: function (data) {
                $('.badge-pill').html(data);
                if(load_count < data){ notificationShow(); } }, error:function (data){ console.log(data); } }); }
                    setInterval(function() { notifyCount(); }, 10000);                             function notificationShow(){
                var token = $("input[name='_token']").val();
                $.ajax({
                type: "POST",
                url: "/top-notification",
                data:{
                _token: token,
                },
                success: function (data) {
                $('.notification-list-scroll').html(data.options);
                },
                error:function (data){
                console.log(data);
                }
                });
                }
                setInterval(function() {
                notificationShow();
                }, 5000);
                    </script>
        </body>

</html>
