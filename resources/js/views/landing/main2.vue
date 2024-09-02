<template>
  <div>

  <MainMenu />
  <Banner />

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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="420" height="315"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="420" height="315"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="420" height="315"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="420" height="315"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="420" height="315"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="420" height="315"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <iframe allow="fullscreen;" class="rounded-xl mx-auto" width="200" height="150"
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
        <!--  <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 text-white" href="#" aria-label="Result">Result</a>
        <p class="mt-3 text-xs sm:text-sm text-gray-600 text-neutral-400">© 2024 Result.</p>-->
        <h4 class="text-xs font-semibold text-gray-900 uppercase text-neutral-100">SHOP MENSTRUAL PADS</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="/products">Infinity Pads with FlexFoam</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="/products">Ultra Thin Pads</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="/products">Maxi Pads</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="/products">Overnight Pads</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="/products">Special Pads for Teens</a></p>
        </div>
      </div> 
      <!-- End Col -->

      <div>
        <h4 class="text-xs font-semibold text-gray-900 uppercase text-neutral-100">SHOP DAILY LINERS</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="#">Regular Liners</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="#">Thin Liners</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="#">Long Liners</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="#">Special Liners for Teens</a></p>
        </div>
      </div>
      <!-- End Col -->

      <div>
        <h4 class="text-xs font-semibold text-gray-900 uppercase text-neutral-100">MORE</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="#">Tips & Advice</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="#">Period Calculator</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="#">Offers</a></p>
        </div>
      </div>
      <!-- End Col -->

      <div>
        <h4 class="text-xs font-semibold text-gray-900 uppercase text-neutral-100">ABOUT US</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="#">We Care About Your Safety</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="#">We Care About the Environment</a></p>
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="#">We Care About All Women & Girls</a></p>
        </div>
      </div>
      <!-- End Col -->

      <div>
        <h4 class="text-xs font-semibold text-gray-900 uppercase text-neutral-100">HELP & SUPPORT</h4>

        <div class="mt-3 grid space-y-3 text-sm">
          <p><a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-200 hover:text-neutral-200 focus:text-neutral-200" href="#">Contact Us</a></p>
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->

    <div class="pt-5 mt-5 border-t border-gray-100 border-neutral-700">
      <div class="sm:flex sm:justify-between sm:items-center">
        <div class="flex flex-wrap items-center gap-3">
          <div class="col-span-full hidden lg:col-span-1 lg:block">
            <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 text-white" href="#" aria-label="I Serena">I Serena</a>
            <p class="mt-3 text-xs sm:text-sm text-gray-600 text-neutral-400">© 2024 I Serena.</p>
          </div>
          <!-- Language Dropdown -->
          <!-- <div class="hs-dropdown [--placement:top-left] relative inline-flex">
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
          </div> -->
          <!-- End Language Dropdown -->

          <!-- <div class="space-x-4 text-sm">
            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Terms</a>
            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Privacy</a>
            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Status</a>
          </div> -->
        </div>

        <div class="flex flex-wrap justify-between items-center gap-3">
          <div class="space-x-4 text-sm">
            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Terms</a>
            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Privacy</a>
            <a class="inline-flex gap-x-2 text-gray-600 hover:text-gray-800 focus:outline-none focus:text-gray-800 text-neutral-400 hover:text-neutral-200 focus:text-neutral-200" href="#">Status</a>
          </div>
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
  import MainMenu from '@/components/main-menu/Main.vue'
  import Banner from '@/components/banner/Main.vue'

  export default {
  components: {
    MainMenu,
    Banner
  }
}
</script>