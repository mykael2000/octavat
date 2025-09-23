<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crypto Deposit</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    /* A simple class to manage visibility, though Tailwind's 'hidden' utility is used directly */
    .hidden {
      display: none;
    }
  </style>
</head>
<body class="bg-gray-100 font-sans">

  <div class="flex flex-col items-center justify-center min-h-screen p-4">
    <div class="bg-white rounded-lg shadow-xl p-6 w-full max-w-lg">
      <h2 class="text-3xl font-bold text-center text-gray-800 mb-6">Deposit Crypto</h2>

      <div class="flex justify-around space-x-4 mb-8">
        <button id="btc-button" class="flex-1 py-3 px-6 rounded-lg text-lg font-semibold text-white bg-yellow-500 hover:bg-yellow-600 transition-colors duration-300 shadow-md">
          Bitcoin (BTC)
        </button>
        <button id="eth-button" class="flex-1 py-3 px-6 rounded-lg text-lg font-semibold text-white bg-gray-700 hover:bg-gray-800 transition-colors duration-300 shadow-md">
          Ethereum (ETH)
        </button>
        <button id="usdt-button" class="flex-1 py-3 px-6 rounded-lg text-lg font-semibold text-white bg-green-500 hover:bg-green-600 transition-colors duration-300 shadow-md">
          Tether (USDT)
        </button>
      </div>

      <div id="btc-deposit" class="deposit-info hidden text-center p-6 bg-gray-50 rounded-lg border border-gray-200">
        <h3 class="text-xl font-bold text-gray-800 mb-2">Deposit Bitcoin</h3>
        <p class="text-sm text-gray-600 mb-4">Send only BTC to this address. Sending any other currency will result in permanent loss.</p>
        <div class="bg-white p-4 rounded-lg border border-gray-300 inline-block mb-4">
          <img src="https://via.placeholder.com/150?text=BTC+QR" alt="Bitcoin QR Code" class="w-40 h-40">
        </div>
        <div class="bg-white p-3 rounded-lg border border-gray-300 mb-4 break-all">
          <p class="wallet-address text-lg font-mono text-gray-700">1A1zP1eP5QGefi2DMPTfTL5SLmv7DivfNa</p>
        </div>
        <button class="copy-button w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition-colors duration-300">
          Copy Address
        </button>
      </div>

      <div id="eth-deposit" class="deposit-info hidden text-center p-6 bg-gray-50 rounded-lg border border-gray-200">
        <h3 class="text-xl font-bold text-gray-800 mb-2">Deposit Ethereum</h3>
        <p class="text-sm text-gray-600 mb-4">Send only ETH to this address. Sending any other currency will result in permanent loss.</p>
        <div class="bg-white p-4 rounded-lg border border-gray-300 inline-block mb-4">
          <img src="https://via.placeholder.com/150?text=ETH+QR" alt="Ethereum QR Code" class="w-40 h-40">
        </div>
        <div class="bg-white p-3 rounded-lg border border-gray-300 mb-4 break-all">
          <p class="wallet-address text-lg font-mono text-gray-700">0x1234567890abcdef1234567890abcdef12345678</p>
        </div>
        <button class="copy-button w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition-colors duration-300">
          Copy Address
        </button>
      </div>

      <div id="usdt-deposit" class="deposit-info hidden text-center p-6 bg-gray-50 rounded-lg border border-gray-200">
        <h3 class="text-xl font-bold text-gray-800 mb-2">Deposit USDT (ERC-20)</h3>
        <p class="text-sm text-gray-600 mb-4">Send only USDT (ERC-20) to this address. Sending any other currency will result in permanent loss.</p>
        <div class="bg-white p-4 rounded-lg border border-gray-300 inline-block mb-4">
          <img src="https://via.placeholder.com/150?text=USDT+QR" alt="USDT QR Code" class="w-40 h-40">
        </div>
        <div class="bg-white p-3 rounded-lg border border-gray-300 mb-4 break-all">
          <p class="wallet-address text-lg font-mono text-gray-700">0x1234567890abcdef1234567890abcdef12345678</p>
        </div>
        <button class="copy-button w-full py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg hover:bg-blue-600 transition-colors duration-300">
          Copy Address
        </button>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const buttons = document.querySelectorAll('.deposit-options button');
      const depositSections = document.querySelectorAll('.deposit-info');
      const copyButtons = document.querySelectorAll('.copy-button');

      buttons.forEach(button => {
        button.addEventListener('click', () => {
          // Hide all deposit sections
          depositSections.forEach(section => {
            section.classList.add('hidden');
          });

          // Show the selected deposit section
          const targetId = button.id.replace('-button', '-deposit');
          document.getElementById(targetId).classList.remove('hidden');
        });
      });

      copyButtons.forEach(copyButton => {
        copyButton.addEventListener('click', () => {
          const address = copyButton.parentNode.querySelector('.wallet-address').textContent;
          
          navigator.clipboard.writeText(address).then(() => {
            alert('Address copied to clipboard!');
          }).catch(err => {
            console.error('Failed to copy text: ', err);
          });
        });
      });
    });
  </script>

</body>
</html>