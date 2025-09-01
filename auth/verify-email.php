<?php
include '../user-area/includes/connection.php';
session_start();

$email = $_GET['email'];
$fetchsql = "SELECT * FROM clients WHERE email = '$email'";
$fetchquery = mysqli_query($con, $fetchsql);
$fetch = mysqli_fetch_assoc($fetchquery);

if (isset($_POST['submit'])) {
    $verification_code = $fetch['verification_code'];
    $code = $_POST['code'];

    if ($code == $verification_code) {
        $sql = "UPDATE clients set email_verified_at = 'verified' WHERE email='$email'";
        $result = mysqli_query($con, $sql);
        echo "<script>alert('Email successfully verified, kindly login....')</script>";
    } else {
        echo "<script>alert('Verification code incorrect, try again')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $website->description }}">
    <meta name="keywords" content="{{ $website->keywords }}">
    <link href="{{ asset('storage/'.str_replace('public/', '', $company->favicon))}}" rel="icon">
    <title>Coinacko | Verify</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/ruang-admin.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-login" style="background-color:#f9f9f9;">
    <!-- Login Content -->
    <div class="container-login" id="home">
        <div class="row justify-content-center">
            <div class="col-xl-4 col-lg-8 col-md-9 pt-5">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                    <div class="d-flex justify-content-center p-3 pb-5">
                        <img src="../../Coinackologo.png" alt="logo" style="width: 150px;">
                    </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="d-flex justify-content-center p-3 pb-5">
                                        <img src="../../Coinackologowhite.png" alt="logo">
                                    </div>
                                    <div class="text-center">
                                        <h1 class="h4 text-white mb-4 font-weight-bold">Welcome to Coinacko</h1>
                                    </div>
                                    <form class="user" method="POST" action="">
                                        <div class="form-group">
                                            <input type="number" name="code" class="form-control"
                                                id="exampleInputPassword" placeholder="Verification Code">
                                        </div>
                                        <div class="form-group">
                                            <button name="submit" type="submit" class="btn text-white btn-block"
                                                style="background-color:#ffc107; border-radius: 25px;">Submit</button>
                                        </div>

                                    </form>
                                    <hr>
                                    <div class="d-flex content-justify">
                                        <div class="text-left w-75 text-white">
                                            Verified? <a class="font-weight-bold small" href="login.php"
                                                style="color:#ffc107;">Sign into your account</a>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="text-center text-white">
                                        Return to <a class="font-weight-bold small" href="../../index.php"
                                            style="color:#ffc107;">Home</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Login Content -->
    <?php include "../../includes/livechat.php";?>
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../js/ruang-admin.min.js"></script>
    <!-- particles -->
    <script src="../asset/js/particles.min.js"></script>
    <script src="../asset/js/app.js"></script>
    <!-- scripts js -->
    <script src="../asset/js/scripts.js"></script>
</body>

</html>