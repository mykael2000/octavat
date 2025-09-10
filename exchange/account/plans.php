<?php
include('connection.php');
include('function.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Octavat Dashboard - Plans</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0c0e11;
            color: #d1d5db;
        }
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-[#121417] text-gray-300">
    <div class="min-h-screen flex flex-col">
        <?php include('topnav.php'); ?>
        <main class="flex-1 p-4 overflow-y-auto no-scrollbar">
            <div class="flex items-center space-x-4 mb-4 text-sm font-medium border-b border-gray-700/50 pb-2 overflow-x-auto no-scrollbar">
                <a href="index.php" class="text-gray-400 px-2 py-1 rounded-full hover:text-white transition-colors duration-200">Assets Overview</a>
                <a href="trading_account.php" class="text-gray-400 px-2 py-1 rounded-full hover:text-white transition-colors duration-200">Trading Account</a>
                <button class="text-white px-2 py-1 rounded-full border-b-2 border-green-500 font-semibold transition-colors duration-200">Investment Plans</button>
                <a href="deposit.php" class="text-gray-400 px-2 py-1 rounded-full hover:text-white transition-colors duration-200">Deposit</a>
                <a href="withdrawal.php" class="text-gray-400 px-2 py-1 rounded-full hover:text-white transition-colors duration-200">Withdrawal</a>
            </div>
            
            <div id="plans-content">
                <div class="mb-6">
                    <h1 class="text-2xl font-bold mb-1 text-white">Choose a Plan</h1>
                    <p class="text-sm text-gray-400">Select an investment plan that fits your goals. All plans offer daily returns.</p>
                </div>

                <div class="mt-8">
                    <h2 class="text-xl font-bold mb-4 text-white">Investment Plans</h2>
                    <div class="space-y-6">
                        <div class="bg-[#1f2125] rounded-lg p-6 shadow-md border border-gray-700/50">
                            <h3 class="text-xl font-bold text-white mb-2">Basic Plan</h3>
                            <p class="text-sm text-gray-400 mb-4">A great starting point for new investors.</p>
                            <div class="grid grid-cols-2 gap-4 text-sm mb-4">
                                <div class="text-gray-400">Min. Deposit: <span class="text-white font-semibold">$699</span></div>
                                <div class="text-gray-400">Max. Deposit: <span class="text-white font-semibold">$9,999</span></div>
                                <div class="text-gray-400">Profit Rate: <span class="text-green-500 font-semibold">19%</span></div>
                            </div>
                            <a href="invest.php?plan=basic" class="w-full block text-center bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                                Invest Now
                            </a>
                        </div>

                        <div class="bg-[#1f2125] rounded-lg p-6 shadow-md border border-gray-700/50">
                            <h3 class="text-xl font-bold text-white mb-2">Standard Plan</h3>
                            <p class="text-sm text-gray-400 mb-4">Balanced risk and reward for steady growth.</p>
                            <div class="grid grid-cols-2 gap-4 text-sm mb-4">
                                <div class="text-gray-400">Min. Deposit: <span class="text-white font-semibold">$10,000</span></div>
                                <div class="text-gray-400">Max. Deposit: <span class="text-white font-semibold">$79,999</span></div>
                                <div class="text-gray-400">Profit Rate: <span class="text-green-500 font-semibold">23%</span></div>
                            </div>
                            <a href="invest.php?plan=standard" class="w-full block text-center bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                                Invest Now
                            </a>
                        </div>
                        
                        <div class="bg-[#1f2125] rounded-lg p-6 shadow-md border border-gray-700/50">
                            <h3 class="text-xl font-bold text-white mb-2">Advanced Plan</h3>
                            <p class="text-sm text-gray-400 mb-4">Optimized for experienced investors.</p>
                            <div class="grid grid-cols-2 gap-4 text-sm mb-4">
                                <div class="text-gray-400">Min. Deposit: <span class="text-white font-semibold">$80,000</span></div>
                                <div class="text-gray-400">Max. Deposit: <span class="text-white font-semibold">$299,999</span></div>
                                <div class="text-gray-400">Profit Rate: <span class="text-green-500 font-semibold">32%</span></div>
                            </div>
                            <a href="invest.php?plan=advanced" class="w-full block text-center bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                                Invest Now
                            </a>
                        </div>
                        
                        <div class="bg-[#1f2125] rounded-lg p-6 shadow-md border border-gray-700/50">
                            <h3 class="text-xl font-bold text-white mb-2">Elite Plan</h3>
                            <p class="text-sm text-gray-400 mb-4">Exclusive access for high-volume traders.</p>
                            <div class="grid grid-cols-2 gap-4 text-sm mb-4">
                                <div class="text-gray-400">Min. Deposit: <span class="text-white font-semibold">$300,000</span></div>
                                <div class="text-gray-400">Max. Deposit: <span class="text-white font-semibold">$6,000,000</span></div>
                                <div class="text-gray-400">Profit Rate: <span class="text-green-500 font-semibold">42%</span></div>
                            </div>
                            <a href="invest.php?plan=elite" class="w-full block text-center bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                                Invest Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include('navbar.php'); ?>
    </div>
    <script src="js/topNavFooter.js"></script>
</body>
</html>