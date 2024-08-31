<template>
  <div>
    <!-- ========== HEADER ========== -->
  <header class="sticky top-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full border-b border-gray-200 bg-pink-400 dark:border-neutral-700">
    <nav class="relative max-w-[85rem] w-full mx-auto md:flex md:items-center md:justify-between md:gap-3 py-2 px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center gap-x-1">
        <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 text-white" href="#" aria-label="Brand"><img src="../../assets/images/logo.png" alt="logo" class="fill-current h-12 w-12 mr-2" width="80" height="80"><span>I Serena</span></a>
        <!-- Collapse Button -->
        <button type="button" class="hs-collapse-toggle md:hidden relative size-9 flex justify-center items-center font-medium text-[12px] rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" id="hs-header-base-collapse"  aria-expanded="false" aria-controls="hs-header-base" aria-label="Toggle navigation"  data-hs-collapse="#hs-header-base" >
          <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
          <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
          <span class="sr-only">Toggle navigation</span>
        </button>
        <!-- End Collapse Button -->
      </div>

      <!-- Collapse -->
      <div id="hs-header-base" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block "  aria-labelledby="hs-header-base-collapse" >
        <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
          <div class="py-2 md:py-0  flex flex-col md:flex-row md:items-center gap-0.5 md:gap-1">
            <div class="grow">
              <div class="flex flex-col md:flex-row md:justify-end md:items-center gap-0.5 md:gap-1">
                <a class="p-2 flex items-center text-sm bg-gray-100 text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 bg-neutral-700 text-neutral-200 hover:bg-neutral-700 focus:bg-neutral-700" href="#" aria-current="page">
                  <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>
                  About
                </a>

                <!-- Dropdown -->
                <!-- <div class="hs-dropdown [--strategy:static] md:[--strategy:fixed] [--adaptive:none] [--is-collapse:true] md:[--is-collapse:false] ">
                  <button id="hs-header-base-dropdown" type="button" class="hs-dropdown-toggle w-full p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 10 2.5-2.5L3 5"/><path d="m3 19 2.5-2.5L3 14"/><path d="M10 6h11"/><path d="M10 12h11"/><path d="M10 18h11"/></svg>
                    About
                    <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:rotate-0 duration-300 shrink-0 size-4 ms-auto md:ms-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                  </button>

                  <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative w-full md:w-52 hidden z-10 top-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md before:absolute before:-top-4 before:start-0 before:w-full before:h-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown">
                    <div class="py-1 md:px-1 space-y-0.5">
                      <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                        About
                      </a>

                      <div class="hs-dropdown [--strategy:static] md:[--strategy:absolute] [--adaptive:none] md:[--trigger:hover] [--is-collapse:true] md:[--is-collapse:false] relative">
                        <button id="hs-header-base-dropdown-sub" type="button" class="hs-dropdown-toggle w-full flex justify-between items-center text-sm text-gray-800 rounded-lg p-2 md:px-3 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300">
                          Sub Menu
                          <svg class="hs-dropdown-open:-rotate-180 md:hs-dropdown-open:-rotate-90 md:-rotate-90 duration-300 ms-auto shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                        </button>

                        <div class="hs-dropdown-menu transition-[opacity,margin] duration-[0.1ms] md:duration-[150ms] hs-dropdown-open:opacity-100 opacity-0 relative md:w-48 hidden z-10 md:mt-2 md:!mx-[10px] md:top-0 md:end-full ps-7 md:ps-0 md:bg-white md:rounded-lg md:shadow-md dark:bg-neutral-800 dark:divide-neutral-700 before:hidden md:before:block before:absolute before:-end-5 before:top-0 before:h-full before:w-5 md:after:hidden after:absolute after:top-1 after:start-[18px] after:w-0.5 after:h-[calc(100%-0.25rem)] after:bg-gray-100 dark:md:bg-neutral-800 dark:after:bg-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-header-base-dropdown-sub">
                          <div class="p-1 space-y-1">
                            <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                              About
                            </a>

                            <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                              Downloads
                            </a>

                            <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                              Team Account
                            </a>
                          </div>
                        </div>
                      </div>

                      <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                        Downloads
                      </a>

                      <a class="p-2 md:px-3 flex items-center text-sm text-gray-800 rounded-lg hover:bg-gray-100 focus:outline-none focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300" href="#">
                        Team Account
                      </a>
                    </div>
                  </div>
                </div> -->
                <!-- End Dropdown -->

                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 text-neutral-200 hover:bg-neutral-700 focus:bg-neutral-700" href="#">
                  <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                  Tips For Girls and Parents
                </a>

                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 text-neutral-200 hover:bg-neutral-700 focus:bg-neutral-700" href="#">
                  <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 12h.01"/><path d="M16 6V4a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v2"/><path d="M22 13a18.15 18.15 0 0 1-20 0"/><rect width="20" height="14" x="2" y="6" rx="2"/></svg>
                  Tips for Woman
                </a>

                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 text-neutral-200 hover:bg-neutral-700 focus:bg-neutral-700" href="#">
                  <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/></svg>
                  Menustral Cicle calculator
                </a>

                <a class="p-2 flex items-center text-sm text-gray-800 hover:bg-gray-100 rounded-lg focus:outline-none focus:bg-gray-100 text-neutral-200 hover:bg-neutral-700 focus:bg-neutral-700" href="#">
                  <svg class="shrink-0 size-4 me-3 md:me-2 block md:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 22h16a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H8a2 2 0 0 0-2 2v16a2 2 0 0 1-2 2Zm0 0a2 2 0 0 1-2-2v-9c0-1.1.9-2 2-2h2"/><path d="M18 14h-8"/><path d="M15 18h-5"/><path d="M10 6h8v4h-8V6Z"/></svg>
                  Our Products
                </a>

                

                <div class="hs-dropdown [--placement:top-left] relative inline-flex">
                  <button id="hs-footer-language-dropdown" type="button" class="hs-dropdown-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                    <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us1" viewBox="0 0 512 512">
                      <g fill-rule="evenodd">
                        <g stroke-width="1pt">
                          <path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/>
                          <path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/>
                        </g>
                        <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/>
                        <path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/>
                      </g>
                    </svg>
                    English (US)
                    <svg class="hs-dropdown-open:rotate-180 shrink-0 size-4 text-gray-500 text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
                  </button>

                  <div class="hs-dropdown-menu w-40 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white shadow-md rounded-lg p-2 bg-neutral-800 border border-neutral-700 divide-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-footer-language-dropdown">
                    <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 text-neutral-400 hover:bg-neutral-700 hover:text-neutral-300 focus:bg-neutral-700 focus:text-neutral-300" href="#">
                      <svg class="size-3.5 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512">
                        <g fill-rule="evenodd">
                          <g stroke-width="1pt">
                            <path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/>
                            <path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/>
                          </g>
                          <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/>
                          <path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/>
                        </g>
                      </svg>
                      English (US)
                    </a>
                    <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 text-neutral-400 hover:bg-neutral-700 hover:text-neutral-300 focus:bg-neutral-700 focus:text-neutral-300" href="#">
                      <svg class="size-3.5 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-arab" width="32" height="32" viewBox="0 0 32 32">
                        <path d="M5,4h6V28H5c-2.208,0-4-1.792-4-4V8c0-2.208,1.792-4,4-4Z" fill="#ea3323"></path>
                        <path d="M10,20v8H27c2.209,0,4-1.791,4-4v-4H10Z"></path>
                        <path fill="#fff" d="M10 11H31V21H10z"></path>
                        <path d="M27,4H10V12H31v-4c0-2.209-1.791-4-4-4Z" fill="#317234"></path>
                        <path d="M27,4H5c-2.209,0-4,1.791-4,4V24c0,2.209,1.791,4,4,4H27c2.209,0,4-1.791,4-4V8c0-2.209-1.791-4-4-4Zm3,20c0,1.654-1.346,3-3,3H5c-1.654,0-3-1.346-3-3V8c0-1.654,1.346-3,3-3H27c1.654,0,3,1.346,3,3V24Z" opacity=".15"></path>
                        <path d="M27,5H5c-1.657,0-3,1.343-3,3v1c0-1.657,1.343-3,3-3H27c1.657,0,3,1.343,3,3v-1c0-1.657-1.343-3-3-3Z" fill="#fff" opacity=".2"></path>
                      </svg>
                      عربي
                    </a>
                    <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 text-neutral-400 hover:bg-neutral-700 hover:text-neutral-300 focus:bg-neutral-700 focus:text-neutral-300" href="#">
                      <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512">
                        <path fill="#ffce00" d="M0 341.3h512V512H0z"/>
                        <path d="M0 0h512v170.7H0z"/>
                        <path fill="#d00" d="M0 170.7h512v170.6H0z"/>
                      </svg>
                      Deutsch
                    </a>
                    <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 text-neutral-400 hover:bg-neutral-700 hover:text-neutral-300 focus:bg-neutral-700 focus:text-neutral-300" href="#">
                      <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-dk" viewBox="0 0 512 512">
                        <path fill="#c8102e" d="M0 0h512.1v512H0z"/>
                        <path fill="#fff" d="M144 0h73.1v512H144z"/>
                        <path fill="#fff" d="M0 219.4h512.1v73.2H0z"/>
                      </svg>
                      Dansk
                    </a>
                    <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 text-neutral-400 hover:bg-neutral-700 hover:text-neutral-300 focus:bg-neutral-700 focus:text-neutral-300" href="#">
                      <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512">
                        <g fill-rule="evenodd" stroke-width="1pt">
                          <path fill="#fff" d="M0 0h512v512H0z"/>
                          <path fill="#009246" d="M0 0h170.7v512H0z"/>
                          <path fill="#ce2b37" d="M341.3 0H512v512H341.3z"/>
                        </g>
                      </svg>
                      Italiano
                    </a>
                    <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 text-neutral-400 hover:bg-neutral-700 hover:text-neutral-300 focus:bg-neutral-700 focus:text-neutral-300" href="#">
                      <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512">
                        <defs>
                          <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"/>
                        </defs>
                        <path fill="#de2910" d="M0 0h512v512H0z"/>
                        <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"/>
                        <use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a"/>
                        <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"/>
                        <use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a"/>
                        <use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a"/>
                      </svg>
                      中文 (繁體)
                    </a>
                  </div>
                </div>

                <input type="search" class="bg-purple-white shadow rounded-3xl border-0 p-3" placeholder="Search by name...">
                
              </div>
            </div>

            <!-- <div class="my-2 md:my-0 md:mx-2">
              <div class="w-full h-px md:w-px md:h-4 bg-gray-100 md:bg-gray-300 dark:bg-neutral-700"></div>
            </div> -->

            <!-- Button Group -->
            <!-- <div class=" flex flex-wrap items-center gap-x-1.5">
              <a class="py-[7px] px-2.5 inline-flex items-center font-medium text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 focus:outline-none focus:bg-gray-100 dark:border-neutral-700 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#">
                Sign in
              </a>
              <a class="py-2 px-2.5 inline-flex items-center font-medium text-sm rounded-lg bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:bg-blue-600" href="#">
                Get started
              </a>
            </div> -->
            <!-- End Button Group -->
          </div>
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- Slider -->
  <div class="px-1 my-2 py-10">
    <div data-hs-carousel='{
        "loadingClasses": "opacity-0"
      }' class="relative">
      <div class="hs-carousel relative overflow-hidden w-full h-[25rem] bg-gray-100 rounded-2xl dark:bg-neutral-800">
        <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
          <!-- Item -->
          <div class="hs-carousel-slide">
            <div class="h-[25rem]  flex flex-col bg-[url('https://images.unsplash.com/flagged/photo-1572644973628-e9be84915d59?q=80&w=1471&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center bg-no-repeat">
              <div class="mt-auto w-2/3 md:max-w-lg ps-5 pb-5 md:ps-10 md:pb-10">
                <span class="block text-white">Banner 1: Lalibela</span>
                <span class="block text-white text-xl md:text-3xl">Rock-hewn churches in Ethiopia. A UNESCO World Heritage Site.</span>
                <div class="mt-5">
                  <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-white border border-transparent text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item -->

          <!-- Item -->
          <div class="hs-carousel-slide">
            <div class="h-[25rem] flex flex-col bg-[url('https://images.unsplash.com/photo-1516533075015-a3838414c3ca?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center bg-no-repeat">
              <div class="mt-auto w-2/3 md:max-w-lg ps-5 pb-5 md:ps-10 md:pb-10">
                <span class="block text-white">Banner 2: Afar Dalol</span>
                <span class="block text-white text-xl md:text-3xl">A remote, otherworldly volcanic landscape in Ethiopia.</span>
                <div class="mt-5">
                  <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-white border border-transparent text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    Read More
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- End Item -->

          <!-- Item -->
          <!-- <div class="hs-carousel-slide">
            <div class="h-[30rem] md:h-[calc(100vh-106px)]  flex flex-col bg-[url('https://images.unsplash.com/photo-1629666451094-8908989cae90?q=80&w=1920&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-cover bg-center bg-no-repeat">
              <div class="mt-auto w-2/3 md:max-w-lg ps-5 pb-5 md:ps-10 md:pb-10">
                <span class="block text-white">Grumpy</span>
                <span class="block text-white text-xl md:text-3xl">Bringing Art to everything</span>
                <div class="mt-5">
                  <a class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl bg-white border border-transparent text-black hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" href="#">
                    Read Case Studies
                  </a>
                </div>
              </div>
            </div>
          </div> -->
          <!-- End Item -->
        </div>
      </div>

      <!-- Arrows -->
      <button type="button" class="hs-carousel-prev hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 start-0 inline-flex justify-center items-center w-12 h-full text-black hover:bg-white/20 rounded-s-2xl focus:outline-none focus:bg-white/20">
        <span class="text-2xl" aria-hidden="true">
          <svg class="shrink-0 size-3.5 md:size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
          </svg>
        </span>
        <span class="sr-only">Previous</span>
      </button>

      <button type="button" class="hs-carousel-next hs-carousel:disabled:opacity-50 disabled:pointer-events-none absolute inset-y-0 end-0 inline-flex justify-center items-center w-12 h-full text-black hover:bg-white/20 rounded-e-2xl focus:outline-none focus:bg-white/20">
        <span class="sr-only">Next</span>
        <span class="text-2xl" aria-hidden="true">
          <svg class="shrink-0 size-3.5 md:size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
          </svg>
        </span>
      </button>
      <!-- End Arrows -->
    </div>
  </div>
  <!-- End Slider -->

  <!-- Team -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="intro-x flex items-center h-10 text-white">
      <h2 class="text-3xl font-medium truncate mr-auto">
        Important Notes
      </h2>
      <button
        data-carousel="important-notes"
        data-target="prev"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="prevImportantNotes"
      >
        <ChevronLeftIcon class="w-4 h-4" />
      </button>
      <button
        data-carousel="important-notes"
        data-target="next"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="nextImportantNotes"
      >
        <ChevronRightIcon class="w-4 h-4" />
      </button>

      See More >
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="overflow-hidden whitespace-nowrap">
      <div class="inline-block w-96 h-100 mx-10">
        <iframe class="rounded-xl mx-auto" width="420" height="315"
          src="https://www.youtube.com/embed/2xW9mTStyhM">
        </iframe>
        <!-- <video class="rounded-xl mx-auto" width="320" height="240" controls>
          <source src="https://www.youtube.com/watch?v=hQAY0E8H0tA" type="video/mp4">
          Your browser does not support the video tag.
        </video> -->
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block w-96 h-100 mx-10">
        <iframe class="rounded-xl mx-auto" width="420" height="315"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block w-96 h-100 mx-10">
        <iframe class="rounded-xl mx-auto" width="420" height="315"
          src="https://www.youtube.com/embed/haMue6QUhlQ">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Team -->

  <!-- Team -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="intro-x flex items-center h-10 text-white">
      <h2 class="text-3xl font-medium truncate mr-auto">
        Important Notes
      </h2>
      <button
        data-carousel="important-notes"
        data-target="prev"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="prevImportantNotes"
      >
        <ChevronLeftIcon class="w-4 h-4" />
      </button>
      <button
        data-carousel="important-notes"
        data-target="next"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="nextImportantNotes"
      >
        <ChevronRightIcon class="w-4 h-4" />
      </button>

      See More >
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="overflow-x-auto whitespace-nowrap">
      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Maria Powers
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Director of sales
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Delia Pawelke
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Front-end Developer
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Tom Lowry
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            UI/UX Designer
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1579017331263-ef82f0bbc748?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Louise Donadieu
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Support Consultant
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1514222709107-a180c68d72b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Jeff Fisher
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Project Manager
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1602452920335-6a132309c7c8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Sophia Harrington
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Project Manager
          </p>
        </div>
      </div> -->
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Team -->

  <!-- Team -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="intro-x flex items-center h-10 text-white">
      <h2 class="text-3xl font-medium truncate mr-auto">
        Important Notes
      </h2>
      <button
        data-carousel="important-notes"
        data-target="prev"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="prevImportantNotes"
      >
        <ChevronLeftIcon class="w-4 h-4" />
      </button>
      <button
        data-carousel="important-notes"
        data-target="next"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="nextImportantNotes"
      >
        <ChevronRightIcon class="w-4 h-4" />
      </button>

      See More >
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="overflow-x-auto whitespace-nowrap">
      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Maria Powers
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Director of sales
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Delia Pawelke
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Front-end Developer
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Tom Lowry
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            UI/UX Designer
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1579017331263-ef82f0bbc748?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Louise Donadieu
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Support Consultant
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1514222709107-a180c68d72b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Jeff Fisher
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Project Manager
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1602452920335-6a132309c7c8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Sophia Harrington
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Project Manager
          </p>
        </div>
      </div> -->
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Team -->

  <!-- Team -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="intro-x flex items-center h-10 text-white">
      <h2 class="text-3xl font-medium truncate mr-auto">
        Important Notes
      </h2>
      <button
        data-carousel="important-notes"
        data-target="prev"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="prevImportantNotes"
      >
        <ChevronLeftIcon class="w-4 h-4" />
      </button>
      <button
        data-carousel="important-notes"
        data-target="next"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="nextImportantNotes"
      >
        <ChevronRightIcon class="w-4 h-4" />
      </button>

      See More >
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="overflow-x-auto whitespace-nowrap">
      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Maria Powers
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Director of sales
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Delia Pawelke
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Front-end Developer
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Tom Lowry
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            UI/UX Designer
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1579017331263-ef82f0bbc748?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Louise Donadieu
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Support Consultant
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1514222709107-a180c68d72b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Jeff Fisher
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Project Manager
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1602452920335-6a132309c7c8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Sophia Harrington
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Project Manager
          </p>
        </div>
      </div> -->
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Team -->

  <!-- Team -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="intro-x flex items-center h-10 text-white">
      <h2 class="text-3xl font-medium truncate mr-auto">
        Important Notes
      </h2>
      <button
        data-carousel="important-notes"
        data-target="prev"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="prevImportantNotes"
      >
        <ChevronLeftIcon class="w-4 h-4" />
      </button>
      <button
        data-carousel="important-notes"
        data-target="next"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="nextImportantNotes"
      >
        <ChevronRightIcon class="w-4 h-4" />
      </button>

      See More >
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="overflow-x-auto whitespace-nowrap">
      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Maria Powers
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Director of sales
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Delia Pawelke
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Front-end Developer
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Tom Lowry
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            UI/UX Designer
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1579017331263-ef82f0bbc748?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Louise Donadieu
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Support Consultant
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1514222709107-a180c68d72b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Jeff Fisher
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Project Manager
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1602452920335-6a132309c7c8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Sophia Harrington
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Project Manager
          </p>
        </div>
      </div> -->
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Team -->

  <!-- Team -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="intro-x flex items-center h-10 text-white">
      <h2 class="text-3xl font-medium truncate mr-auto">
        Important Notes
      </h2>
      <button
        data-carousel="important-notes"
        data-target="prev"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="prevImportantNotes"
      >
        <ChevronLeftIcon class="w-4 h-4" />
      </button>
      <button
        data-carousel="important-notes"
        data-target="next"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="nextImportantNotes"
      >
        <ChevronRightIcon class="w-4 h-4" />
      </button>

      See More >
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="overflow-x-auto whitespace-nowrap">
      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Maria Powers
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Director of sales
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Delia Pawelke
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Front-end Developer
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Tom Lowry
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            UI/UX Designer
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1579017331263-ef82f0bbc748?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Louise Donadieu
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Support Consultant
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1514222709107-a180c68d72b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Jeff Fisher
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Project Manager
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1602452920335-6a132309c7c8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Sophia Harrington
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Project Manager
          </p>
        </div>
      </div> -->
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Team -->

  <!-- Team -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="intro-x flex items-center h-10 text-white">
      <h2 class="text-3xl font-medium truncate mr-auto">
        Our Products
      </h2>
      <button
        data-carousel="important-notes"
        data-target="prev"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="prevImportantNotes"
      >
        <ChevronLeftIcon class="w-4 h-4" />
      </button>
      <button
        data-carousel="important-notes"
        data-target="next"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="nextImportantNotes"
      >
        <ChevronRightIcon class="w-4 h-4" />
      </button>

      See More >
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="overflow-x-auto whitespace-nowrap">
      <div class="inline-block h-100 mx-5">
        <div class="relative overflow-hidden">
          <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
            <!-- Gradients -->
            <div aria-hidden="true" class="flex -z-[1] absolute start-0">
              <div class="bg-purple-200 opacity-20 blur-3xl w-[1036px] h-[300px] dark:bg-purple-900 dark:opacity-20"></div>
            </div>
            <!-- End Gradients -->

            <!-- Grid -->
            <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
              <div class="hidden lg:block lg:col-span-2">
                <img class="rounded-xl" src="https://www.advacarepharma.com/wp-content/uploads/sanitary-pads-daytime-bag.png" alt="Avatar">
              </div>
              <!-- End Col -->

              <div class="lg:col-span-4">
                <!-- Blockquote -->
                <blockquote>
                  <!-- <svg class="w-24 h-auto mb-4" viewBox="-0.3 0 320.3999999999999 99.9" xmlns="http://www.w3.org/2000/svg" width="2500" height="779"><path d="M168.7 25.1c0 3.6-2.9 6.5-6.5 6.5s-6.5-2.9-6.5-6.5 2.8-6.5 6.5-6.5c3.7.1 6.5 3 6.5 6.5zm-26.8 13.1v1.6s-3.1-4-9.7-4c-10.9 0-19.4 8.3-19.4 19.8 0 11.4 8.4 19.8 19.4 19.8 6.7 0 9.7-4.1 9.7-4.1V73c0 .8.6 1.4 1.4 1.4h8.1V36.8h-8.1c-.8 0-1.4.7-1.4 1.4zm0 24.1c-1.5 2.2-4.5 4.1-8.1 4.1-6.4 0-11.3-4-11.3-10.8s4.9-10.8 11.3-10.8c3.5 0 6.7 2 8.1 4.1zm15.5-25.5h9.6v37.6h-9.6zm143.4-1c-6.6 0-9.7 4-9.7 4V18.7h-9.6v55.7h8.1c.8 0 1.4-.7 1.4-1.4v-1.7s3.1 4.1 9.7 4.1c10.9 0 19.4-8.4 19.4-19.8s-8.5-19.8-19.3-19.8zm-1.6 30.5c-3.7 0-6.6-1.9-8.1-4.1V48.8c1.5-2 4.7-4.1 8.1-4.1 6.4 0 11.3 4 11.3 10.8s-4.9 10.8-11.3 10.8zm-22.7-14.2v22.4h-9.6V53.2c0-6.2-2-8.7-7.4-8.7-2.9 0-5.9 1.5-7.8 3.7v26.2h-9.6V36.8h7.6c.8 0 1.4.7 1.4 1.4v1.6c2.8-2.9 6.5-4 10.2-4 4.2 0 7.7 1.2 10.5 3.6 3.4 2.8 4.7 6.4 4.7 12.7zm-57.7-16.3c-6.6 0-9.7 4-9.7 4V18.7h-9.6v55.7h8.1c.8 0 1.4-.7 1.4-1.4v-1.7s3.1 4.1 9.7 4.1c10.9 0 19.4-8.4 19.4-19.8.1-11.4-8.4-19.8-19.3-19.8zm-1.6 30.5c-3.7 0-6.6-1.9-8.1-4.1V48.8c1.5-2 4.7-4.1 8.1-4.1 6.4 0 11.3 4 11.3 10.8s-4.9 10.8-11.3 10.8zm-26-30.5c2.9 0 4.4.5 4.4.5v8.9s-8-2.7-13 3v26.3H173V36.8h8.1c.8 0 1.4.7 1.4 1.4v1.6c1.8-2.1 5.7-4 8.7-4zM91.5 71c-.5-1.2-1-2.5-1.5-3.6-.8-1.8-1.6-3.5-2.3-5.1l-.1-.1C80.7 47.2 73.3 32 65.5 17l-.3-.6c-.8-1.5-1.6-3.1-2.4-4.7-1-1.8-2-3.7-3.6-5.5C56 2.2 51.4 0 46.5 0c-5 0-9.5 2.2-12.8 6-1.5 1.8-2.6 3.7-3.6 5.5-.8 1.6-1.6 3.2-2.4 4.7l-.3.6C19.7 31.8 12.2 47 5.3 62l-.1.2c-.7 1.6-1.5 3.3-2.3 5.1-.5 1.1-1 2.3-1.5 3.6C.1 74.6-.3 78.1.2 81.7c1.1 7.5 6.1 13.8 13 16.6 2.6 1.1 5.3 1.6 8.1 1.6.8 0 1.8-.1 2.6-.2 3.3-.4 6.7-1.5 10-3.4 4.1-2.3 8-5.6 12.4-10.4 4.4 4.8 8.4 8.1 12.4 10.4 3.3 1.9 6.7 3 10 3.4.8.1 1.8.2 2.6.2 2.8 0 5.6-.5 8.1-1.6 7-2.8 11.9-9.2 13-16.6.8-3.5.4-7-.9-10.7zm-45.1 5.2C41 69.4 37.5 63 36.3 57.6c-.5-2.3-.6-4.3-.3-6.1.2-1.6.8-3 1.6-4.2 1.9-2.7 5.1-4.4 8.8-4.4s7 1.6 8.8 4.4c.8 1.2 1.4 2.6 1.6 4.2.3 1.8.2 3.9-.3 6.1-1.2 5.3-4.7 11.7-10.1 18.6zm39.9 4.7c-.7 5.2-4.2 9.7-9.1 11.7-2.4 1-5 1.3-7.6 1-2.5-.3-5-1.1-7.6-2.6-3.6-2-7.2-5.1-11.4-9.7 6.6-8.1 10.6-15.5 12.1-22.1.7-3.1.8-5.9.5-8.5-.4-2.5-1.3-4.8-2.7-6.8-3.1-4.5-8.3-7.1-14.1-7.1s-11 2.7-14.1 7.1c-1.4 2-2.3 4.3-2.7 6.8-.4 2.6-.3 5.5.5 8.5 1.5 6.6 5.6 14.1 12.1 22.2-4.1 4.6-7.8 7.7-11.4 9.7-2.6 1.5-5.1 2.3-7.6 2.6-2.7.3-5.3-.1-7.6-1-4.9-2-8.4-6.5-9.1-11.7-.3-2.5-.1-5 .9-7.8.3-1 .8-2 1.3-3.2.7-1.6 1.5-3.3 2.3-5l.1-.2c6.9-14.9 14.3-30.1 22-44.9l.3-.6c.8-1.5 1.6-3.1 2.4-4.6.8-1.6 1.7-3.1 2.8-4.4 2.1-2.4 4.9-3.7 8-3.7s5.9 1.3 8 3.7c1.1 1.3 2 2.8 2.8 4.4.8 1.5 1.6 3.1 2.4 4.6l.3.6c7.6 14.9 15 30.1 21.9 45v.1c.8 1.6 1.5 3.4 2.3 5 .5 1.2 1 2.2 1.3 3.2.8 2.6 1.1 5.1.7 7.7z" fill="#ff5a5f"/></svg> -->

                  <p class="text-xl font-medium text-gray-800 lg:text-2xl lg:leading-normal dark:text-neutral-200">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem exercitationem repellat ipsam ipsum voluptatem minima obcaecati pariatur, nobis, quibusdam nihil in fuga enim. Cum qui ab inventore nobis ullam doloribus.
                  </p>

                  <footer class="mt-6">
                    <div class="flex items-center">
                      <div class="lg:hidden shrink-0">
                        <!-- <img class="size-12 rounded-full" src="https://www.advacarepharma.com/wp-content/uploads/sanitary-pads-daytime-bag.png" alt="Avatar"> -->
                      </div>
                      <div class="ms-4 lg:ms-0 text-white">
                        <p class="font-medium  dark:text-neutral-200">
                          Nicole Grazioso
                        </p>
                        <p class="text-sm">
                          Head of Finance
                        </p>
                      </div>
                    </div>
                  </footer>
                </blockquote>
                <!-- End Blockquote -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Grid -->
          </div>
        </div>
        <!-- End Testimonials -->
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <div class="relative overflow-hidden">
          <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
            <!-- Gradients -->
            <div aria-hidden="true" class="flex -z-[1] absolute start-0">
              <div class="bg-purple-200 opacity-20 blur-3xl w-[1036px] h-[300px] dark:bg-purple-900 dark:opacity-20"></div>
            </div>
            <!-- End Gradients -->

            <!-- Grid -->
            <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
              <div class="hidden lg:block lg:col-span-2">
                <img class="rounded-xl" src="https://www.advacarepharma.com/wp-content/uploads/sanitary-pads-daytime-bag.png" alt="Avatar">
              </div>
              <!-- End Col -->

              <div class="lg:col-span-4">
                <!-- Blockquote -->
                <blockquote>
                  <!-- <svg class="w-24 h-auto mb-4" viewBox="-0.3 0 320.3999999999999 99.9" xmlns="http://www.w3.org/2000/svg" width="2500" height="779"><path d="M168.7 25.1c0 3.6-2.9 6.5-6.5 6.5s-6.5-2.9-6.5-6.5 2.8-6.5 6.5-6.5c3.7.1 6.5 3 6.5 6.5zm-26.8 13.1v1.6s-3.1-4-9.7-4c-10.9 0-19.4 8.3-19.4 19.8 0 11.4 8.4 19.8 19.4 19.8 6.7 0 9.7-4.1 9.7-4.1V73c0 .8.6 1.4 1.4 1.4h8.1V36.8h-8.1c-.8 0-1.4.7-1.4 1.4zm0 24.1c-1.5 2.2-4.5 4.1-8.1 4.1-6.4 0-11.3-4-11.3-10.8s4.9-10.8 11.3-10.8c3.5 0 6.7 2 8.1 4.1zm15.5-25.5h9.6v37.6h-9.6zm143.4-1c-6.6 0-9.7 4-9.7 4V18.7h-9.6v55.7h8.1c.8 0 1.4-.7 1.4-1.4v-1.7s3.1 4.1 9.7 4.1c10.9 0 19.4-8.4 19.4-19.8s-8.5-19.8-19.3-19.8zm-1.6 30.5c-3.7 0-6.6-1.9-8.1-4.1V48.8c1.5-2 4.7-4.1 8.1-4.1 6.4 0 11.3 4 11.3 10.8s-4.9 10.8-11.3 10.8zm-22.7-14.2v22.4h-9.6V53.2c0-6.2-2-8.7-7.4-8.7-2.9 0-5.9 1.5-7.8 3.7v26.2h-9.6V36.8h7.6c.8 0 1.4.7 1.4 1.4v1.6c2.8-2.9 6.5-4 10.2-4 4.2 0 7.7 1.2 10.5 3.6 3.4 2.8 4.7 6.4 4.7 12.7zm-57.7-16.3c-6.6 0-9.7 4-9.7 4V18.7h-9.6v55.7h8.1c.8 0 1.4-.7 1.4-1.4v-1.7s3.1 4.1 9.7 4.1c10.9 0 19.4-8.4 19.4-19.8.1-11.4-8.4-19.8-19.3-19.8zm-1.6 30.5c-3.7 0-6.6-1.9-8.1-4.1V48.8c1.5-2 4.7-4.1 8.1-4.1 6.4 0 11.3 4 11.3 10.8s-4.9 10.8-11.3 10.8zm-26-30.5c2.9 0 4.4.5 4.4.5v8.9s-8-2.7-13 3v26.3H173V36.8h8.1c.8 0 1.4.7 1.4 1.4v1.6c1.8-2.1 5.7-4 8.7-4zM91.5 71c-.5-1.2-1-2.5-1.5-3.6-.8-1.8-1.6-3.5-2.3-5.1l-.1-.1C80.7 47.2 73.3 32 65.5 17l-.3-.6c-.8-1.5-1.6-3.1-2.4-4.7-1-1.8-2-3.7-3.6-5.5C56 2.2 51.4 0 46.5 0c-5 0-9.5 2.2-12.8 6-1.5 1.8-2.6 3.7-3.6 5.5-.8 1.6-1.6 3.2-2.4 4.7l-.3.6C19.7 31.8 12.2 47 5.3 62l-.1.2c-.7 1.6-1.5 3.3-2.3 5.1-.5 1.1-1 2.3-1.5 3.6C.1 74.6-.3 78.1.2 81.7c1.1 7.5 6.1 13.8 13 16.6 2.6 1.1 5.3 1.6 8.1 1.6.8 0 1.8-.1 2.6-.2 3.3-.4 6.7-1.5 10-3.4 4.1-2.3 8-5.6 12.4-10.4 4.4 4.8 8.4 8.1 12.4 10.4 3.3 1.9 6.7 3 10 3.4.8.1 1.8.2 2.6.2 2.8 0 5.6-.5 8.1-1.6 7-2.8 11.9-9.2 13-16.6.8-3.5.4-7-.9-10.7zm-45.1 5.2C41 69.4 37.5 63 36.3 57.6c-.5-2.3-.6-4.3-.3-6.1.2-1.6.8-3 1.6-4.2 1.9-2.7 5.1-4.4 8.8-4.4s7 1.6 8.8 4.4c.8 1.2 1.4 2.6 1.6 4.2.3 1.8.2 3.9-.3 6.1-1.2 5.3-4.7 11.7-10.1 18.6zm39.9 4.7c-.7 5.2-4.2 9.7-9.1 11.7-2.4 1-5 1.3-7.6 1-2.5-.3-5-1.1-7.6-2.6-3.6-2-7.2-5.1-11.4-9.7 6.6-8.1 10.6-15.5 12.1-22.1.7-3.1.8-5.9.5-8.5-.4-2.5-1.3-4.8-2.7-6.8-3.1-4.5-8.3-7.1-14.1-7.1s-11 2.7-14.1 7.1c-1.4 2-2.3 4.3-2.7 6.8-.4 2.6-.3 5.5.5 8.5 1.5 6.6 5.6 14.1 12.1 22.2-4.1 4.6-7.8 7.7-11.4 9.7-2.6 1.5-5.1 2.3-7.6 2.6-2.7.3-5.3-.1-7.6-1-4.9-2-8.4-6.5-9.1-11.7-.3-2.5-.1-5 .9-7.8.3-1 .8-2 1.3-3.2.7-1.6 1.5-3.3 2.3-5l.1-.2c6.9-14.9 14.3-30.1 22-44.9l.3-.6c.8-1.5 1.6-3.1 2.4-4.6.8-1.6 1.7-3.1 2.8-4.4 2.1-2.4 4.9-3.7 8-3.7s5.9 1.3 8 3.7c1.1 1.3 2 2.8 2.8 4.4.8 1.5 1.6 3.1 2.4 4.6l.3.6c7.6 14.9 15 30.1 21.9 45v.1c.8 1.6 1.5 3.4 2.3 5 .5 1.2 1 2.2 1.3 3.2.8 2.6 1.1 5.1.7 7.7z" fill="#ff5a5f"/></svg> -->

                  <p class="text-xl font-medium text-gray-800 lg:text-2xl lg:leading-normal dark:text-neutral-200">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem exercitationem repellat ipsam ipsum voluptatem minima obcaecati pariatur, nobis, quibusdam nihil in fuga enim. Cum qui ab inventore nobis ullam doloribus.
                  </p>

                  <footer class="mt-6">
                    <div class="flex items-center">
                      <div class="lg:hidden shrink-0">
                        <!-- <img class="size-12 rounded-full" src="https://www.advacarepharma.com/wp-content/uploads/sanitary-pads-daytime-bag.png" alt="Avatar"> -->
                      </div>
                      <div class="ms-4 lg:ms-0 text-white">
                        <p class="font-medium  dark:text-neutral-200">
                          Nicole Grazioso
                        </p>
                        <p class="text-sm">
                          Head of Finance
                        </p>
                      </div>
                    </div>
                  </footer>
                </blockquote>
                <!-- End Blockquote -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Grid -->
          </div>
        </div>
        <!-- End Testimonials -->
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <div class="relative overflow-hidden">
          <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
            <!-- Gradients -->
            <div aria-hidden="true" class="flex -z-[1] absolute start-0">
              <div class="bg-purple-200 opacity-20 blur-3xl w-[1036px] h-[300px] dark:bg-purple-900 dark:opacity-20"></div>
            </div>
            <!-- End Gradients -->

            <!-- Grid -->
            <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
              <div class="hidden lg:block lg:col-span-2">
                <img class="rounded-xl" src="https://www.advacarepharma.com/wp-content/uploads/sanitary-pads-daytime-bag.png" alt="Avatar">
              </div>
              <!-- End Col -->

              <div class="lg:col-span-4">
                <!-- Blockquote -->
                <blockquote>
                  <!-- <svg class="w-24 h-auto mb-4" viewBox="-0.3 0 320.3999999999999 99.9" xmlns="http://www.w3.org/2000/svg" width="2500" height="779"><path d="M168.7 25.1c0 3.6-2.9 6.5-6.5 6.5s-6.5-2.9-6.5-6.5 2.8-6.5 6.5-6.5c3.7.1 6.5 3 6.5 6.5zm-26.8 13.1v1.6s-3.1-4-9.7-4c-10.9 0-19.4 8.3-19.4 19.8 0 11.4 8.4 19.8 19.4 19.8 6.7 0 9.7-4.1 9.7-4.1V73c0 .8.6 1.4 1.4 1.4h8.1V36.8h-8.1c-.8 0-1.4.7-1.4 1.4zm0 24.1c-1.5 2.2-4.5 4.1-8.1 4.1-6.4 0-11.3-4-11.3-10.8s4.9-10.8 11.3-10.8c3.5 0 6.7 2 8.1 4.1zm15.5-25.5h9.6v37.6h-9.6zm143.4-1c-6.6 0-9.7 4-9.7 4V18.7h-9.6v55.7h8.1c.8 0 1.4-.7 1.4-1.4v-1.7s3.1 4.1 9.7 4.1c10.9 0 19.4-8.4 19.4-19.8s-8.5-19.8-19.3-19.8zm-1.6 30.5c-3.7 0-6.6-1.9-8.1-4.1V48.8c1.5-2 4.7-4.1 8.1-4.1 6.4 0 11.3 4 11.3 10.8s-4.9 10.8-11.3 10.8zm-22.7-14.2v22.4h-9.6V53.2c0-6.2-2-8.7-7.4-8.7-2.9 0-5.9 1.5-7.8 3.7v26.2h-9.6V36.8h7.6c.8 0 1.4.7 1.4 1.4v1.6c2.8-2.9 6.5-4 10.2-4 4.2 0 7.7 1.2 10.5 3.6 3.4 2.8 4.7 6.4 4.7 12.7zm-57.7-16.3c-6.6 0-9.7 4-9.7 4V18.7h-9.6v55.7h8.1c.8 0 1.4-.7 1.4-1.4v-1.7s3.1 4.1 9.7 4.1c10.9 0 19.4-8.4 19.4-19.8.1-11.4-8.4-19.8-19.3-19.8zm-1.6 30.5c-3.7 0-6.6-1.9-8.1-4.1V48.8c1.5-2 4.7-4.1 8.1-4.1 6.4 0 11.3 4 11.3 10.8s-4.9 10.8-11.3 10.8zm-26-30.5c2.9 0 4.4.5 4.4.5v8.9s-8-2.7-13 3v26.3H173V36.8h8.1c.8 0 1.4.7 1.4 1.4v1.6c1.8-2.1 5.7-4 8.7-4zM91.5 71c-.5-1.2-1-2.5-1.5-3.6-.8-1.8-1.6-3.5-2.3-5.1l-.1-.1C80.7 47.2 73.3 32 65.5 17l-.3-.6c-.8-1.5-1.6-3.1-2.4-4.7-1-1.8-2-3.7-3.6-5.5C56 2.2 51.4 0 46.5 0c-5 0-9.5 2.2-12.8 6-1.5 1.8-2.6 3.7-3.6 5.5-.8 1.6-1.6 3.2-2.4 4.7l-.3.6C19.7 31.8 12.2 47 5.3 62l-.1.2c-.7 1.6-1.5 3.3-2.3 5.1-.5 1.1-1 2.3-1.5 3.6C.1 74.6-.3 78.1.2 81.7c1.1 7.5 6.1 13.8 13 16.6 2.6 1.1 5.3 1.6 8.1 1.6.8 0 1.8-.1 2.6-.2 3.3-.4 6.7-1.5 10-3.4 4.1-2.3 8-5.6 12.4-10.4 4.4 4.8 8.4 8.1 12.4 10.4 3.3 1.9 6.7 3 10 3.4.8.1 1.8.2 2.6.2 2.8 0 5.6-.5 8.1-1.6 7-2.8 11.9-9.2 13-16.6.8-3.5.4-7-.9-10.7zm-45.1 5.2C41 69.4 37.5 63 36.3 57.6c-.5-2.3-.6-4.3-.3-6.1.2-1.6.8-3 1.6-4.2 1.9-2.7 5.1-4.4 8.8-4.4s7 1.6 8.8 4.4c.8 1.2 1.4 2.6 1.6 4.2.3 1.8.2 3.9-.3 6.1-1.2 5.3-4.7 11.7-10.1 18.6zm39.9 4.7c-.7 5.2-4.2 9.7-9.1 11.7-2.4 1-5 1.3-7.6 1-2.5-.3-5-1.1-7.6-2.6-3.6-2-7.2-5.1-11.4-9.7 6.6-8.1 10.6-15.5 12.1-22.1.7-3.1.8-5.9.5-8.5-.4-2.5-1.3-4.8-2.7-6.8-3.1-4.5-8.3-7.1-14.1-7.1s-11 2.7-14.1 7.1c-1.4 2-2.3 4.3-2.7 6.8-.4 2.6-.3 5.5.5 8.5 1.5 6.6 5.6 14.1 12.1 22.2-4.1 4.6-7.8 7.7-11.4 9.7-2.6 1.5-5.1 2.3-7.6 2.6-2.7.3-5.3-.1-7.6-1-4.9-2-8.4-6.5-9.1-11.7-.3-2.5-.1-5 .9-7.8.3-1 .8-2 1.3-3.2.7-1.6 1.5-3.3 2.3-5l.1-.2c6.9-14.9 14.3-30.1 22-44.9l.3-.6c.8-1.5 1.6-3.1 2.4-4.6.8-1.6 1.7-3.1 2.8-4.4 2.1-2.4 4.9-3.7 8-3.7s5.9 1.3 8 3.7c1.1 1.3 2 2.8 2.8 4.4.8 1.5 1.6 3.1 2.4 4.6l.3.6c7.6 14.9 15 30.1 21.9 45v.1c.8 1.6 1.5 3.4 2.3 5 .5 1.2 1 2.2 1.3 3.2.8 2.6 1.1 5.1.7 7.7z" fill="#ff5a5f"/></svg> -->

                  <p class="text-xl font-medium text-gray-800 lg:text-2xl lg:leading-normal dark:text-neutral-200">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem exercitationem repellat ipsam ipsum voluptatem minima obcaecati pariatur, nobis, quibusdam nihil in fuga enim. Cum qui ab inventore nobis ullam doloribus.
                  </p>

                  <footer class="mt-6">
                    <div class="flex items-center">
                      <div class="lg:hidden shrink-0">
                        <!-- <img class="size-12 rounded-full" src="https://www.advacarepharma.com/wp-content/uploads/sanitary-pads-daytime-bag.png" alt="Avatar"> -->
                      </div>
                      <div class="ms-4 lg:ms-0 text-white">
                        <p class="font-medium  dark:text-neutral-200">
                          Nicole Grazioso
                        </p>
                        <p class="text-sm">
                          Head of Finance
                        </p>
                      </div>
                    </div>
                  </footer>
                </blockquote>
                <!-- End Blockquote -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Grid -->
          </div>
        </div>
        <!-- End Testimonials -->
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <div class="relative overflow-hidden">
          <div class="max-w-[85rem] px-4 py-12 sm:px-6 lg:px-8 lg:py-16 mx-auto">
            <!-- Gradients -->
            <div aria-hidden="true" class="flex -z-[1] absolute start-0">
              <div class="bg-purple-200 opacity-20 blur-3xl w-[1036px] h-[300px] dark:bg-purple-900 dark:opacity-20"></div>
            </div>
            <!-- End Gradients -->

            <!-- Grid -->
            <div class="lg:grid lg:grid-cols-6 lg:gap-8 lg:items-center">
              <div class="hidden lg:block lg:col-span-2">
                <img class="rounded-xl" src="https://www.advacarepharma.com/wp-content/uploads/sanitary-pads-daytime-bag.png" alt="Avatar">
              </div>
              <!-- End Col -->

              <div class="lg:col-span-4">
                <!-- Blockquote -->
                <blockquote>
                  <!-- <svg class="w-24 h-auto mb-4" viewBox="-0.3 0 320.3999999999999 99.9" xmlns="http://www.w3.org/2000/svg" width="2500" height="779"><path d="M168.7 25.1c0 3.6-2.9 6.5-6.5 6.5s-6.5-2.9-6.5-6.5 2.8-6.5 6.5-6.5c3.7.1 6.5 3 6.5 6.5zm-26.8 13.1v1.6s-3.1-4-9.7-4c-10.9 0-19.4 8.3-19.4 19.8 0 11.4 8.4 19.8 19.4 19.8 6.7 0 9.7-4.1 9.7-4.1V73c0 .8.6 1.4 1.4 1.4h8.1V36.8h-8.1c-.8 0-1.4.7-1.4 1.4zm0 24.1c-1.5 2.2-4.5 4.1-8.1 4.1-6.4 0-11.3-4-11.3-10.8s4.9-10.8 11.3-10.8c3.5 0 6.7 2 8.1 4.1zm15.5-25.5h9.6v37.6h-9.6zm143.4-1c-6.6 0-9.7 4-9.7 4V18.7h-9.6v55.7h8.1c.8 0 1.4-.7 1.4-1.4v-1.7s3.1 4.1 9.7 4.1c10.9 0 19.4-8.4 19.4-19.8s-8.5-19.8-19.3-19.8zm-1.6 30.5c-3.7 0-6.6-1.9-8.1-4.1V48.8c1.5-2 4.7-4.1 8.1-4.1 6.4 0 11.3 4 11.3 10.8s-4.9 10.8-11.3 10.8zm-22.7-14.2v22.4h-9.6V53.2c0-6.2-2-8.7-7.4-8.7-2.9 0-5.9 1.5-7.8 3.7v26.2h-9.6V36.8h7.6c.8 0 1.4.7 1.4 1.4v1.6c2.8-2.9 6.5-4 10.2-4 4.2 0 7.7 1.2 10.5 3.6 3.4 2.8 4.7 6.4 4.7 12.7zm-57.7-16.3c-6.6 0-9.7 4-9.7 4V18.7h-9.6v55.7h8.1c.8 0 1.4-.7 1.4-1.4v-1.7s3.1 4.1 9.7 4.1c10.9 0 19.4-8.4 19.4-19.8.1-11.4-8.4-19.8-19.3-19.8zm-1.6 30.5c-3.7 0-6.6-1.9-8.1-4.1V48.8c1.5-2 4.7-4.1 8.1-4.1 6.4 0 11.3 4 11.3 10.8s-4.9 10.8-11.3 10.8zm-26-30.5c2.9 0 4.4.5 4.4.5v8.9s-8-2.7-13 3v26.3H173V36.8h8.1c.8 0 1.4.7 1.4 1.4v1.6c1.8-2.1 5.7-4 8.7-4zM91.5 71c-.5-1.2-1-2.5-1.5-3.6-.8-1.8-1.6-3.5-2.3-5.1l-.1-.1C80.7 47.2 73.3 32 65.5 17l-.3-.6c-.8-1.5-1.6-3.1-2.4-4.7-1-1.8-2-3.7-3.6-5.5C56 2.2 51.4 0 46.5 0c-5 0-9.5 2.2-12.8 6-1.5 1.8-2.6 3.7-3.6 5.5-.8 1.6-1.6 3.2-2.4 4.7l-.3.6C19.7 31.8 12.2 47 5.3 62l-.1.2c-.7 1.6-1.5 3.3-2.3 5.1-.5 1.1-1 2.3-1.5 3.6C.1 74.6-.3 78.1.2 81.7c1.1 7.5 6.1 13.8 13 16.6 2.6 1.1 5.3 1.6 8.1 1.6.8 0 1.8-.1 2.6-.2 3.3-.4 6.7-1.5 10-3.4 4.1-2.3 8-5.6 12.4-10.4 4.4 4.8 8.4 8.1 12.4 10.4 3.3 1.9 6.7 3 10 3.4.8.1 1.8.2 2.6.2 2.8 0 5.6-.5 8.1-1.6 7-2.8 11.9-9.2 13-16.6.8-3.5.4-7-.9-10.7zm-45.1 5.2C41 69.4 37.5 63 36.3 57.6c-.5-2.3-.6-4.3-.3-6.1.2-1.6.8-3 1.6-4.2 1.9-2.7 5.1-4.4 8.8-4.4s7 1.6 8.8 4.4c.8 1.2 1.4 2.6 1.6 4.2.3 1.8.2 3.9-.3 6.1-1.2 5.3-4.7 11.7-10.1 18.6zm39.9 4.7c-.7 5.2-4.2 9.7-9.1 11.7-2.4 1-5 1.3-7.6 1-2.5-.3-5-1.1-7.6-2.6-3.6-2-7.2-5.1-11.4-9.7 6.6-8.1 10.6-15.5 12.1-22.1.7-3.1.8-5.9.5-8.5-.4-2.5-1.3-4.8-2.7-6.8-3.1-4.5-8.3-7.1-14.1-7.1s-11 2.7-14.1 7.1c-1.4 2-2.3 4.3-2.7 6.8-.4 2.6-.3 5.5.5 8.5 1.5 6.6 5.6 14.1 12.1 22.2-4.1 4.6-7.8 7.7-11.4 9.7-2.6 1.5-5.1 2.3-7.6 2.6-2.7.3-5.3-.1-7.6-1-4.9-2-8.4-6.5-9.1-11.7-.3-2.5-.1-5 .9-7.8.3-1 .8-2 1.3-3.2.7-1.6 1.5-3.3 2.3-5l.1-.2c6.9-14.9 14.3-30.1 22-44.9l.3-.6c.8-1.5 1.6-3.1 2.4-4.6.8-1.6 1.7-3.1 2.8-4.4 2.1-2.4 4.9-3.7 8-3.7s5.9 1.3 8 3.7c1.1 1.3 2 2.8 2.8 4.4.8 1.5 1.6 3.1 2.4 4.6l.3.6c7.6 14.9 15 30.1 21.9 45v.1c.8 1.6 1.5 3.4 2.3 5 .5 1.2 1 2.2 1.3 3.2.8 2.6 1.1 5.1.7 7.7z" fill="#ff5a5f"/></svg> -->

                  <p class="text-xl font-medium text-gray-800 lg:text-2xl lg:leading-normal dark:text-neutral-200">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem exercitationem repellat ipsam ipsum voluptatem minima obcaecati pariatur, nobis, quibusdam nihil in fuga enim. Cum qui ab inventore nobis ullam doloribus.
                  </p>

                  <footer class="mt-6">
                    <div class="flex items-center">
                      <div class="lg:hidden shrink-0">
                        <!-- <img class="size-12 rounded-full" src="https://www.advacarepharma.com/wp-content/uploads/sanitary-pads-daytime-bag.png" alt="Avatar"> -->
                      </div>
                      <div class="ms-4 lg:ms-0 text-white">
                        <p class="font-medium  dark:text-neutral-200">
                          Nicole Grazioso
                        </p>
                        <p class="text-sm">
                          Head of Finance
                        </p>
                      </div>
                    </div>
                  </footer>
                </blockquote>
                <!-- End Blockquote -->
              </div>
              <!-- End Col -->
            </div>
            <!-- End Grid -->
          </div>
        </div>
        <!-- End Testimonials -->
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Team -->

  <!-- Blog Article -->
  <div class="max-w-full px-9 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-12">
    <div class="max-w-full">
      <!-- Avatar Media -->
      <!-- <div class="flex justify-between items-center mb-6">
        <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
          <div class="shrink-0">
            <img class="size-12 rounded-full" src="https://images.unsplash.com/photo-1669837401587-f9a4cfe3126e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
          </div>

          <div class="grow">
            <div class="flex justify-between items-center gap-x-2"> -->
              <!-- <div> -->
                <!-- Tooltip -->
                <!-- <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                  <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                    <span class="font-semibold text-gray-800 dark:text-neutral-200">
                      Leyla Ludic
                    </span> -->

                    <!-- Dropdown Card -->
                    <!-- <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 max-w-xs cursor-default bg-gray-900 divide-y divide-gray-700 shadow-lg rounded-xl dark:bg-neutral-950 dark:divide-neutral-700" role="tooltip"> -->
                      <!-- Body -->
                      <!-- <div class="p-4 sm:p-5">
                        <div class="mb-2 flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                          <div class="shrink-0">
                            <img class="size-8 rounded-full" src="https://images.unsplash.com/photo-1669837401587-f9a4cfe3126e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
                          </div>

                          <div class="grow">
                            <p class="text-lg font-semibold text-gray-200 dark:text-neutral-200">
                              Leyla Ludic
                            </p>
                          </div>
                        </div>
                        <p class="text-sm text-gray-400 dark:text-neutral-400">
                          Leyla is a Customer Success Specialist at Preline and spends her time speaking to in-house recruiters all over the world.
                        </p>
                      </div> -->
                      <!-- End Body -->

                      <!-- Footer -->
                      <!-- <div class="flex justify-between items-center px-4 py-3 sm:px-5">
                        <ul class="text-xs space-x-3">
                          <li class="inline-block">
                            <span class="font-semibold text-gray-200 dark:text-neutral-200">56</span>
                            <span class="text-gray-400 dark:text-neutral-400">articles</span>
                          </li>
                          <li class="inline-block">
                            <span class="font-semibold text-gray-200 dark:text-neutral-200">1k+</span>
                            <span class="text-gray-400 dark:text-neutral-400">followers</span>
                          </li>
                        </ul>

                        <div>
                          <button type="button" class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                            <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                              <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                              <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                            </svg>
                            Follow
                          </button>
                        </div>
                      </div> -->
                      <!-- End Footer -->
                    <!-- </div> -->
                    <!-- End Dropdown Card -->
                  <!-- </div>
                </div> -->
                <!-- End Tooltip -->

                <!-- <ul class="text-xs text-gray-500 dark:text-neutral-500">
                  <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                    Jan 18
                  </li>
                  <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                    8 min read
                  </li>
                </ul> -->
              <!-- </div> -->

              <!-- Button Group -->
              <!-- <div>
                <button type="button" class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                  <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                  </svg>
                  Tweet
                </button>
              </div> -->
              <!-- End Button Group -->
            <!-- </div>
          </div>
        </div>
      </div> -->
      <!-- End Avatar Media -->

      <!-- Content -->
      <div class="space-y-5 md:space-y-8">
        <div class="space-y-3">
          <h2 class="text-2xl font-bold md:text-3xl text-white">Ingredients for making Always sanitary pads</h2>

          <p class="text-lg text-gray-800 text-neutral-200">A quick look at how safe Always pads are, what goes into them, and how women's protection and comfort are our company's top priorities.</p>
        </div>

        <figure>
          <img class="w-full object-cover rounded-xl" src="https://images.ctfassets.net/7uyp0xssk5ur/7EWZbf8jRnd8WUNGIrLHE2/4524d125c7bb7246a612a3ead4692a4f/DT_Banner_2x.jpg?w=1600" alt="Blog Image">
          <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
            A woman sitting at a table.
          </figcaption>
        </figure>

        <p class="text-lg text-gray-800 text-neutral-200">How are Always products made? What materials are used to make them and what does the process look like? Are Always pads safe for women and girls? If you’ve always wondered about these questions, here’s a quick primer on what goes into an Always product.</p>

        <p class="text-lg text-gray-800 text-neutral-200">Read more about the safety of Always pads and other products below.</p>

        <h3 class="text-2xl text-gray-800 text-neutral-200">What's in Always pads?</h3>

        <p class="text-lg text-gray-800 text-neutral-200">Always is designed for perfection. Our pads in the UAE and KSA, as in the rest of the world, are made of four layers, namely the top layer, the secondary top layer, the absorbent core and the back layer. Each layer helps provide comfort and protection during your most special days. They absorb fluid quickly and transfer it to the high-quality core.</p>

        <h3 class="text-2xl text-gray-800 text-neutral-200">The absolute safety of Always pads in the region</h3>
        
        <p class="text-lg text-gray-800 text-neutral-200">As with all our markets, Always pads in the region are also manufactured to strict international safety standards. The well-being of our women is at the heart of every product we create. Safety assessments and formulas for Always products are reviewed by a number of independent industry experts including health authorities, university scientists and doctors. This helps us provide you with the best comfort.</p>

        <h3 class="text-2xl text-gray-800 text-neutral-200">How safe are Always pads?</h3>

        <p class="text-lg text-gray-800 text-neutral-200">Here's how to make sure every sanitary pad that goes out to local stores and online retailers is safe to use.</p>

        <h3 class="text-2xl text-gray-800 text-neutral-200">Responds to the unique needs of each woman.</h3>

        <p class="text-lg text-gray-800 text-neutral-200">Our products undergo rigorous safety testing. Always pads are safe to use and are manufactured to meet the unique needs of every woman. To further meet the needs of women with sensitive skin, we also produce pads designed with a soft top cover.</p>

        <h3 class="text-2xl text-gray-800 text-neutral-200">New improved set</h3>

        <p class="text-lg text-gray-800 text-neutral-200">Always believes in keeping up with the times. Our new breathable top sheet is soft and gentle on your skin and provides optimal protection during heavy flow days. Check out our new range of sanitary pads today.</p>

        <h3 class="text-2xl text-gray-800 text-neutral-200">Use PE tape - for best quality</h3>

        <p class="text-lg text-gray-800 text-neutral-200">Our products are designed using perforated films containing polyethylene (PE). This helps us maintain the quality of our products. We use PE in our products in all the countries we operate in as a means of preventing leaks. PE films are safely used in a wide range of industries:</p>

        <ul>
          <li><p class="text-lg text-gray-800 text-neutral-200">Polyethylene is a widely used ingredient in medical products such as bandages, prosthetics, and surgical sutures.</p></li>
          <li><p class="text-lg text-gray-800 text-neutral-200">It is used to preserve food in the form of food pouches, squeezable bottles, milk bottles, cereal boxes, liners, and more.</p></li>
        </ul>

        <h3 class="text-2xl text-gray-800 text-neutral-200">Polyethylene membranes work in pads</h3>

        <p class="text-lg text-gray-800 text-neutral-200">Polyethylene films work wonders in protecting against menstrual leaks as the ingredient keeps the fluid secure. Here are some reasons why they are effective:</p>

        <ul>
          <li><p class="text-lg text-gray-800 text-neutral-200">Polythene helps transport menstrual fluid to the absorbent core. Always uses it in fibre form as the top cover for menstrual pads.</p></li>
          <li><p class="text-lg text-gray-800 text-neutral-200">PE membranes provide a soft, silky feel. This makes the pads extremely comfortable while addressing the risk of rashes.</p></li>
          <li><p class="text-lg text-gray-800 text-neutral-200">We understand that women have unique needs. But that doesn’t mean they have to compromise. The Always Safety Promise is true for every product that leaves our factories.</p></li>
        </ul>

        <h3 class="text-2xl text-gray-800 text-neutral-200">Frequently Asked Questions</h3>

        <p class="text-lg text-gray-800 text-neutral-200">Please take a look at some of the most frequently asked questions and their answers below. You can also contact us.</p>

        <h3 class="text-2xl text-gray-800 text-neutral-200">Are Always products safe?</h3>

        <p class="text-lg text-gray-800 text-neutral-200">Yes, our pads are safe and are used safely by millions of women every day. Your safety is at the heart of everything we do, which is why our products are rigorously tested, including evaluations by independent experts such as doctors, university scientists and health authorities. Over 1,800 quality tests are performed on pad materials during manufacturing and before use. Over 20,000 tests are performed on pads and their components by independent laboratories every year.</p>

        <h3 class="text-2xl text-gray-800 text-neutral-200">Do pads irritate the skin?</h3>

        <p class="text-lg text-gray-800 text-neutral-200">No, our pads should not cause skin irritation. All of our products undergo rigorous safety testing to ensure they are safe to use.</p>

        <h3 class="text-2xl text-gray-800 text-neutral-200">Are scented pads safe? Won't they be irritating and make me feel itchy down there?</h3>

        <p class="text-lg text-gray-800 text-neutral-200">Your safety is at the heart of everything we do, so just like our unscented pads, our scented products are safe to use. We choose materials, including the fragrance in our scented products, that won’t cause irritation or itching when used in a pad. Additionally, the fragrance used in our pads and liners meets the strict safety standards set by the International Fragrance Association, the world’s leading authority on fragrance safety.</p>

        <h3 class="text-2xl text-gray-800 text-neutral-200">Why aren't Always pads made from 100% cotton?</h3>

        <p class="text-lg text-gray-800 text-neutral-200">All Always products meet strict safety and effectiveness standards, regardless of the material they are made from. Always pads are designed to provide high levels of protection and comfort. The materials used in our pads enable us to better meet these performance needs.</p>

        <h3 class="text-2xl text-gray-800 text-neutral-200">Is there chlorine bleach in sanitary pads?</h3>

        <p class="text-lg text-gray-800 text-neutral-200">No, pads are always sterilized using a chlorine-free purification process. This is a safe process.</p>

        <h3 class="text-2xl text-gray-800 text-neutral-200">Are there toxic dyes in sanitary pads?</h3>

        <p class="text-lg text-gray-800 text-neutral-200">No, there are no toxic dyes in our pads. The dyes used in some of our pads have been rigorously evaluated by scientists, healthcare providers and government agencies to ensure they can be used safely.</p>
        
        <h3 class="text-2xl text-gray-800 text-neutral-200">How does Always ensure its products are safe?</h3>

        <p class="text-lg text-gray-800 text-neutral-200">Rest assured, our science-based evaluation process works to ensure the safety of women who use our products. Only products and materials that meet our science-based safety standards can be featured in

