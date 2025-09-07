<?php
include('connection.php');
include('function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Dashboard</title>
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
        <!-- Top Nav Bar -->
        <header class="p-4 flex items-center justify-between bg-[#121417] border-b border-gray-700/50">
            <div class="flex items-center space-x-2">
                <button class="p-2 rounded-full hover:bg-gray-800 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>
            </div>
            <div class="flex items-center space-x-2">
                <button class="p-2 rounded-full hover:bg-gray-800 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 0a6.002 6.002 0 010 8.485m0-8.485l3.536-3.536m-3.536 3.536a6.002 6.002 0 00-8.485 0M10.828 12L7.293 8.464m3.535 3.536l-3.535 3.536m0 0a6.002 6.002 0 018.485 0" />
                    </svg>
                </button>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 p-4 overflow-y-auto no-scrollbar">
            <!-- Nav tabs -->
            <div class="flex items-center space-x-4 mb-4 text-sm font-medium border-b border-gray-700/50 pb-2 overflow-x-auto no-scrollbar">
                <button id="overview-tab" class="text-gray-400 px-2 py-1 rounded-full hover:text-white transition-colors duration-200">Overview</button>
                <button id="spot-tab" class="text-white px-2 py-1 rounded-full border-b-2 border-green-500 font-semibold transition-colors duration-200">Spot Account</button>
                <button id="futures-tab" class="text-gray-400 px-2 py-1 rounded-full hover:text-white transition-colors duration-200">Futures Account</button>
                <button id="funding-tab" class="text-gray-400 px-2 py-1 rounded-full hover:text-white transition-colors duration-200">Funding Account</button>
                <button id="deposit-tab" class="text-gray-400 px-2 py-1 rounded-full hover:text-white transition-colors duration-200">Deposit</button>
            </div>
            
            <!-- Overview Content (Initially hidden) -->
            <div id="overview-content" class="hidden">
                <div class="mb-6">
                    <h1 class="text-xl font-bold mb-1 text-white">Assets Overview</h1>
                    <p class="text-gray-400">Welcome to your crypto dashboard. Here you can see a summary of all your accounts and assets.</p>
                </div>
                 <!-- Live Crypto Charts -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold mb-4 text-white">Live Charts</h2>
                    <div>
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container" style="height:100%;width:100%">
                        <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BINANCE-BTCUSDT/?exchange=BINANCE" rel="noopener nofollow" target="_blank"><span class="blue-text">BTCUSDT chart by TradingView</span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-advanced-chart.js" async>
                        {
                        "allow_symbol_change": true,
                        "calendar": false,
                        "details": false,
                        "hide_side_toolbar": true,
                        "hide_top_toolbar": false,
                        "hide_legend": false,
                        "hide_volume": false,
                        "hotlist": false,
                        "interval": "D",
                        "locale": "en",
                        "save_image": true,
                        "style": "1",
                        "symbol": "BINANCE:BTCUSDT",
                        "theme": "dark",
                        "timezone": "Etc/UTC",
                        "backgroundColor": "#0F0F0F",
                        "gridColor": "rgba(242, 242, 242, 0.06)",
                        "watchlist": [],
                        "withdateranges": false,
                        "compareSymbols": [],
                        "studies": [],
                        "autosize": true
                        }
                        </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        <!-- BTC Chart -->
                        <div class="bg-[#1f2125] rounded-lg p-2 shadow-lg">
                            <div class="tradingview-widget-container" style="height:250px;">
                                <div class="tradingview-widget-container__widget"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-chart.js" async>
                                {
                                    "symbol": "BINANCE:BTCUSDT",
                                    "width": "100%",
                                    "height": "100%",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": false,
                                    "autosize": true,
                                    "showMarketStatus": false,
                                    "chartType": "area",
                                    "container_id": "tradingview_BTC"
                                }
                                </script>
                            </div>
                        </div>

                        <!-- ETH Chart -->
                        <div class="bg-[#1f2125] rounded-lg p-2 shadow-lg">
                            <div class="tradingview-widget-container" style="height:250px;">
                                <div class="tradingview-widget-container__widget"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-chart.js" async>
                                {
                                    "symbol": "BINANCE:ETHUSDT",
                                    "width": "100%",
                                    "height": "100%",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": false,
                                    "autosize": true,
                                    "showMarketStatus": false,
                                    "chartType": "area",
                                    "container_id": "tradingview_ETH"
                                }
                                </script>
                            </div>
                        </div>

                        <!-- SOL Chart -->
                        <div class="bg-[#1f2125] rounded-lg p-2 shadow-lg">
                            <div class="tradingview-widget-container" style="height:250px;">
                                <div class="tradingview-widget-container__widget"></div>
                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-chart.js" async>
                                {
                                    "symbol": "BINANCE:SOLUSDT",
                                    "width": "100%",
                                    "height": "100%",
                                    "locale": "en",
                                    "dateRange": "12M",
                                    "colorTheme": "dark",
                                    "isTransparent": false,
                                    "autosize": true,
                                    "showMarketStatus": false,
                                    "chartType": "area",
                                    "container_id": "tradingview_SOL"
                                }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Spot Account Content -->
            <div id="spot-content">
                <!-- Account Summary -->
                <div class="mb-6">
                    <h1 class="text-xl font-bold mb-1 text-white">Trading Account</h1>
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
                    <h1 class="text-xl font-bold mb-1 text-white">Futures Account</h1>
                    <div class="flex items-center text-gray-400 text-sm mb-2">
                        <span class="mr-1">Total Assets (USD)</span>
                    </div>
                    <div class="flex items-center mb-1">
                        <span class="text-3xl font-bold text-white">450.75</span>
                        <span class="text-lg font-bold text-gray-400 ml-2">USD</span>
                    </div>
                    <div class="text-sm text-gray-400">≈ $450.75</div>
                    <div class="flex justify-between items-center mt-4 border-t border-gray-700/50 pt-4">
                        <div>
                            <div class="text-xs text-gray-400 mb-1">Today's PnL</div>
                            <div class="text-red-500 font-bold">-$12.50 <span class="ml-1">-2.78%</span></div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 17h8m0 0v-8m0 8L11 4" />
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
            </div>

            <!-- Funding Account Content (Initially hidden) -->
            <div id="funding-content" class="hidden">
                <div class="mb-6">
                    <h1 class="text-xl font-bold mb-1 text-white">Funding Account</h1>
                    <div class="flex items-center text-gray-400 text-sm mb-2">
                        <span class="mr-1">Total Assets</span>
                    </div>
                    <div class="flex items-center mb-1">
                        <span class="text-3xl font-bold text-white">1,250.00</span>
                        <span class="text-lg font-bold text-gray-400 ml-2">USDT</span>
                    </div>
                    <div class="text-sm text-gray-400">≈ $1,250.00</div>
                    <div class="flex justify-between items-center mt-4 border-t border-gray-700/50 pt-4">
                        <div>
                            <div class="text-xs text-gray-400 mb-1">Staking Rewards</div>
                            <div class="text-green-500 font-bold">$1.25 <span class="ml-1">+0.10%</span></div>
                        </div>
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
            </div>
        </main>
        
       <?php include('navbar.php'); ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const tabs = document.querySelectorAll('.flex.items-center.space-x-4 button');
            const overviewContent = document.getElementById('overview-content');
            const spotContent = document.getElementById('spot-content');
            const futuresContent = document.getElementById('futures-content');
            const fundingContent = document.getElementById('funding-content');
            const depositContent = document.getElementById('deposit-content');
            const hideZeroCheckbox = document.getElementById('hideZero');
            const copyButton = document.getElementById('copy-button');
            const copyMessage = document.getElementById('copy-message');
            const depositAddressSpan = document.getElementById('deposit-address');

            const allContent = [overviewContent, spotContent, futuresContent, fundingContent, depositContent];

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
                    case 'overview-tab':
                        contentToShow = overviewContent;
                        tabToActivate = document.getElementById('overview-tab');
                        break;
                    case 'spot-tab':
                        contentToShow = spotContent;
                        tabToActivate = document.getElementById('spot-tab');
                        break;
                    case 'futures-tab':
                        contentToShow = futuresContent;
                        tabToActivate = document.getElementById('futures-tab');
                        break;
                    case 'funding-tab':
                        contentToShow = fundingContent;
                        tabToActivate = document.getElementById('funding-tab');
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
</body>
</html>
