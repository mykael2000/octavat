<?php
include('connection.php');
include('function.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Dashboard - Profile</title>
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
        <nav id="sidebar" class="fixed top-0 right-0 w-full h-full bg-[#121414] border-l border-gray-700/50 z-50 transform translate-x-full transition-transform duration-300 ease-in-out">
            <div class="p-4 flex flex-col h-full">
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-3">
                        <img height="30px" width="30px" src="profile.jpg" alt="User Profile" class="rounded-full">
                        <div>
                            <div class="font-bold text-white"><?php echo $user['firstname'].' '.$user['lastname']; ?></div>
                            <div class="text-sm text-gray-400">View Profile</div>
                        </div>
                    </div>
                    <button id="close-menu-btn" class="p-2 rounded-full hover:bg-gray-800 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                
                <div class="mt-8 flex-1 overflow-y-auto no-scrollbar">
                    <ul class="space-y-4 text-gray-300 font-medium">
                        <li>
                            <a href="#" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-[#1f2125]">
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="deposit.php" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-[#1f2125]">
                                <span>Deposit</span>
                            </a>
                        </li>
                        <li>
                            <a href="withdrawal.php" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-[#1f2125]">
                                <span>Withdrawal</span>
                            </a>
                        </li>
                        <li>
                            <a href="history.php" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-[#1f2125]">
                                <span>Transaction History</span>
                            </a>
                        </li>
                        <li>
                            <a href="rewards.php" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-[#1f2125]">
                                <span>My Rewards</span>
                            </a>
                        </li>
                        <li>
                            <a href="security.php" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-[#1f2125]">
                                <span>Security</span>
                            </a>
                        </li>
                        <li>
                            <a href="verification.php" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-[#1f2125]">
                                <span>Verification</span>
                            </a>
                        </li>
                        <li>
                            <a href="referral.php" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-[#1f2125]">
                                <span>Referral Hub</span>
                            </a>
                        </li>
                        <li>
                            <a href="settings.php" class="flex items-center space-x-3 p-2 rounded-lg hover:bg-[#1f2125]">
                                <span>Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="mt-auto pt-4 border-t border-gray-700/50 w-full text-center px-4">
                    <a href="logout.php" class="inline-flex items-center justify-center w-full space-x-2 p-2 rounded-lg hover:bg-red-500/20 text-red-400 font-semibold">
                        <span>Log out</span>
                    </a>
                </div>
            </div>
        </nav>
        
        <div id="overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden"></div>

        <header class="p-4 flex items-center justify-between bg-[#121417] border-b border-gray-700/50">
            <div class="flex items-center space-x-2">
                <a href="profile.php" class="p-2 rounded-full hover:bg-gray-800 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mb-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7A4 4 0 1112 3a4 4 0 014 4zM12 14c-4.418 0-8 3.582-8 8H20c0-4.418-3.582-8-8-8z" />
                    </svg>
                </a>
            </div>
            <div class="flex items-center space-x-2">
                <button class="p-2 rounded-full hover:bg-gray-800 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>
                <button id="menu-btn" class="p-2 rounded-full hover:bg-gray-800 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1 p-4 overflow-y-auto no-scrollbar">
            <h1 class="text-2xl font-bold mb-4 text-white">My Profile</h1>
            
            <!-- Profile Summary -->
            <div class="flex items-center space-x-4 mb-8 p-4 bg-[#1f2125] rounded-xl shadow-lg">
                <img src="profile.jpg" alt="User Avatar" class="w-20 h-20 rounded-full border-2 border-gray-700">
                <div>
                    <h2 class="text-xl font-semibold text-white"><?php echo $user['firstname']. '  '.$user['lastname']; ?></h2>
                    <p class="text-gray-400 text-sm"><?php echo $user['email']; ?></p>
                    <p class="text-gray-500 text-xs mt-1">User ID: 123456789</p>
                </div>
            </div>

            <!-- Settings Sections -->
            <div class="space-y-4">
                <!-- General Settings -->
                <div class="bg-[#1f2125] p-6 rounded-xl shadow-lg">
                    <div class="flex items-center justify-between cursor-pointer" onclick="toggleSection('general-settings-content')">
                        <h3 class="text-lg font-semibold text-white">General Settings</h3>
                        <svg id="general-settings-arrow" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 transition-transform duration-300 transform rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div id="general-settings-content" class="mt-4 hidden">
                        <div class="space-y-4">
                            <div>
                                <label for="username" class="block text-sm font-medium text-gray-400">Username</label>
                                <input type="text" id="username" class="mt-1 block w-full bg-[#121417] border border-gray-700 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?php echo $user['username']; ?>">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-400">Email Address</label>
                                <input type="email" id="email" class="mt-1 block w-full bg-[#121417] border border-gray-700 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" value="<?php echo $user['email']; ?>">
                            </div>
                            <button class="w-full bg-green-600 text-white font-semibold py-2 px-4 rounded-lg hover:bg-green-700 transition-colors duration-200">Save Changes</button>
                        </div>
                    </div>
                </div>

                <!-- Security -->
                <div class="bg-[#1f2125] p-6 rounded-xl shadow-lg">
                    <div class="flex items-center justify-between cursor-pointer" onclick="toggleSection('security-content')">
                        <h3 class="text-lg font-semibold text-white">Security</h3>
                        <svg id="security-arrow" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 transition-transform duration-300 transform rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div id="security-content" class="mt-4 hidden">
                        <div class="space-y-4">
                            <div>
                                <label for="password" class="block text-sm font-medium text-gray-400">Change Password</label>
                                <button class="mt-1 w-full bg-gray-700 text-white py-2 px-4 rounded-lg hover:bg-gray-800 transition-colors duration-200">Change Password</button>
                            </div>
                            <div>
                                <label for="2fa" class="block text-sm font-medium text-gray-400">Two-Factor Authentication</label>
                                <div class="mt-1 flex items-center justify-between bg-[#121417] border border-gray-700 rounded-md shadow-sm py-2 px-3">
                                    <span class="text-sm">Status: Not Enabled</span>
                                    <button class="text-green-500 font-semibold">Enable</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Account Activity -->
                <div class="bg-[#1f2125] p-6 rounded-xl shadow-lg">
                    <div class="flex items-center justify-between cursor-pointer" onclick="toggleSection('activity-content')">
                        <h3 class="text-lg font-semibold text-white">Recent Activity</h3>
                        <svg id="activity-arrow" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 transition-transform duration-300 transform rotate-0" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                    <div id="activity-content" class="mt-4 hidden">
                        <ul class="space-y-2 text-sm text-gray-400">
                            <li class="flex justify-between items-center py-2 border-b border-gray-700/50">
                                <span>Logged in from new device</span>
                                <span class="text-xs text-gray-500">2 hours ago</span>
                            </li>
                            <li class="flex justify-between items-center py-2 border-b border-gray-700/50">
                                <span>Password change successful</span>
                                <span class="text-xs text-gray-500">1 day ago</span>
                            </li>
                            <li class="flex justify-between items-center py-2 border-b border-gray-700/50">
                                <span>Logged in from location XYZ</span>
                                <span class="text-xs text-gray-500">3 days ago</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include('navbar.php'); ?>
    </div>

    <script>
        function toggleSection(contentId) {
            const content = document.getElementById(contentId);
            const arrow = document.getElementById(contentId.replace('-content', '-arrow'));
            
            content.classList.toggle('hidden');
            arrow.classList.toggle('rotate-180');
        }
    </script>
     <script src="topNavFooter.js"></script>
</body>
</html>
