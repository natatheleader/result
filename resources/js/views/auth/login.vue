<template>
  <div>
    <!-- <DarkModeSwitcher /> -->

    <!-- <div class="w-full h-auto flex justify-center items-start flex-col">
      <h1
        class="px-3 py-10 text-gray-800 dark:text-white w-full text-start font-bold text-2xl"
      >
        {{  $t('settings') }}
      </h1> -->
      <!-- <DarkModeSwitcher /> -->
      <!-- <MainColorSwitcher /> -->
      <!-- <div class="w-full">
        <label class="px-2">{{ $t("select-language") }}</label>
        <div class="mt-2"> -->
          <!-- <TomSelect
            v-model="$i18n.locale"
            :options="{
              placeholder: 'Select your language',
            }"
            class="w-full"
          >
            <option v-for="locale in $i18n.availableLocales" :value="locale">
              {{ $t(locale) }}
            </option>
          </TomSelect> -->
        <!-- </div>
      </div>
    </div> -->

    <div class="container sm:px-10">
      <div class="block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Login Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
          <a href="" class="-intro-x flex items-center pt-5">
            <img
              alt="Result"
              class="w-6"
              src="@/assets/images/logo.svg"
            />
            <span class="text-white text-lg ml-3"> Result </span>
          </a>
          <div class="my-auto">
            <img
              alt="Result"
              class="-intro-x w-1/2 -mt-16"
              src="@/assets/images/illustration.svg"
            />
            <div
              class="-intro-x text-white font-medium text-4xl leading-tight mt-10"
            >
              A few more clicks to <br />
              sign in to your account.
            </div>
            <div
              class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400"
            >
              Manage everything in one place
            </div>
          </div>
        </div>
        <!-- END: Login Info -->
        <!-- BEGIN: Login Form -->
        <div class="h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
          <div
            class="my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto"
          >
            <h2
              class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left"
            >
              Sign In
            </h2>
            <div class="intro-x mt-2 text-slate-400 xl:hidden text-center">
              A few more clicks to sign in to your account. Manage all everything 
              in one place
            </div>
            <form @submit.prevent="login">
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
                <div class="w-auto relative">
                  <input
                    v-model.trim="validate.password.$model"
                    :type="fieldType"
                    class="intro-x login__input form-control py-3 px-4 block mt-4"
                    placeholder="Password"
                  />
                  <EyeIcon v-if="fieldType == 'password'" class="absolute top-2 right-2 z-[9999]  w-6 h-6 dark:text-white text-gray-800" @click="fieldType = 'text'"/>
                  <EyeOffIcon v-if="fieldType == 'text'" class="absolute top-2 right-2 z-[9999] w-6 h-6 dark:text-white text-gray-800" @click="fieldType = 'password'"/>
                </div>
                <template v-if="validate.password.$error">
                  <div
                    v-for="(error, index) in validate.password.$errors"
                    :key="index"
                    class="text-danger mt-2"
                  >
                    {{ error.$message }}
                  </div>
                </template>
              </div>
              <div
                class="intro-x flex text-slate-600 dark:text-slate-500 text-xs sm:text-sm mt-4"
              >
                <div class="flex items-center mr-auto">
                  <input
                    id="remember-me"
                    type="checkbox"
                    class="form-check-input border mr-2"
                  />
                  <label class="cursor-pointer select-none" for="remember-me"
                    >Remember me</label>
                </div>
                <a href="" @click.prevent="forgetPassword()">Forgot Password?</a>
              </div>
            </form>
            <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
              <button
                :disabled="!canSubmit"
                @click="login"
                class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top"
              >
                Login
              </button>
              <button
                class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top"
                @click.prevent="register"
              >
                Register
              </button>
            </div>
            <div
              class="intro-x mt-10 xl:mt-24 text-slate-600 dark:text-slate-500 text-center xl:text-left"
            >
              By signin up, you agree to our
              <a class="text-primary dark:text-slate-200" href=""
                >Terms and Conditions</a
              >
              &
              <a class="text-primary dark:text-slate-200" href=""
                >Privacy Policy</a
              >
            </div>
          </div>
        </div>
        <!-- END: Login Form -->
      </div>
    </div>
  </div>

  <myLoading v-show="loading" class="z-[9999]" />
  
  <div id="failed-agrement-contentt" class="toastify-content hidden">
    <div class="w-full h-full flex">
      <XCircleIcon class="text-danger" />
      <div class="ml-4 mr-4">
        <div class="font-medium">Something Went Wrong! Please Try Again.</div>
        <div class="text-slate-500 mt-1">Password Reset Error</div>
      </div>
    </div>
  </div>

  <div id="reset-email-sent" class="toastify-content hidden">
    <div class="w-full h-full flex">
      <CheckCircleIcon class="text-success" />
      <div class="ml-4 mr-4">
        <div class="font-medium">Reset Email Sent!</div>
        <div class="text-slate-500 mt-1">Password Reset Email Have Successfully Sent!</div>
      </div>
    </div>
  </div>

  <div id="failed-agrement-content" class="toastify-content hidden">
    <div class="w-full h-full flex ">
    <XCircleIcon class="text-danger" />
    <div class="ml-4 mr-4">
      <div class="font-medium">Authentication Failed</div>
      <div class="text-slate-500 mt-1">Invalid Username/Password. Please Insert The Valid Credentials.</div>
    </div>
    </div>
  </div>

  <Modal :show="showResponse" @hidden="showResponse = false">
    <ModalBody class="p-0">
      <div class="p-5 text-center">
        <CheckCircleIcon class="w-16 h-16 text-success mx-auto mt-3" />
        <div class="text-3xl mt-5">Email Sent Successfully!</div>
        <div class="text-slate-500 mt-2">
          Password Reset Link Has Been Sent Successfully
        </div>
      </div>
      <div class="px-5 pb-8 text-center">
        <button type="button" @click="showResponse = false" class="btn btn-primary w-24">
          Cancel
        </button>
      </div>
    </ModalBody>
  </Modal>

  <!-- BEGIN: Add Modal  -->
  <Modal :show="showForgotModal" @hidden="showForgotModal = false">
    <form class="validate-form w-full" @submit.prevent="sendmeLink">
      <ModalBody class="flex flex-col gap-4 gap-y-3">
        <div class="w-full">
          <div class="input-form w-full">
            <input
              id="validation-form-1"
              v-model="myemail"
              type="email"
              name="email"
              placeholder="Email"
              class="form-control"
            />
          </div>
          <p class="dark:text-white text-red-900 px-2 py-2" v-if="myerror != null">
            {{ myerror }}
          </p>
        </div>
      </ModalBody>
      <ModalFooter>
        <button
          type="button"
          @click="showForgotModal = false"
          class="btn btn-outline-secondary w-20 mr-1"
        >
          Cancel
        </button>
        <button type="submit" class="btn btn-primary w-32" @click="sendmeLink">
          Reset Password
        </button>
      </ModalFooter>
    </form>
  </Modal>
  <!-- End Add modal -->
  <myLoading v-show="loading" class="z-[9999]" />

