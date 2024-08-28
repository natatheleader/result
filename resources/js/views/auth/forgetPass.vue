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
                Reset Your Password<br />
              </div>
              <div
                class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400"
              >
              A few more clicks to <br />
              sign in to your account.
              </div>
            </div>
          </div>
          <!-- END: Login Info -->
          <!-- BEGIN: Login Form -->
          <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
            <div
              class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto"
            >
              <div class="w-full flex justify-center items-center mb-2 md:hidden">
                <img
                  alt="Result"
                  class="h-[100px] w-auto dark:hidden"
                  src="@/assets/images/logo.svg"
                />
                <img
                  alt="Result-logo"
                  class="h-[100px] w-auto hidden dark:block"
                  src="@/assets/images/logo.svg"
                />
              </div>
  
              <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
                Set a New Password
              </h2>
              <form @submit.prevent="resetPassword">
                <div class="intro-x mt-8">
                  <input
                    v-model.trim="validate.email.$model"
                    type="text"
                    class="intro-x login__input form-control py-3 px-4 block"
                    placeholder="Email"
                  />
                  <template v-if="validate.email.$error">
                    <div
                      v-for="(error, index) in validate.email.$errors"
                      :key="index"
                      class="text-danger mt-2"
                    >
                      {{ error.$message }}
                    </div>
                  </template>
                  <input
                    v-model.trim="validate.password.$model"
                    type="password"
                    class="intro-x login__input form-control py-3 px-4 block mt-4"
                    placeholder="Password"
                  />
                  <template v-if="validate.password.$error">
                    <div
                      v-for="(error, index) in validate.password.$errors"
                      :key="index"
                      class="text-danger mt-2"
                    >
                      {{ error.$message }}
                    </div>
                  </template>
                  <input
                    v-model.trim="validate.password_confirmation.$model"
                    type="password"
                    class="intro-x login__input form-control py-3 px-4 block mt-4"
                    placeholder="Password Confirmation"
                  />
                  <template v-if="validate.password_confirmation.$error">
                    <div
                      v-for="(error, index) in validate.password_confirmation.$errors"
                      :key="index"
                      class="text-danger mt-2"
                    >
                      {{ error.$message }}
                    </div>
                  </template>
                </div>
              </form>
              <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                <button
                  :disabled="!canSubmit"
                  @click="resetPassword"
                  class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top"
                >
                  Reset Password
                </button>
                <!-- <vue-recaptcha
                    ref="recaptcha"
                    @verify="onCaptchaVerified"
                    @expired="onCaptchaExpired"
                    sitekey="6LflWtgkAAAAADJFlSfXF0bzR2o2fJ9w_6UFQ6qk"
                  >
                  </vue-recaptcha> -->
              </div>
              <!-- <div
                  class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left"
                ><br/>
                  {{ $t('terms-conditions') }}
                  <a class="text-primary dark:text-slate-200" href=""
                    >{{$t('terms-and-conditions')}}</a
                  >
                  &
                  <a class="text-primary dark:text-slate-200" href=""
                    >{{ $t('privacy-policy') }}</a
                  >
                </div> -->
            </div>
          </div>
          <!-- END: Login Form -->
        </div>
      </div>
    </div>

    <myLoading v-show="loading" class="z-[9999]" />
    <div id="failed-agrement-contentt" class="toastify-content hidden flex">
      <XCircleIcon class="text-danger" />
      <div class="ml-4 mr-4">
        <div class="font-medium">"opration-failed"</div>
        <div class="text-slate-500 mt-1">"password-reser-error'""</div>
      </div>
    </div>

    <div id="failed-agrement-content" class="toastify-content hidden flex">
      <XCircleIcon class="text-danger" />
      <div class="ml-4 mr-4">
        <div class="font-medium">Autentication Failed</div>
        <div class="text-slate-500 mt-1">invalid username or password</div>
      </div>
    </div>

    <div id="reset-email-success" class="toastify-content hidden">
      <div class="w-full h-full flex">
        <CheckCircleIcon class="text-success" />
        <div class="ml-4 mr-4">
          <div class="font-medium">Password Reset Successfully!</div>
          <div class="text-slate-500 mt-1"></div>
        </div>
      </div>
    </div>
    <myLoading v-show="loading" class="z-[9999]" />

  </template>
  
  <script setup>
  import dom from "@left4code/tw-starter/dist/js/dom";
  import { onMounted, reactive, toRefs, ref, computed } from "vue";
  import { useVuelidate } from "@vuelidate/core";
  import { required } from '@vuelidate/validators'
  import Toastify from "toastify-js";
  import backendApi from "../../networkServices/api.js";
  import { useAuthStore } from "../../stores/auth.js";
  import myLoading from "@/components/myloading/Main.vue";
  import { useRouter, useRoute } from "vue-router";
  
  const loading = ref(false);
  const showForgotModal = ref(false);
  const myemail = ref(null);
  const myerror = ref(null);
  const canSubmit = ref(true);
  const myrouter = useRouter();
  const route = useRoute();
  
  const formData = reactive({
    email: "",
    password: "",
    password_confirmation: "",
    token: "",
  });
  
  const rules = {
    email: {
      required,
    },
    password: {
      required,
    },
    password_confirmation: {
      required,
    },
    token: {
      required,
    },
  };
  
  const validate = useVuelidate(rules, toRefs(formData));
  
  const resetPassword = async () => {
    validate.value.$touch();
    if (validate.value.$invalid) {
    } else {
      //send request to the server for token
      await backendApi
        .post("v1/auth/resetPassword", formData)
        .then((response) => {
          //save to store user details and token
          // const authStore = useAuthStore();
          // authStore.access_token = response.data.authorisation.token;
          // authStore.user_data = response.data.user;
          // authStore.status = true;
          // localStorage.setItem("access_token", response.data.authorisation.token);
          myrouter.push({ name: "login" });
          // if (authStore.user_data.type == 1) {
          //   myrouter.push({ name: "side-menu-dashboard-overview-1" });
          // } else {
          //   myrouter.push("/dashboard");
          // }
          Toastify({
            node: dom("#reset-email-success").clone().removeClass("hidden")[0],
            duration: 3000,
            newWindow: true,
            close: true,
            gravity: "center",
            position: "center",
            stopOnFocus: true,
          }).showToast();
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
    }
  };
  
  onMounted(() => {
    dom("body").removeClass("main").removeClass("error-page").addClass("login");

    const authStore = useAuthStore();
    if (authStore.status == true) {
      authStore.logout();
    }

    formData.token = route.params.token;
  });
  </script>