<?php
session_start();
include("exchange/account/connection.php");
$message ="";
if (isset($_POST['login'])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to fetch user details based on email
    $query = "SELECT id, email, password FROM users WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row["password"];

        // Verify the password
        if (password_verify($password, $hashedPassword)) {
            // Password is correct, set up a session
            $_SESSION["user_id"] = $row["id"];
            $_SESSION["user_email"] = $row["email"];
            
            // Redirect to the dashboard or another secure page
            header("Location: exchange/account/index.php");
            exit();
        } else {
            $message = '<div class="bg-red-100 border-l-4 border-red-500 text-red-800 p-2 rounded-md shadow-sm" role="alert">Incorrect password. Please try again.</div>';
        }
    } else {
        $message = '<div class="bg-red-100 border-l-4 border-red-500 text-red-800 p-2 rounded-md shadow-sm" role="alert">User not found. Please check your email.</div>';
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Octavat Exchange</title>
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
                    <img src='logo.png'>
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
                <h2 class="text-3xl font-bold text-center text-gray-100">Log Into Your Account</h2>
                <?php echo $message; ?>
                <p class="mt-2 text-center text-sm text-gray-400">
                    Not a member?
                    <a href="register.php" class="font-medium text-indigo-400 hover:text-indigo-500 transition-colors duration-200">
                        Create An Account
                    </a>
                </p>

                <form action="" method="post" class="mt-8 space-y-6">
                    <div>
                        <label for="email" class="sr-only">Email address</label>
                        <input id="email" name="email" type="email" autocomplete="email" required class="appearance-none relative block w-full px-4 py-3 border border-gray-700 placeholder-gray-500 text-gray-200 rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 bg-gray-800 transition-colors duration-200" placeholder="Email Address">
                    </div>

                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="new-password" required class="appearance-none relative block w-full px-4 py-3 border border-gray-700 placeholder-gray-500 text-gray-200 rounded-xl focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 bg-gray-800 transition-colors duration-200" placeholder="Password">
                    </div>

                    <div>
                        <button name="login" type="submit" class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-semibold rounded-xl text-white bg-gradient-to-r from-indigo-500 to-blue-600 hover:from-indigo-600 hover:to-blue-700 transition-all duration-300 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 shadow-md">
                            Sign in
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
