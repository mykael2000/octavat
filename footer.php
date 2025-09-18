
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
                        <a href="#"><img src="https://placehold.co/24x24/111111/ffffff?text=X" alt="Twitter" class="rounded"></a>
                        <a href="#"><img src="https://placehold.co/24x24/111111/ffffff?text=F" alt="Facebook" class="rounded"></a>
                    </div>
                </div>
                <!-- Company Links -->
                <div class="col-span-1">
                    <h5 class="font-bold text-lg text-white mb-2">Company</h5>
                    <ul class="text-sm space-y-2">
                        <li><a href="about.php" class="hover:text-green-accent">About Us</a></li>
                        <li><a href="faq.php" class="hover:text-green-accent">FAQ</a></li>
                        <li><a href="terms.php" class="hover:text-green-accent">Terms</a></li>
                        <li><a href="policy.php" class="hover:text-green-accent">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-12 text-sm text-gray-500">
                &copy; 2022 - 2025 Octavat.com. All rights reserved.
            </div>
        </div>
    </footer>
     <script>
        function scrollCarousel(direction) {
            const carousel = document.getElementById('testimonial-carousel');
            const scrollAmount = carousel.offsetWidth;
            
            if (direction === 'next') {
                carousel.scrollLeft += scrollAmount;
            } else {
                carousel.scrollLeft -= scrollAmount;
            }
        }
    </script>
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
