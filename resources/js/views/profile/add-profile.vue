<template>
    <div class="intro-y flex items-center mt-8">
      <h2 class="text-lg font-medium mr-auto">{{ $t("add_profile") }}</h2>
    </div>
    <div class="box grid grid-cols-12 gap-6 mt-5">
      <!-- BEGIN: Form Layout -->
      <div class="intro-y col-span-12 lg:col-span-6">
        <div class="intro-y  p-5">
          <div>
            <label for="f_n" class="form-label">First Name</label>
            <input v-model.trim="profile_data.first_name" id="f_n" type="text" class="form-control w-full" placeholder="Name" :class="{ 'border-danger': validateProfile.first_name.$error }"/>
            <template v-if="validateProfile.first_name.$error">
                <div
                v-for="(error, index) in validateProfile.first_name.$errors"
                :key="index"
                class="text-danger mt-2"
                >
                {{error.$message}}
                </div>
            </template>
          </div>
          <div>
            <label for="l_n" class="form-label">Last Name</label>
            <input v-model.trim="profile_data.last_name" id="l_n" type="text" class="form-control w-full" placeholder="Name" :class="{ 'border-danger': validateProfile.last_name.$error }"/>
            <template v-if="validateProfile.last_name.$error">
              <div
                v-for="(error, index) in validateProfile.last_name.$errors"
                :key="index"
                class="text-danger mt-2"
              >
                {{error.$message}}
              </div>
            </template>
          </div>
          <div>
            <label for="p_n" class="form-label">Phone Number</label>
            <input v-model.trim="profile_data.phone" id="p_n" type="text" class="form-control w-full" placeholder="Phone Number" :class="{ 'border-danger': validateProfile.phone.$error }"/>
            <template v-if="validateProfile.phone.$error">
              <div
                v-for="(error, index) in validateProfile.phone.$errors"
                :key="index"
                class="text-danger mt-2"
              >
                {{error.$message}}
              </div>
            </template>
          </div>
          <div>
            <label for="r" class="form-label">Region</label>
            <input v-model.trim="profile_data.region" id="r" type="text" class="form-control w-full" placeholder="Region" :class="{ 'border-danger': validateProfile.region.$error }"/>
            <template v-if="validateProfile.region.$error">
              <div
                v-for="(error, index) in validateProfile.region.$errors"
                :key="index"
                class="text-danger mt-2"
              >
                {{error.$message}}
              </div>
            </template>
          </div>
          <div>
            <label for="c" class="form-label">City</label>
            <input v-model.trim="profile_data.city" id="c" type="text" class="form-control w-full" placeholder="City" :class="{ 'border-danger': validateProfile.city.$error }"/>
            <template v-if="validateProfile.city.$error">
              <div
                v-for="(error, index) in validateProfile.city.$errors"
                :key="index"
                class="text-danger mt-2"
              >
                {{error.$message}}
              </div>
            </template>
          </div>
          <div>
            <label for="l_a" class="form-label">Living Address</label>
            <input v-model.trim="profile_data.special_address" id="l_a" type="text" class="form-control w-full" placeholder="Living Address" :class="{ 'border-danger': validateProfile.special_address.$error }"/>
            <template v-if="validateProfile.special_address.$error">
              <div
                v-for="(error, index) in validateProfile.special_address.$errors"
                :key="index"
                class="text-danger mt-2"
              >
                {{error.$message}}
              </div>
            </template>
          </div>
          <div class="input-form w-full mt-3">
            <label
                for="bank_iconcreate"
                class="form-label w-full flex flex-col sm:flex-row"
            >
              <div class="relative w-full h-32 border-[1px] border-dashed ring-2 ring-outline-2 flex justify-center items-center bg-gray-200 rounded-lg dark:bg-gray-800">
                  <img src="../../assets/images/logo.svg" class="h-full w-auto"/>
                  <p class="font-bold text-lg w-full text-center "> Click Here To Upload Your Profile Picture</p>
              </div>
            </label>
            <input
                id="bank_iconcreate"
                @change="uploadFile"
                type="file"
                name="file"
                class="form-control hidden"
                :class="{ 'border-danger': validateProfile.file.$error }"
            />
            <template v-if="validateProfile.file.$error">
                <div
                v-for="(error, index) in validateProfile.file.$errors"
                :key="index"
                class="text-danger mt-2"
                >
                {{error.$message}}
                </div>
            </template>
          </div>
        </div>
      </div>
      <div class="intro-y col-span-12 lg:col-span-6">
        <div class="intro-y p-5">          
          <div>
            <label for="b_n" class="form-label">Bank Name</label>
            <input v-model.trim="validateProfile.bank_name.$model" id="b_n" type="text" class="form-control w-full" placeholder="Name" :class="{ 'border-danger': validateProfile.bank_name.$error }"/>
            <template v-if="validateProfile.bank_name.$error">
                <div
                v-for="(error, index) in validateProfile.bank_name.$errors"
                :key="index"
                class="text-danger mt-2"
                >
                {{error.$message}}
                </div>
            </template>
          </div>
          <div>
            <label for="a_h_n" class="form-label">Account Holder Name</label>
            <input v-model.trim="validateProfile.account_holder_name.$model" id="a_h_n" type="text" class="form-control w-full" placeholder="Name" :class="{ 'border-danger': validateProfile.account_holder_name.$error }"/>
            <template v-if="validateProfile.account_holder_name.$error">
              <div
                v-for="(error, index) in validateProfile.account_holder_name.$errors"
                :key="index"
                class="text-danger mt-2"
              >
                {{error.$message}}
              </div>
            </template>
          </div>
          <div>
            <label for="a_n" class="form-label">Account Number</label>
            <input v-model.trim="validateProfile.account.$model" id="a_n" type="text" class="form-control w-full" placeholder="Name" :class="{ 'border-danger': validateProfile.account.$error }"/>
            <template v-if="validateProfile.account.$error">
              <div
                v-for="(error, index) in validateProfile.account.$errors"
                :key="index"
                class="text-danger mt-2"
              >
                {{error.$message}}
              </div>
            </template>
          </div>

          <div class="input-form w-full mt-3" id="rec">
            <label
                for="bank_iconcreate2"
                class="form-label w-full flex flex-col sm:flex-row"
            >
              <div class="relative w-full h-32 border-[1px] border-dashed ring-2 ring-outline-2 flex justify-center items-center bg-gray-200 rounded-lg dark:bg-gray-800">
                  <img src="../../assets/images/logo.svg" class="h-full w-auto"/>
                  <p class="font-bold text-lg w-full text-center "> Click Here To Upload Your Registration Payment Recipt</p>
              </div>
            </label>
            <input
                id="bank_iconcreate2"
                @change="uploadFile2"
                type="file"
                name="recipt"
                class="form-control hidden"
                :class="{ 'border-danger': validateProfile.recipt.$error }"
            />
            <template v-if="validateProfile.recipt.$error">
                <div
                v-for="(error, index) in validateProfile.recipt.$errors"
                :key="index"
                class="text-danger mt-2"
                >
                {{error.$message}}
                </div>
            </template>
          </div>
          
          <div v-can="'read profile'" class="text-right mt-5">
            <button type="button" class="btn btn-primary w-24" @click="addProfile">Save</button>
          </div>
        </div>
      </div>
    </div>        
    <!-- END: Form Layout -->

    <myLoading v-show="loading" class="z-[9999]" />

    <div id="success-get-content" class="toastify-content hidden">
      <div class="flex w-full h-full">
        <CheckCircleIcon class="text-success" />
        <div class="ml-4 mr-4">
            <div class="font-medium" id="s_message">Profile Registeration Successfull.</div>
        </div>
      </div>
    </div>

    <div id="failed-get-content" class="toastify-content hidden">
      <div class="flex w-full h-full">
      <XCircleIcon class="text-danger" />
      <div class="ml-4 mr-4">
          <div class="font-medium" id="message">Opration Failed</div>
      </div>
      </div>
    </div>
  </template>
  
