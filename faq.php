<?php
include("header.php");
?>

<div class="relative w-full overflow-hidden bg-gray-900 py-20 lg:py-40">
  <img src="images/blob.svg" alt="" class="absolute inset-0 h-full w-full object-cover opacity-20">
  <div class="relative container mx-auto px-4">
    <div class="flex flex-col items-center justify-center text-center">
      <div class="w-full lg:w-3/4">
        <h1 class="text-4xl lg:text-5xl font-bold text-white mb-6" data-aos="fade-up">
          <span class="text-[#0f0b85]">Frequently Asked Questions (FAQ)</span>
        </h1>
      </div>
    </div>
  </div>
</div>

<div class="py-12 bg-white">
  <div class="container mx-auto px-4">
    <div class="max-w-3xl mx-auto">
      <div id="faqAccordion" class="space-y-4">

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse1')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              Is Octavat a registered company?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse1">+</span>
            </h5>
          </div>
          <div id="faqCollapse1" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              Yes, Octavat is a registered and legitimate company. We are fully compliant with all necessary regulations.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse2')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              How does Octavat earn profits for its members?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse2">+</span>
            </h5>
          </div>
          <div id="faqCollapse2" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              Octavat generates profits through strategic investments and trading in various cryptocurrency markets.
            </div>
          </div>
        </div>
        
        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse3')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              How can I register a new account?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse3">+</span>
            </h5>
          </div>
          <div id="faqCollapse3" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              Registering a new account is easy! Simply visit our website and click on the "Sign Up" button. Follow the prompts to complete the registration process.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse4')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              What is the minimum and maximum amount for deposit?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse4">+</span>
            </h5>
          </div>
          <div id="faqCollapse4" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              The minimum deposit amount is $699, while there is no maximum deposit amount.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse5')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              What is the maximum amount for withdrawal?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse5">+</span>
            </h5>
          </div>
          <div id="faqCollapse5" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              The maximum withdrawal amount is $5,000,000 per transaction.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse6')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              How long does it take for my deposit to be added?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse6">+</span>
            </h5>
          </div>
          <div id="faqCollapse6" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              Deposits are usually processed and added to your account instantly. However, in some cases, it might take up to 24 hours.
            </div>
          </div>
        </div>
        
        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse7')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              How do I request a withdrawal?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse7">+</span>
            </h5>
          </div>
          <div id="faqCollapse7" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              To request a withdrawal, log in to your account and navigate to the "Withdraw" section. Follow the instructions to initiate the withdrawal process.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse8')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              How efficient is the support?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse8">+</span>
            </h5>
          </div>
          <div id="faqCollapse8" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              Our support team is highly responsive and available 24/7 to assist you with any queries or issues you may have.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse9')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              How long does it take for my withdrawal to be sent?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse9">+</span>
            </h5>
          </div>
          <div id="faqCollapse9" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              Withdrawal requests are typically processed within 6 hours maximum.
            </div>
          </div>
        </div>
        
        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse10')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              How can I change my Payment address?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse10">+</span>
            </h5>
          </div>
          <div id="faqCollapse10" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              You can change your Payment address by logging in to your account, navigating to the "Settings" section, and updating your payment information.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse11')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              How can I change my account e-mail?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse11">+</span>
            </h5>
          </div>
          <div id="faqCollapse11" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              To change your account email, please contact our support team. They will guide you through the verification process.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse12')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              Do I need to make a deposit to refer new members?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse12">+</span>
            </h5>
          </div>
          <div id="faqCollapse12" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              No, you do not need to make a deposit to refer new members. Our referral program is open to all registered users.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse13')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              Is it possible to upgrade my plan?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse13">+</span>
            </h5>
          </div>
          <div id="faqCollapse13" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              Yes, it is possible. All you need to do to upgrade your plan is to make an additional deposit that matches the plan you want to upgrade to.
            </div>
          </div>
        </div>
        
        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse14')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              Can I register multiple accounts from the same computer?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse14">+</span>
            </h5>
          </div>
          <div id="faqCollapse14" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              No, each individual is allowed only one account. Registering multiple accounts is against our terms of service.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse15')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              How can I contact your support?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse15">+</span>
            </h5>
          </div>
          <div id="faqCollapse15" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              You can contact our support team through the "Contact Us" page on our website, or you can send an email to support@octavat.com.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse16')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              What do I need to trade on Octavat?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse16">+</span>
            </h5>
          </div>
          <div id="faqCollapse16" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              To start trading on Octavat, you need to create an account, make a deposit, and then you can use the trading platform to place trades.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse17')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              How does trading work on Octavat?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse17">+</span>
            </h5>
          </div>
          <div id="faqCollapse17" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              Trading on Octavat involves buying and selling various assets, such as cryptocurrencies and stocks, with the goal of making a profit based on price movements.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse18')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              Does auto trading work?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse18">+</span>
            </h5>
          </div>
          <div id="faqCollapse18" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              Auto trading systems work perfectly, as the majority of trading conducted on major cryptocurrency exchanges is reportedly auto trading. In fact, auto trading is nothing more than turning a trading system, the entry, exit, and money management rules used to trade markets, into a programmed system rather than following it manually. Auto trading can even be considered superior to manual trading since it completely removes emotions from trading.
            </div>
          </div>
        </div>
        
        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse19')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              Is it possible to upgrade my plan after payment?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse19">+</span>
            </h5>
          </div>
          <div id="faqCollapse19" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              Yes, and you won't lose any remaining time when you upgrade. All remaining time on your current active trade section will be converted to a credit towards the new deposit.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse20')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              Is auto trading legal?
              <span class="transform transition-transform duration-300" id="icon-faqCollapse20">+</span>
            </h5>
          </div>
          <div id="faqCollapse20" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              Auto trading in the currency, equity, commodity, and cryptocurrency markets is all completely legal. There have been no regulations or laws passed in any country that prohibit auto trading (that we're aware of). However, whether or not auto trading is allowed in an account is a decision made by the individual broker. Many allow auto trading, but some prohibit it for their clients. When you're trading with Octavat, you're always free to use auto trading to enhance your trading and potential profits.
            </div>
          </div>
        </div>

        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse21')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              How to Deposit Crypto
              <span class="transform transition-transform duration-300" id="icon-faqCollapse21">+</span>
            </h5>
          </div>
          <div id="faqCollapse21" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              <p>Before depositing, please make sure which coin you want for the transfer.</p>
              <br>
              <p>For example, If you want to withdraw Bitcoin (BTC) from an external exchange to your Octavat account. You need to select “Withdraw” and choose Bitcoin on the external exchange then click on send on your external exchange.</p>
              <br>
              <p><b>How to get the deposit address</b></p>
              <p>Web: Sign in on the Octavat website, click Make A Deposit > then select the crypto and network to deposit.</p>
              <br>
              <p><b>Caution:</b></p>
              <ul class="list-disc ml-6">
                <li>The assets could be lost due to depositing with the wrong address.</li>
                <li>Withdrawal fees are charged.</li>
                <li>After the transfer on the blockchain reaches certain confirmations, you will receive the assets.</li>
              </ul>
              <br>
              <p>Please note that the assets could be lost if you deposit with the wrong address.</p>
            </div>
          </div>
        </div>
        
        <div class="rounded-lg border border-gray-200">
          <div class="p-4 cursor-pointer select-none" onclick="toggleAccordion('faqCollapse22')">
            <h5 class="flex justify-between items-center text-lg font-semibold text-gray-800">
              How to view Withdrawal status at Octavat
              <span class="transform transition-transform duration-300" id="icon-faqCollapse22">+</span>
            </h5>
          </div>
          <div id="faqCollapse22" class="hidden overflow-hidden transition-all duration-300 ease-in-out">
            <div class="p-4 border-t border-gray-200 text-gray-600">
              <p>Regarding the withdrawal process, you can check the current status of the withdrawal through the following information:</p>
              <br>
              <p>Web: Octavat home page > Withdraw > Check the order status in the withdrawal history.</p>
              <br>
              <p><b>Withdrawal status and corresponding situation</b></p>
              <br>
              <p>1. <b>Processing:</b> Your withdrawal is still being reviewed, and we will process your withdrawal after the review is completed. If your withdrawal has been under review for more than 15 minutes, please contact Octavat customer service, and we will process it for you as soon as possible.</p>
              <br>
              <p>2. <b>Pending:</b> We are preparing to execute your withdrawal. If your withdrawal has been under process for more than one hour, please contact Octavat customer service, and we will process it as soon as possible.</p>
              <br>
              <p>3. <b>Completed:</b> Your withdrawal has been processed, and you can check the status on the external exchange.</p>
              <br>
              <p>If the Octavat status shows success/completed, but you have not received the transfer, please contact the external exchange/wallet for further assistance.</p>
              <br>
              <p>If your withdrawal has exceeded the expected processing time mentioned above, please provide the following information and contact our live chat or email support@octavat.com:</p>
              <ul class="list-disc ml-6">
                <li>Octavat account (mobile phone/email used for registration)</li>
                <li>Withdrawal currency name, withdrawal amount</li>
                <li>Screenshot of the details of the withdrawal record</li>
              </ul>
              <br>
              <p>We will check the progress of the withdrawal for you as soon as possible after receiving it.</p>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<script>
  function toggleAccordion(id) {
    const content = document.getElementById(id);
    const icon = document.getElementById(`icon-${id}`);
    
    if (content.classList.contains('hidden')) {
      // Hide all other open accordions
      document.querySelectorAll('#faqAccordion > div > div:nth-child(2)').forEach(item => {
        if (item.id !== id && !item.classList.contains('hidden')) {
          item.classList.add('hidden');
          item.style.maxHeight = null;
        }
      });
      document.querySelectorAll('#faqAccordion > div > div:first-child > h5 > span').forEach(item => {
        if (item.id !== `icon-${id}`) {
          item.classList.remove('rotate-45');
        }
      });

      // Show the clicked accordion
      content.classList.remove('hidden');
      content.style.maxHeight = content.scrollHeight + 'px';
      icon.classList.add('rotate-45');
    } else {
      // Hide the clicked accordion
      content.classList.add('hidden');
      content.style.maxHeight = null;
      icon.classList.remove('rotate-45');
    }
  }

  // Set the initial height for the first item to make it visible on load
  document.addEventListener("DOMContentLoaded", function() {
    const firstCollapse = document.getElementById('faqCollapse1');
    firstCollapse.classList.remove('hidden');
    firstCollapse.style.maxHeight = firstCollapse.scrollHeight + 'px';
    document.getElementById('icon-faqCollapse1').classList.add('rotate-45');
  });
</script>

<?php
include("footer.php");
?>