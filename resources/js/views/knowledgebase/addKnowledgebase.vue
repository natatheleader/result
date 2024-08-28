<template>
    <div class="intro-y flex items-center mt-8">
      <h2 class="text-lg font-medium mr-auto">{{ $t("add_knowledgebase") }}</h2>
    </div>
    <div class="box grid grid-cols-12 gap-6 mt-5">
      <!-- BEGIN: Form Layout -->
      <div class="intro-y col-span-12 lg:col-span-6">
        <div class="intro-y  p-5">
          <div>
            <label for="crud-form-1" class="form-label">File Name</label>
            <input v-model.trim="validateKnowledgebase.title.$model" id="crud-form-1" type="text" class="form-control w-full" placeholder="Name" :class="{ 'border-danger': validateKnowledgebase.title.$error }"/>
            <template v-if="validateKnowledgebase.title.$error">
                <div
                v-for="(error, index) in validateKnowledgebase.title.$errors"
                :key="index"
                class="text-danger mt-2"
                >
                {{error.$message}}
                </div>
            </template>
          </div>
          <div class="mt-3">
            <label for="crud-form-2" class="form-label">Category</label>
            <TomSelect id="crud-form-2" v-model.trim="validateKnowledgebase.catagory.$model" class="w-full" :class="{ 'border-danger': validateKnowledgebase.catagory.$error }">
              <option value="1">Company Info</option>
              <option value="2">Property Guide</option>
              <option value="3">Training</option>
              <option value="4">Other</option>
            </TomSelect>

            <template v-if="validateKnowledgebase.catagory.$error">
                <div
                v-for="(error, index) in validateKnowledgebase.catagory.$errors"
                :key="index"
                class="text-danger mt-2"
                >
                {{error.$message}}
                </div>
            </template>
          </div>
          <!-- <div class="mt-3">
            <label class="form-label">File</label>
            <div class="sm:grid grid-cols-3 gap-2">
              <div class="input-group">
                <div id="input-group-3" class="input-group-text">Upload File</div>
                <input type="file" @change="uploadFile" class="form-control" placeholder="Upload" aria-describedby="input-group-3" :class="{ 'border-danger': validateKnowledgebase.file.$error }"/>
                <template v-if="validateKnowledgebase.file.$error">
                  <div
                    v-for="(error, index) in validateKnowledgebase.file.$errors"
                    :key="index"
                    class="text-danger mt-2"
                  >
                    {{error.$message}}
                  </div>
                </template>
              </div>
            </div>
          </div> -->

          <div class="input-form w-full mt-3">
            <label
                for="bank_iconcreate"
                class="form-label w-full flex flex-col sm:flex-row"
            >
              <div class="relative w-full h-32 border-[1px] border-dashed ring-2 ring-outline-2 flex justify-center items-center bg-gray-200 rounded-lg dark:bg-gray-800">
                  <img src="../../assets/images/logo.svg" class="h-full w-auto"/>
                  <p class="font-bold text-lg w-full text-center "> Click Here To Upload bank_icon</p>
              </div>
            </label>
            <input
                id="bank_iconcreate"
                @change="uploadFile"
                type="file"
                name="file"
                class="form-control hidden"
                :class="{ 'border-danger': validateKnowledgebase.file.$error }"
            />
            <template v-if="validateKnowledgebase.file.$error">
                <div
                v-for="(error, index) in validateKnowledgebase.file.$errors"
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
          <div class="mt-3">
            <label>Description</label>
            <div class="mt-2">
              <ClassicEditor v-model.trim="validateKnowledgebase.description.$model" :config="editorConfig" :class="{ 'border-danger': validateKnowledgebase.description.$error }" />
            </div>
            <template v-if="validateKnowledgebase.description.$error">
                <div
                v-for="(error, index) in validateKnowledgebase.description.$errors"
                :key="index"
                class="text-danger mt-2"
                >
                {{error.$message}}
                </div>
            </template>
            
          </div>
          <div class="mt-3">
            <label for="crud-form-4" class="form-label">Link</label>
            <div class="input-group">
              <input v-model.trim="validateKnowledgebase.link.$model" id="crud-form-4" type="text" class="form-control" placeholder="Link to File" aria-describedby="input-group-2" :class="{ 'border-danger': validateKnowledgebase.link.$error }"/>
              <template v-if="validateKnowledgebase.link.$error">
                <div
                v-for="(error, index) in validateKnowledgebase.link.$errors"
                :key="index"
                class="text-danger mt-2"
                >
                {{error.$message}}
                </div>
            </template>
            </div>
          </div>
          <div class="text-right mt-5">
            <button type="button" class="btn btn-outline-secondary w-24 mr-1">
              Cancel
            </button>
            <button type="button" class="btn btn-primary w-24" @click="addKnowledgebase">Save</button>
          </div>
        </div>
      </div>
    </div>        
    <!-- END: Form Layout -->

    <div id="success-notification-content" class="toastify-content hidden flex">
      <div class="w-full h-full flex">
        <CheckCircleIcon class="text-success" />
        <div class="ml-4 mr-4">
          <div class="font-medium">knowledgebase Registered Successfully!</div>
          <div class="text-slate-500 mt-1"></div>
        </div>
      </div>
    </div>

    <div id="failed-notification-content" class="toastify-content hidden flex">
      <div class="w-full h-full flex">
        <XCircleIcon class="text-danger" />
        <div class="ml-4 mr-4">
          <div class="font-medium">knowledgebase Registration Failed!</div>
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

const uFile = ref(null);

const editorConfig = {
    toolbar: {
      items: ["bold", "italic", "link"],
    },
};

const knowledgebase_data = reactive({
  title: "",
  description: "",
  catagory: "",
  link:"",
  file:""
})

const rules = {
  title: {
    required,
  },
  description: {
    required,
  },
  catagory: {
    required,
  },
  link: {},
  file: {},
};
const validateKnowledgebase = useVuelidate(rules, toRefs(knowledgebase_data));

const uploadFile = (event) => {
  knowledgebase_data.file = event.target.files[0]
  let fr = new FileReader();
  fr.onload = () => {
    uFile.value = fr.result;
  };
  fr.readAsDataURL(knowledgebase_data.file);
}

const addKnowledgebase = async () => {
  validateKnowledgebase.value.$touch();
  if (validateKnowledgebase.value.$invalid) {
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

    await backendApi.post("v1/knowledgebase", {
      title: knowledgebase_data.title,
      description: knowledgebase_data.description,
      catagory: knowledgebase_data.catagory,
      link: knowledgebase_data.link,
      file: knowledgebase_data.file,
    },{
    headers: {
        'Authorization': "Bearer " + authStore.access_token,
        'Content-Type': 'multipart/form-data'
    }})
    .then((response) => {
      //save to store user details and token
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
      console.log(error)
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
  