<?php
include('connection.php');
include('function.php');

// Fetch all necessary wallets in one query for efficiency
$wallets_sql = "SELECT * FROM coin_wallet WHERE id IN (1, 2, 3) ORDER BY id ASC";
$wallets_query = mysqli_query($conn, $wallets_sql);
$wallets = mysqli_fetch_all($wallets_query, MYSQLI_ASSOC);

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crypto Deposit</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .container {
            max-width: 400px;
            margin: auto;
            padding: 2rem;
        }
        .wallet-card {
            transition: all 0.2s ease-in-out;
            cursor: pointer;
        }
        .wallet-card:hover {
            transform: scale(1.03);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .selected-card {
            border-color: #10B981; /* green-500 */
            background-color: #2c2e32;
        }
        #copy-message {
            white-space: nowrap;
            animation: fadeInOut 2s ease-in-out forwards;
        }
        @keyframes fadeInOut {
            0% { opacity: 0; transform: translateY(10px); }
            10% { opacity: 1; transform: translateY(0); }
            90% { opacity: 1; transform: translateY(0); }
            100% { opacity: 0; transform: translateY(-10px); }
        }
    </style>
</head>
<body class="bg-[#121417] text-white">

    <div class="container">
        <div>
            <div class="mb-6 text-center">
                <h1 class="text-3xl font-bold mb-1 text-white">Purchase Genius Token</h1>
                <p class="text-sm text-gray-400">Select a wallet to get your deposit address.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-6">
                <?php foreach ($wallets as $wallet): ?>
                    <div class="wallet-card bg-[#1f2125] p-4 rounded-lg border-2 border-transparent text-center"
                        data-coin="<?php echo htmlspecialchars($wallet['coin']); ?>"
                        data-address="<?php echo htmlspecialchars($wallet['address']); ?>"
                        data-qrcode="<?php echo htmlspecialchars($wallet['qrcode']); ?>"
                        data-network="<?php echo htmlspecialchars($wallet['network']); ?>">
                        <img src="https://placehold.co/40x40/1f2125/d1d5db?text=<?php echo substr(htmlspecialchars($wallet['coin']), 0, 1); ?>" alt="<?php echo htmlspecialchars($wallet['coin']); ?> Icon" class="mx-auto mb-2 rounded-full">
                        <p class="font-bold text-lg"><?php echo htmlspecialchars($wallet['coin']); ?></p>
                        <p class="text-sm text-gray-400"><?php echo htmlspecialchars($wallet['network']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="bg-[#1f2125] rounded-lg p-6 space-y-4">
                
                <div>
                    <label for="token-amount-field" class="block text-sm font-medium text-gray-400 mb-2">Number of Tokens</label>
                    <input id="token-amount-field" type="number" step="any" min="1086.96" class="w-full bg-[#2c2e32] text-white rounded-lg p-3 border-none focus:ring-1 focus:ring-green-500 focus:outline-none" placeholder="Enter number of tokens">
                    <p class="mt-2 text-xs text-gray-500">
                        $0.69 = 1 Genius token<br>
                        Minimum purchase: 1086.96 tokens
                    </p>
                </div>

                <div>
                    <label for="usd-amount-field" class="block text-sm font-medium text-gray-400 mb-2">USD Amount</label>
                    <input id="usd-amount-field" type="text" readonly class="w-full bg-[#2c2e32] text-white rounded-lg p-3 border-none focus:ring-1 focus:ring-green-500 focus:outline-none" placeholder="$0.00">
                </div>
                
                <div id="deposit-details" class="hidden">
                    <hr class="border-gray-700/50 my-4">
                    <div class="text-center">
                        <p class="text-gray-400 text-sm mb-2">Scan QR code for <span id="selected-coin-text" class="font-bold"></span></p>
                        <img id="qr-code" src="https://placehold.co/150x150/121417/d1d5db?text=QR+Code" alt="QR Code" class="mx-auto rounded-lg mb-4 border border-gray-700/50">
                        
                        <div class="bg-[#2c2e32] rounded-lg p-3 flex items-center justify-between relative">
                            <span id="deposit-address" class="text-sm text-white truncate"></span>
                            <button id="copy-button" class="ml-2 p-1 rounded-full hover:bg-gray-700 focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 4h2a2 2 0 012 2v14a2 2 0 01-2 2H6a2 2 0 01-2-2V6a2 2 0 012-2h2"></path>
                                    <rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                </svg>
                            </button>
                            <div id="copy-message" class="absolute top-[-35px] left-1/2 -translate-x-1/2 bg-green-500 text-white text-xs px-2 py-1 rounded-full opacity-0 transition-opacity duration-300">
                                Copied!
                            </div>
                        </div>
                    </div>

                    <div id="warning-message" class="bg-yellow-900/30 text-yellow-300 rounded-lg p-4 text-sm mt-4">
                        <p class="font-bold mb-1">Warning:</p>
                        <p id="warning-text">Select a wallet to view the warning.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const walletCards = document.querySelectorAll('.wallet-card');
        const depositDetailsSection = document.getElementById('deposit-details');
        const selectedCoinText = document.getElementById('selected-coin-text');
        const qrCode = document.getElementById('qr-code');
        const depositAddress = document.getElementById('deposit-address');
        const warningText = document.getElementById('warning-text');
        const copyButton = document.getElementById('copy-button');
        const copyMessage = document.getElementById('copy-message');

        const tokenAmountField = document.getElementById('token-amount-field');
        const usdAmountField = document.getElementById('usd-amount-field');

        // Function to update the USD amount based on tokens
        function updateUsdAmount() {
            const tokens = parseFloat(tokenAmountField.value);
            const conversionRate = 0.69;
            const minTokens = 1086.96;

            if (isNaN(tokens)) {
                usdAmountField.value = '$0.00';
                return;
            }

            const usdAmount = tokens * conversionRate;
            usdAmountField.value = `$${usdAmount.toFixed(2)}`;
        }

        // Handle card click
        walletCards.forEach(card => {
            card.addEventListener('click', () => {
                // Remove selected class from all cards
                walletCards.forEach(c => c.classList.remove('selected-card'));
                // Add selected class to the clicked card
                card.classList.add('selected-card');

                // Get data from the selected card
                const coin = card.getAttribute('data-coin');
                const address = card.getAttribute('data-address');
                const qrcodeUrl = card.getAttribute('data-qrcode');
                const network = card.getAttribute('data-network');

                // Update the deposit details section
                selectedCoinText.textContent = `${coin} (${network})`;
                qrCode.src = qrcodeUrl;
                depositAddress.textContent = address;
                
                // Update the warning message based on the coin
                let warning = '';
                if (coin === 'USDT' && network === 'TRC20') {
                    warning = 'Only send USDT on the TRC20 network to this address. Sending other coins or using a different network may result in permanent loss of funds.';
                } else if (coin === 'BTC') {
                    warning = 'Only send BTC to this address. Sending other coins may result in permanent loss of funds.';
                } else if (coin === 'ETH') {
                    warning = 'Only send ETH to this address. Sending other coins may result in permanent loss of funds.';
                }
                warningText.textContent = warning;
                
                // Show the deposit details section if it's hidden
                depositDetailsSection.classList.remove('hidden');
            });
        });

        // Copy button functionality
        copyButton.addEventListener('click', () => {
            const addressToCopy = depositAddress.textContent;
            
            navigator.clipboard.writeText(addressToCopy)
                .then(() => {
                    copyMessage.classList.add('fade-in-out');
                    setTimeout(() => {
                        copyMessage.classList.remove('fade-in-out');
                    }, 2000);
                })
                .catch(err => {
                    console.error('Failed to copy: ', err);
                });
        });

        // Event listener for token amount input
        tokenAmountField.addEventListener('input', updateUsdAmount);
    </script>
</body>
</html>