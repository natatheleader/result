<template>
  <div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">Add your Complain</h2>
  </div>
  <div class="box grid grid-cols-12 gap-6 mt-5">
    <!-- BEGIN: Form Layout -->
    <div class="intro-y col-span-12 lg:col-span-6">
      <div class="intro-y  p-5">
        <div>
          <label for="crud-form-1" class="form-label">Complain Title</label>
          <input v-model.trim="validateComplain.title.$model" id="crud-form-1" type="text" class="form-control w-full" placeholder="Complain Title" :class="{ 'border-danger': validateComplain.title.$error }"/>
          <template v-if="validateComplain.title.$error">
              <div
              v-for="(error, index) in validateComplain.title.$errors"
              :key="index"
              class="text-danger mt-2"
              >
              {{error.$message}}
              </div>
          </template>
        </div>
        <div class="mt-3">
          <label>Description</label>
          <div class="mt-2">
            <ClassicEditor v-model.trim="validateComplain.description.$model" :config="editorConfig" :class="{ 'border-danger': validateComplain.description.$error }" />
          </div>
          <template v-if="validateComplain.description.$error">
              <div
              v-for="(error, index) in validateComplain.description.$errors"
              :key="index"
              class="text-danger mt-2"
              >
              {{error.$message}}
              </div>
          </template>
          
        </div>
        <div class="text-right mt-5">
          <!-- <button type="button" class="btn btn-outline-secondary w-24 mr-1">
            Cancel
          </button> -->
          <button type="button" class="btn btn-primary w-24" @click="addComplain">Save</button>
        </div>
      </div>
    </div>
  </div>        
  <!-- END: Form Layout -->

  <div id="success-notification-content" class="toastify-content hidden flex">
    <div class="w-full h-full flex">
      <CheckCircleIcon class="text-success" />
      <div class="ml-4 mr-4">
        <div class="font-medium">Complain Registered Successfully!</div>
        <div class="text-slate-500 mt-1"></div>
      </div>
    </div>
  </div>

  <div id="failed-notification-content" class="toastify-content hidden flex">
    <div class="w-full h-full flex">
      <XCircleIcon class="text-danger" />
      <div class="ml-4 mr-4">
        <div class="font-medium">Complain Registration Failed!</div>
        <div class="text-slate-500 mt-1">Check The Fields and Try Again.</div>
      </div>
    </div>
  </div>

  <myLoading v-show="loading" class="z-[9999]" />
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

const editorConfig = {
    toolbar: {
      items: ["bold", "italic", "link"],
    },
};

const complain_data = reactive({
  title: "",
  description: ""
})

const rules = {
  title: {
    required,
  },
  description: {
    required,
  },
};
const validateComplain = useVuelidate(rules, toRefs(complain_data));

const addComplain = async () => {
  validateComplain.value.$touch();
  if (validateComplain.value.$invalid) {
    Toastify({
      node: dom("#failed-notification-content")
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

    await backendApi.post("v1/complain", {
      complain_title: complain_data.title,
      complain_description: complain_data.description,
    },{
    headers: {
        'Authorization': "Bearer " + authStore.access_token,
        'Content-Type': 'multipart/form-data'
    }})
    .then((response) => {
      Toastify({
        node: dom("#success-notification-content")
          .clone()
          .removeClass("hidden")[0],
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
      }).showToast();

      myrouter.push("/");
    })
    .catch((error) => {
      Toastify({
        node: dom("#failed-notification-content").clone().removeClass("hidden")[0],
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
  
});
</script>
  