<script setup>
import { ref, reactive, onMounted, toRefs } from "vue";
import Toastify from "toastify-js";
import { useAuthStore } from "@/stores/auth.js";
import backendApi from "../../networkServices/api.js";
import myLoading from "@/components/myloading/Main.vue";
import dom from "@left4code/tw-starter/dist/js/dom";
import { useRouter } from "vue-router";
import { required } from '@vuelidate/validators'
import { useVuelidate } from "@vuelidate/core";

const myrouter = useRouter();
const loading = ref(false);
const authStore = useAuthStore();

const uFile = ref(null);
const uRecipt = ref(null);
const data = ref([]);

const profile_data = reactive({
  first_name: "",
  last_name: "",
  phone: "",
  region: "",
  city: "",
  special_address: "",
  file:"",
  bank_name:"",
  account_holder_name:"",
  account:"",
  recipt:"",
})

// const profile_data = ref([
//   { name: "first_name", value: "", error: null },
//   { name: "last_name", value: "", error: null },
//   { name: "phone", value: "", error: null },
//   { name: "region", value: "", error: null },
//   { name: "city", value: "", error: null },
//   { name: "special_address", value: "", error: null },
//   { name: "file", value: "", error: null },
//   { name: "bank_name", value: "", error: null },
//   { name: "account_holder_name", value: "", error: null },
//   { name: "account", value: "", error: null },
//   { name: "recipt", value: "", error: null },
// ]);

