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
                    <li><a href="register.php" class="hover:text-green-accent transition-colors">Buy Crypto <span class="bg-red-500 text-white text-xs px-2 py-1 rounded-full ml-1">NEW</span></a></li>
                    <li><a href="register.php" class="hover:text-green-accent transition-colors">Markets</a></li>
                    <li><a href="register.php" class="hover:text-green-accent transition-colors">Futures</a></li>
                    <li><a href="register.php" class="hover:text-green-accent transition-colors">Spot</a></li>
                    <li><a href="register.php" class="hover:text-green-accent transition-colors">Earn</a></li>
                    <li><a href="register.php" class="hover:text-green-accent transition-colors">Promotions</a></li>
                    <li><a href="register.php" class="hover:text-green-accent transition-colors">Partner</a></li>
                    <li><a href="register.php" class="hover:text-green-accent transition-colors">More</a></li>
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
    </header>

    <!-- Hero Section -->
    <main class="container mx-auto px-4 py-16 flex flex-col md:flex-row items-center justify-between">
        <div class="md:w-1/2 text-left space-y-4">
            <h3 class="text-2xl text-green-accent font-semibold">Better Liquidity, Better Trading</h3>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold tracking-tight leading-tight">
                Global Crypto Derivatives Exchange
            </h1>
            <a href="register.php" class="mt-8 px-6 py-3 rounded-md text-lg font-semibold border border-green-accent text-green-accent hover:bg-green-accent hover:text-black transition-colors transform hover:scale-105">
                Trade Now
    </a>
        </div>
        <div class="md:w-1/2 mt-8 md:mt-0 flex justify-center md:justify-end">
            <!-- Placeholder for Mobile App Screenshot -->
             <video class="rounded-lg shadow-lg" width="440" height="260" autoplay muted loop>
                <source src="homeindex-video.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </main>

    <!-- Trending Section -->
    <section class="container mx-auto px-4 py-16">
        <div class="flex items-center justify-between mb-8">
            <h2 class="text-3xl font-bold">Trending Cryptocurrencies</h2>
            <a href="#" class="text-sm text-green-accent hover:underline">View More</a>
        </div>
        <div class="flex items-center space-x-4 mb-8 border-b border-gray-800">
            <button class="pb-2 text-white border-b-2 border-green-accent">Popular Futures</button>
            <button class="pb-2 text-gray-400 hover:text-white transition-colors">Popular Spot</button>
            <button class="pb-2 text-gray-400 hover:text-white transition-colors">Gainers</button>
        </div>
        <div class="overflow-x-auto rounded-lg shadow-xl border border-gray-800 bg-[#161616]">
            <table class="w-full text-left text-sm whitespace-nowrap">
                <thead class="uppercase tracking-wider text-gray-400">
                    <tr class="bg-[#1c1c1c]">
                        <th class="px-6 py-3 rounded-tl-lg">Trading Pairs</th>
                        <th class="px-6 py-3">Last Traded Price</th>
                        <th class="px-6 py-3">24H Change</th>
                        <th class="px-6 py-3">24H High</th>
                        <th class="px-6 py-3">24H Trading Volume</th>
                        <th class="px-6 py-3">Chart</th>
                        <th class="px-6 py-3 rounded-tr-lg"></th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-800">
                    <!-- ETH/USDT -->
                    <tr class="hover:bg-gray-900 transition-colors cursor-pointer">
                        <td class="px-6 py-4 flex items-center">
                            <img src="https://placehold.co/24x24/111827/ffffff?text=E" alt="ETH" class="rounded-full mr-3">
                            <div>
                                <div class="font-medium text-white">ETHUSDT</div>
                                <div class="text-gray-400 text-xs">₮4,292.44</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">₮4,292.44</td>
                        <td class="px-6 py-4 text-red-500">-3.54%</td>
                        <td class="px-6 py-4">4,480.99</td>
                        <td class="px-6 py-4">2.20B</td>
                        <td class="px-6 py-4">
                            <!-- Placeholder Chart -->
                            <div class="w-24 h-8 bg-red-800 rounded-md"></div>
                        </td>
                        <td class="px-6 py-4">
                            <button class="bg-green-accent text-black px-4 py-2 rounded-full font-semibold text-sm hover:bg-green-600 transition-colors">Trade</button>
                        </td>
                    </tr>
                    <!-- BTC/USDT -->
                    <tr class="hover:bg-gray-900 transition-colors cursor-pointer">
                        <td class="px-6 py-4 flex items-center">
                            <img src="https://placehold.co/24x24/111827/ffffff?text=B" alt="BTC" class="rounded-full mr-3">
                            <div>
                                <div class="font-medium text-white">BTCUSDT</div>
                                <div class="text-gray-400 text-xs">₮110,530.4</div>
                            </div>
                        </td>
                        <td class="px-6 py-4">₮110,530.4</td>
                        <td class="px-6 py-4 text-red-500">-0.96%</td>
                        <td class="px-6 py-4">112,136.8</td>
                        <td class="px-6 py-4">1.17B</td>
                        <td class="px-6 py-4">
                            <!-- Placeholder Chart -->
                            <div class="w-24 h-8 bg-red-800 rounded-md"></div>
                        </td>
                        <td class="px-6 py-4">
                            <button class="bg-green-accent text-black px-4 py-2 rounded-full font-semibold text-sm hover:bg-green-600 transition-colors">Trade</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    
    <!-- Token Grid Section -->
    <section class="container mx-auto px-4 py-16">
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

</body>
</html>
