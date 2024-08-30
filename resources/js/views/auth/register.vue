<template>
  <div>
    <!-- <DarkModeSwitcher /> -->
    <div class="container sm:px-10">
      <div class="overflow-scroll scrollbar-thin h-screen block xl:grid grid-cols-2 gap-4">
        <!-- BEGIN: Register Info -->
        <div class="hidden xl:flex flex-col min-h-screen">
          <a href="#" class="-intro-x flex items-center pt-5">
            <img
              alt="Result"
              class="h-10 w-auto"
              src="@/assets/images/logo.svg"
            />
            <span class="text-white text-lg ml-3"> Result </span>
          </a>
          <div class="my-auto">
            <img
              alt="Result"
              class="-intro-x w-2/3 -mt-16"
              src="@/assets/images/illustration.svg"
            />
            <div
              class="-intro-x text-white font-medium text-4xl leading-tight mt-10"
            >
              A few more clicks to <br />
              sign up to your account.
            </div>
            <div
              class="-intro-x mt-5 text-lg text-white text-opacity-70 dark:text-slate-400"
            >
              Manage everything in one place
            </div>
          </div>
        </div>
        <!-- END: Register Info -->
        <!-- BEGIN: Register Form -->
        <div class=" overflow-scroll scrollbar h-screen xl:h-auto flex py-5 xl:py-0 my-10 xl:my-0">
          <div
            class="xl:h-auto  flex-col  justify-center items-center overflow-scroll scrollbar-thin my-auto mx-auto xl:ml-20 bg-white dark:bg-darkmode-600 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto"
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
                src="@/assets/images/logo.svg"
              />
            </div>
            <h2 class="intro-x font-bold text-2xl xl:text-3xl text-center xl:text-left">
              Welcome
            </h2>
            <h2 class="intro-x text-2md xl:text-lg text-center xl:text-left">
              to Result
            </h2>
            <div v-if="!showVerifyEmailFinal">
              <div class="intro-x mt-8">
                <input
                  type="text"
                  v-model.trim="validate.name.$model"
                  class="intro-x login__input form-control py-3 px-4 block"
                  placeholder="Full Name"
                />
                <template v-if="validate.name.$error">
                  <div
                    v-for="(error, index) in validate.name.$errors"
                    :key="index"
                    class="text-danger mt-2"
                  >
                    {{ error.$message }}
                  </div>
                </template>
                <input
                  type="email"
                  v-model.trim="validate.email.$model"
                  class="intro-x login__input form-control py-3 px-4 block mt-4"
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
                <div class="w-auto relative">
                    <input
                      :type="fieldTypeConfirm"
                      v-model="formData.c_password"
                      class="intro-x login__input form-control py-3 px-4 block mt-4"
                      :class="[password_confirmed ? 'border-green-500' : 'border-red-500']"
                      placeholder="Password Confirmation"
                    />
                  <EyeIcon v-if="fieldTypeConfirm == 'password'" class="absolute top-2 right-2 z-[9999]  w-6 h-6 dark:text-white text-gray-800" @click="fieldTypeConfirm = 'text'"/>
                  <EyeOffIcon v-if="fieldTypeConfirm == 'text'" class="absolute top-2 right-2 z-[9999] w-6 h-6 dark:text-white text-gray-800" @click="fieldTypeConfirm = 'password'"/>
                </div>
                <template v-if="validate.c_password.$error">
                  <div
                    v-for="(error, index) in validate.c_password.$errors"
                    :key="index"
                    class="text-danger mt-2"
                  >
                    {{ error.$message }}
                  </div>
                </template>
                <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3">
                  <div class="col-span-3 h-full rounded"
                    :class="[finishedAmount > 0 ? 'bg-success' : 'bg-slate-50']"
                  >
                  </div>
                  <div
                    class="col-span-3 h-full rounded"
                    :class="[finishedAmount > 1 ? 'bg-success' : 'bg-slate-50']"
                  ></div>
                  <div
                    class="col-span-3 h-full rounded"
                    :class="[finishedAmount > 2 ? 'bg-success' : 'bg-slate-50']"
                  ></div>
                  <div
                    class="col-span-3 h-full rounded"
                    :class="[finishedAmount > 3 ? 'bg-success' : 'bg-slate-50']"
                  ></div>
                </div>
                <a @click.prevent="showPasswordStrengthModal = true"
                  href=""
                  class="intro-x text-slate-500 block mt-2 text-xs sm:text-sm"
                  >What is a Strong Password?
                </a>
                <!-- <input
                  type="text"
                  v-model.trim="validate.reff.$model"
                  class="intro-x login__input form-control py-3 px-4 block mt-4"
                  placeholder="Refferal Code"
                  id="r_c"
                />
                <template v-if="validate.reff.$error">
                  <div
                    v-for="(error, index) in validate.reff.$errors"
                    :key="index"
                    class="text-danger mt-2"
                  >
                    {{ error.$message }}
                  </div>
                </template> -->
              </div>
              <div
                class="mb-2 intro-x flex items-center text-slate-600 dark:text-slate-500 mt-4 text-xs sm:text-sm"
              >
                <input
                  id="remember-me"
                  v-model="agreement"
                  type="checkbox"
                  class="form-check-input border mr-2"
                />
                <label
                  class="cursor-pointer select-none"
                  for="remember-me"
                >                 
                  I Agree to the <br>
                  <a
                    class="text-primary dark:text-slate-200 ml-1"
                    href=""
                    @click.prevent="showPrivacyPolicyModal = true"
                    >Privacy Policy</a
                  > and
                  <a
                    class="text-primary dark:text-slate-200 ml-1"
                    href=""
                    @click.prevent="showTermsandCondtionsModal = true"
                    >Terms and Conditions</a
                  >                
                </label>
              </div>
              <div class="intro-x mt-5 xl:mt-8 text-center xl:text-left">
                <button
                  :disabled="!canSubmit"
                  @click.prevent="signup"
                  class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top"
                >
                  Sign Up
                </button>
                <button
                  @click.prevent="signin"
                  class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top mb-5"
                >
                  Sign In
                </button>
                <vue-recaptcha v-if="!canSubmit"
                  ref="recaptcha"
                  @verify="onCaptchaVerified"
                  @expired="onCaptchaExpired"
                  sitekey="6LcSW2EoAAAAAFm-zkxyJiM6e350KCnMD1rqFW5l"
                ></vue-recaptcha>
                
              </div>
            </div>
            <div v-else class="flex flex-col justify-center items-start gap-3">
              <h3 class="text-lg font-bold">{{ ('verify-email') }}</h3>
              <p>{{  ('verification-link-sent') }}</p>
              <button class="btn btn-primary w-full" @click="resendVerificationEmail">{{ ('resend')}}</button>
            </div>
          </div>
        </div>
        <!-- END: Register Form -->
      </div>
    </div>
  </div>

  <!-- BEGIN:  Failed Notification  -->
  <div id="failed-agrement-content" class="toastify-content hidden">
    <div class="w-full h-full flex">
      <XCircleIcon class="text-danger" />
      <div class="ml-4 mr-4">
        <div class="font-medium">Registration Failed!</div>
        <div class="text-slate-500 mt-1">You Must Agree to the Terms and Conditions to Start.</div>
      </div>
    </div>
  </div>
  <!-- End:  Faild Notification  -->

  <!-- success notification -->
  <div id="success-notification-content" class="toastify-content hidden">
    <div class="w-full h-full flex">
      <CheckCircleIcon class="text-success" />
      <div class="ml-4 mr-4">
        <div class="font-medium">Registration Successfull!</div>
        <div class="text-slate-500 mt-1">You have Registered Successfully!</div>
      </div>
    </div>
  </div>
  <!-- end  -->

  <!-- BEGIN:  Failed Notification  -->
  <div id="failed-notification-content" class="toastify-content hidden">
    <div class="w-full h-full flex">
      <XCircleIcon class="text-danger" />
      <div class="ml-4 mr-4">
        <div class="font-medium">Registration Failed!</div>
        <div class="text-slate-500 mt-1" id="msg">Your Registration has Failed! Try Again.</div>
      </div>
    </div>
  </div>
  <!-- End:  Faild Notification  -->

  <!-- BEGIN: Modal Content -->
  <Modal :show="showPasswordStrengthModal" @hidden="showPasswordStrengthModal = false">
    <ModalHeader>
      <h2 class="font-medium text-base mr-auto">Strong Password is Composed of : </h2>
    </ModalHeader>
    <ModalBody class="w-full">
      <p class="px-2 py-1">Creating a <strong>strong password</strong> is essential for safeguarding your online accounts. Here are some guidelines to help you construct a robust password:</p>
        <ol>
          <li><strong>Length Matters:</strong> Aim for a password that's at least <strong>12 characters long</strong>. Longer passwords are even better, so consider going for <strong>16 to 18 characters</strong> if possible.</li>
          <li><strong>Diverse Characters:</strong> Use a mix of different character types:
              <ul>
                  <li><strong>Uppercase letters</strong></li>
                  <li><strong>Lowercase letters</strong></li>
                  <li><strong>Numbers</strong></li>
                  <li><strong>Symbols</strong> (such as <code>!</code>, <code>@</code>, <code>#</code>, <code>$</code>, <code>%</code>, etc.)</li>
              </ul>
          </li>
          <li><strong>Avoid Common Words:</strong> Refrain from using easily guessable words or phrases. Avoid dictionary words, your name, birthdate, or other personal information.</li>
          <li><strong>Combine Unrelated Words:</strong> Create a memorable passphrase by combining two or more unrelated words. For example, "BlueBananaMountain" or "SunflowerPenguin."</li>
          <li><strong>Modify Characters:</strong> Replace some letters with special characters or numbers. For instance, change "password" to "p@ssw0rd!".</li>
          <li><strong>Unique for Each Account:</strong> Never reuse passwords across different services. Each account should have its own unique password.</li>
        </ol>
      <p>Remember, using a <strong>password manager</strong> can simplify this process. It generates strong, random passwords for you and securely stores them. Consider tools like <strong>1Password</strong>, <strong>Dashlane</strong>, or <strong>Bitwarden</strong> to manage your passwords across devices.</p>
      <p>Stay secure! 🔒</p>      
    </ModalBody>
    <ModalFooter>
      <button
        type="button"
        @click="showPasswordStrengthModal = false"
        class="btn btn-outline-secondary w-20 mr-1"
      >
        {{ ('Cancel') }}
      </button>
    </ModalFooter>
  </Modal>
  <!-- END: Modal Content -->

  <Modal :show="showTermsandCondtionsModal" @hidden="showTermsandCondtionsModal = false">
    <ModalHeader>
      <h2 class="font-medium text-base mr-auto">{{ ("terms-and-conditions") }}</h2>
    </ModalHeader>
    <ModalBody class="w-full">
      <p class="px-2 py-1">{{ ("password-detail") }}</p>
    </ModalBody>
    <ModalFooter>
      <button
        type="button"
        @click="showTermsandCondtionsModal = false"
        class="btn btn-outline-secondary w-20 mr-1"
      >
        {{ ('cancel')}}
      </button>
    </ModalFooter>
  </Modal>

  <Modal :show="showPrivacyPolicyModal" @hidden="showPrivacyPolicyModal = false">
    <ModalHeader>
      <h2 class="font-medium text-base mr-auto">{{ ("strong-password-title") }}</h2>
    </ModalHeader>
    <ModalBody class="w-full">
      <p class="px-2 py-1">{{ ("password-detail") }}</p>
    </ModalBody>
    <ModalFooter>
      <button
        type="button"
        @click="showPrivacyPolicyModal = false"
        class="btn btn-outline-secondary w-20 mr-1"
      >
        {{  ('cancel') }}
      </button>
    </ModalFooter>
  </Modal>

  <Modal
    :show="showVerifyEmail"
    @hidden="showVerifyEmail = false"
  >
    <a
      @click="showVerifyEmail = false"
      class="absolute right-0 top-0 mt-3 mr-3"
      href="javascript:;"
    >
      <XIcon class="w-8 h-8 text-slate-400" />
    </a>
    <ModalBody class="p-0">
      <div class="p-5 text-center">
        <CheckCircleIcon
          class="w-16 h-16 text-success mx-auto mt-3"
        />
        <div class="text-3xl mt-5">{{  ('regstration-success') }}</div>
        <div class="text-slate-500 mt-2">
          {{  ('verify-prompt') }}
        </div>
      </div>
      <div class="px-5 pb-8 text-center">
        <button
          type="button"
          @click="showVerifyEmail = false"
          class="btn btn-primary w-24"
        >
          {{ ('cancel') }}
        </button>
      </div>
    </ModalBody>
  </Modal>

  <myLoading v-show="loading" class="z-[9999]" />
</template>

<script setup>
import DarkModeSwitcher from "@/components/dark-mode-switcher/Main.vue";
import dom from "@left4code/tw-starter/dist/js/dom";
import { onMounted, computed, ref, reactive, toRefs } from "vue";
// import {
//   required,
//   minLength,
//   maxLength,
//   email,
//   url,
//   integer,
//   sameAs,
// } from '../../utils/i18n-validators';
import { required, email, minLength } from '@vuelidate/validators'
import { useVuelidate } from "@vuelidate/core";
// import { VueRecaptcha } from "vue-recaptcha";
import Toastify from "toastify-js";
import backendApi from "../../networkServices/api.js";
import { useAuthStore } from "../../stores/auth.js";
import myLoading from "@/components/myloading/Main.vue";
import { useRouter, useRoute } from "vue-router";
// import VOtpInput from "vue3-otp-input"; 

const fieldType = ref('password')
const fieldTypeConfirm = ref('password')
const canSubmit = ref(true);
const showPasswordStrengthModal = ref(false);
const showTermsandCondtionsModal = ref(false);
const showPrivacyPolicyModal = ref(false);
const showVerifyEmail = ref(false)
const showVerifyEmailFinal = ref(false)


// import vueRecaptcha from 'vue3-recaptcha2';

// const recaptcha = ref('')

// const recaptchaVerified = (response) => {
// 	}
// const recaptchaExpired = () => {
// 	  this.$refs.vueRecaptcha.reset();
// 	}
// const	recaptchaFailed = () => {
// 	}
// const	recaptchaError = (reason) => {
// 	}

// const onCaptchaVerified = () => {
//   canSubmit.value = true;
// };
// const onCaptchaExpired = () => {
//   canSubmit.value = false;
// };

const password = computed(() => {
  return formData.password;
});

const password_confirmed = computed(() => {
  if (formData.password != formData.c_password) {
    return false;
  }
  return true;
});

const finishedAmount = computed(() => {
  let tot = 0;
  if (hasCapital.value) {
    tot += 1;
  }
  if (hasNumber.value) {
    tot += 1;
  }
  if (hasSpecial.value) {
    tot += 1;
  }
  if (enoughLength.value) {
    tot += 1;
  }
  return tot;
});

const hasCapital = computed(() => {
  const hasCapitalLetter = /[A-Z]/.test(password.value);
  if (!hasCapitalLetter) {
    return false;
  }
  return true;
});

const enoughLength = computed(() => {
  if (password.value.length < 8) {
    return false;
  }
  return true;
});

const hasNumber = computed(() => {
  const hasNumber = /\d/.test(password.value);
  if (!hasNumber) {
    return false;
  }
  return true;
});

const hasSpecial = computed(() => {
  const hasSpecialCharacter = /[!@#$%^&*)(+=._-]/.test(password.value);
  if (!hasSpecialCharacter) {
    return false;
  }
  return true;
});

const formData = reactive({
  name: "",
  email: "",
  password: "",
  c_password: "",
});

const agreement = ref(false);
const rules = {
  name: {
    required,
  },
  email: {
    required,
    email
  },
  phone: {

  },
  password: {
    required,
    minLength: minLength(8),
  },
  c_password: {
    required,
  },
};
const validate = useVuelidate(rules, toRefs(formData));

// const formData2 = reactive({
//   name: "",
//   phone: "",
//   type: null,
//   country_code:"",
// });

// const rules2 = {
//   name: {
//     required,
//   },
//   phone: {
//     required
//   },
//   type: {
//     required,
//   },
// };

// const validate2 = useVuelidate(rules2, toRefs(formData2))

const router = useRouter();
const loading = ref(false);
const signup = async () => {
  validate.value.$touch();
  if (agreement.value == false || agreement.value == null) {
    Toastify({
      node: dom("#failed-agrement-content").clone().removeClass("hidden")[0],
      duration: 3000,
      newWindow: true,
      close: true,
      gravity: "center",
      position: "center",
      stopOnFocus: true,
    }).showToast();
    return;
  }
  if (validate.value.$invalid) {
    Toastify({
      node: dom("#failed-notification-content").clone().removeClass("hidden")[0],
      duration: 3000,
      newWindow: true,
      close: true,
      gravity: "center",
      position: "center",
      stopOnFocus: true,
    }).showToast();
  } else {
    //send request to the server for token
    loading.value = true;
    await backendApi
      .post("v1/auth/registerEmail", {
        name: formData.name,
        email: formData.email,
        password: formData.password,
        c_password: formData.c_password,
      })
      .then((response) => {
        // showVerifyEmail.value = true
        // showVerifyEmailFinal.value = true
        loading.value = false;
        const authStore = useAuthStore();
        authStore.access_token = response.data.authorisation.token;
        authStore.status = true;
        authStore.user_data = response.data.user;
        localStorage.setItem("access_token", response.data.authorisation.token);
        localStorage.setItem("user",JSON.stringify(response.data.user));

        Toastify({
          node: dom("#success-notification-content").clone().removeClass("hidden")[0],
          duration: 3000,
          newWindow: true,
          close: true,
          gravity: "center",
          position: "center",
          stopOnFocus: true,
        }).showToast();
        // if (authStore.user_data.type == 0) {
        //   router.push({ name: "adminDashboard" });
        // } else if (authStore.user_data.type == 1) {
        //   router.push({ name: "actorDashboard" });
        // }
        // else if (authStore.user_data.type == 2) {
        //   router.push({ name: "directorDashboard" });
        // }
        // else if (authStore.user_data.type == 3) {
        //   router.push({ name: "crewDashboard" });
        // } 
        // else if (authStore.user_data.type == 4) {
        //   router.push({ name: "requests" });
        // }
        // else if (authStore.user_data.type == 5) {
        //   router.push({ name: "dataEncoderDashboard" });
        // }
        // else {
          router.push("/");
        // }
      })
      .catch((error) => {
        loading.value = false;

        var message = document.getElementById('msg');
        message.innerHTML = error.response.data.data;

        Toastify({
          node: dom("#failed-notification-content").clone().removeClass("hidden")[0],
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
// const showOtp = ref(false)

// const signupOtp = async () => {
//   validate2.value.$touch();
//   if (agreement.value == false) {

//     Toastify({
//       node: dom("#failed-agrement-content").clone().removeClass("hidden")[0],
//       duration: 3000,
//       newWindow: true,
//       close: true,
//       gravity: "center",
//       position: "center",
//       stopOnFocus: true,
//     }).showToast();
//     return;
//   }
//   if (validate2.value.$invalid && phone_is_valid.value) {
//     Toastify({
//       node: dom("#failed-notification-content").clone().removeClass("hidden")[0],
//       duration: 3000,
//       newWindow: true,
//       close: true,
//       gravity: "center",
//       position: "center",
//       stopOnFocus: true,
//     }).showToast();
//   } else {
//     //send request to the server for token
//     loading.value = true;
//     await backendApi
//       .post("v1/auth/OTPRegister", {
//         name: formData2.name,
//         phone: formData2.phone.slice(1).replace( /\s/g, ''),
//         type: formData2.type,
//       })
//       .then((response) => {
//         // show otp 
//         showOtp.value = true;
//         loading.value = false;
       
//       })
//       .catch((error) => {
//         loading.value = false;
//         Toastify({
//           node: dom("#failed-notification-content").clone().removeClass("hidden")[0],
//           duration: 3000,
//           newWindow: true,
//           close: true,
//           gravity: "center",
//           position: "center",
//           stopOnFocus: true,
//         }).showToast();
//       });
//   }
// };

// const finalRegister = async (otp) => {
//   validate2.value.$touch();
//   if (agreement.value == false) {

//       Toastify({
//         node: dom("#failed-agrement-content").clone().removeClass("hidden")[0],
//         duration: 3000,
//         newWindow: true,
//         close: true,
//         gravity: "center",
//         position: "center",
//         stopOnFocus: true,
//       }).showToast();
//       return;
//       }
//   if (validate2.value.$invalid) {
//   }
//    else {
//     //send request to the server for token
//     loading.value = true;
//     await backendApi
//       .post("v1/auth/RegisterVerifyOTP", {
//         phone:  formData2.phone.slice(1).replace( /\s/g, ''),
//         otp: otp,
//       })
//       .then((response) => {
//         const authStore = useAuthStore();
//         authStore.access_token = response.data.authorisation.token;
//         authStore.status = true;
//         authStore.user_data = response.data.user;
//         authStore.has_paied = response.data.has_paied;
//         localStorage.setItem("access_token", response.data.authorisation.token);
//         localStorage.setItem("user",JSON.stringify(response.data.user));
//         Toastify({
//           node: dom("#success-notification-content").clone().removeClass("hidden")[0],
//           duration: 3000,
//           newWindow: true,
//           close: true,
//           gravity: "center",
//           position: "center",
//           stopOnFocus: true,
//         }).showToast();
//         if (authStore.user_data.type == 0) {
//           router.push({ name: "adminDashboard" });
//         } else if (authStore.user_data.type == 1) {
//           router.push({ name: "actorDashboard" });
//         }
//         else if (authStore.user_data.type == 2) {
//           router.push({ name: "directorDashboard" });
//         }
//         else if (authStore.user_data.type == 3) {
//           router.push({ name: "crewDashboard" });
//         } 
//         else if (authStore.user_data.type == 4) {
//           router.push({ name: "requests" });
//         }
//         else if (authStore.user_data.type == 5) {
//           router.push({ name: "dataEncoderDashboard" });
//         }
//         else {
//           router.push("/dashboard");
//         }
//       })
//       .catch((error) => {
//         console.log(error);
//         loading.value = false
//         Toastify({
//           node: dom("#invalid-otp-code").clone().removeClass("hidden")[0],
//           duration: 3000,
//           newWindow: true,
//           close: true,
//           gravity: "center",
//           position: "center",
//           stopOnFocus: true,
//         }).showToast();
//       });
//   }
// };
// const disable_resend = ref(false)
// const resendOTP = async () => {
//     //send request to the server for token
//     loading.value = true;
//     await backendApi
//       .post("v1/auth/resendOTP", {
//         phone:  formData2.phone.slice(1).replace( /\s/g, '')
//       })
//       .then((response) => {
//         loading.value = false;
//         disable_resend.value = true;
//       })
//       .catch((error) => {
//         loading.value = false
       
//       });
// };

const resendVerificationEmail = async () => {
    //send request to the server for token
    loading.value = true;
    await backendApi
      .get("v1/auth/resendVerificationLink")
      .then((response) => {
        if (authStore.user_data.type == 1) {
          router.push({ name: "dashboard" });
        } else {
          router.push("/");
        }
      })
      .catch((error) => {
        loading.value = false
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
// const phone_is_valid = ref(false)
// const getValidated = (event) => {
//   phone_is_valid.value = event.valid
// }
// const getCountry = (event) => {
//   formData2.country_code = event.dialCode
// }

const signin = () => {
  router.push({
    name: "login",
  });
};

const inputOptions = ref({
  "autofocus":true,
  "showDialCode":true,
  "placeholder":  ''
});

onMounted(() => {
  dom("body").removeClass("main").removeClass("error-page").addClass("login");

  // const urlParams = new URLSearchParams(window.location.search);
  // const referralCode = urlParams.get('r_c');

  // const referralField = document.getElementById("r_c");
  // referralField.value = referralCode;
});
</script>