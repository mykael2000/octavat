<?php
include '../user-area/includes/connection.php';
ob_start();
session_start();


if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // 1. Prepared Statement (Parameterized Query)
    $sql = "SELECT * FROM clients WHERE email = ? AND password = ?";
    $stmt = mysqli_prepare($con, $sql);

    // 2. Parameter Binding
    mysqli_stmt_bind_param($stmt, "ss", $email, $password); // "ss" indicates both are strings

    // 3. Execute the Statement
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result->num_rows > 0) {
        
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];

        // Generate a random OTP
        $otp = random_int(1000, 9999); // Use random_int for cryptographically secure random numbers

        header("location: ../dashboard/main.php");

    } else {
        echo "<script>alert('Whoops! Email or Password is incorrect')</script>";
    }

    // Close the prepared statement
    mysqli_stmt_close($stmt);
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
    <title>Coinacko | Login</title>
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../css/ruang-admin.min.css" rel="stylesheet">

</head>

<style>
    .container-login {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .card {
        max-width: 500px;
        width: 100%;
        padding: 20px;
        border-radius: 8px;
        border: none;
    }

    .btn-primary-custom {
        background-color: #1b21d1;
        color: white;
        border: none;
        border-radius: 25px;
        padding: 10px 20px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .btn-primary-custom:hover {
        background-color: #1519b2;
    }
    .form-control {
        border-radius: 8px;
    }

    @media (max-width: 567px) {
        .card {
            padding: 15px;
            box-shadow: none;
        }

        .container-login {
            margin-top: -32px;;
            padding: 20px;
        }

        .form-control {
            font-size: 16px;
        }

        .btn-primary-custom {
            font-size: 16px;
            padding: 8px 15px;
        }
    }
</style>
</head>

<body class="bg-gradient-login" style="background-color:#f9f9f9;">
<!-- Login Content -->
    <div class="container-login" id="home">
        <div class="card shadow-lg">
            <div class="card-body">
                <div class="d-flex justify-content-center p-3 pb-5">
                    <img src="../../Coinackologo.png" alt="logo" style="width: 150px;">
                </div>
                <div class="text-center">
                    <h1 class="h4 text-black mb-4 font-weight-bold">Login</h1>
                    <p>A better way to trade and manage cryptocurrency</p>
                </div>

                <form class="user" method="POST" action="">
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                            placeholder="Enter Email Address" name="email" autofocus>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword"
                            placeholder="Password">
                    </div>
                    <div class="form-group d-flex justify-content-end">
                        <a class="font-weight-bold small" href="forgot.php" style="color: #1b21d1;">Forgot password?</a>
                    </div>
                    <div class="form-group">
                        <button name="submit" type="submit" class="btn btn-primary-custom btn-block">Login</button>
                    </div>
                </form>

                <hr>
                <div class="text-center text-black">
                    <p>No account? <a class="font-weight-bold small" href="register.php" style="color:#1b21d1;">Sign up</a></p>
                    <p>Return to <a class="font-weight-bold small" href="../../index.php" style="color:#1b21d1;">Home</a></p>
                </div>
            </div>
        </div>
    </div>
</body>

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