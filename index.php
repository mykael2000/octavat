<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Octavat - Trade with Confidence</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            @apply bg-[#111111] text-white;
        }
        .text-green-accent {
            color: #60e336;
        }
        .bg-green-accent {
            background-color: #60e336;
        }
        .border-green-accent {
            border-color: #60e336;
        }
        .ring-green-accent {
            --tw-ring-color: #60e336;
        }

        /* Tapper specific styles */
        #tapper-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 4rem 0;
            background-color: #1c1c1c;
            border-radius: 1rem;
            margin-top: 2rem;
            box-shadow: 0 4px 14px rgba(0,0,0,0.5);
            animation: fadeIn 1s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        #coin-container {
            cursor: pointer;
            transition: transform 0.1s ease-in-out;
            user-select: none;
            -webkit-user-select: none;
        }
        #coin-container:active {
            transform: scale(0.95);
        }
        #coin-image {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 5px solid #60e336;
            box-shadow: 0 0 20px rgba(96, 227, 54, 0.7);
        }

        .tap-effect {
            position: absolute;
            font-size: 2em;
            font-weight: bold;
            color: white;
            opacity: 0;
            animation: fade-up 0.5s ease-out forwards;
            pointer-events: none; /* Make sure it doesn't block clicks */
        }
        @keyframes fade-up {
            0% { transform: translateY(0); opacity: 1; }
            100% { transform: translateY(-50px); opacity: 0; }
        }

        #countdown-timer {
            font-size: 2.5em;
            font-weight: 700;
            color: #60e336;
            margin-top: 2rem;
            letter-spacing: 1px;
        }
        #timer-label {
            font-size: 1.2em;
            font-weight: 500;
            color: #9ca3af;
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body class="bg-[#111111] text-white">

    <!-- Navigation Bar -->
    <header class="sticky top-0 z-50 bg-[#111111] backdrop-blur-md bg-opacity-90 border-b border-gray-800">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <div class="flex items-center space-x-6">
                <a href="#" class="text-2xl font-bold flex items-center space-x-2">
                    <!-- Placeholder Logo SVG -->
                    <svg class="w-6 h-6 text-green-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    <span>Octavat</span>
                </a>
                <ul class="hidden md:flex space-x-6 text-sm font-medium text-gray-400">
                    <li><a href="#trade-now" class="hover:text-green-accent transition-colors">Buy Crypto <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full ml-1">NEW</span></a></li>
                    <li><a href="#trending-section" class="hover:text-green-accent transition-colors">Trading Plans</a></li>
                    <li><a href="#faq" class="hover:text-green-accent transition-colors">FAQ</a></li>
                    <li><a href="#about-us" class="hover:text-green-accent transition-colors">About Us</a></li>
                    <li><a href="#contact-us" class="hover:text-green-accent transition-colors">Contact Us</a></li>
                </ul>
            </div>
            
            <div class="hidden md:flex items-center space-x-4">
                <div class="relative">
                    <input type="text" placeholder="Search" class="bg-[#1c1c1c] text-white rounded-full py-2 pl-10 pr-4 focus:outline-none focus:ring-1 focus:ring-green-accent w-48">
                    <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <button class="text-gray-400 hover:text-white transition-colors">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L14 11.586V8a6 6 0 00-6-6zm-2 10.414V8a2 2 0 114 0v4.414l-2 2-2-2z"></path></svg>
                </button>
                <button class="bg-gray-800 rounded-full w-8 h-8 flex items-center justify-center text-gray-400 hover:bg-gray-700 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                </button>
                <div class="relative">
                    <button class="bg-gray-800 rounded-full w-8 h-8 flex items-center justify-center text-gray-400 hover:bg-gray-700 transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L14 11.586V8a6 6 0 00-6-6zm-2 10.414V8a2 2 0 114 0v4.414l-2 2-2-2z"></path></svg>
                    </button>
                    <span class="absolute top-0 right-0 inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-100 transform translate-x-1/2 -translate-y-1/2 bg-red-500 rounded-full">5</span>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button id="menu-toggle" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </nav>
        
        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden px-4 py-4 bg-[#1c1c1c] transition-all duration-300 ease-in-out">
            <ul class="flex flex-col space-y-4 text-lg font-medium text-gray-400">
                <li><a href="#trade-now" class="block hover:text-green-accent transition-colors">Buy Crypto<span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full ml-1">NEW</span></a></li>
                <li><a href="#trending-section" class="block hover:text-green-accent transition-colors">Trading Plans</a></li>
                <li><a href="#faq" class="block hover:text-green-accent transition-colors">FAQ</a></li>
                <li><a href="#about-us" class="block hover:text-green-accent transition-colors">About Us</a></li>
                <li><a href="#contact-us" class="block hover:text-green-accent transition-colors">Contact Us</a></li>
            </ul>
        </div>
    </header>

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
        <div class="overflow-x-auto rounded-lg shadow-xl border border-gray-800 bg-[#161616]">
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


    <!-- Footer -->
    <footer class="bg-black text-gray-400 py-12 border-t border-gray-800">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-5 gap-8">
                <!-- About Section -->
                <div class="col-span-1">
                    <div class="flex items-center space-x-2 text-xl font-bold mb-4">
                        <svg class="w-6 h-6 text-green-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        <span>Octavat</span>
                    </div>
                    <p class="text-sm">Connect with us:</p>
                    <div class="flex space-x-4 mt-2">
                        <!-- Social Icons -->
                        <a href="#"><img src="https://placehold.co/24x24/111111/ffffff?text=in" alt="LinkedIn" class="rounded"></a>
                        <a href="#"><img src="https://placehold.co/24x24/111111/ffffff?text=T" alt="Twitter" class="rounded"></a>
                        <a href="#"><img src="https://placehold.co/24x24/111111/ffffff?text=M" alt="Medium" class="rounded"></a>
                        <a href="#"><img src="https://placehold.co/24x24/111111/ffffff?text=Y" alt="YouTube" class="rounded"></a>
                    </div>
                </div>
                <!-- Company Links -->
                <div class="col-span-1">
                    <h5 class="font-bold text-lg text-white mb-2">Company</h5>
                    <ul class="text-sm space-y-2">
                        <li><a href="#" class="hover:text-green-accent">About Octavat</a></li>
                        <li><a href="#" class="hover:text-green-accent">Announcement</a></li>
                        <li><a href="#" class="hover:text-green-accent">Blog</a></li>
                        <li><a href="#" class="hover:text-green-accent">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-green-accent">Terms</a></li>
                        <li><a href="#" class="hover:text-green-accent">AML Policies</a></li>
                    </ul>
                </div>
                <!-- Market Links -->
                <div class="col-span-1">
                    <h5 class="font-bold text-lg text-white mb-2">Market</h5>
                    <ul class="text-sm space-y-2">
                        <li><a href="#" class="hover:text-green-accent">BTC to USD</a></li>
                        <li><a href="#" class="hover:text-green-accent">ETH to USD</a></li>
                        <li><a href="#" class="hover:text-green-accent">SOL to USD</a></li>
                        <li><a href="#" class="hover:text-green-accent">All Crypto Markets</a></li>
                    </ul>
                </div>
                <!-- Trade Links -->
                <div class="col-span-1">
                    <h5 class="font-bold text-lg text-white mb-2">Trade</h5>
                    <ul class="text-sm space-y-2">
                        <li><a href="#" class="hover:text-green-accent">Spot</a></li>
                        <li><a href="#" class="hover:text-green-accent">Futures</a></li>
                        <li><a href="#" class="hover:text-green-accent">Easy Earn</a></li>
                        <li><a href="#" class="hover:text-green-accent">Fees</a></li>
                    </ul>
                </div>
                <!-- Support Links -->
                <div class="col-span-1">
                    <h5 class="font-bold text-lg text-white mb-2">Support</h5>
                    <ul class="text-sm space-y-2">
                        <li><a href="#" class="hover:text-green-accent">Tax Report</a></li>
                        <li><a href="#" class="hover:text-green-accent">Official Verification</a></li>
                        <li><a href="#" class="hover:text-green-accent">Feedback & Suggestions</a></li>
                        <li><a href="#" class="hover:text-green-accent">Contact Octavat</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-12 text-sm text-gray-500">
                &copy; 2022 - 2025 Octavat.com. All rights reserved.
            </div>
        </div>
    </footer>
        <script>
        document.addEventListener('DOMContentLoaded', () => {
            const menuToggle = document.getElementById('menu-toggle');
            const mobileMenu = document.getElementById('mobile-menu');
            
            // Toggle the mobile menu on button click
            menuToggle.addEventListener('click', () => {
                mobileMenu.classList.toggle('hidden');
            });

            // Smooth scroll for internal links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                    
                    // Hide the mobile menu after clicking a link
                    if (!mobileMenu.classList.contains('hidden')) {
                        mobileMenu.classList.add('hidden');
                    }
                });
            });

            // --- COIN TAPPER & TIMER LOGIC ---
            const coin = document.getElementById('coin-container');
            const tapsDisplay = document.getElementById('taps');
            const countdownDisplay = document.getElementById('countdown-timer');
            let taps = 0;

            // Tapping logic
            coin.addEventListener('click', (event) => {
                taps++;
                tapsDisplay.textContent = taps;
                createTapEffect(event);
            });

            // Add a tap effect (like a number popping up)
            function createTapEffect(event) {
                const effect = document.createElement('div');
                effect.textContent = '+1';
                effect.className = 'tap-effect';
                
                // Position the effect where the tap occurred
                effect.style.left = `${event.clientX}px`;
                effect.style.top = `${event.clientY}px`;

                document.body.appendChild(effect);
                
                // Remove the element after the animation finishes
                setTimeout(() => {
                    effect.remove();
                }, 500);
            }

            // Timer Logic
            // ** IMPORTANT: Set your token listing date here! **
            // The format is 'Month Day, Year HH:MM:SS GMT+00:00'
            // Example: 'January 1, 2026 12:00:00 GMT+00:00'
            const listingDate = new Date('October 20, 2025 10:00:00 GMT+00:00').getTime();

            const timer = setInterval(() => {
                const now = new Date().getTime();
                const distance = listingDate - now;

                if (distance < 0) {
                    clearInterval(timer);
                    countdownDisplay.innerHTML = "🎉 **LISTED!**";
                    return;
                }

                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);

                countdownDisplay.innerHTML = `${days}d ${hours}h ${minutes}m ${seconds}s`;
            }, 1000);
        });
    </script>
    
</body>
</html>