const rules = {
  first_name: {
    required,
  },
  last_name: {
    required,
  },
  phone: {
    required,
  },
  region: {
    required,
  },
  city: {
    required,
  },
  special_address: {
    required,
  },
  file: {},
  recipt: {},
  bank_name: {
    required,
  },
  account_holder_name: {
    required,
  },
  account: {
    required,
  }
};
const validateProfile = useVuelidate(rules, toRefs(profile_data));

const uploadFile = (event) => {
    profile_data.file = event.target.files[0]
    let fr = new FileReader();
    fr.onload = () => {
        uFile.value = fr.result;
    };
    fr.readAsDataURL(profile_data.file);
}

const uploadFile2 = (event) => {
    profile_data.recipt = event.target.files[0]
    let fr = new FileReader();
    fr.onload = () => {
        uRecipt.value = fr.result;
    };
    fr.readAsDataURL(profile_data.recipt);
}

const addProfile = async () => {
  validateProfile.value.$touch();
  console.log(validateProfile.value)
  if (validateProfile.value.$invalid) {

    var message = document.getElementById('message');
    message.innerHTML = "One or More of The Data That You Entered Are Invalid. Please Try Again.";

    Toastify({
      node: dom("#failed-get-content")
        .clone()
        .removeClass("hidden")[0],
      duration: 3000,
      newWindow: true,
      close: true,
      gravity: "top",
      position: "right",
      stopOnFocus: true,
    }).showToast();
  } else {
    //send request to the server for token
    loading.value = true;

    await backendApi.post("v1/profile", {
      first_name: profile_data.first_name,
      last_name: profile_data.last_name,
      phonenumber: profile_data.phone,
      region: profile_data.region,
      city: profile_data.city,
      special_area: profile_data.special_address,
      profile_pic: profile_data.file,
      recipt: profile_data.recipt,
      bank_name: profile_data.bank_name,
      account_holder_name: profile_data.account_holder_name,
      account: profile_data.account,
    },{
    headers: {
        'Authorization': "Bearer " + authStore.access_token,
        'Content-Type': 'multipart/form-data'
    }})
    .then((response) => {
      //save to store user details and token
      loading.value = false;

      Toastify({
        node: dom("#success-get-content").clone().removeClass("hidden")[0],
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
      }).showToast();

      console.log('Profile added', response.data);
      authStore.profile = response.data.profile;
      // localStorage.setItem("user",JSON.stringify(response.data.user));
      
      //temporary fix
      authStore.logout();
      myrouter.push({ name: "login" });

      myrouter.push("/");
      console.log('final')
    })
    .catch((error) => {
      var message = document.getElementById('message');
      message.innerHTML = error.response.data.message;

      loading.value = false;

      Toastify({
        node: dom("#failed-get-content").clone().removeClass("hidden")[0],
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
      }).showToast();
    });
  }
};

onMounted(async () => {
  const userData = useAuthStore();

  if (authStore.user_data.profile !== null) {
    await backendApi.get("v1/profile/" + authStore.user_data.profile.id, {
    },{
    headers: {
        'Authorization': "Bearer " + authStore.access_token,
        'Content-Type': 'multipart/form-data'
    }})
    .then((response) => {
      //save to store user details and token
      data.value = response.data
      console.log(data)

      // const fNField = document.getElementById("f_n");
      // fNField.value = data.value.first_name
      
      // const lNField = document.getElementById("l_n");
      // lNField.value = data.value.last_name

      // const pNField = document.getElementById("p_n");
      // pNField.value = data.value.phonenumber
      profile_data.first_name = data.value.first_name
      profile_data.last_name = data.value.last_name
      profile_data.phone = data.value.phonenumber
      profile_data.region = data.value.region
      profile_data.city = data.value.city
      profile_data.special_address = data.value.special_area
      profile_data.file = data.value.profile_pic
      profile_data.bank_name = data.value.bank.bank_name
      profile_data.account_holder_name = data.value.bank.account_holder_name
      profile_data.account = data.value.bank.account

      // const rField = document.getElementById("r");
      // rField.value = data.value.region
      
      // const cField = document.getElementById("c");
      // cField.value = data.value.city
      
      // const lAField = document.getElementById("l_a");
      // lAField.value = data.value.special_area
      
      // const bNField = document.getElementById("b_n");
      // bNField.value = data.value.bank.bank_name
      
      // const aHNField = document.getElementById("a_h_n");
      // aHNField.value = data.value.bank.account_holder_name
      
      // const aNField = document.getElementById("a_n");
      // aNField.value = data.value.bank.account

      if(data.value.first_name != null) {
        const rec = document.getElementById("rec");
        rec.hidden = true;
      }
    })
    .catch((error) => {
      console.log(error)
      Toastify({
        node: dom("#failed-agrement-content").clone().removeClass("hidden")[0],
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
      }).showToast();
    });
  }
});
</script>
  