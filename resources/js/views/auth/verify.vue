<template>
    <div>
      <div class="container sm:px-10">
        <div class="block xl:grid grid-cols-2 gap-4">
          <!-- BEGIN: Login Info -->
          <div class="hidden xl:flex flex-col min-h-screen">
            <a href="#" class="-intro-x flex items-center pt-5">
              <img
                alt="Result"
                class="h-10 w-auto"
                src="@/assets/images/logo.svg"
              />
            </a>
            <div class="my-auto">
              <img
                alt="Result"
                class="-intro-x w-1/2 -mt-16"
                src="@/assets/images/illustration.svg"
              />
              <div class="-intro-x text-white font-medium text-4xl leading-tight mt-10">
                Welcome<br />
              </div>
              <div
                class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400"
              >
                to Result
              </div>
            </div>
          </div>
          <!-- END: Login Info -->
          <!-- BEGIN: Login Form -->
          <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div v-if="userData.user_data.email != null"
              class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto"
            >
              <div class="w-full flex justify-center items-center mb-2 md:hidden">
                <img
                  alt="Result"
                  class="h-[100px] w-auto dark:hidden"
                  src="@/assets/images/logo.svg"
                />
                <img
                  alt="Result"
                  class="h-[100px] w-auto hidden dark:block"
                  src="@/assets/images/illustration.svg"
                />
              </div>
  
              <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                Verify your Email
              </h2>
              <p class="py-5">Email Sent</p>
              <div class="intro-x  text-center xl:text-left w-full">
                <button
                  :disabled="resendText"
                  @click="verifyEmail"
                  class="btn btn-primary py-3 px-4  xl:mr-3 align-top w-full"
                >
                  <span v-if="resendText">email-sent</span>
                  <span v-else>Resend Email</span>
                </button>
                <button
                  @click="checkVerification"
                  class="btn btn-primary py-3 mt-2 px-4  xl:mr-3 align-top w-full"
                >
                  <span>Check if Verified</span>
                </button>
              </div>
            </div>
            <div v-else
              class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto"
            >
              <div class="w-full flex justify-center items-center mb-2 md:hidden">
                <img
                  alt="Result"
                  class="h-[100px] w-auto dark:hidden"
                  src="@/assets/images/logo.svg"
                />
                <img
                  alt="Result"
                  class="h-[100px] w-auto hidden dark:block"
                  src="@/assets/images/illustration.svg"
                />
              </div>
  
              <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                Verify your phone
              </h2>
              <p v-if="!otpSent" class="py-5">Please verify your phone number</p>
              <p v-if="otpSent" class="py-5">we have sent verification code to your email</p>
              <v-otp-input v-if="otpSent"
                        ref="otpInput"
                        input-classes="otp-input rounded-md w-16 mx-2 dark:text-gray-900"
                        separator=" "
                        :num-inputs="4"
                        :should-auto-focus="true"
                        :is-input-num="true"
                        :conditionalClass="['one', 'two', 'three', 'four']"
                        :placeholder="['', '', '', '']"
                        @on-complete="verifyOTPFinal"
                      />
              <div class="intro-x  text-center xl:text-left w-full">
                <button v-if="!otpSent"
                  :disabled="!canSubmit"
                  @click="verifyOtp"
                  class="btn btn-primary py-3 px-4 w-full  xl:mr-3 align-top "
                >
                  Send Verification code
                </button>
                <button v-else
                  :disabled="!canSubmit"
                  @click="verifyOtp"
                  class="btn btn-primary py-3 px-4 w-full  xl:mr-3 align-top "
                >
                  {{  resendText }}
                </button>
              </div>
            </div>
          </div>
          <!-- END: Login Form -->
        </div>
      </div>
    </div>
    <div id="failed-agrement-contentt" class="toastify-content hidden">
        <div class="flex w-full h-full">
        <XCircleIcon class="text-danger" />
        <div class="ml-4 mr-4">
            <div class="font-medium">opration-failed</div>
        </div>
        </div>
    </div>
    
    <myLoading v-show="loading" class="z-[9999]" />
  </template>
  
  <script setup>
  import dom from "@left4code/tw-starter/dist/js/dom";
  import { onMounted, reactive, toRefs, ref, computed } from "vue";
  import { useVuelidate } from "@vuelidate/core";
  import Toastify from "toastify-js";
  import backendApi from "../../networkServices/api.js";
  import { useAuthStore } from "../../stores/auth.js";
  import myLoading from "@/components/myloading/Main.vue";
  import { useRouter, useRoute } from "vue-router";

  const userData = useAuthStore()
  const loading = ref(false);
  const showForgotModal = ref(false);
  const myemail = ref(null);
  const myerror = ref(null);
  const canSubmit = ref(true);
  const myrouter = useRouter();
  const route = useRoute();
  const otpInput = ref(null)
  const otpSent = ref(false)

  const checkVerification = () => {
    localStorage.removeItem('user')
    myrouter.push('/login')
  }

  const resendText = ref(false)
  const verifyEmail = async () => {
    await backendApi
      .get("v1/auth/resendVerificationLink")
      .then((response) => {
        resendText.value = true
      })
      .catch((error) => {
        Toastify({
          node: dom("#failed-agrement-contentt").clone().removeClass("hidden")[0],
          duration: 3000,
          newWindow: true,
          close: true,
          gravity: "center",
          position: "center",
          stopOnFocus: true,
        }).showToast();
      });
  };

  onMounted(() => {
    dom("body").removeClass("main").removeClass("error-page").addClass("login");
    userData.value = useAuthStore()
  });
  </script>
  