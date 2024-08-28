import { createApp } from "vue";
import { createPinia } from "pinia";
import app from "./app.vue";
import router from "./router";
import globalComponents from "./global-components";
import utils from "./utils";
import "./assets/css/app.css";
import i18n from './utils/internationalize.js'
import interceptor from './networkServices/interceptor.js'
import "./assets/css/app.css";
import { useAuthStore  } from "./stores/auth.js";

interceptor()

const appp = createApp(app).use(i18n).use(router).use(createPinia());

globalComponents(appp);
utils(appp);

const authStore = useAuthStore()
authStore.initializeAuth()

appp.directive( "can", (el, binding) => {
    const userData = useAuthStore();
    if (!userData.getPermission.includes(binding.value)) {
        el.style.display = "none";
    }
});

appp.mount("#app");