Market. Furthermore, we share our evaluations with scientists, healthcare providers, and regulatory bodies to ensure our products can be used safely.</p>
        
        <h3 class="text-2xl text-gray-800 text-neutral-200">Our commitment to safety</h3>

        <p class="text-lg text-gray-800 text-neutral-200">Always is committed to ensuring that all of our products meet strict safety standards. Additionally, we believe it is important that our safety ratings and ingredients are reviewed by independent experts, who hold our products to their own skin safety standards.</p>
        
        <!-- <blockquote class="text-center p-4 sm:px-7">
          <p class="text-xl font-medium text-gray-800 md:text-2xl md:leading-normal xl:text-2xl xl:leading-normal dark:text-neutral-200">
            To say that switching to Preline has been life-changing is an understatement. My business has tripled and I got my life back.
          </p>
          <p class="mt-5 text-gray-800 dark:text-neutral-200">
            Nicole Grazioso
          </p>
        </blockquote>

        <figure>
          <img class="w-full object-cover rounded-xl" src="https://images.unsplash.com/photo-1670272498380-eb330b61f3cd?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Blog Image">
          <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
            A man and a woman looking at a cell phone.
          </figcaption>
        </figure> -->

        <!-- <div class="space-y-3">
          <h3 class="text-2xl font-semibold text-white">Bringing the culture of sharing to everyone</h3>

          <p class="text-lg text-gray-800 text-neutral-200">We know the power of sharing is real, and we want to create an opportunity for everyone to try Result and explore how transformative open communication can be. Now you can have a team of one or two designers and unlimited spectators (think PMs, management, marketing, etc.) share work and explore the design process earlier.</p>
        </div>

        <ul class="list-disc list-outside space-y-5 ps-5 text-lg text-gray-800 text-neutral-200">
          <li class="ps-2">Result allows us to collaborate in real time and is a really great way for leadership on the team to stay up-to-date with what everybody is working on," <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">said</a> Stewart Scott-Curran, Intercom's Director of Brand Design.</li>
          <li class="ps-2">Result opened a new way of sharing. It's a persistent way for everyone to see and absorb each other's work," said David Scott, Creative Director at <a class="text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium dark:text-blue-500" href="#">Eventbrite</a>.</li>
        </ul>

        <p class="text-lg text-gray-800 text-neutral-200">Small teams and individual designers need a space where they can watch the design process unfold, both for themselves and for the people they work with – no matter if it's a fellow designer, product manager, developer or client. Result allows you to invite more people into the process, creating a central place for conversation around design. As those teams grow, transparency and collaboration becomes integrated in how they communicate and work together.</p> -->

        <!-- <div>
          <a class="m-1 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#">
            Plan
          </a>
          <a class="m-1 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#">
            Web development
          </a>
          <a class="m-1 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#">
            Free
          </a>
          <a class="m-1 inline-flex items-center gap-1.5 py-2 px-3 rounded-full text-sm bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none focus:bg-gray-200 dark:bg-neutral-800 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#">
            Team
          </a>
        </div> -->
      </div>
      <!-- End Content -->
    </div>
  </div>
  <!-- End Blog Article -->

  <!-- Team -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="intro-x flex items-center h-10 text-white">
      <h2 class="text-3xl font-medium truncate mr-auto">
        Important Notes
      </h2>
      <button
        data-carousel="important-notes"
        data-target="prev"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="prevImportantNotes"
      >
        <ChevronLeftIcon class="w-4 h-4" />
      </button>
      <button
        data-carousel="important-notes"
        data-target="next"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="nextImportantNotes"
      >
        <ChevronRightIcon class="w-4 h-4" />
      </button>

      See More >
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="overflow-hidden whitespace-nowrap">
      <div class="inline-block w-96 h-100 mx-10">
        <iframe class="rounded-xl mx-auto" width="420" height="315"
          src="https://www.youtube.com/embed/2xW9mTStyhM">
        </iframe>
        <!-- <video class="rounded-xl mx-auto" width="320" height="240" controls>
          <source src="https://www.youtube.com/watch?v=hQAY0E8H0tA" type="video/mp4">
          Your browser does not support the video tag.
        </video> -->
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block w-96 h-100 mx-10">
        <iframe class="rounded-xl mx-auto" width="420" height="315"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block w-96 h-100 mx-10">
        <iframe class="rounded-xl mx-auto" width="420" height="315"
          src="https://www.youtube.com/embed/haMue6QUhlQ">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1548142813-c348350df52b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Team -->

  <!-- Team -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="intro-x flex items-center h-10 text-white">
      <h2 class="text-3xl font-medium truncate mr-auto">
        Important Notes
      </h2>
      <button
        data-carousel="important-notes"
        data-target="prev"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="prevImportantNotes"
      >
        <ChevronLeftIcon class="w-4 h-4" />
      </button>
      <button
        data-carousel="important-notes"
        data-target="next"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="nextImportantNotes"
      >
        <ChevronRightIcon class="w-4 h-4" />
      </button>

      See More >
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="overflow-x-auto whitespace-nowrap">
      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Maria Powers
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Director of sales
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Delia Pawelke
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Front-end Developer
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Tom Lowry
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            UI/UX Designer
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1579017331263-ef82f0bbc748?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Louise Donadieu
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Support Consultant
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1514222709107-a180c68d72b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Jeff Fisher
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Project Manager
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1602452920335-6a132309c7c8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Sophia Harrington
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Project Manager
          </p>
        </div>
      </div> -->
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Team -->

  <!-- Team -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Title -->
    <div class="intro-x flex items-center h-10 text-white">
      <h2 class="text-3xl font-medium truncate mr-auto">
        Important Notes
      </h2>
      <button
        data-carousel="important-notes"
        data-target="prev"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="prevImportantNotes"
      >
        <ChevronLeftIcon class="w-4 h-4" />
      </button>
      <button
        data-carousel="important-notes"
        data-target="next"
        class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
        @click="nextImportantNotes"
      >
        <ChevronRightIcon class="w-4 h-4" />
      </button>

      See More >
    </div>
    <!-- End Title -->

    <!-- Grid -->
    <div class="overflow-x-auto whitespace-nowrap">
      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <div class="inline-block h-100 mx-5">
        <iframe class="rounded-xl mx-auto" width="200" height="150"
          src="https://www.youtube.com/embed/HBq_zOzhTqw">
        </iframe>
        <!-- <img class="rounded-xl mx-auto" src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar"> -->
        <div class="mt-2 sm:mt-4">
          <h3 class="font-medium text-gray-800 text-lg text-white">
            David Forren
          </h3>
          <p class="text-gray-600 text-base text-white">
            Founder / CEO
          </p>
        </div>
      </div>
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Maria Powers
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Director of sales
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Delia Pawelke
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Front-end Developer
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1624224971170-2f84fed5eb5e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Tom Lowry
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            UI/UX Designer
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1579017331263-ef82f0bbc748?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Louise Donadieu
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Support Consultant
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1514222709107-a180c68d72b4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Jeff Fisher
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Project Manager
          </p>
        </div>
      </div> -->
      <!-- End Col -->

      <!-- <div class="text-center">
        <img class="rounded-xl sm:size-48 lg:size-60 mx-auto" src="https://images.unsplash.com/photo-1602452920335-6a132309c7c8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Avatar">
        <div class="mt-2 sm:mt-4">
          <h3 class="text-sm font-medium text-gray-800 sm:text-base lg:text-lg dark:text-neutral-200">
            Sophia Harrington
          </h3>
          <p class="text-xs text-gray-600 sm:text-sm lg:text-base dark:text-neutral-400">
            Project Manager
          </p>
        </div>
      </div> -->
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Team -->

  <!-- ========== FOOTER ========== -->
  <footer class="mt-auto w-full max-w-[85rem] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <!-- Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 lg:grid-cols-5 gap-6 mb-10">
      <div class="col-span-full hidden lg:col-span-1 lg:block">
        <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 text-white" href="#" aria-label="Result">Result</a>
        <p class="mt-3 text-xs sm:text-sm text-gray-600 text-neutral-400">© 2024 Result.</p>
      </div>
      <!-- End Col -->

      <div>
        <h4 class="text-xs font-semibold text-gray-900 uppercase text-neutral-100">Product</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Pricing</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Changelog</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Docs</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Download</a></p>
        </div>
      </div>
      <!-- End Col -->

      <div>
        <h4 class="text-xs font-semibold text-gray-900 uppercase text-neutral-100">Company</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">About us</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Blog</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Careers</a> <span class="inline text-blue-600 text-blue-500">— We're hiring</span></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Customers</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Newsroom</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Sitemap</a></p>
        </div>
      </div>
      <!-- End Col -->

      <div>
        <h4 class="text-xs font-semibold text-gray-900 uppercase text-neutral-100">Resources</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Community</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Help & Support</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">eBook</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">What's New</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Status</a></p>
        </div>
      </div>
      <!-- End Col -->

      <div>
        <h4 class="text-xs font-semibold text-gray-900 uppercase text-neutral-100">Developers</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Test</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Status</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Imports</a> <span class="inline text-blue-600 text-blue-500">— New</span></p>
        </div>

        <h4 class="mt-7 text-xs font-semibold text-gray-900 uppercase text-neutral-100">Industries</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Financial Services</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Education</a></p>
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->

    <div class="pt-5 mt-5 border-t border-gray-100 border-neutral-700">
      <div class="sm:flex sm:justify-between sm:items-center">
        <div class="flex flex-wrap items-center gap-3">
          <!-- Language Dropdown -->
          <div class="hs-dropdown [--placement:top-left] relative inline-flex">
            <button id="hs-footer-language-dropdown" type="button" class="hs-dropdown-toggle py-2 px-3 inline-flex items-center gap-x-2 text-sm rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800 dark:focus:bg-neutral-800" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
              <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us1" viewBox="0 0 512 512">
                <g fill-rule="evenodd">
                  <g stroke-width="1pt">
                    <path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/>
                    <path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/>
                  </g>
                  <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/>
                  <path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/>
                </g>
              </svg>
              English (US)
              <svg class="hs-dropdown-open:rotate-180 shrink-0 size-4 text-gray-500 text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m18 15-6-6-6 6"/></svg>
            </button>

            <div class="hs-dropdown-menu w-40 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden z-10 bg-white shadow-md rounded-lg p-2 bg-neutral-800 border border-neutral-700 divide-neutral-700" role="menu" aria-orientation="vertical" aria-labelledby="hs-footer-language-dropdown">
              <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 text-neutral-400 hover:bg-neutral-700 hover:text-neutral-300 focus:bg-neutral-700 focus:text-neutral-300" href="#">
                <svg class="size-3.5 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-us" viewBox="0 0 512 512">
                  <g fill-rule="evenodd">
                    <g stroke-width="1pt">
                      <path fill="#bd3d44" d="M0 0h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/>
                      <path fill="#fff" d="M0 10h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0zm0 20h247v10H0z" transform="scale(3.9385)"/>
                    </g>
                    <path fill="#192f5d" d="M0 0h98.8v70H0z" transform="scale(3.9385)"/>
                    <path fill="#fff" d="M8.2 3l1 2.8H12L9.7 7.5l.9 2.7-2.4-1.7L6 10.2l.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7L74 8.5l-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 7.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 24.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 21.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 38.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 35.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 52.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 49.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm-74.1 7l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7H65zm16.4 0l1 2.8H86l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm-74 7l.8 2.8h3l-2.4 1.7.9 2.7-2.4-1.7L6 66.2l.9-2.7-2.4-1.7h3zm16.4 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8H45l-2.4 1.7 1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9zm16.4 0l1 2.8h2.8l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h3zm16.5 0l.9 2.8h2.9l-2.3 1.7.9 2.7-2.4-1.7-2.3 1.7.9-2.7-2.4-1.7h2.9zm16.5 0l.9 2.8h2.9L92 63.5l1 2.7-2.4-1.7-2.4 1.7 1-2.7-2.4-1.7h2.9z" transform="scale(3.9385)"/>
                  </g>
                </svg>
                English (US)
              </a>
              <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 text-neutral-400 hover:bg-neutral-700 hover:text-neutral-300 focus:bg-neutral-700 focus:text-neutral-300" href="#">
                <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-de" viewBox="0 0 512 512">
                  <path fill="#ffce00" d="M0 341.3h512V512H0z"/>
                  <path d="M0 0h512v170.7H0z"/>
                  <path fill="#d00" d="M0 170.7h512v170.6H0z"/>
                </svg>
                Deutsch
              </a>
              <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 text-neutral-400 hover:bg-neutral-700 hover:text-neutral-300 focus:bg-neutral-700 focus:text-neutral-300" href="#">
                <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-dk" viewBox="0 0 512 512">
                  <path fill="#c8102e" d="M0 0h512.1v512H0z"/>
                  <path fill="#fff" d="M144 0h73.1v512H144z"/>
                  <path fill="#fff" d="M0 219.4h512.1v73.2H0z"/>
                </svg>
                Dansk
              </a>
              <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 text-neutral-400 hover:bg-neutral-700 hover:text-neutral-300 focus:bg-neutral-700 focus:text-neutral-300" href="#">
                <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg" id="flag-icon-css-it" viewBox="0 0 512 512">
                  <g fill-rule="evenodd" stroke-width="1pt">
                    <path fill="#fff" d="M0 0h512v512H0z"/>
                    <path fill="#009246" d="M0 0h170.7v512H0z"/>
                    <path fill="#ce2b37" d="M341.3 0H512v512H341.3z"/>
                  </g>
                </svg>
                Italiano
              </a>
              <a class="flex items-center gap-x-2 py-2 px-3 rounded-lg text-sm text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 text-neutral-400 hover:bg-neutral-700 hover:text-neutral-300 focus:bg-neutral-700 focus:text-neutral-300" href="#">
                <svg class="size-3 rounded-full" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="flag-icon-css-cn" viewBox="0 0 512 512">
                  <defs>
                    <path id="a" fill="#ffde00" d="M1-.3L-.7.8 0-1 .6.8-1-.3z"/>
                  </defs>
                  <path fill="#de2910" d="M0 0h512v512H0z"/>
                  <use width="30" height="20" transform="matrix(76.8 0 0 76.8 128 128)" xlink:href="#a"/>
                  <use width="30" height="20" transform="rotate(-121 142.6 -47) scale(25.5827)" xlink:href="#a"/>
                  <use width="30" height="20" transform="rotate(-98.1 198 -82) scale(25.6)" xlink:href="#a"/>
                  <use width="30" height="20" transform="rotate(-74 272.4 -114) scale(25.6137)" xlink:href="#a"/>
                  <use width="30" height="20" transform="matrix(16 -19.968 19.968 16 256 230.4)" xlink:href="#a"/>
                </svg>
                中文 (繁體)
              </a>
            </div>
          </div>
          <!-- End Language Dropdown -->

          <div class="space-x-4 text-sm">
            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Terms</a>
            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Privacy</a>
            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Status</a>
          </div>
        </div>

        <div class="flex flex-wrap justify-between items-center gap-3">
          <div class="mt-3 sm:hidden">
            <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 text-white" href="#" aria-label="Result">Result</a>
            <p class="mt-1 text-xs sm:text-sm text-gray-600 text-neutral-400">© 2022 Result.</p>
          </div>

          <!-- Social Brands -->
          <div class="space-x-4">
            <a class="inline-block text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-500 hover:text-neutral-200 focus:text-neutral-200" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 24 24">
                <path d="M 8 3 C 5.25 3 3 5.25 3 8 L 3 16 C 3 18.75 5.25 21 8 21 L 11.832031 21 A 1.0001 1.0001 0 0 0 12.158203 21 L 16 21 C 18.75 21 21 18.75 21 16 L 21 8 C 21 5.25 18.75 3 16 3 L 8 3 z M 8 5 L 16 5 C 17.668 5 19 6.332 19 8 L 19 16 C 19 17.668 17.668 19 16 19 L 13 19 L 13 14 L 15 14 A 1.0001 1.0001 0 1 0 15 12 L 13 12 L 13 11 C 13 10.43497 13.43497 10 14 10 L 15 10 A 1.0001 1.0001 0 1 0 15 8 L 14 8 C 12.35503 8 11 9.3550302 11 11 L 11 12 L 10 12 A 1.0001 1.0001 0 1 0 10 14 L 11 14 L 11 19 L 8 19 C 6.332 19 5 17.668 5 16 L 5 8 C 5 6.332 6.332 5 8 5 z"></path>
              </svg>
            </a>
            <a class="inline-block text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-500 hover:text-neutral-200 focus:text-neutral-200" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 48 48">
                <path d="M 15 4 C 8.9365932 4 4 8.9365932 4 15 L 4 33 C 4 39.063407 8.9365932 44 15 44 L 33 44 C 39.063407 44 44 39.063407 44 33 L 44 15 C 44 8.9365932 39.063407 4 33 4 L 15 4 z M 15 6 L 33 6 C 37.982593 6 42 10.017407 42 15 L 42 33 C 42 37.982593 37.982593 42 33 42 L 15 42 C 10.017407 42 6 37.982593 6 33 L 6 15 C 6 10.017407 10.017407 6 15 6 z M 35 11 C 33.895 11 33 11.895 33 13 C 33 14.105 33.895 15 35 15 C 36.105 15 37 14.105 37 13 C 37 11.895 36.105 11 35 11 z M 24 14 C 18.488666 14 14 18.488666 14 24 C 14 29.511334 18.488666 34 24 34 C 29.511334 34 34 29.511334 34 24 C 34 18.488666 29.511334 14 24 14 z M 24 16 C 28.430666 16 32 19.569334 32 24 C 32 28.430666 28.430666 32 24 32 C 19.569334 32 16 28.430666 16 24 C 16 19.569334 19.569334 16 24 16 z"></path>
              </svg>
            </a>
            <a class="inline-block text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-500 hover:text-neutral-200 focus:text-neutral-200" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 48 48">
                <path d="M 11.5 6 C 8.4802259 6 6 8.4802259 6 11.5 A 1.50015 1.50015 0 1 0 9 11.5 C 9 10.101774 10.101774 9 11.5 9 L 36.5 9 C 37.898226 9 39 10.101774 39 11.5 L 39 26.277344 A 1.50015 1.50015 0 1 0 42 26.277344 L 42 11.5 C 42 8.4802259 39.519774 6 36.5 6 L 11.5 6 z M 26.435547 13.023438 A 1.50015 1.50015 0 0 0 25 14.5 L 25 28 C 25 30.227598 23.227598 32 21 32 C 18.772402 32 17 30.227598 17 28 C 17 25.772402 18.772402 24 21 24 A 1.50015 1.50015 0 1 0 21 21 C 17.151598 21 14 24.151598 14 28 C 14 31.848402 17.151598 35 21 35 C 24.848402 35 28 31.848402 28 28 L 28 20.335938 C 29.268121 21.316987 30.78243 22 32.5 22 A 1.50015 1.50015 0 1 0 32.5 19 C 29.996501 19 28 17.003499 28 14.5 A 1.50015 1.50015 0 0 0 26.435547 13.023438 z M 7.4765625 15.882812 A 1.50015 1.50015 0 0 0 6 17.404297 L 6 36.5 C 6 39.519774 8.4802259 42 11.5 42 L 36.5 42 C 39.519774 42 42 39.519774 42 36.5 L 42 34.128906 A 1.50015 1.50015 0 1 0 39 34.128906 L 39 36.5 C 39 37.898226 37.898226 39 36.5 39 L 11.5 39 C 10.101774 39 9 37.898226 9 36.5 L 9 17.404297 A 1.50015 1.50015 0 0 0 7.4765625 15.882812 z"></path>
              </svg>
            </a>
            <a class="inline-block text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-500 hover:text-neutral-200 focus:text-neutral-200" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 24 24">
                <path d="M 17.476562 2.9902344 A 1.0001 1.0001 0 0 0 16.724609 3.3691406 L 12.509766 8.5546875 L 9.0566406 3.7714844 C 8.7066406 3.2874844 8.1458281 3 7.5488281 3 L 4.078125 3 C 3.420125 3 3.0388281 3.7462969 3.4238281 4.2792969 L 9.3339844 12.462891 L 3.7246094 19.369141 A 1.0001 1.0001 0 1 0 5.2753906 20.630859 L 10.548828 14.142578 L 14.943359 20.228516 C 15.293359 20.712516 15.854172 21 16.451172 21 L 19.921875 21 C 20.579875 21 20.961172 20.253703 20.576172 19.720703 L 13.724609 10.232422 L 18.275391 4.6308594 A 1.0001 1.0001 0 0 0 17.476562 2.9902344 z M 6.4101562 5 L 7.4765625 5 L 17.587891 19 L 16.523438 19 L 6.4101562 5 z"></path>
              </svg>
            </a>
            <a class="inline-block text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-500 hover:text-neutral-200 focus:text-neutral-200" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 24 24">
                <path d="M 12 3 C 9.219873 3 7.0702243 3.1849411 5.5253906 3.3945312 C 3.5192045 3.66666 2 5.3798482 2 7.4101562 L 2 16.589844 C 2 18.620928 3.5195005 20.33338 5.5253906 20.605469 C 7.0706661 20.816142 9.219873 21 12 21 C 14.780127 21 16.929776 20.815059 18.474609 20.605469 C 20.481362 20.333429 22 18.620627 22 16.589844 L 22 7.4101562 C 22 5.3790719 20.4805 3.6666199 18.474609 3.3945312 C 16.929776 3.184941 14.780127 3 12 3 z M 12 4.5 C 14.713873 4.5 16.796271 4.6804497 18.273438 4.8808594 C 19.555547 5.0547709 20.5 6.1212407 20.5 7.4101562 L 20.5 16.589844 C 20.5 17.879061 19.556685 18.945181 18.273438 19.119141 C 16.796271 19.31955 14.713873 19.5 12 19.5 C 9.286127 19.5 7.203287 19.320468 5.7265625 19.119141 C 4.4444527 18.945229 3.5 17.878759 3.5 16.589844 L 3.5 7.4101562 C 3.5 6.1224643 4.4447486 5.0547307 5.7265625 4.8808594 C 7.2037288 4.6804497 9.286127 4.5 12 4.5 z M 10.917969 8.8125 C 10.439 8.8169531 10 9.2012813 10 9.7382812 L 10 14.263672 C 10 14.979672 10.778531 15.423594 11.394531 15.058594 L 15.214844 12.796875 C 15.818844 12.437875 15.818844 11.563078 15.214844 11.205078 L 11.394531 8.9433594 C 11.240531 8.8521094 11.077625 8.8110156 10.917969 8.8125 z"></path>
              </svg>
            </a>
            <a class="inline-block text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-500 hover:text-neutral-200 focus:text-neutral-200" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="16" height="16" viewBox="0 0 24 24">
                <path d="M 5.75 3 C 4.2400226 3 3 4.2400226 3 5.75 L 3 18.25 C 3 19.759977 4.2400226 21 5.75 21 L 18.25 21 C 19.759977 21 21 19.759977 21 18.25 L 21 5.75 C 21 4.2400226 19.759977 3 18.25 3 L 5.75 3 z M 5.75 4.5 L 18.25 4.5 C 18.950023 4.5 19.5 5.0499774 19.5 5.75 L 19.5 18.25 C 19.5 18.950023 18.950023 19.5 18.25 19.5 L 5.75 19.5 C 5.0499774 19.5 4.5 18.950023 4.5 18.25 L 4.5 5.75 C 4.5 5.0499774 5.0499774 4.5 5.75 4.5 z M 8.1855469 6.7851562 C 7.4445469 6.7851563 7 7.2293594 7 7.8183594 C 7 8.4113594 7.444375 8.8574219 8.109375 8.8574219 C 8.850375 8.8574219 9.2910156 8.4113594 9.2910156 7.8183594 C 9.2910156 7.2303594 8.8505469 6.7851562 8.1855469 6.7851562 z M 7.0625 9.9628906 L 7.0625 16 L 9.2363281 16 L 9.2363281 9.9628906 L 7.0625 9.9628906 z M 11.033203 9.9628906 L 11.033203 16 L 13.207031 16 L 13.207031 12.697266 C 13.207031 11.718266 13.908141 11.574219 14.119141 11.574219 C 14.330141 11.574219 14.892578 11.785266 14.892578 12.697266 L 14.892578 16 L 17 16 L 17 12.697266 C 17 10.806266 16.154516 9.9628906 15.103516 9.9628906 C 14.052516 9.9628906 13.490031 10.312641 13.207031 10.806641 L 13.207031 9.9628906 L 11.033203 9.9628906 z"></path>
              </svg>
            </a>
          </div>
          <!-- End Social Brands -->
        </div>
        <!-- End Col -->
      </div>
    </div>
  </footer>
  <!-- ========== END FOOTER ========== -->

  </div>

  <div class="fixed bottom-4 right-4">
    <a target="_blank" href="http://wa.me/+971566802871">
      <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60" height="60" viewBox="0 0 48 48">
        <path fill="#fff" d="M4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98c-0.001,0,0,0,0,0h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303z"></path><path fill="#fff" d="M4.868,43.803c-0.132,0-0.26-0.052-0.355-0.148c-0.125-0.127-0.174-0.312-0.127-0.483l2.639-9.636c-1.636-2.906-2.499-6.206-2.497-9.556C4.532,13.238,13.273,4.5,24.014,4.5c5.21,0.002,10.105,2.031,13.784,5.713c3.679,3.683,5.704,8.577,5.702,13.781c-0.004,10.741-8.746,19.48-19.486,19.48c-3.189-0.001-6.344-0.788-9.144-2.277l-9.875,2.589C4.953,43.798,4.911,43.803,4.868,43.803z"></path><path fill="#cfd8dc" d="M24.014,5c5.079,0.002,9.845,1.979,13.43,5.566c3.584,3.588,5.558,8.356,5.556,13.428c-0.004,10.465-8.522,18.98-18.986,18.98h-0.008c-3.177-0.001-6.3-0.798-9.073-2.311L4.868,43.303l2.694-9.835C5.9,30.59,5.026,27.324,5.027,23.979C5.032,13.514,13.548,5,24.014,5 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974C24.014,42.974,24.014,42.974,24.014,42.974 M24.014,4C24.014,4,24.014,4,24.014,4C12.998,4,4.032,12.962,4.027,23.979c-0.001,3.367,0.849,6.685,2.461,9.622l-2.585,9.439c-0.094,0.345,0.002,0.713,0.254,0.967c0.19,0.192,0.447,0.297,0.711,0.297c0.085,0,0.17-0.011,0.254-0.033l9.687-2.54c2.828,1.468,5.998,2.243,9.197,2.244c11.024,0,19.99-8.963,19.995-19.98c0.002-5.339-2.075-10.359-5.848-14.135C34.378,6.083,29.357,4.002,24.014,4L24.014,4z"></path><path fill="#40c351" d="M35.176,12.832c-2.98-2.982-6.941-4.625-11.157-4.626c-8.704,0-15.783,7.076-15.787,15.774c-0.001,2.981,0.833,5.883,2.413,8.396l0.376,0.597l-1.595,5.821l5.973-1.566l0.577,0.342c2.422,1.438,5.2,2.198,8.032,2.199h0.006c8.698,0,15.777-7.077,15.78-15.776C39.795,19.778,38.156,15.814,35.176,12.832z"></path><path fill="#fff" fill-rule="evenodd" d="M19.268,16.045c-0.355-0.79-0.729-0.806-1.068-0.82c-0.277-0.012-0.593-0.011-0.909-0.011c-0.316,0-0.83,0.119-1.265,0.594c-0.435,0.475-1.661,1.622-1.661,3.956c0,2.334,1.7,4.59,1.937,4.906c0.237,0.316,3.282,5.259,8.104,7.161c4.007,1.58,4.823,1.266,5.693,1.187c0.87-0.079,2.807-1.147,3.202-2.255c0.395-1.108,0.395-2.057,0.277-2.255c-0.119-0.198-0.435-0.316-0.909-0.554s-2.807-1.385-3.242-1.543c-0.435-0.158-0.751-0.237-1.068,0.238c-0.316,0.474-1.225,1.543-1.502,1.859c-0.277,0.317-0.554,0.357-1.028,0.119c-0.474-0.238-2.002-0.738-3.815-2.354c-1.41-1.257-2.362-2.81-2.639-3.285c-0.277-0.474-0.03-0.731,0.208-0.968c0.213-0.213,0.474-0.554,0.712-0.831c0.237-0.277,0.316-0.475,0.474-0.791c0.158-0.317,0.079-0.594-0.04-0.831C20.612,19.329,19.69,16.983,19.268,16.045z" clip-rule="evenodd"></path>
      </svg>
    </a>
  </div>
</template>
  
<script>
  import 'preline';
</script>