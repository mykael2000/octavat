<?php include("header.php"); ?>
<section class="text-white body-font relative" style="background-color: #111111;">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-white">
        Contact Us
      </h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">
        Have a question or need to get in touch? Fill out the form below.
      </p>
    </div>
    <div class="lg:w-1/2 md:w-2/3 mx-auto">
      <form
        action="#"
        method="POST"
        class="flex flex-wrap -m-2"
      >
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="name" class="leading-7 text-sm text-white">Name</label>
            <input
              type="text"
              id="name"
              name="name"
              class="w-full bg-white bg-opacity-10 rounded border border-gray-300 focus:border-green-400 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            />
          </div>
        </div>
        <div class="p-2 w-1/2">
          <div class="relative">
            <label for="email" class="leading-7 text-sm text-white">Email</label>
            <input
              type="email"
              id="email"
              name="email"
              class="w-full bg-white bg-opacity-10 rounded border border-gray-300 focus:border-green-400 focus:bg-white focus:ring-2 focus:ring-green-200 text-base outline-none text-gray-900 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
            />
          </div>
        </div>
        <div class="p-2 w-full">
          <div class="relative">
            <label for="message" class="leading-7 text-sm text-white">Message</label>
            <textarea
              id="message"
              name="message"
              class="w-full bg-white bg-opacity-10 rounded border border-gray-300 focus:border-green-400 focus:bg-white focus:ring-2 focus:ring-green-200 h-32 text-base outline-none text-gray-900 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"
            ></textarea>
          </div>
        </div>
        <div class="p-2 w-full">
          <button
            type="submit"
            class="flex mx-auto text-white border-0 py-2 px-8 focus:outline-none rounded text-lg"
            style="background-color: #60e336; transition: background-color 0.3s ease;"
            onmouseover="this.style.backgroundColor='#4caf50'" 
            onmouseout="this.style.backgroundColor='#60e336'"
          >
            Send Message
          </button>
        </div>
      </form>
    </div>
  </div>
</section>
<?php include("footer.php"); ?>