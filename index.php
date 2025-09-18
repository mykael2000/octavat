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

    <!-- <section id="tapper-section" class="container mx-auto px-4">
        <h2 class="text-center text-2xl font-bold mb-4">Tap to Claim Your Free Octavat Token!</h2>
        <div id="coin-container">
            <img height="50px" width="50px" id="coin-image" src="logo.png" alt="Tappable Coin">
        </div>
        <div id="tap-count" class="mt-4 text-xl font-bold">Taps: <span id="taps">0</span></div>

        <p id="timer-label" class="mt-12">Token Listing in:</p>
        <div id="countdown-timer"></div>
    </section> -->

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
    <!-- <section id="build-portfolio" class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center mb-12">Build Your Cryptocurrency Portfolio</h2>
        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">

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
    </section> -->

    <!-- Placeholder Sections for Navigation -->
     <section id="why-Octavat" class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold mb-8">Why Octavat?</h2>
        <div class="flex items-center justify-center min-h-screen p-8">
            <div class="container mx-auto">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <!-- Card 1: Secure -->
                    <div class="flex flex-col items-center text-center p-8 rounded-2xl bg-black border border-gray-800 transition-colors duration-300 hover:bg-gray-900">
                        <div class="w-24 h-24 mb-6 rounded-full bg-gray-900 flex items-center justify-center">
                            <!-- Secure Icon -->
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 14.053L2 22h20l-1.382-3.007z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Secure</h3>
                        <p class="text-gray-400 text-sm">We offer industry-leading secure cryptocurrency trading platform, maintaining a robust reserve fund that exceeds a 1:1 ratio against user holdings.</p>
                    </div>

                    <!-- Card 2: Seamless -->
                    <div class="flex flex-col items-center text-center p-8 rounded-2xl bg-black border border-gray-800 transition-colors duration-300 hover:bg-gray-900">
                        <div class="w-24 h-24 mb-6 rounded-full bg-gray-900 flex items-center justify-center">
                            <!-- Seamless Icon -->
                            <svg class="w-12 h-12 text-green-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.414 9.457 5 8 5c-4 0-4 6-4 6v.475M12 6.253c1.168.836 2.543 1.253 4 1.253 4 0 4-6 4-6v-.475M12 6.253v13M12 6.253c1.168-.836 2.543-1.253 4-1.253 4 0 4 6 4 6v.475M12 6.253V4M8 10v4M16 10v4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Seamless</h3>
                        <p class="text-gray-400 text-sm">Enjoy the benefits of efficient and real-time online trading. Start your crypto journey with just a $10 investment.</p>
                    </div>

                    <!-- Card 3: Insights -->
                    <div class="flex flex-col items-center text-center p-8 rounded-2xl bg-black border border-gray-800 transition-colors duration-300 hover:bg-gray-900">
                        <div class="w-24 h-24 mb-6 rounded-full bg-gray-900 flex items-center justify-center">
                            <!-- Insights Icon -->
                            <svg class="w-12 h-12 text-green-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2h4a2 2 0 002-2v-1a2 2 0 012-2h.945M8 20.25v-1.125a.875.875 0 01.875-.875h6.25a.875.875 0 01.875.875v1.125m-6.25 0V18.5a1.5 1.5 0 011.5-1.5h3.5a1.5 1.5 0 011.5 1.5v1.75z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Insights</h3>
                        <p class="text-gray-400 text-sm">Get real-time updates and sharp insights about the cryptocurrency market.</p>
                    </div>

                    <!-- Card 4: Service -->
                    <div class="flex flex-col items-center text-center p-8 rounded-2xl bg-green-accent text-black">
                        <div class="w-24 h-24 mb-6 rounded-full bg-white flex items-center justify-center">
                            <!-- Service Icon -->
                            <svg class="w-12 h-12 text-green-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.414 9.457 5 8 5c-4 0-4 6-4 6v.475M12 6.253c1.168.836 2.543 1.253 4 1.253 4 0 4-6 4-6v-.475M12 6.253v13M12 6.253c1.168-.836 2.543-1.253 4-1.253 4 0 4 6 4 6v.475M12 6.253V4M8 10v4M16 10v4"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2">Service</h3>
                        <p class="text-gray-800 text-sm">Experience unparalleled assistance with multilingual 24/7 customer support. Ensuring a seamless and satisfying trading experience.</p>
                    </div>
                </div>
            </div>
            <!-- New section: Get Started Steps -->
        </div>
        <div class="flex items-center justify-center min-h-screen p-8">
            <div class="mt-24 container mx-auto p-4 md:p-8">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">Begin Your Cryptocurrency Journey Effortlessly</h2>
                <div class="flex flex-col items-center justify-center">
                    
                    <!-- Step 1 -->
                    <div class="relative w-full max-w-lg mb-6 p-4 rounded-xl bg-gray-900 flex items-center justify-between shadow-lg">
                        <div class="flex items-center">
                            <div class="w-12 h-12 flex-shrink-0 rounded-full bg-gray-800 flex items-center justify-center mr-4">
                                <!-- Icon for Create Account -->
                                <svg class="w-6 h-6 text-green-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <span class="text-lg font-medium">Create your Octavat account</span>
                        </div>
                        <div class="absolute right-4 top-1/2 -translate-y-1/2 text-5xl font-extrabold text-gray-700 opacity-20">1</div>
                    </div>

                    <!-- Step 2 -->
                    <div class="relative w-full max-w-lg mb-6 p-4 rounded-xl bg-gray-900 flex items-center justify-between shadow-lg">
                        <div class="flex items-center">
                            <div class="w-12 h-12 flex-shrink-0 rounded-full bg-gray-800 flex items-center justify-center mr-4">
                                <!-- Icon for Deposit Funds -->
                                <svg class="w-6 h-6 text-green-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 6v2a2 2 0 01-2 2H3M7 6a2 2 0 00-2 2H3m0 0a2 2 0 00-2 2v2a2 2 0 002 2h18a2 2 0 002-2v-2a2 2 0 00-2-2h-2a2 2 0 00-2 2h-4a2 2 0 00-2-2h-4a2 2 0 00-2 2H7z"></path>
                                </svg>
                            </div>
                            <span class="text-lg font-medium">Deposit funds</span>
                        </div>
                        <div class="absolute right-4 top-1/2 -translate-y-1/2 text-5xl font-extrabold text-gray-700 opacity-20">2</div>
                    </div>

                    <!-- Step 3 -->
                    <div class="relative w-full max-w-lg mb-6 p-4 rounded-xl bg-gray-900 flex items-center justify-between shadow-lg">
                        <div class="flex items-center">
                            <div class="w-12 h-12 flex-shrink-0 rounded-full bg-gray-800 flex items-center justify-center mr-4">
                                <!-- Icon for Start Trading -->
                                <svg class="w-6 h-6 text-green-accent" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                            <span class="text-lg font-medium">Start trading</span>
                        </div>
                        <div class="absolute right-4 top-1/2 -translate-y-1/2 text-5xl font-extrabold text-gray-700 opacity-20">3</div>
                    </div>

                    <!-- Get Started Button -->
                    <button class="w-full max-w-lg mt-8 py-4 bg-green-accent text-black font-bold rounded-full text-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                        Get Started
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section id="getting-started" class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold mb-8">Begin Your Cryptocurrency Journey Effortlessly</h2>
        <div class="space-y-4">
            <div class="flex items-center justify-between p-4 bg-gray-900 rounded-lg border border-gray-800">
                <div class="flex items-center space-x-4">
                    <img src="path_to_create_account_icon.png" alt="Create Account" class="w-8 h-8">
                    <span class="text-lg font-semibold">Create your Octavat account</span>
                </div>
                <span class="text-3xl font-bold text-gray-700">1</span>
                <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </div>
            
            <div class="flex items-center justify-between p-4 bg-gray-900 rounded-lg border border-gray-800">
                <div class="flex items-center space-x-4">
                    <img src="path_to_deposit_funds_icon.png" alt="Deposit Funds" class="w-8 h-8">
                    <span class="text-lg font-semibold">Deposit funds</span>
                </div>
                <span class="text-3xl font-bold text-gray-700">2</span>
                <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </div>
            
            <div class="flex items-center justify-between p-4 bg-gray-900 rounded-lg border border-gray-800">
                <div class="flex items-center space-x-4">
                    <img src="path_to_start_trading_icon.png" alt="Start Trading" class="w-8 h-8">
                    <span class="text-lg font-semibold">Start trading</span>
                </div>
                <span class="text-3xl font-bold text-gray-700">3</span>
                <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            </div>
        </div>
        <div class="text-center mt-8">
            <a href="#" class="inline-block px-8 py-4 text-lg font-semibold text-black bg-green-accent rounded-md hover:bg-green-700 transition-colors">
                Get Started
            </a>
        </div>
    </section>
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