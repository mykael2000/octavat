<?php
include("header.php");
?>

    <!-- Hero Section -->
    <main id="trade-now" class="container mx-auto px-4 py-16 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-1/2 text-left space-y-4">
            <h3 class="text-2xl text-green-accent font-semibold">Better Liquidity, Better Trading</h3>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight">
                Global Crypto Derivatives Exchange
            </h1>
            <br>
            <br>
            <a href="register.php" class="mt-8 px-6 py-3 rounded-md text-lg font-semibold border border-green-accent text-green-accent hover:bg-green-accent hover:text-black transition-colors transform hover:scale-105">
                Trade Now
            </a>
        </div>
        <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center md:justify-end">
            <!-- Placeholder for Mobile App Screenshot -->
            <img src="banner.png" alt="" class="rounded-lg shadow-lg">
        </div>
    </main>

    <section id="tapper-section" class="container mx-auto px-4">
        <h2 class="text-center text-2xl font-bold mb-4">Tap to Claim Your Free Octavat Token!</h2>
        <div id="coin-container">
            <img height="50px" width="50px" id="coin-image" src="logo.png" alt="Tappable Coin">
        </div>
        <div id="tap-count" class="mt-4 text-xl font-bold">Taps: <span id="taps">0</span></div>

        <p id="timer-label" class="mt-12">Token Listing in:</p>
        <div id="countdown-timer"></div>
    </section>

    <!-- Trending Section -->
    <section id="trending-section" class="container mx-auto px-4 py-16">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl font-bold">Trending Cryptocurrencies</h2>
            <a href="#" class="text-sm text-green-accent hover:underline">View More</a>
        </div>
        <div class="flex items-center space-x-4 mb-8 border-b border-gray-800">
            <button class="pb-2 text-white border-b-2 border-green-accent">Popular</button>
            <!-- <button class="pb-2 text-gray-400 hover:text-white transition-colors">Popular Spot</button>
            <button class="pb-2 text-gray-400 hover:text-white transition-colors">Gainers</button> -->
        </div>
        <div style="height: 500px; width: 100%;" class="overflow-x-auto rounded-lg shadow-xl border border-gray-800 bg-[#161616]">
            <!-- TradingView Widget BEGIN -->
            <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Market data by TradingView</span></a></div>
            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js" async>
            {
            "colorTheme": "dark",
            "dateRange": "12M",
            "locale": "en",
            "largeChartUrl": "",
            "isTransparent": false,
            "showFloatingTooltip": false,
            "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
            "plotLineColorFalling": "rgba(41, 98, 255, 1)",
            "gridLineColor": "rgba(240, 243, 250, 0)",
            "scaleFontColor": "#DBDBDB",
            "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
            "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
            "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
            "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
            "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
            "tabs": [
                {
                "title": "Futures",
                "symbols": [
                    {
                    "s": "BINANCE:BTCUSDT",
                    "d": "BTCUSDT",
                    "base-currency-logoid": "crypto/XTVCBTC",
                    "currency-logoid": "crypto/XTVCUSDT"
                    },
                    {
                    "s": "BINANCE:ETHUSDT",
                    "d": "ETHUSDT",
                    "base-currency-logoid": "crypto/XTVCETH",
                    "currency-logoid": "crypto/XTVCUSDT"
                    },
                    {
                    "s": "BINANCE:SOLUSDT",
                    "d": "SOLUSDT",
                    "base-currency-logoid": "crypto/XTVCSOL",
                    "currency-logoid": "crypto/XTVCUSDT"
                    },
                    {
                    "s": "BINANCE:LTCUSDT",
                    "d": "LTCUSDT",
                    "base-currency-logoid": "crypto/XTVCLTC",
                    "currency-logoid": "crypto/XTVCUSDT"
                    },
                    {
                    "s": "FXOPEN:XAUUSD",
                    "d": "XAUUSD",
                    "logoid": "metal/gold",
                    "currency-logoid": "country/US"
                    },
                    {
                    "s": "BINANCE:ADAUSDT",
                    "d": "ADAUSDT",
                    "base-currency-logoid": "crypto/XTVCADA",
                    "currency-logoid": "crypto/XTVCUSDT"
                    }
                ],
                "originalTitle": "Futures"
                },
                {
                "title": "Bonds",
                "symbols": [
                    {
                    "s": "EUREX:FGBL1!",
                    "d": "Euro Bund"
                    },
                    {
                    "s": "EUREX:FBTP1!",
                    "d": "Euro BTP"
                    },
                    {
                    "s": "EUREX:FGBM1!",
                    "d": "Euro BOBL"
                    }
                ],
                "originalTitle": "Bonds"
                },
                {
                "title": "Forex",
                "symbols": [
                    {
                    "s": "FX:EURUSD",
                    "d": "EUR to USD"
                    },
                    {
                    "s": "FX:GBPUSD",
                    "d": "GBP to USD"
                    },
                    {
                    "s": "FX:USDJPY",
                    "d": "USD to JPY"
                    },
                    {
                    "s": "FX:USDCHF",
                    "d": "USD to CHF"
                    },
                    {
                    "s": "FX:AUDUSD",
                    "d": "AUD to USD"
                    },
                    {
                    "s": "FX:USDCAD",
                    "d": "USD to CAD"
                    }
                ],
                "originalTitle": "Forex"
                }
            ],
            "support_host": "https://www.tradingview.com",
            "backgroundColor": "#0f0f0f",
            "width": "100%",
            "height": "100%",
            "showSymbolLogo": true,
            "showChart": true
            }
            </script>
            </div>
            <!-- TradingView Widget END -->
        </div>
    </section>
    
    <!-- Token Grid Section -->
    <section id="build-portfolio" class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center mb-12">Build Your Cryptocurrency Portfolio</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
            <!-- Example Tokens -->
            <div class="flex items-center justify-center p-4 rounded-full bg-[#1c1c1c] hover:bg-gray-800 transition-colors cursor-pointer">
                <img src="https://placehold.co/32x32/111111/ffffff?text=ZRO" alt="ZRO" class="rounded-full mr-2">
                <span class="text-white">ZRO</span>
            </div>
            <div class="flex items-center justify-center p-4 rounded-full bg-[#1c1c1c] hover:bg-gray-800 transition-colors cursor-pointer">
                <img src="https://placehold.co/32x32/111111/ffffff?text=FTT" alt="FTT" class="rounded-full mr-2">
                <span class="text-white">FTT</span>
            </div>
            <div class="flex items-center justify-center p-4 rounded-full bg-[#1c1c1c] border-2 border-green-accent ring-2 ring-green-accent ring-offset-2 ring-offset-[#111111] hover:bg-gray-800 transition-colors cursor-pointer">
                <img src="https://placehold.co/32x32/111111/ffffff?text=NAKA" alt="NAKA" class="rounded-full mr-2">
                <span class="text-white">NAKA</span>
            </div>
            <!-- ... More tokens as needed ... -->
            <div class="flex items-center justify-center p-4 rounded-full bg-[#1c1c1c] hover:bg-gray-800 transition-colors cursor-pointer">
                <img src="https://placehold.co/32x32/111111/ffffff?text=AGLA" alt="AGLA" class="rounded-full mr-2">
                <span class="text-white">AGLA</span>
            </div>
            <div class="flex items-center justify-center p-4 rounded-full bg-[#1c1c1c] hover:bg-gray-800 transition-colors cursor-pointer">
                <img src="https://placehold.co/32x32/111111/ffffff?text=CXT" alt="CXT" class="rounded-full mr-2">
                <span class="text-white">CXT</span>
            </div>
            <div class="flex items-center justify-center p-4 rounded-full bg-[#1c1c1c] hover:bg-gray-800 transition-colors cursor-pointer">
                <img src="https://placehold.co/32x32/111111/ffffff?text=RENDER" alt="RENDER" class="rounded-full mr-2">
                <span class="text-white">RENDER</span>
            </div>
        </div>
    </section>

    <!-- Placeholder Sections for Navigation -->
    <section id="faq" class="container mx-auto px-4 py-16 hidden">
        <h2 class="text-3xl font-bold">FAQ Section</h2>
        <p class="mt-4 text-gray-400">Content for the FAQ section will go here.</p>
    </section>

    <section id="about-us" class="container mx-auto px-4 py-16 hidden">
        <h2 class="text-3xl font-bold">About Us</h2>
        <p class="mt-4 text-gray-400">Content for the About Us section will go here.</p>
    </section>

    <section id="contact-us" class="container mx-auto px-4 py-16 hidden">
        <h2 class="text-3xl font-bold">Contact Us</h2>
        <p class="mt-4 text-gray-400">Content for the Contact Us section will go here.</p>
    </section>

<?php include("footer.php"); ?>