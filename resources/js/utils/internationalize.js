import messages from "@intlify/unplugin-vue-i18n/messages";
import { createI18n } from "vue-i18n";
const i18n = createI18n({
  legacy: false,
  globalInjection: true,
  locale: "en",
  fallbackLocale: "en",
  availableLocales: ["en", "am"],
  messages: messages,
});

export default i18n 
export const instance = i18n.global