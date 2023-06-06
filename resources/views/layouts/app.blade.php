<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    </head>
    <div class="bg-gray-700">
<div class="container mx-60 flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-100 mb-4 md:mb-0">
      <img class="ml-12" src="/img/galicialogo3.png">
      <span class="ml-2 text-l font-bold">Galicia</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center text-gray-200 text-xl font-bold">
      <a class="mr-5 hover:text-indigo-400" href="/">About</a>
      <a class="mr-5 hover:text-indigo-400" href="/gallery" >Gallery</a>
      <a class="mr-5 hover:text-indigo-400" href="/journal" >Journal</a>
      <a class="mr-5 hover:text-indigo-400" href="/contact"> Contacts</a>
    </nav>
  </div>
  </div>
  </div>
</header>
    <main class="bg-gray-900" >
        {{ $slot }}
    </main>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({
      delay: 100,
    });
  </script>
    </body>

    <!-- FOOTER-->

<footer class="text-gray-300 body-font bg-gray-800"  data-aos="fade-up">
  <div class="container px-0 py-20 mx-60 flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left md:mt-0 mt-10">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-200">
        <img src="/img/galicialogo3.png">
        <span class="ml-3 text-xl">Galicia</span>
      </a>
      <p class="mt-2 text-sm text-gray-100">Welcome to My Personal Website</p>
    </div>
    <div class="ml-10 flex-grow flex flex-wrap md:pr-20 -mb-10 md:text-left text-center order-first">
      <div class="lg:w-1/3 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-gray-100 tracking-widest text-sm mb-3" >NAVIGATION</h2>
        <nav class="list-none mb-10">

        <li>
            <a class="text-gray-200 hover:text-indigo-400" href="/">Home</a>
          </li>
          <li>
            <a class="text-gray-200 hover:text-gray-400" href="/gallery" >Gallery</a>
          </li>
          <li>
            <a class="text-gray-200 hover:text-gray-400" href="/journal" >Journal</a>
          </li>
          <li>
            <a class="text-gray-200 hover:text-gray-400" href="/contact"> Contacts</a>
          </li>
          
        </nav>
      </div>
      <div class="lg:w-1/3 md:w-1/2 w-full px-5">
        <h2 class="title-font font-medium text-gray-100 tracking-widest text-sm mb-3">CALL ME</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-gray-200 hover:text-gray-400">09277599822</a>
          </li>
          <li>
            <a class="text-gray-200 hover:text-gray-400">099922036544</a>
          </li>
         
        </nav>
      </div>
      <div class="lg:w-1/3 md:w-1/2 w-full px-5">
        <h2 class="title-font font-medium text-gray-100 tracking-widest text-sm mb-3">MY EMAIL</h2>
        <nav class="list-none mb-10">
         
        <li>
            <a class="text-gray-200 hover:text-gray-400">nollanjay.galicia@hcdc.edu.ph</a>
          </li>
          <li>
            <a class="text-gray-200 hover:text-gray-400">galicianollanjay@gmail.com</a>
          </li>

        </nav>
      </div>
     
    </div>
  </div>
  <div class="bg-gray-700">
    <div class="container mx-auto py-4 px-0 flex flex-wrap flex-col sm:flex-row">
      <p class="text-gray-200 text-sm text-center sm:text-left">© 2022 Galicia —
        <a href="https://twitter.com/JayNollan" rel="noopener noreferrer" class="text-gray-200 ml-1" target="_blank">@nollan</a>
      </p>
      <span class="inline-flex sm:ml-auto sm:mt-0 mt-2 justify-center sm:justify-start">
        <a href="https://www.facebook.com/nollan.galicia.7" class="text-gray-200">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
          </svg>
        </a>
        <a href="https://twitter.com/JayNollan" class="ml-3 text-gray-200">
          <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
          </svg>
        </a>
        <a href="https://www.linkedin.com/in/nollan-jay-galicia?original_referer=" class="ml-3 text-gray-200">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
          </svg>
        </a>
        <a href="https://www.linkedin.com/in/nollan-jay-galicia?original_referer=" class="ml-3 text-gray-200">
          <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
            <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
            <circle cx="4" cy="4" r="2" stroke="none"></circle>
          </svg>
        </a>
      </span>
    </div>
  </div>
</footer>

</html>