</template>

<script setup>
  import DarkModeSwitcher from "@/components/dark-mode-switcher/Main.vue";
  import dom from "@left4code/tw-starter/dist/js/dom";
  import { onMounted, reactive, toRefs, ref, computed, watchEffect } from "vue";
  import { required } from '@vuelidate/validators'
  import { useVuelidate } from "@vuelidate/core";
  import Toastify from "toastify-js";
  import backendApi from "../../networkServices/api.js";
  import { useAuthStore } from "../../stores/auth.js";
  import myLoading from "@/components/myloading/Main.vue";
  import { useRouter, useRoute } from "vue-router";

  const fieldType = ref('password')

  const myrouter = useRouter();
  const authStore = useAuthStore();
  
  const loading = ref(false);
  const showForgotModal = ref(false);
  const myemail = ref(null);
  const myerror = ref(null);
  const canSubmit = ref(true);

  const route = useRoute();

  const formData = reactive({
    email: "",
    password: "",
  });

  const register = () => {
    myrouter.push({
      name: "register",
    });
  };

  const rules = {
    email: {
      required,
    },
    password: {
      required,
    },
  };

  const validate = useVuelidate(rules, toRefs(formData));

  const login = async () => {

    validate.value.$touch();
    if (validate.value.$invalid) {
    } else {
      //send request to the server for token
      await backendApi.post("v1/auth/loginEmail", {
        email: formData.email,
        password: formData.password,
      })
      .then((response) => {
        //save to store user details and token
        // console.log('loged in', response.data);
        authStore.access_token = response.data.authorisation.token;
        authStore.user_data = response.data.user;
        authStore.status = true;
        authStore.profile = response.data.profile;
        authStore.register = response.data.register;
        // authStore.has_paied = response.data.has_paied;
        localStorage.setItem("access_token", response.data.authorisation.token);
        localStorage.setItem("user",JSON.stringify(response.data.user));
        localStorage.setItem("profile",JSON.stringify(response.data.profile));
        localStorage.setItem("register",response.data.register);
        // localStorage.setItem('has_paied',response.data.has_paied);
        // if (authStore.user_data.type == 0) {
        //   myrouter.push({ name: "adminDashboard" });
        // } else if (authStore.user_data.type == 1) {
        //   myrouter.push({ name: "actorDashboard" });
        // }
        // else if (authStore.user_data.type == 2) {
        //   myrouter.push({ name: "directorDashboard" });
        // }
        // else if (authStore.user_data.type == 3) {
        //   myrouter.push({ name: "crewDashboard" });
        // } 
        // else if (authStore.user_data.type == 4) {
        //   myrouter.push({ name: "requests" });
        // }
        // else if (authStore.user_data.type == 5) {
        //   myrouter.push({ name: "dataEncoderDashboard" });
        // }
        // else {
          myrouter.push("/");
        // }
        // console.log('final')
      })
      .catch((error) => {
        console.log(error)
        Toastify({
          node: dom("#failed-agrement-content").clone().removeClass("hidden")[0],
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

  const showResponse = ref(false);
  const forgetPassword = () => {
    showForgotModal.value = true;
  };

  const sendmeLink = async () => {
    if (myemail.value == null) {
      myerror.value = $t('enter-your-email');
    } else {
      loading.value = true;
      await backendApi
        .post("v1/auth/forgetPassword", {
          email: myemail.value,
        })
        .then((response) => {
          // show modal here
          showResponse.vaue = true;
          showForgotModal.value = false;
          loading.value = false;
          Toastify({
            node: dom("#reset-email-sent").clone().removeClass("hidden")[0],
            duration: 3000,
            newWindow: true,
            close: true,
            gravity: "center",
            position: "center",
            stopOnFocus: true,
          }).showToast();
        })
        .catch((error) => {
          console.log(error);
          loading.value = false;
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

  const inputOptions = ref({
    "autofocus":true,
    "showDialCode":true,
    "placeholder":  ''
  })

  onMounted(() => {
    dom("body").removeClass("main").removeClass("error-page").addClass("login");
    if (authStore.status == true) {
      authStore.logout();
    }
  });
</script>