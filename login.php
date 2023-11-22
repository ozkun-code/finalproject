<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Login | Doctorly - Hospital & Clinic Management Laravel System. </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Hospital Management System" name="description" />
    <meta content="Doctorly" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="http://localhost/FinalProject/assets/images/favicon.ico">
    <!-- App css -->
    <link href="http://localhost/FinalProject/assets/css/bootstrap-dark.min.css" id="bootstrap-dark" disabled rel="stylesheet" type="text/css" />
    <link href="http://localhost/FinalProject/assets/css/bootstrap.min.css" id="bootstrap-light" rel="stylesheet" type="text/css" />
    <link href="http://localhost/FinalProject/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="http://localhost/FinalProject/assets/css/app-rtl.min.css" id="app-rtl" disabled rel="stylesheet" type="text/css" />
    <link href="http://localhost/FinalProject/assets/css/app-dark.min.css" id="app-dark" disabled rel="stylesheet" type="text/css" />
    <link href="http://localhost/FinalProject/assets/css/app.min.css" id="app-light" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="http://localhost/FinalProject/assets/libs/toastr/toastr.min.css">

</head>

<body>
    <?php

    //learn from w3schools.com
    //Unset all the server side variables

    session_start();

    $_SESSION["user"] = "";
    $_SESSION["usertype"] = "";

    // Set the new timezone
    date_default_timezone_set('Asia/Kolkata');
    $date = date('Y-m-d');

    $_SESSION["date"] = $date;


    //import database
    include("connection.php");





    if ($_POST) {

        $email = $_POST['useremail'];
        $password = $_POST['userpassword'];

        $error = '<label for="promter" class="form-label"></label>';

        $result = $database->query("select * from webuser where email='$email'");
        if ($result->num_rows == 1) {
            $utype = $result->fetch_assoc()['usertype'];
            if ($utype == 'p') {
                //TODO
                $checker = $database->query("select * from patient where pemail='$email' and ppassword='$password'");
                if ($checker->num_rows == 1) {


                    //   Patient dashbord
                    $_SESSION['user'] = $email;
                    $_SESSION['usertype'] = 'p';

                    header('location: patient/index.php');
                } else {
                    $error = '<div class="alert alert-danger" role="alert">
                    Wrong credential invalid email or password!
                  </div>';
                }
            } elseif ($utype == 'a') {
                //TODO
                $checker = $database->query("select * from admin where aemail='$email' and apassword='$password'");
                if ($checker->num_rows == 1) {


                    //   Admin dashbord
                    $_SESSION['user'] = $email;
                    $_SESSION['usertype'] = 'a';

                    header('location: admin/index.php');
                } else {
                    $error = '<div class="alert alert-danger" role="alert">
                    Wrong credential invalid email or password!
                  </div>';
                }
            } elseif ($utype == 'd') {
                //TODO
                $checker = $database->query("select * from doctor where docemail='$email' and docpassword='$password'");
                if ($checker->num_rows == 1) {


                    //   doctor dashbord
                    $_SESSION['user'] = $email;
                    $_SESSION['usertype'] = 'd';
                    header('location: doctor/index.php');
                } else {
                    $error = '<div class="alert alert-danger" role="alert">
                    Wrong credential invalid email or password!
                  </div>';
                }
            }
        } else {
            $error = '<div class="alert alert-danger" role="alert">
            Wrong credential invalid email or password!
          </div>';
        }
    } else {
        $error = '';
    }

    ?>





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

    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-soft-primary">
                            <div class="row">
                                <div class="col-7">
                                    <div class="text-primary p-4">
                                        <h5 class="text-primary">Welcome Back !</h5>
                                        <p>Sign in to continue to Doctorly.</p>
                                    </div>
                                </div>
                                <div class="col-5 align-self-end">
                                    <img src="assets/img/profile-img.png" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="card-body pt-0">
                            <div>
                                <a href="http://localhost/FinalProject">
                                    <div class="avatar-md profile-user-wid mb-4">
                                        <span class="avatar-title rounded-circle bg-light">
                                            <img src="assets/img/logoweb1__1_-removebg-preview.png" alt="" class="rounded-circle" height="60">
                                        </span>
                                    </div>
                                </a>
                            </div>
                            <div class="p-2">

                                <form class="form-horizontal" action="" method="POST">
                                    <input type="hidden">
                                    <div class="form-group">
                                        <label for="useremail" class="form-label">Email: </label>
                                        <input name="useremail" type="email" id="email" class="form-control " id="useremail" placeholder="Enter username" autocomplete="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <label for="userpassword">Password</label>
                                        <input type="password" name="userpassword" id="pass" class="form-control  " id="userpassword" placeholder="Enter password">
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="remember" id="customControlInline">
                                        <label class="custom-control-label" for="customControlInline">Remember me</label>

                                    </div>
                                    <?php echo $error ?>
                                    <div class="mt-3">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit" value="login">Log In</button>
                                    </div>
                            </div>
                        </div>

                        </form>
                    </div>
                </div>
            </div>
            <div class="mt-5 text-center">
                <p>Don&#039;t have an account ? <a href="http://localhost/FinalProject/register" class="font-weight-medium text-primary"> Sign Up here</a> </p>
                <p>© 2023 <i class="mdi mdi-heart text-danger"></i> by Fahrul</p>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!-- JAVASCRIPT -->
    <script src="http://localhost/FinalProject/assets/js/jquery.min.js"></script>
    <script src="http://localhost/FinalProject/assets/js/bootstrap.min.js"></script>
    <script src="http://localhost/FinalProject/assets/js/metismenu.min.js"></script>
    <script src="http://localhost/FinalProject/assets/js/simplebar.min.js"></script>
    <script src="http://localhost/FinalProject/assets/js/node-waves.min.js"></script>
    <script src="http://localhost/FinalProject/assets/js/toastr.min.js"></script>

    <!-- App js -->
    <script src="http://localhost/FinalProject/assets/js/app.min.js"></script>

</body>

</html>