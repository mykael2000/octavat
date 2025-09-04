<?php
include("exchange/account/connection.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

// Load PHPMailer classes
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/SMTP.php';

$message = ""; // Initialize message variable
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['register'])) {
    // Sanitize and collect form inputs
    $firstname = trim($_POST["fname"]);
    $lastname = trim($_POST["lname"]);
    $username = trim($_POST['username']);
    $email = trim($_POST["email"]);
    $currency = trim($_POST["currency"]);
    $phone = trim($_POST["phone"]);
    $password = trim($_POST["password"]);
    $confirmpassword = trim($_POST["confirmpassword"]);
    $ref_by = isset($_POST["ref_by"]) ? trim($_POST["ref_by"]) : null; // Handle optional referral ID

    $has_error = false; // Flag to track if any error occurred during validation

    // --- Validation Checks ---

    // 1. Check database connection
    if ($conn->connect_error) {
        $message = "<div class='alert alert-danger'>Database connection failed: " . $conn->connect_error . "</div>";
        $has_error = true;
    }

    // 2. Password Mismatch Check
    if (!$has_error && $password !== $confirmpassword) {
        $message = "<div class='alert alert-danger'>Passwords do not match. Please try again.</div>";
        $has_error = true;
    }

    // 3. Check if email already exists
    if (!$has_error) {
        $stmt_check_email = $conn->prepare("SELECT * FROM users WHERE email = ?");
        // Check if prepare was successful
        if ($stmt_check_email === false) {
            $message = "<div class='alert alert-danger'>Database error (email check): " . $conn->error . "</div>";
            $has_error = true;
        } else {
            $stmt_check_email->bind_param("s", $email);
            $stmt_check_email->execute();
            $result_check_email = $stmt_check_email->get_result();
            if ($result_check_email->num_rows > 0) {
                $message = '<div class="alert alert-danger">The email has already been taken.</div>';
                $has_error = true;
            }
            $stmt_check_email->close();
        }
    }
    
    // You might want to add more validation here, e.g.,
    // - Check if username already exists
    // - Validate email format
    // - Validate password strength
    // - Validate phone number format

    // --- Proceed to Registration Only if No Errors ---
    if (!$has_error) {
        // Hash the password securely
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

        // Prepare and execute the INSERT statement
        $stmt_insert_user = $conn->prepare("INSERT INTO users (firstname, lastname, username, email, currency, phone, password, ref_by) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        
        // Check if prepare was successful
        if ($stmt_insert_user === false) {
            $message = "<div class='alert alert-danger'>Database error (user insertion): " . $conn->error . "</div>";
        } else {
            // Include ref_by in binding
            $stmt_insert_user->bind_param("ssssssss", $firstname, $lastname, $username, $email, $currency, $phone, $hashedPassword, $ref_by);

            if ($stmt_insert_user->execute()) {
                // User successfully inserted into DB
                // Attempt to send email
                $mail = new PHPMailer(true);
                try {
                    // Server settings
                    $mail->isSMTP();
                    $mail->Host       = 'smtp.zoho.com';
                    $mail->SMTPAuth   = true;
                    $mail->Username   = 'support@octavat.com'; // Your SMTP username
                    $mail->Password   = 'ZEtr232@ULt';           // Your SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Use SSL implicit TLS
                    $mail->Port       = 465;

                    // Recipients
                    $mail->setFrom('support@octavat.com', 'Support');
                    $mail->addAddress($email); // Add a recipient
               

                    // Content
                    $mail->isHTML(true); // Set email format to HTML
                    $mail->Subject = 'Successful Registration - Octavat';
                    $mail->Body    = "
                    <html>
                    <head></head>
                    <body style='background-color: #1e2024; padding: 45px;'>
                        <div>
                            <img style='position:relative; left:35%; border-radius: 50%; height: 100px; width: 100px;' src='https://octavat.com/logo.jpg'>
                            <h3 style='color: black;'>Mail From support@Octavat.com - Successful Registration</h3>
                        </div>
                        <div style='color: #fff;'>
                            <h3>Dear $firstname,</h3>
                            <p>Welcome to Octavat, an automated trading platform where even investors with zero experience can make profits.</p>
                            <h5>Click the button below to log in and proceed to get the best experience from Octavat</h5>
                            <a style='background-color:#060c39;color:#fff; padding:15px; text-decoration:none;border-radius: 10px;font-size: 20px;'
                            href='https://octavat.com/login.php'>Sign in</a>
                            <h5>Note: Do not disclose the details in this email to anyone.</h5>
                        </div>
                        <div style='background-color: white; color: black;'>
                            <h3 style='color: black;'>Support@Octavat.com</h3>
                        </div>
                    </body>
                    </html>";
                    // $mail->AltBody = 'This is the plain text version for non-HTML mail clients'; // Optional plain text body

                    $mail->send();
                    $message = "<div class='alert alert-success'>Account Created Successfully! Please check your email for more details.</div>";
                    header("refresh: 2;url=login.php"); // Redirect after successful registration and email attempt
                   
                } catch (Exception $e) {
                    $message = "<div class='alert alert-warning'>Account created, but email could not be sent. Mailer Error: {$mail->ErrorInfo}</div>";
                    // Log the error for debugging, but don't prevent user from seeing success
                    error_log("PHPMailer Error for email {$email}: {$mail->ErrorInfo}");
                    header("refresh: 5;url=login.php"); // Redirect even if email fails, but give more time for message
                   
                }
            } else {
                // Error during database INSERT operation (e.g., if username was unique and duplicate, or other DB constraints)
                $message = "<div class='alert alert-danger'>Error: " . $stmt_insert_user->error . "</div>";
            }
            $stmt_insert_user->close();
        }
    }
}

// Close the database connection after all operations are done
if (isset($conn)) {
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Octavat</title>
    <!-- Inter Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap">
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .bg-grid-pattern {
            background-image: radial-gradient(rgba(45, 55, 72, 0.3) 1px, transparent 1px);
            background-size: 20px 20px;
        }
    </style>
</head>
<body class="bg-gray-950 text-white flex items-center justify-center min-h-screen py-16 px-4 sm:px-6 lg:px-8 bg-grid-pattern">
    <div class="max-w-4xl w-full flex flex-col md:flex-row rounded-2xl overflow-hidden shadow-2xl bg-gray-900 border border-gray-800">

        <!-- Left Column - Visuals and Marketing -->
        <div class="hidden md:flex flex-1 p-8 lg:p-12 flex-col justify-between bg-gradient-to-br from-indigo-900 to-slate-950 relative">
            <div class="absolute inset-0 z-0 opacity-20">
                <canvas id="chartCanvas" class="w-full h-full"></canvas>
            </div>
            <div class="relative z-10 flex flex-col h-full">
                <div class="text-indigo-400 text-3xl font-extrabold tracking-tight">
                    <img src="logo.png">
                </div>
                <div class="mt-auto">
                    <h1 class="text-4xl font-bold leading-tight mt-8">
                        Join the <br>Future of <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 to-indigo-600">Crypto Trading</span>
                    </h1>
                    <p class="mt-4 text-gray-300 max-w-sm">
                        Seamlessly register in minutes and gain access to a world-class platform with advanced tools and real-time market data.
                    </p>
                    <ul class="mt-8 space-y-4 text-gray-400">
                        <li class="flex items-center">
                            <i class="fa-solid fa-chart-line text-indigo-400 w-5 h-5 mr-3"></i>
                            <span class="text-gray-200">Live Market Insights</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-lock text-indigo-400 w-5 h-5 mr-3"></i>
                            <span class="text-gray-200">Secure & Protected</span>
                        </li>
                        <li class="flex items-center">
                            <i class="fa-solid fa-headset text-indigo-400 w-5 h-5 mr-3"></i>
                            <span class="text-gray-200">24/7 Support</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Right Column - Registration Form -->
        <div class="flex-1 p-6 sm:p-10 lg:p-16 flex items-center justify-center">
            <div class="w-full max-w-md">
                <h2 class="text-3xl font-bold text-center text-gray-100">Create Your Account</h2>
                <p class="mt-2 text-center text-sm text-gray-400">
                    Already a member?
                    <a href="login.php" class="font-medium text-indigo-400 hover:text-indigo-500 transition-colors duration-200">
                        Sign in to your account
                    </a>
                </p>

                <form action="" method="post" class="mt-8 space-y-6">
                    <?php echo $message; ?>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="fname" class="sr-only">First Name</label>
                            <input id="fname" name="fname" type="text" autocomplete="given-name" required class="appearance-none relative block w-full px-4 py-3 border border-gray-700 placeholder-gray-500 text-gray-200 rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 bg-gray-800 transition-colors duration-200" placeholder="First Name">
                        </div>
                        <div>
                            <label for="lname" class="sr-only">Last Name</label>
                            <input id="lname" name="lname" type="text" autocomplete="family-name" required class="appearance-none relative block w-full px-4 py-3 border border-gray-700 placeholder-gray-500 text-gray-200 rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 bg-gray-800 transition-colors duration-200" placeholder="Last Name">
                        </div>
                    </div>

                    <div>
                        <label for="username" class="sr-only">Username</label>
                        <input id="username" name="username" type="text" autocomplete="username" required class="appearance-none relative block w-full px-4 py-3 border border-gray-700 placeholder-gray-500 text-gray-200 rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 bg-gray-800 transition-colors duration-200" placeholder="Username">
                    </div>

                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none relative block w-full px-4 py-3 border border-gray-700 placeholder-gray-500 text-gray-200 rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 bg-gray-800 transition-colors duration-200" placeholder="Email Address">
                    </div>

                    <div>
                        <label for="phone" class="sr-only">Phone Number</label>
                        <input id="phone" name="phone" type="tel" autocomplete="tel" required class="appearance-none relative block w-full px-4 py-3 border border-gray-700 placeholder-gray-500 text-gray-200 rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 bg-gray-800 transition-colors duration-200" placeholder="Phone Number">
                    </div>

                    <div>
                        <label for="currency" class="sr-only">Currency</label>
                        <div class="relative">
                            <select id="currency" name="currency" required class="block w-full px-4 py-3 border border-gray-700 text-gray-200 rounded-xl appearance-none focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 bg-gray-800 transition-colors duration-200">
                                <option value="" disabled selected class="text-gray-500">Select Currency</option>
                                <option value="USD">USD - United States Dollar</option>
                                <option value="EUR">EUR - Euro</option>
                                <option value="GBP">GBP - British Pound Sterling</option>
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                                <i class="fa-solid fa-chevron-down"></i>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="password" class="sr-only">Password</label>
                            <input id="password" name="password" type="password" autocomplete="new-password" required class="appearance-none relative block w-full px-4 py-3 border border-gray-700 placeholder-gray-500 text-gray-200 rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 bg-gray-800 transition-colors duration-200" placeholder="Password">
                        </div>
                        <div>
                            <label for="confirm-password" class="sr-only">Confirm Password</label>
                            <input id="confirm-password" name="confirmpassword" type="password" autocomplete="new-password" required class="appearance-none relative block w-full px-4 py-3 border border-gray-700 placeholder-gray-500 text-gray-200 rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 bg-gray-800 transition-colors duration-200" placeholder="Confirm Password">
                        </div>
                    </div>

                    <div>
                        <label for="ref_by" class="sr-only">Referral ID</label>
                        <input id="ref_by" name="ref_by" type="text" class="appearance-none relative block w-full px-4 py-3 border border-gray-700 placeholder-gray-500 text-gray-200 rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 bg-gray-800 transition-colors duration-200" placeholder="Referral ID (optional)">
                    </div>

                    <div>
                        <button name="register" type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-semibold rounded-xl text-white bg-gradient-to-r from-indigo-500 to-blue-600 hover:from-indigo-600 hover:to-blue-700 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md">
                            Create Account
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Simple canvas animation for the background chart effect
        const chartCanvas = document.getElementById('chartCanvas');
        const ctx = chartCanvas.getContext('2d');
        let points = [];
        let animationFrameId;

        function resizeCanvas() {
            chartCanvas.width = chartCanvas.offsetWidth;
            chartCanvas.height = chartCanvas.offsetHeight;
        }

        window.addEventListener('resize', resizeCanvas);
        resizeCanvas();

        function initPoints() {
            points = [];
            const numPoints = Math.floor(chartCanvas.width / 10);
            for (let i = 0; i <= numPoints; i++) {
                points.push({
                    x: i * (chartCanvas.width / numPoints),
                    y: Math.random() * chartCanvas.height,
                    speed: 0.1 + Math.random() * 0.2
                });
            }
        }

        function draw() {
            ctx.clearRect(0, 0, chartCanvas.width, chartCanvas.height);
            ctx.strokeStyle = '#818cf8';
            ctx.lineWidth = 1.5;
            ctx.beginPath();
            ctx.moveTo(points[0].x, points[0].y);

            for (let i = 0; i < points.length; i++) {
                points[i].y += Math.sin(Date.now() * 0.0005 + points[i].x * 0.01) * points[i].speed;
                ctx.lineTo(points[i].x, points[i].y);
            }
            ctx.stroke();

            // Draw a gradient fill below the line
            const gradient = ctx.createLinearGradient(0, 0, 0, chartCanvas.height);
            gradient.addColorStop(0, 'rgba(129, 140, 248, 0.4)');
            gradient.addColorStop(0.5, 'rgba(129, 140, 248, 0.1)');
            gradient.addColorStop(1, 'rgba(129, 140, 248, 0)');
            ctx.fillStyle = gradient;
            ctx.lineTo(chartCanvas.width, chartCanvas.height);
            ctx.lineTo(0, chartCanvas.height);
            ctx.closePath();
            ctx.fill();

            animationFrameId = requestAnimationFrame(draw);
        }

        window.onload = function() {
            initPoints();
            draw();
        };

      
    </script>
</body>
</html>
