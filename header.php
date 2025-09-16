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
                    <li><a href="about.php" class="hover:text-green-accent transition-colors">About Us</a></li>
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
                <li><a href="faq.php" class="block hover:text-green-accent transition-colors">FAQ</a></li>
                <li><a href="#about-us" class="block hover:text-green-accent transition-colors">About Us</a></li>
                <li><a href="#contact-us" class="block hover:text-green-accent transition-colors">Contact Us</a></li>
            </ul>
        </div>
    </header>