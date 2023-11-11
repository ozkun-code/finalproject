<?php include('layout/head.php') ?>
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
