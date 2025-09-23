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

            <div class="flex items-center justify-center p-4 rounded-full bg-[#111111] hover:bg-gray-800 transition-colors cursor-pointer">
                <img src="https://placehold.co/32x32/111111/ffffff?text=ZRO" alt="ZRO" class="rounded-full mr-2">
                <span class="text-white">ZRO</span>
            </div>
            <div class="flex items-center justify-center p-4 rounded-full bg-[#111111] hover:bg-gray-800 transition-colors cursor-pointer">
                <img src="https://placehold.co/32x32/111111/ffffff?text=FTT" alt="FTT" class="rounded-full mr-2">
                <span class="text-white">FTT</span>
            </div>
            <div class="flex items-center justify-center p-4 rounded-full bg-[#111111] border-2 border-green-accent ring-2 ring-green-accent ring-offset-2 ring-offset-[#111111] hover:bg-gray-800 transition-colors cursor-pointer">
                <img src="https://placehold.co/32x32/111111/ffffff?text=NAKA" alt="NAKA" class="rounded-full mr-2">
                <span class="text-white">NAKA</span>
            </div>
     
            <div class="flex items-center justify-center p-4 rounded-full bg-[#111111] hover:bg-gray-800 transition-colors cursor-pointer">
                <img src="https://placehold.co/32x32/111111/ffffff?text=AGLA" alt="AGLA" class="rounded-full mr-2">
                <span class="text-white">AGLA</span>
            </div>
            <div class="flex items-center justify-center p-4 rounded-full bg-[#111111] hover:bg-gray-800 transition-colors cursor-pointer">
                <img src="https://placehold.co/32x32/111111/ffffff?text=CXT" alt="CXT" class="rounded-full mr-2">
                <span class="text-white">CXT</span>
            </div>
            <div class="flex items-center justify-center p-4 rounded-full bg-[#111111] hover:bg-gray-800 transition-colors cursor-pointer">
                <img src="https://placehold.co/32x32/111111/ffffff?text=RENDER" alt="RENDER" class="rounded-full mr-2">
                <span class="text-white">RENDER</span>
            </div>
        </div>
    </section> -->

    <!-- Placeholder Sections for Navigation -->
     <section id="why-Octavat" class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold mb-8 pl-4">Why Octavat?</h2>
            <div class="flex flex-col space-y-8">
                <!-- Feature 1: Secure -->
                <div class="flex items-center space-x-6 p-6 rounded-xl bg-[#111111] border border-[#60e336]">
                    <div class="flex-shrink-0 w-16 h-16 rounded-full bg-[#60e336] flex items-center justify-center">
                        <!-- Secure Icon -->
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 14.053L2 22h20l-1.382-3.007z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-1">Secure</h3>
                        <p class="text-gray-400 text-sm">We offer an industry-leading secure cryptocurrency trading platform, maintaining a robust reserve fund that exceeds a 1:1 ratio against user holdings.</p>
                    </div>
                </div>

                <!-- Feature 2: Seamless -->
                <div class="flex items-center space-x-6 p-6 rounded-xl bg-[#111111] border border-[#60e336]">
                    <div class="flex-shrink-0 w-16 h-16 rounded-full bg-[#60e336] flex items-center justify-center">
                        <!-- Seamless Icon -->
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.414 9.457 5 8 5c-4 0-4 6-4 6v.475M12 6.253c1.168.836 2.543 1.253 4 1.253 4 0 4-6 4-6v-.475M12 6.253v13M12 6.253c1.168-.836 2.543-1.253 4-1.253 4 0 4 6 4 6v.475M12 6.253V4M8 10v4M16 10v4"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-1">Seamless</h3>
                        <p class="text-gray-400 text-sm">Enjoy the benefits of efficient and real-time online trading. Start your crypto journey with just a $10 investment.</p>
                    </div>
                </div>

                <!-- Feature 3: Insights -->
                <div class="flex items-center space-x-6 p-6 rounded-xl bg-[#111111] border border-[#60e336]">
                    <div class="flex-shrink-0 w-16 h-16 rounded-full bg-[#60e336] flex items-center justify-center">
                        <!-- Insights Icon -->
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2h4a2 2 0 002-2v-1a2 2 0 012-2h.945M8 20.25v-1.125a.875.875 0 01.875-.875h6.25a.875.875 0 01.875.875v1.125m-6.25 0V18.5a1.5 1.5 0 011.5-1.5h3.5a1.5 1.5 0 011.5 1.5v1.75z"></path>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-1">Insights</h3>
                        <p class="text-gray-400 text-sm">Get real-time updates and sharp insights about the cryptocurrency market.</p>
                    </div>
                </div>

                <!-- Feature 4: Service -->
                <div class="flex items-center space-x-6 p-6 rounded-xl bg-[#111111] border border-[#60e336]">
                    <div class="flex-shrink-0 w-16 h-16 rounded-full bg-[#60e336] flex items-center justify-center">
                        <!-- Service Icon -->
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-xl font-bold mb-1">Service</h3>
                        <p class="text-gray-400 text-sm">Experience unparalleled assistance with multilingual 24/7 customer support. Ensuring a seamless and satisfying trading experience.</p>
                    </div>
                </div>
            </div>
    </section>
    <section class="py-16">
            <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center">Begin Your Cryptocurrency Journey Effortlessly</h2>
            <div class="flex flex-col items-center justify-center w-full">
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
                <a href="#" class="w-full max-w-lg mt-8 py-4 bg-green-accent text-black font-bold text-center rounded-full text-lg shadow-lg hover:shadow-xl transition-shadow duration-300">
                    Get Started
                </a>
            </div>
        </section>
     <!-- Testimonial Section -->
    <!-- Testimonial Section -->
    <div class="mt-24 container mx-auto p-4 md:p-8">
        <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-white">Who is using Octavat?</h2>
        
        <div class="relative">
            <!-- Testimonial Carousel Container -->
            <div id="testimonial-carousel" class="flex overflow-x-auto snap-x snap-mandatory pb-4 space-x-6 scroll-smooth">
                <!-- Testimonial 1 -->
                <div class="testimonial-card flex-shrink-0 w-full md:w-1/2 lg:w-1/3 snap-center bg-[#181818] p-8 rounded-2xl flex flex-col items-center text-center relative">
                    <img src="https://placehold.co/100x100/111827/ffffff?text=User" alt="User Avatar" class="w-24 h-24 rounded-full mb-4 object-cover">
                    <p class="text-gray-400 text-sm mb-4">"Octavat has revolutionized my trading. The interface is intuitive, and the seamless service makes me feel secure with every trade. Highly recommended!"</p>
                    <div class="mt-auto">
                        <h4 class="font-bold text-white">Alex Chen</h4>
                        <p class="text-gray-500 text-sm">34k Followers</p>
                    </div>
                    <button class="next-card-btn absolute bottom-4 right-4 bg-gray-700 text-white p-2 rounded-full shadow-lg hover:bg-gray-600 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>

                <!-- Testimonial 2 -->
                <div class="testimonial-card flex-shrink-0 w-full md:w-1/2 lg:w-1/3 snap-center bg-[#181818] p-8 rounded-2xl flex flex-col items-center text-center relative">
                    <img src="https://placehold.co/100x100/111827/ffffff?text=User" alt="User Avatar" class="w-24 h-24 rounded-full mb-4 object-cover">
                    <p class="text-gray-400 text-sm mb-4">"The insights provided by this platform are a game-changer. I feel much more confident in my investment decisions now. It’s an essential tool for any trader."</p>
                    <div class="mt-auto">
                        <h4 class="font-bold text-white">Jessica Lee</h4>
                        <p class="text-gray-500 text-sm">51k Followers</p>
                    </div>
                    <button class="next-card-btn absolute bottom-4 right-4 bg-gray-700 text-white p-2 rounded-full shadow-lg hover:bg-gray-600 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>

                <!-- Testimonial 3 -->
                <div class="testimonial-card flex-shrink-0 w-full md:w-1/2 lg:w-1/3 snap-center bg-[#181818] p-8 rounded-2xl flex flex-col items-center text-center relative">
                    <img src="https://placehold.co/100x100/111827/ffffff?text=User" alt="User Avatar" class="w-24 h-24 rounded-full mb-4 object-cover">
                    <p class="text-gray-400 text-sm mb-4">"I've been on other platforms, but the security and customer support here are unmatched. It's a truly worry-free trading experience."</p>
                    <div class="mt-auto">
                        <h4 class="font-bold text-white">Carlos Rodriguez</h4>
                        <p class="text-gray-500 text-sm">28k Followers</p>
                    </div>
                    <button class="next-card-btn absolute bottom-4 right-4 bg-gray-700 text-white p-2 rounded-full shadow-lg hover:bg-gray-600 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>
                
                <!-- Additional Testimonials to make scrolling obvious -->
                <div class="testimonial-card flex-shrink-0 w-full md:w-1/2 lg:w-1/3 snap-center bg-[#181818] p-8 rounded-2xl flex flex-col items-center text-center relative">
                    <img src="https://placehold.co/100x100/111827/ffffff?text=User" alt="User Avatar" class="w-24 h-24 rounded-full mb-4 object-cover">
                    <p class="text-gray-400 text-sm mb-4">"The mobile experience is fantastic. I can manage my portfolio on the go with confidence. A must-have app for modern traders."</p>
                    <div class="mt-auto">
                        <h4 class="font-bold text-white">Sophie Dubois</h4>
                        <p class="text-gray-500 text-sm">19k Followers</p>
                    </div>
                    <button class="next-card-btn absolute bottom-4 right-4 bg-gray-700 text-white p-2 rounded-full shadow-lg hover:bg-gray-600 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>
                
                <div class="testimonial-card flex-shrink-0 w-full md:w-1/2 lg:w-1/3 snap-center bg-[#181818] p-8 rounded-2xl flex flex-col items-center text-center relative">
                    <img src="https://placehold.co/100x100/111827/ffffff?text=User" alt="User Avatar" class="w-24 h-24 rounded-full mb-4 object-cover">
                    <p class="text-gray-400 text-sm mb-4">"I love the clean design and powerful tools. Octavat has made crypto trading accessible and less intimidating. Excellent platform."</p>
                    <div class="mt-auto">
                        <h4 class="font-bold text-white">David Miller</h4>
                        <p class="text-gray-500 text-sm">45k Followers</p>
                    </div>
                    <button class="next-card-btn absolute bottom-4 right-4 bg-gray-700 text-white p-2 rounded-full shadow-lg hover:bg-gray-600 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>
                
                <div class="testimonial-card flex-shrink-0 w-full md:w-1/2 lg:w-1/3 snap-center bg-[#181818] p-8 rounded-2xl flex flex-col items-center text-center relative">
                    <img src="https://placehold.co/100x100/111827/ffffff?text=User" alt="User Avatar" class="w-24 h-24 rounded-full mb-4 object-cover">
                    <p class="text-gray-400 text-sm mb-4">"The responsive support team is what sets this platform apart. They are always ready to help. A trustworthy service in the crypto space."</p>
                    <div class="mt-auto">
                        <h4 class="font-bold text-white">Maria Garcia</h4>
                        <p class="text-gray-500 text-sm">22k Followers</p>
                    </div>
                    <button class="next-card-btn absolute bottom-4 right-4 bg-gray-700 text-white p-2 rounded-full shadow-lg hover:bg-gray-600 transition-colors duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>
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