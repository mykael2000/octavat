<?php
include('connection.php');
include('function.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Withdrawal</title>
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
            <!-- Withdrawal Form Section -->
            <div id="withdrawal-content">
                <div class="mb-6">
                    <h1 class="text-xl font-bold mb-1 text-white">Withdrawal</h1>
                    <p class="text-sm text-gray-400">Enter the recipient address and amount to withdraw your funds.</p>
                </div>

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

                    <!-- Withdrawal Address Input -->
                    <div>
                        <label for="address-input" class="block text-sm font-medium text-gray-400 mb-2">Withdrawal Address</label>
                        <input type="text" id="address-input" placeholder="Enter recipient address" class="w-full bg-[#2c2e32] text-white rounded-lg p-3 border-none focus:ring-1 focus:ring-green-500 focus:outline-none">
                    </div>

                    <!-- Amount Input -->
                    <div>
                        <label for="amount-input" class="block text-sm font-medium text-gray-400 mb-2">Amount</label>
                        <input type="number" id="amount-input" placeholder="Enter amount" class="w-full bg-[#2c2e32] text-white rounded-lg p-3 border-none focus:ring-1 focus:ring-green-500 focus:outline-none">
                        <div class="text-xs text-gray-500 mt-2">
                            Available: <span id="available-balance">0.00</span> USDT
                        </div>
                    </div>

                    <!-- Withdrawal Fee and Receive Amount -->
                    <div class="space-y-2 text-sm">
                        <div class="flex justify-between items-center text-gray-400">
                            <span>Network Fee</span>
                            <span id="network-fee">0.00 USDT</span>
                        </div>
                        <div class="flex justify-between items-center text-white font-semibold">
                            <span>You'll Get</span>
                            <span id="receive-amount">0.00 USDT</span>
                        </div>
                    </div>

                    <!-- Withdrawal Button -->
                    <button id="withdraw-button" class="w-full bg-green-500 text-white font-bold py-3 px-4 rounded-lg hover:bg-green-600 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-green-500 focus:ring-offset-2 focus:ring-offset-[#1f2125]">
                        Withdraw
                    </button>
                </div>

                <!-- Withdrawal History Section -->
                <div class="mt-8">
                    <h2 class="text-xl font-bold mb-4 text-white">Withdrawal History</h2>
                    <div class="bg-[#1f2125] rounded-lg p-4">
                        <div class="flex justify-between items-center py-2 border-b border-gray-700/50 text-sm text-gray-400 font-semibold">
                            <span>Date</span>
                            <span>Coin</span>
                            <span>Amount</span>
                            <span>Status</span>
                        </div>
                        <!-- Example History Item (Repeating Block) -->
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
                            <span class="text-sm text-yellow-500">Pending</span>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include('navbar.php'); ?>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const amountInput = document.getElementById('amount-input');
            const networkFeeSpan = document.getElementById('network-fee');
            const receiveAmountSpan = document.getElementById('receive-amount');
            const withdrawButton = document.getElementById('withdraw-button');
            const availableBalanceSpan = document.getElementById('available-balance');
            
            // Mock data - replace with actual data fetching in a real app
            const availableBalance = 1250.00;
            const networkFee = 1.50; // Example fixed fee

            availableBalanceSpan.textContent = availableBalance.toFixed(2);
            networkFeeSpan.textContent = `${networkFee.toFixed(2)} USDT`;

            function updateAmounts() {
                const amount = parseFloat(amountInput.value);
                if (isNaN(amount) || amount <= 0) {
                    receiveAmountSpan.textContent = '0.00 USDT';
                    withdrawButton.disabled = true;
                    withdrawButton.classList.add('opacity-50', 'cursor-not-allowed');
                    return;
                }

                const received = amount - networkFee;
                if (received < 0) {
                    receiveAmountSpan.textContent = '0.00 USDT';
                } else {
                    receiveAmountSpan.textContent = `${received.toFixed(2)} USDT`;
                }
                
                // Enable/disable button based on amount
                if (amount > 0 && amount <= availableBalance) {
                    withdrawButton.disabled = false;
                    withdrawButton.classList.remove('opacity-50', 'cursor-not-allowed');
                } else {
                    withdrawButton.disabled = true;
                    withdrawButton.classList.add('opacity-50', 'cursor-not-allowed');
                }
            }

            amountInput.addEventListener('input', updateAmounts);

            withdrawButton.addEventListener('click', () => {
                const amount = parseFloat(amountInput.value);
                const address = document.getElementById('address-input').value;
                const coin = document.getElementById('coin-select').value;
                const network = document.getElementById('network-select').value;

                if (!address || isNaN(amount) || amount <= 0 || amount > availableBalance) {
                    console.error("Please enter a valid address and amount within your available balance.");
                    return;
                }

                // In a real application, you would send this data to a backend API for processing.
                console.log(`Withdrawal initiated: ${amount} ${coin} on ${network} to address ${address}`);
                // You could then show a success message or a loading state.
                withdrawButton.textContent = 'Withdrawing...';
                withdrawButton.disabled = true;
                
                // Simulate a network request
                setTimeout(() => {
                    withdrawButton.textContent = 'Withdraw';
                    // Clear the form after a successful "withdrawal"
                    amountInput.value = '';
                    document.getElementById('address-input').value = '';
                    updateAmounts();
                    console.log("Withdrawal simulated successfully!");
                }, 2000);
            });

            // Initial state
            updateAmounts();
        });
    </script>
    <script src="js/topNavFooter.js"></script>
</body>
</html>
