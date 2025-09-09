<?php
include('connection.php');
include('function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Octavat Dashboard</title>
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
        <!-- Main Content -->
        <main class="flex-1 p-4 overflow-y-auto no-scrollbar">
            <!-- Nav tabs -->
            <div class="flex items-center space-x-4 mb-4 text-sm font-medium border-b border-gray-700/50 pb-2 overflow-x-auto no-scrollbar">
                
                <button id="spot-tab" class="text-white px-2 py-1 rounded-full border-b-2 border-green-500 font-semibold transition-colors duration-200">Assets Overview</button>
                <button id="futures-tab" class="text-gray-400 px-2 py-1 rounded-full hover:text-white transition-colors duration-200">Trading Account</button>
                <a href="../../octavat.html" id="" class="text-gray-400 px-2 py-1 rounded-full hover:text-white transition-colors duration-200">New Listing</a>
                <button id="deposit-tab" class="text-gray-400 px-2 py-1 rounded-full hover:text-white transition-colors duration-200">Deposit</button>
                <a href="withdrawal.php" class="text-gray-400 px-2 py-1 rounded-full hover:text-white transition-colors duration-200">Withdrawal</a>
                
            </div>
            
           

            <!-- Spot Account Content -->
            <div id="spot-content">
                <!-- Account Summary -->
                <div class="mb-6">
                    <h1 class="text-xl font-bold mb-1 text-white">Total Balance</h1>
                    <div class="flex items-center text-gray-400 text-sm mb-2">
                        <span class="mr-1">Total Assets</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <div class="flex items-center mb-1">
                        <span class="text-3xl font-bold text-white">0.00</span>
                        <span class="text-lg font-bold text-gray-400 ml-2">USDT</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div class="text-sm text-gray-400">≈ $0.00</div>

                    <div class="flex justify-between items-center mt-4 border-t border-gray-700/50 pt-4">
                        <div>
                            <div class="text-xs text-gray-400 mb-1">Today's PnL</div>
                            <div class="text-green-500 font-bold">$0.00 <span class="ml-1">0.00%</span></div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8L11 20" />
                        </svg>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex justify-around mb-6 text-center">
                    <button class="flex flex-col items-center p-3 rounded-lg hover:bg-[#1f2125]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                        <span class="text-sm">Deposit</span>
                    </button>
                    <a href="withdrawal.php" class="flex flex-col items-center p-3 rounded-lg hover:bg-[#1f2125]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5m0 0h.01m0 0v5m-4-5h.01m0-5h.01M20 20v-5m0 0h.01m0 0v-5m4 5h.01m0 5h.01M12 4v16m0-8h.01" />
                        </svg>
                        <span class="text-sm">Withdraw</span>
                    </a>
                    <button class="flex flex-col items-center p-3 rounded-lg hover:bg-[#1f2125]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                        </svg>
                        <span class="text-sm">Transfer</span>
                    </button>
                </div>

                <!-- Search Bar -->
                <div class="mb-6 relative">
                    <input type="text" placeholder="Search" class="w-full bg-[#1f2125] text-gray-300 rounded-lg py-2 px-4 focus:outline-none focus:ring-1 focus:ring-green-500 pr-10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500 absolute right-3 top-1/2 transform -translate-y-1/2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </div>

                <!-- Asset List Header -->
                <div class="flex items-center justify-between mb-4 text-sm text-gray-400 border-b border-gray-700/50 pb-2">
                    <div class="flex items-center space-x-2">
                        <input type="checkbox" id="hideZero" class="form-checkbox h-4 w-4 text-green-500 bg-gray-800 rounded focus:ring-green-500">
                        <label for="hideZero">Hide 0 balance assets</label>
                    </div>
                    <div class="text-right">Coin</div>
                    <div class="text-right">Total</div>
                </div>

                <!-- Asset List (Repeating Block) -->
                <div class="space-y-4">
                    <!-- BTC -->
                    <div class="flex items-center justify-between py-2 border-b border-gray-700/50">
                        <div class="flex items-center">
                            <img src="https://placehold.co/32x32/ff9900/ffffff?text=BTC" alt="Bitcoin logo" class="w-8 h-8 rounded-full mr-3">
                            <div>
                                <div class="text-white font-semibold">BTC</div>
                                <div class="text-xs text-gray-400">Bitcoin</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-white font-semibold">0.00000000</div>
                            <div class="text-xs text-gray-400">≈ $0.00</div>
                        </div>
                    </div>

                    <!-- USDT -->
                    <div class="flex items-center justify-between py-2 border-b border-gray-700/50">
                        <div class="flex items-center">
                            <img src="https://placehold.co/32x32/26a17b/ffffff?text=USDT" alt="Tether logo" class="w-8 h-8 rounded-full mr-3">
                            <div>
                                <div class="text-white font-semibold">USDT</div>
                                <div class="text-xs text-gray-400">Tether</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-white font-semibold">0.00000000</div>
                            <div class="text-xs text-gray-400">≈ $0.00</div>
                        </div>
                    </div>

                    <!-- ETH -->
                    <div class="flex items-center justify-between py-2 border-b border-gray-700/50">
                        <div class="flex items-center">
                            <img src="https://placehold.co/32x32/3c3c3d/ffffff?text=ETH" alt="Ethereum logo" class="w-8 h-8 rounded-full mr-3">
                            <div>
                                <div class="text-white font-semibold">ETH</div>
                                <div class="text-xs text-gray-400">Ethereum</div>
                            </div>
                        </div>
                        <div class="text-right">
                            <div class="text-white font-semibold">0.00000000</div>
                            <div class="text-xs text-gray-400">≈ $0.00</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Futures Account Content (Initially hidden) -->
            <div id="futures-content" class="hidden">
                <div class="mb-6">
                    <h1 class="text-xl font-bold mb-1 text-white">Trading Account</h1>
                    <div class="flex items-center text-gray-400 text-sm mb-2">
                        <span class="mr-1">Total Assets (USD)</span>
                    </div>
                    <div class="flex items-center mb-1">
                        <span class="text-3xl font-bold text-white">0.00</span>
                        <span class="text-lg font-bold text-gray-400 ml-2">USDT</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-1 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div class="text-sm text-gray-400">≈ $0.00</div>

                    <div class="flex justify-between items-center mt-4 border-t border-gray-700/50 pt-4">
                        <div>
                            <div class="text-xs text-gray-400 mb-1">Today's PnL</div>
                            <div class="text-green-500 font-bold">$0.00 <span class="ml-1">0.00%</span></div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8L11 20" />
                        </svg>
                    </div>
                </div>

                <div class="flex justify-around mb-6 text-center">
                    <button class="flex flex-col items-center p-3 rounded-lg hover:bg-[#1f2125]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        <span class="text-sm">Positions</span>
                    </button>
                    <button class="flex flex-col items-center p-3 rounded-lg hover:bg-[#1f2125]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M12 16h.01" />
                        </svg>
                        <span class="text-sm">History</span>
                    </button>
                    <button class="flex flex-col items-center p-3 rounded-lg hover:bg-[#1f2125]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                        </svg>
                        <span class="text-sm">Transfer</span>
                    </button>
                </div>
                <div class="mt-8">
                    <h2 class="text-xl font-bold mb-4 text-white">Investment Plans</h2>
                    <div class="space-y-4">
                        <div class="bg-[#1f2125] rounded-lg p-6 shadow-md border border-gray-700/50">
                            <h3 class="text-lg font-bold text-white mb-2">Basic Plan</h3>
                            <p class="text-sm text-gray-400 mb-4">A great starting point for new investors.</p>
                            <div class="grid grid-cols-2 gap-4 text-sm mb-4">
                                <div class="text-gray-400">Min. Deposit: <span class="text-white font-semibold">$699</span></div>
                                <div class="text-gray-400">Max. Deposit: <span class="text-white font-semibold">$9,999</span></div>
                                <div class="text-gray-400">Profit Rate: <span class="text-green-500 font-semibold">19%</span></div>
                                <!-- <div class="text-gray-400">Duration: <span class="text-white font-semibold">7 days</span></div> -->
                                <!-- <div class="text-gray-400">Withdrawal: <span class="text-white font-semibold">Daily</span></div> -->
                            </div>
                            <button class="w-full bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                                Invest Now
                            </button>
                        </div>

                        <div class="bg-[#1f2125] rounded-lg p-6 shadow-md border border-gray-700/50">
                            <h3 class="text-lg font-bold text-white mb-2">Standard Plan</h3>
                            <p class="text-sm text-gray-400 mb-4">Balanced risk and reward for steady growth.</p>
                            <div class="grid grid-cols-2 gap-4 text-sm mb-4">
                                <div class="text-gray-400">Min. Deposit: <span class="text-white font-semibold">$10,000</span></div>
                                <div class="text-gray-400">Max. Deposit: <span class="text-white font-semibold">$79,999</span></div>
                                <div class="text-gray-400">Profit Rate: <span class="text-green-500 font-semibold">23% </span></div>
                                <!-- <div class="text-gray-400">Duration: <span class="text-white font-semibold">14 days</span></div> -->
                                <!-- <div class="text-gray-400">Withdrawal: <span class="text-white font-semibold">Daily</span></div> -->
                            </div>
                            <button class="w-full bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                                Invest Now
                            </button>
                        </div>
                        
                        <div class="bg-[#1f2125] rounded-lg p-6 shadow-md border border-gray-700/50">
                            <h3 class="text-lg font-bold text-white mb-2">Advanced Plan</h3>
                            <p class="text-sm text-gray-400 mb-4">Optimized for experienced investors.</p>
                            <div class="grid grid-cols-2 gap-4 text-sm mb-4">
                                <div class="text-gray-400">Min. Deposit: <span class="text-white font-semibold">$80,000</span></div>
                                <div class="text-gray-400">Max. Deposit: <span class="text-white font-semibold">$299,999</span></div>
                                <div class="text-gray-400">Profit Rate: <span class="text-green-500 font-semibold">32%</span></div>
                                <!-- <div class="text-gray-400">Duration: <span class="text-white font-semibold">30 days</span></div> -->
                                <!-- <div class="text-gray-400">Withdrawal: <span class="text-white font-semibold">Daily</span></div> -->
                            </div>
                            <button class="w-full bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                                Invest Now
                            </button>
                        </div>
                        
                        <div class="bg-[#1f2125] rounded-lg p-6 shadow-md border border-gray-700/50">
                            <h3 class="text-lg font-bold text-white mb-2">Elite Plan</h3>
                            <p class="text-sm text-gray-400 mb-4">Exclusive access for high-volume traders.</p>
                            <div class="grid grid-cols-2 gap-4 text-sm mb-4">
                                <div class="text-gray-400">Min. Deposit: <span class="text-white font-semibold">$300,000</span></div>
                                <div class="text-gray-400">Max. Deposit: <span class="text-white font-semibold">$6,000,000</span></div>
                                <div class="text-gray-400">Profit Rate: <span class="text-green-500 font-semibold">42%</span></div>
                                <!-- <div class="text-gray-400">Duration: <span class="text-white font-semibold">90 days</span></div> -->
                                <!-- <div class="text-gray-400">Withdrawal: <span class="text-white font-semibold">Daily</span></div> -->
                            </div>
                            <button class="w-full bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition-colors">
                                Invest Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Deposit Content (New Section) -->
            <div id="deposit-content" class="hidden">
                <div class="mb-6">
                    <h1 class="text-xl font-bold mb-1 text-white">Deposit</h1>
                    <p class="text-sm text-gray-400">Select the coin and network to get your deposit address.</p>
                </div>

                <!-- Deposit Form -->
                <div class="bg-[#1f2125] rounded-lg p-6 space-y-4">
                    <!-- Coin Selection -->
                    <div>
                        <label for="coin-select" class="block text-sm font-medium text-gray-400 mb-2">Select Coin</label>
                        <select id="coin-select" class="w-full bg-[#2c2e32] text-white rounded-lg p-3 border-none focus:ring-1 focus:ring-green-500 focus:outline-none">
                            <option value="USDT">USDT - Tether</option>
                            <option value="BTC">BTC - Bitcoin</option>
                            <option value="ETH">ETH - Ethereum</option>
                        </select>
                    </div>

                    <!-- Network Selection -->
                    <div>
                        <label for="network-select" class="block text-sm font-medium text-gray-400 mb-2">Select Network</label>
                        <select id="network-select" class="w-full bg-[#2c2e32] text-white rounded-lg p-3 border-none focus:ring-1 focus:ring-green-500 focus:outline-none">
                            <option value="TRC20">TRC20</option>
                            <option value="ERC20">ERC20</option>
                            <option value="BEP20">BEP20</option>
                        </select>
                    </div>

                    <!-- Deposit Address -->
                    <div class="text-center">
                        <p class="text-gray-400 text-sm mb-2">Scan QR code to deposit</p>
                        <img src="https://placehold.co/150x150/121417/d1d5db?text=QR+Code" alt="QR Code" class="mx-auto rounded-lg mb-4 border border-gray-700/50">
                        
                        <div class="bg-[#2c2e32] rounded-lg p-3 flex items-center justify-between relative">
                            <span id="deposit-address" class="text-sm text-white truncate">TSSXbJ4mK9W9xM2n8A7uP5jYtG3eR1cD</span>
                            <button id="copy-button" class="ml-2 p-1 rounded-full hover:bg-gray-700 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v-1a2 2 0 012-2h8a2 2 0 012 2v10a2 2 0 01-2 2h-8a2 2 0 01-2-2v-1m-5-8h5m-5 0h.01M10 13h5m-5 0h.01M10 17h5m-5 0h.01" />
                                </svg>
                            </button>
                            <div id="copy-message" class="absolute top-[-35px] left-1/2 -translate-x-1/2 bg-green-500 text-white text-xs px-2 py-1 rounded-full opacity-0 transition-opacity duration-300">
                                Copied!
                            </div>
                        </div>
                    </div>

                    <!-- Warning -->
                    <div class="bg-yellow-900/30 text-yellow-300 rounded-lg p-4 text-sm mt-4">
                        <p class="font-bold mb-1">Warning:</p>
                        <p>Only send USDT on the selected network to this address. Sending other coins or using a different network may result in permanent loss of funds.</p>
                    </div>
                </div>
                <!-- Deposit History Section -->
                <div class="mt-8">
                    <h2 class="text-xl font-bold mb-4 text-white">Deposit History</h2>
                    <div class="bg-[#1f2125] rounded-lg p-4">
                        <div class="flex justify-between items-center py-2 border-b border-gray-700/50 text-sm text-gray-400 font-semibold">
                            <span>Date</span>
                            <span>Coin</span>
                            <span>Amount</span>
                            <span>Status</span>
                        </div>
                        <div class="flex justify-between items-center py-2 border-b border-gray-700/50">
                            <span class="text-sm text-gray-400">2024-10-26</span>
                            <span class="text-sm text-white">USDT</span>
                            <span class="text-sm text-white">100.00</span>
                            <span class="text-sm text-green-500">Completed</span>
                        </div>
                        <div class="flex justify-between items-center py-2">
                            <span class="text-sm text-gray-400">2024-10-25</span>
                            <span class="text-sm text-white">BTC</span>
                            <span class="text-sm text-white">0.001</span>
                            <span class="text-sm text-green-500">Completed</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
       <?php include('navbar.php'); ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.flex.items-center.space-x-4 button');
           
            const spotContent = document.getElementById('spot-content');
            const futuresContent = document.getElementById('futures-content');
           
            const depositContent = document.getElementById('deposit-content');
            const hideZeroCheckbox = document.getElementById('hideZero');
            const copyButton = document.getElementById('copy-button');
            const copyMessage = document.getElementById('copy-message');
            const depositAddressSpan = document.getElementById('deposit-address');

            const allContent = [spotContent, futuresContent, depositContent];

            function showTab(tabId) {
                // Hide all content sections
                allContent.forEach(content => content.classList.add('hidden'));

                // Remove active classes from all tabs
                tabs.forEach(tab => {
                    tab.classList.remove('text-white', 'border-b-2', 'border-green-500', 'font-semibold');
                    tab.classList.add('text-gray-400');
                });

                // Show the selected content and activate the tab
                let contentToShow;
                let tabToActivate;

                switch(tabId) {
                    case 'spot-tab':
                        contentToShow = spotContent;
                        tabToActivate = document.getElementById('spot-tab');
                        break;
                    case 'futures-tab':
                        contentToShow = futuresContent;
                        tabToActivate = document.getElementById('futures-tab');
                        break;
                    case 'deposit-tab':
                        contentToShow = depositContent;
                        tabToActivate = document.getElementById('deposit-tab');
                        break;
                }

                if (contentToShow && tabToActivate) {
                    contentToShow.classList.remove('hidden');
                    tabToActivate.classList.remove('text-gray-400');
                    tabToActivate.classList.add('text-white', 'border-b-2', 'border-green-500', 'font-semibold');
                }
            }
             // Function to handle showing/hiding assets
            function toggleZeroBalanceAssets() {
                const assetItems = document.querySelectorAll('.asset-item');
                assetItems.forEach(item => {
                    const balanceElement = item.querySelector('.asset-balance');
                    if (balanceElement && balanceElement.textContent.trim() === '0.00000000') {
                        if (hideZeroCheckbox.checked) {
                            item.classList.add('hidden');
                        } else {
                            item.classList.remove('hidden');
                        }
                    }
                });
            }

            // Function to copy text to clipboard
            function copyToClipboard(text) {
                const tempInput = document.createElement('textarea');
                tempInput.value = text;
                document.body.appendChild(tempInput);
                tempInput.select();
                document.execCommand('copy');
                document.body.removeChild(tempInput);
            }


            // Add click listeners to the tabs
            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    showTab(tab.id);
                });
            });

            // Initially show the Spot Account content
            showTab('spot-tab');
        });
    </script>
   <script src="js/topNavFooter.js"></script>
</body>
</html>
