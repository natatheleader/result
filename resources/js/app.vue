<template>
  <!-- <div
    v-if="showMenu"
    class="h-screen w-screen fixed top-0 right-0 md:w-1/5 z-[9999] bg-gray-200 dark:bg-gray-800 dark:bg-opacity-50 bg-opacity-50 backdrop-blur-md dark:backdrop-blur-sm"
  >
    <div class="w-full h-auto flex justify-center items-start flex-col">
      <h1
        class="px-3 py-10 text-gray-800 dark:text-white w-full text-start font-bold text-2xl"
      >
        {{  $t('settings') }}
      </h1>
      <DarkModeSwitcher />
      <MainColorSwitcher />
      <div class="w-full">
        <label class="px-2">{{ $t("select-language") }}</label>
        <div class="mt-2">
          <TomSelect
            v-model="$i18n.locale"
            :options="{
              placeholder: 'Select your language',
            }"
            class="w-full"
          >
            <option v-for="locale in $i18n.availableLocales" :value="locale">
              {{ $t(locale) }}
            </option>
          </TomSelect>
        </div>
      </div>
    </div>
  </div> -->
  <!-- <div
    :class="[showMenu ? 'fixed top-5 right-0 z-[9999]' : 'fixed bottom-10 right-2']"
  
    class="bg-white z-[9999] shadow-lg fixed p-2 rounded-md"
  >
    <img
      v-if="!showMenu"
      @click="toggleSettings"
      src="./assets/images/setting.png"
      class="duration-75 hover:cursor-pointer animate-spin z-[9999] w-[30px] h-auto"
    />
    <img
      v-else
      @click="toggleSettings"
      src="./assets/images/closebutton.png"
      class="duration-75 hover:cursor-pointer z-[9999] w-[30px] h-auto"
    />
  </div> -->

  <router-view />
</template>

<script setup>
import { ref, computed, onMounted } from "vue";
// import DarkModeSwitcher from "@/components/dark-mode-switcher/Main.vue";
// import MainColorSwitcher from "@/components/main-color-switcher/Main.vue";
// import { useDarkModeStore } from "@/stores/dark-mode";
// import { useColorSchemeStore } from "@/stores/color-scheme";
// import dom from "@left4code/tw-starter/dist/js/dom";
// import backendApi from './networkServices/api.js'
// import { App as CapacitorApp } from '@capacitor/app';

// CapacitorApp.addListener('backButton', ({canGoBack}) => {
//   if(!canGoBack){
//     CapacitorApp.exitApp();
//   } else {
//     window.history.back();
//   }
// });


// const showInstallModal = ref(false)
// const darkModeStore = useDarkModeStore();
// const darkMode = computed(() => darkModeStore.darkMode);
// const colorSchemeStore = useColorSchemeStore();
// const colorScheme = computed(() => colorSchemeStore.colorScheme);

onMounted(() => {
  // switchColorScheme("theme-1");
});

// const setColorSchemeClass = () => {
//   dom("html")
//     .attr("class", colorScheme.value)
//     .addClass(darkMode.value ? "dark" : "");
// };

// const switchColorScheme = (colorScheme) => {
//   colorSchemeStore.setColorScheme(colorScheme);
//   setColorSchemeClass();
// };
// const showMenu = ref(false);
// const toggleSettings = () => {
//   showMenu.value = !showMenu.value;
// };
// const defferedPrompt = ref(null);
// const install = () => {
//   defferedPrompt.value.prompt();
// }

// const cancelInstall = () =>{
//   defferedPrompt.value = null;
//   showInstallModal.value = false;
// }

onMounted(async () => {
  window.addEventListener("beforeinstallprompt", e => {
        e.prompt();
      });window.addEventListener("appinstalled", () => {
        defferedPrompt.value = null;
      });

    //  check user data 
    // await backendApi.get('/dashboard').then((response)=>{
    //   console.log(response, "response success");
    // }).catch((error)=>{
    //   console.log(error, "response error");
    // })   
     // this.user_data = JSON.parse(localStorage.getItem('user'));
        // this.access_token = token 
        // this.status = true
});
</script>