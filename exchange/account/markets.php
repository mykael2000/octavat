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
          
            
                 <!-- Live Crypto Charts -->
                <div class="mb-8">
                    <h2 class="text-xl font-bold mb-4 text-white">Live Charts</h2>
                    <div style="height: 600px" class="container">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container" style="height:100%;width:100%">
                        <div class="tradingview-widget-container__widget" style="height:calc(100% - 32px);width:100%"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BINANCE-BTCUSDT/?exchange=BINANCE" rel="noopener nofollow" target="_blank"><span class="blue-text">BTCUSDT chart by Octavat</span></a></div>
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
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BINANCE-BTCUSDT/?exchange=BINANCE" rel="noopener nofollow" target="_blank"><span class="blue-text">BTCUSDT chart by Octavat</span></a></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                            "symbol": "BINANCE:BTCUSDT",
                            "chartOnly": false,
                            "dateRange": "12M",
                            "noTimeScale": false,
                            "colorTheme": "dark",
                            "isTransparent": false,
                            "locale": "en",
                            "width": "100%",
                            "autosize": true,
                            "height": "100%"
                            }
                            </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>

                        <!-- ETH Chart -->
                        <div class="bg-[#1f2125] rounded-lg p-2 shadow-lg">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BINANCE-ETHUSDT/?exchange=BINANCE" rel="noopener nofollow" target="_blank"><span class="blue-text">ETHUSDT chart by Octavat</span></a></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                            "symbol": "BINANCE:ETHUSDT",
                            "chartOnly": false,
                            "dateRange": "12M",
                            "noTimeScale": false,
                            "colorTheme": "dark",
                            "isTransparent": false,
                            "locale": "en",
                            "width": "100%",
                            "autosize": true,
                            "height": "100%"
                            }
                            </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>

                        <!-- SOL Chart -->
                        <div class="bg-[#1f2125] rounded-lg p-2 shadow-lg">
                           <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/BINANCE-SOLUSDT/?exchange=BINANCE" rel="noopener nofollow" target="_blank"><span class="blue-text">SOLUSDT chart by Octavat</span></a></div>
                            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-mini-symbol-overview.js" async>
                            {
                            "symbol": "BINANCE:SOLUSDT",
                            "chartOnly": false,
                            "dateRange": "12M",
                            "noTimeScale": false,
                            "colorTheme": "dark",
                            "isTransparent": false,
                            "locale": "en",
                            "width": "100%",
                            "autosize": true,
                            "height": "100%"
                            }
                            </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                    </div>
                    <div style="height: 600px" class="container">
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/crypto-coins-screener/" rel="noopener nofollow" target="_blank"><span class="blue-text">Cryptocurrency market by TradingView</span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-screener.js" async>
                        {
                        "defaultColumn": "overview",
                        "screener_type": "crypto_mkt",
                        "displayCurrency": "USD",
                        "colorTheme": "dark",
                        "isTransparent": false,
                        "locale": "en",
                        "width": "100%",
                        "height": "100%"
                        }
                        </script>
                        </div>
                        <!-- TradingView Widget END -->
                    </div>
                </div>
        </main>
        
       <?php include('navbar.php'); ?>
    </div>

    
</body>
</html>
