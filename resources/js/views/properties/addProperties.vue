<template>
    <div class="flex items-center mt-8">
      <h2 class="intro-y text-lg font-medium mr-auto">Add New Property</h2>
    </div>
    <!-- BEGIN: Wizard Layout -->
    <div class="intro-y box py-10 sm:py-20 mt-5">
      <div
        class="relative before:hidden before:lg:block before:absolute before:w-[69%] before:h-[3px] before:top-0 before:bottom-0 before:mt-4 before:bg-slate-100 before:dark:bg-darkmode-400 flex flex-col lg:flex-row justify-center px-5 sm:px-20"
      >
        <div
          class="intro-x lg:text-center flex items-center lg:block flex-1 z-10"
        >
          <button class="w-10 h-10 rounded-full btn"
          :class="[
            selected == 1
              ? 'btn-primary'
              : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400',
          ]"
          @click="setSelected(1)">1</button>
          <div class="lg:w-32 font-medium text-base lg:mt-3 ml-3 lg:mx-auto">
            Property Detail
          </div>
        </div>
        <div
          class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10"
        >
          <button
            class="w-10 h-10 rounded-full btn"
            :class="[
                selected == 2
                ? 'btn-primary'
                : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400',
            ]"
            @click="setSelected(2)"
          >
            2
          </button>
          <div
            class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400"
          >
            Images
          </div>
        </div>
        <div
          class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10"
        >
          <button
            class="w-10 h-10 rounded-full btn"
            :class="[
            selected == 3
              ? 'btn-primary'
              : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400',
            ]"
            @click="setSelected(3)"
          >
            3
          </button>
          <div
            class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400"
          >
            Property Owner Detail
          </div>
        </div>
        <div
          class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10"
        >
          <button
            class="w-10 h-10 rounded-full btn"
            :class="[
            selected == 4
              ? 'btn-primary'
              : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400',
            ]"
            @click="setSelected(4)"
          >
            4
          </button>
          <div
            class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400"
          >
            Property Features
          </div>
        </div>
        <div
          class="intro-x lg:text-center flex items-center mt-5 lg:mt-0 lg:block flex-1 z-10"
        >
          <button
            class="w-10 h-10 rounded-full btn"
            :class="[
            selected == 5
              ? 'btn-primary'
              : 'text-slate-500 bg-slate-100 dark:bg-darkmode-400 dark:border-darkmode-400',
            ]"
            @click="setSelected(5)"
          >
            5
          </button>
          <div
            class="lg:w-32 text-base lg:mt-3 ml-3 lg:mx-auto text-slate-600 dark:text-slate-400"
          >
            Finalize
          </div>
        </div>
      </div>
      
      <div
        v-show="selected == 1"
        class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400"
      >
        <div class="font-medium text-base">Profile Detail</div>
        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-1" class="form-label">Property ID</label>
            <input
              id="input-wizard-1"
              type="text"
              class="form-control"
              placeholder="ID"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-2" class="form-label">Property Location (Country)</label>
            <input
              id="input-wizard-2"
              type="text"
              class="form-control"
              placeholder="country"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-3" class="form-label">Property Location (City)</label>
            <input
              id="input-wizard-3"
              type="text"
              class="form-control"
              placeholder="city"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-4" class="form-label">Property Location (Address)</label>
            <input
              id="input-wizard-4"
              type="text"
              class="form-control"
              placeholder="Address"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-6" class="form-label">Property Type</label>
            <select id="input-wizard-6" class="form-select">
              <option>Residential</option>
              <option>Commercial</option>
              <option>Condominun</option>
              <option>Land</option>
            </select>
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-4" class="form-label">Property Description</label>
            <input
              id="input-wizard-4"
              type="text"
              class="form-control"
              placeholder="Property Description"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-4" class="form-label">Property Price</label>
            <input
              id="input-wizard-4"
              type="text"
              class="form-control"
              placeholder="Property Price"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-6" class="form-label">Property Status</label>
            <select id="input-wizard-6" class="form-select">
              <option>Active</option>
              <option>Pending</option>
              <option>Sold</option>
            </select>
          </div>
          <div
            class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5"
          >
            <button class="btn btn-secondary w-24" @click="previousForm">Previous</button>
            <button class="btn btn-primary w-24 ml-2" @click="nextForm">Next</button>
          </div>
        </div>
      </div>

      <div
        v-show="selected == 2"
        class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400"
      >
        <div class="font-medium text-base">Property Images</div>
        <!-- <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5"> -->
          <form data-single="true" action="/file-upload" class="[&.dropzone]:border-2 [&.dropzone]:border-dashed dropzone [&.dropzone]:border-darkmode-200/60 [&.dropzone]:dark:bg-darkmode-600 [&.dropzone]:dark:border-white/5 dropzone dropzone">
            <div class="fallback">
                <input name="file" type="file" />
            </div>
            <div class="dz-message" data-dz-message>
                <div class="text-lg font-medium">
                    Drop files here or click to upload.
                </div>
                <div class="text-gray-600">
                    This is just a demo dropzone. Selected files are
                    <span class="font-medium">not</span> actually
                    uploaded.
                </div>
            </div>
          </form>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-1" class="form-label">Link for Video</label>
            <input
              id="input-wizard-1"
              type="text"
              class="form-control"
              placeholder="Video Link"
            />
            </div>
            <div class="intro-y col-span-12 sm:col-span-6">
              <label for="input-wizard-1" class="form-label">Link for Virtual Tour</label>
              <input
                id="input-wizard-1"
                type="text"
                class="form-control"
                placeholder="VR Link"
              />
            </div>
          <div
            class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5"
          >
            <button class="btn btn-secondary w-24" @click="previousForm">Previous</button>
            <button class="btn btn-primary w-24 ml-2" @click="nextForm">Next</button>
          </div>
        <!-- </div> -->
      </div>

      <div
        v-show="selected == 3"
        class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400"
      >
        <div class="font-medium text-base">Property Owners Detail</div>
        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-1" class="form-label">Owner Name</label>
            <input
              id="input-wizard-1"
              type="text"
              class="form-control"
              placeholder="Name"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-2" class="form-label">Owner Address</label>
            <input
              id="input-wizard-2"
              type="text"
              class="form-control"
              placeholder="Address"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-3" class="form-label">Owner Phone</label>
            <input
              id="input-wizard-3"
              type="text"
              class="form-control"
              placeholder="Important Meeting"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-4" class="form-label">Owner Description</label>
            <input
              id="input-wizard-4"
              type="text"
              class="form-control"
              placeholder="Description"
            />
          </div>
          <!-- <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-5" class="form-label">Doesn't Have</label>
            <input
              id="input-wizard-5"
              type="text"
              class="form-control"
              placeholder="Job, Work, Documentation"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-6" class="form-label">Size</label>
            <select id="input-wizard-6" class="form-select">
              <option>10</option>
              <option>25</option>
              <option>35</option>
              <option>50</option>
            </select>
          </div> -->
          <div
            class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5"
          >
            <button class="btn btn-secondary w-24" @click="previousForm">Previous</button>
            <button class="btn btn-primary w-24 ml-2" @click="nextForm">Next</button>
          </div>
        </div>
      </div>

      <div
        v-show="selected == 4"
        class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400"
      >
        <div class="font-medium text-base">Property Features</div>
        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-1" class="form-label">Bed Rooms</label>
            <input
              id="input-wizard-1"
              type="number"
              class="form-control"
              placeholder="Bedrooms"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-2" class="form-label">Bath Rooms</label>
            <input
              id="input-wizard-2"
              type="number"
              class="form-control"
              placeholder="Bathrooms"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-3" class="form-label">Gross Area</label>
            <input
              id="input-wizard-3"
              type="number"
              class="form-control"
              placeholder="Gross Area"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-4" class="form-label">Net Area</label>
            <input
              id="input-wizard-4"
              type="number"
              class="form-control"
              placeholder="Net Area"
            />
          </div>
          <!-- <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-5" class="form-label">Doesn't Have</label>
            <input
              id="input-wizard-5"
              type="text"
              class="form-control"
              placeholder="Job, Work, Documentation"
            />
          </div>-->
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-6" class="form-label">Amunities</label>
            <select id="input-wizard-6" class="form-select">
              <option>Wifi</option>
              <option>Swimming</option>
              <option>Spa</option>
              <option>Gym</option>
            </select>
          </div> 
          <div
            class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5"
          >
            <button class="btn btn-secondary w-24" @click="previousForm">Previous</button>
            <button class="btn btn-primary w-24 ml-2" @click="nextForm">Next</button>
          </div>
        </div>
      </div>

      <div
        v-show="selected == 5"
        class="px-5 sm:px-20 mt-10 pt-10 border-t border-slate-200/60 dark:border-darkmode-400"
      >
        <div class="font-medium text-base">Submit You'r Data</div>
        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
          <!-- <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-1" class="form-label">From</label>
            <input
              id="input-wizard-1"
              type="text"
              class="form-control"
              placeholder="example@gmail.com"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-2" class="form-label">To</label>
            <input
              id="input-wizard-2"
              type="text"
              class="form-control"
              placeholder="example@gmail.com"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-3" class="form-label">Subject</label>
            <input
              id="input-wizard-3"
              type="text"
              class="form-control"
              placeholder="Important Meeting"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-4" class="form-label">Has the Words</label>
            <input
              id="input-wizard-4"
              type="text"
              class="form-control"
              placeholder="Job, Work, Documentation"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-5" class="form-label">Doesn't Have</label>
            <input
              id="input-wizard-5"
              type="text"
              class="form-control"
              placeholder="Job, Work, Documentation"
            />
          </div>
          <div class="intro-y col-span-12 sm:col-span-6">
            <label for="input-wizard-6" class="form-label">Size</label>
            <select id="input-wizard-6" class="form-select">
              <option>10</option>
              <option>25</option>
              <option>35</option>
              <option>50</option>
            </select>
          </div> -->
          <div
            class="intro-y col-span-12 flex items-center justify-center sm:justify-end mt-5"
          >
            <button class="btn btn-secondary w-24" @click="previousForm">Previous</button>
            <button class="btn btn-primary w-24 ml-2" @click="submitForm">Submit</button>
          </div>
        </div>
      </div>
    </div>
    <!-- END: Wizard Layout -->
  </template>

<script setup>
import myLoading from "@/components/myloading/Main.vue";
import { onMounted, computed, ref, reactive, toRefs } from "vue";
import dom from "@left4code/tw-starter/dist/js/dom";
import { useVuelidate } from "@vuelidate/core";
import Toastify from "toastify-js";
import backendApi from "../../networkServices/api.js";
import { useRouter, useRoute } from "vue-router";
import { useAuthStore } from "../../stores/auth.js";
import { required, email, url } from '@vuelidate/validators'

const authStore = useAuthStore();
const showForm = ref(false);
const loading = ref(false);
// PRofile table data
// const p_image = ref(null);
// const profileImage = ref(null);
// const locations = ref([
//   "Addis Abeba",
//   "Agaro",
//   "Aksum",
//   "Alaba Kulito",
//   "Alamata",
//   "Alemaya",
//   "Aleta Wendo",
//   "Ambo",
//   "Arba Minch",
//   "Areka",
//   "Arsi Negele",
//   "Asella",
//   "Asosa",
//   "Bahir Dar",
//   "Bale Robe",
//   "Bishoftu",
//   "Boditi",
//   "Bonga",
//   "Bule Hora Town",
//   "Burayu",
//   "Butajira",
//   "Chiro",
//   "Dangila",
//   "Debre Birhan",
//   "Debre Markos",
//   "Debre Tabor",
//   "Degehabur",
//   "Dembi Dolo",
//   "Dessie",
//   "Dilla",
//   "Dire Dawa",
//   "Durame",
//   "Fiche",
//   "Finote Selam",
//   "Gambela",
//   "Gimbi",
//   "Goba",
//   "Gode",
//   "Gondar",
//   "Harar",
//   "Hawassa",
//   "Hosaena",
//   "Jijiga",
//   "Jimma",
//   "Jinka",
//   "Kobo",
//   "Kombolcha",
//   "Mekelle",
//   "Meki",
//   "Metu",
//   "Mizan Teferi",
//   "Modjo",
//   "Mota",
//   "Negele Borana",
//   "Nekemte",
//   "Sawla",
//   "Sebeta",
//   "Shashamane",
//   "Shire",
//   "Sodo",
//   "Tepi",
//   "Welkite",
//   "Woldiya",
//   "Woliso",
//   "Wukro",
//   "Yirgalem",
//   "Ziway",
// ]);
// const uploadProfile = (event) => {
//   p_image.value = event.target.files[0];
//   let fr = new FileReader();
//   fr.onload = () => {
//     profileImage.value = fr.result;
//   };
//   fr.readAsDataURL(p_image.value);
// };
// const personal_info = reactive({
//   first_name: "",
//   middle_name: "",
//   last_name: "",
//   sex: "",
//   date_of_birth: "",
//   marital_status: "",
//   education_status: "",
//   mother_toung: "",
// });
// profile table validaton
// const rules = {
//   first_name: {
//     required,
//   },
//   middle_name: {},
//   last_name: {
//     required,
//   },
//   sex: {
//     required,
//   },
//   date_of_birth: {
//     required,
//   },
//   marital_status: {
//     required,
//   },
//   education_status: {
//     required,
//   },
//   mother_toung: {},
// };
// const validatePersonal = useVuelidate(rules, toRefs(personal_info));

// Address table data
// const address_info = reactive({
//   a_email: "",
//   phone_1: "",
//   phone_2: "",
//   youtube: "",
//   telegram: "",
//   tiktok: "",
//   nationality: "",
//   country: "",
//   state: "",
//   current_residence: "",
// });
// const addressRules = {
//   a_email: {
//     required,
//     email,
//   },
//   phone_1: {
//     required,
//   },
//   phone_2: {},
//   youtube: {
//     url,
//   },
//   telegram: {
//     url,
//   },
//   tiktok: {
//     url,
//   },
//   nationality: {
//     required,
//   },
//   country: {
//     required,
//   },
//   state: {
//     required,
//   },
//   current_residence: {
//     required,
//   },
// };
// const validateAddress = useVuelidate(addressRules, toRefs(address_info));

// const open_questions = reactive({
//   overtime: "",
//   fulltime: "",
//   travel: "",
//   night: "",
//   holiday: "",
//   mediacal_issue: "",
//   handicap: "",
//   kiss: "",
//   experiance: "",
//   medical_detail: "",
//   experiance_detail: "",
//   handicap_detail: "",
//   about: "",
// });
// const questions_rule = {
//   overtime: {
//     required,
//   },
//   fulltime: {
//     required,
//   },
//   travel: {
//     required,
//   },
//   night: {
//     required,
//   },
//   holiday: {
//     required,
//   },
//   mediacal_issue: {
//     required,
//   },
//   handicap: {
//     required,
//   },
//   kiss: {

//   },
//   experiance: {
//     required,
//   },
//   medical_detail: {},
//   experiance_detail: {},
//   handicap_detail: {},
//   kiss: {},
//   about: {
//     required,
//   },
// };
// const validateOpenQuestions = useVuelidate(questions_rule, toRefs(open_questions));

// const bodyInfo = reactive({
//   height: "",
//   skin_color: "",
//   hair_color: "",
//   hair_length: "",
//   tj_height: "",
//   tj_neck_height: "",
//   tj_neck: "",
//   tj_shoulders: "",
//   tj_shoulder_angle: "",
//   tj_brest: "",
//   tj_bust_girth: "",
//   tj_arm_length: "",
//   tj_upper_arm_glith: "",
//   tj_wrist: "",
//   tj_stomach_form: "",
//   tj_waist: "",
//   tj_hip_grith: "",
//   tj_hip_height: "",
//   tj_thigh_grith: "",
//   tj_calf_grith: "",
//   tj_lower_leg: "",
// });
// const bodyRules = {
//   height: { required },
//   skin_color: { required },
//   hair_color: { required },
//   hair_length: {},
//   tj_height: {},
//   tj_neck_height: {},
//   tj_neck: {},
//   tj_shoulders: {},
//   tj_shoulder_angle: {},
//   tj_brest: {},
//   tj_bust_girth: {},
//   tj_arm_length: {},
//   tj_upper_arm_glith: {},
//   tj_wrist: {},
//   tj_stomach_form: {},
//   tj_waist: {},
//   tj_hip_grith: {},
//   tj_hip_height: {},
//   tj_thigh_grith: {},
//   tj_calf_grith: {},
//   tj_lower_leg: {},
// };
// const validateBody = useVuelidate(bodyRules, toRefs(bodyInfo));
const selected = ref(1);
const setSelected = (id) => {
  let check_id = 1;
  if (id == 1) {
    check_id = 1;
  } else {
    check_id = id - 1;
  }
  // if (check_id == 1) {
  //   validatePersonal.value.$touch();
  //   if (validatePersonal.value.$invalid) {
  //   } else {
  //     selected.value = id;
  //   }
  // } else if (check_id == 2) {
  //   validateAddress.value.$touch();
  //   if (validateAddress.value.$invalid) {
  //   } else {
  //     selected.value = id;
  //   }
  // } else if (check_id == 4) {
  //   validateOpenQuestions.value.$touch();
  //   if (validateOpenQuestions.value.$invalid) {
  //     console.log(validateOpenQuestions.value.$errors);
  //   } else {
  //     selected.value = id;
  //   }
  // } else if (check_id == 3) {
  //   validateBody.value.$touch();
  //   if (validateBody.value.$invalid) {
  //   } else {
  //     selected.value = id;
  //   }
  // } else if (check_id == 5) {
  //   validatePictures.value.$touch();
  //   if (validatePictures.value.$invalid) {
  //   } else {
  //     selected.value = id;
  //   }
  // }
};

// const professions_list = ref([]);
// const talents_list = ref();
// const works_link = ref([]);
// const work_link = ref();
// const add_work_links = () => {
//   if (work_link.vlaue != "") {
//     works_link.value.push(work_link.value);
//     work_link.value = "";
//   }
// };

// const cancelLink = (index) => {
//   works_link.value.splice(index, 1);
// };

// const pictures = reactive({
//   face: null,
//   front: null,
//   left: null,
//   right: null,
//   pose_1: null,
//   pose_2: null,
// });

// const pictureValidate = {
//   face: { required },
//   front: {},
//   left: {},
//   right: {},
//   pose_1: {},
//   pose_2: {},
// };


// const pictureValidateUpdate = {
//   face: { },
//   front: {},
//   left: {},
//   right: {},
//   pose_1: {},
//   pose_2: {},
// };

// const validatePicturesUpdate = useVuelidate(pictureValidateUpdate, toRefs(pictures))
// const validatePictures = useVuelidate(pictureValidate, toRefs(pictures));

// const faceUrl = ref(null);
// const frontUrl = ref(null);
// const leftUrl = ref(null);
// const rightUrl = ref(null);
// const pose1Url = ref(null);
// const pose2Url = ref(null);
// const uploadFacePhoto = (event) => {
//   pictures.face = event.target.files[0];
//   let fr = new FileReader();
//   fr.onload = () => {
//     faceUrl.value = fr.result;
//   };
//   fr.readAsDataURL(pictures.face);
// };
// const uploadFrontPhoto = (event) => {
//   pictures.front = event.target.files[0];
//   let fr = new FileReader();
//   fr.onload = () => {
//     frontUrl.value = fr.result;
//   };
//   fr.readAsDataURL(pictures.front);
// };
// const uploadLeftPhoto = (event) => {
//   pictures.left = event.target.files[0];
//   let fr = new FileReader();
//   fr.onload = () => {
//     leftUrl.value = fr.result;
//   };
//   fr.readAsDataURL(pictures.left);
// };
// const uploadRightPhoto = (event) => {
//   pictures.right = event.target.files[0];
//   let fr = new FileReader();
//   fr.onload = () => {
//     rightUrl.value = fr.result;
//   };
//   fr.readAsDataURL(pictures.right);
// };
// const uploadPoseonePhoto = (event) => {
//   pictures.pose_1 = event.target.files[0];
//   let fr = new FileReader();
//   fr.onload = () => {
//     pose1Url.value = fr.result;
//   };
//   fr.readAsDataURL(pictures.pose_1);
// };
// const uploadPosetwoPhoto = (event) => {
//   pictures.pose_2 = event.target.files[0];
//   let fr = new FileReader();
//   fr.onload = () => {
//     pose2Url.value = fr.result;
//   };
//   fr.readAsDataURL(pictures.pose_2);
// };

const myrouter = useRouter();

// const saveProfile = async () => {
//   personal_info.p_image = p_image.value;
//   let formData = {
//     media: pictures,
//     talent: talents_list.value,
//     profession:professions_list.value,
//     works_link: works_link.value,
//     body: bodyInfo,
//     openQuestions: open_questions,
//     address: address_info,
//     personal: personal_info,
//   };
//   loading.value = true;
//   await backendApi
//     .post("/profile", formData, {
//       headers: {
//         "Content-Type": "multipart/form-data",
//         Authorization: "Bearer " + authStore.access_token,
//       },
//     })
//     .then((response) => {
//       loading.value = false;
//       myrouter.push("/view-profile");
//     })
//     .catch((error) => {
//       console.log(error);
//       loading.value = false;
//       Toastify({
//         node: dom("#failed-notification-content").clone().removeClass("hidden")[0],
//         duration: 3000,
//         newWindow: true,
//         close: true,
//         gravity: "top",
//         position: "right",
//         stopOnFocus: true,
//       }).showToast();
//     });
// };

const nextForm = () => {
  if (selected.value == 1) {
    // validatePersonal.value.$touch();
    // if (validatePersonal.value.$invalid) {
    // } else {
      selected.value += 1;
    // }
  } else if (selected.value == 2) {
    // validateAddress.value.$touch();
    // if (/validateAddress.value.$invalid) {
    // } else {
      selected.value += 1;
    // }
  } else if (selected.value == 4) {
    // validateOpenQuestions.value.$touch();
    // if (validateOpenQuestions.value.$invalid) {
      // console.log(validateOpenQuestions.value.$errors);
    // } else {
      selected.value += 1;
    // }
  } else if (selected.value == 3) {
    // validateBody.value.$touch();
    // if (validateBody.value.$invalid) {
    // } else {
      selected.value += 1;
    // }
  } else if (selected.value == 5) {
    // validatePictures.value.$touch();
    // if (validatePictures.value.$invalid) {
    // } else {
      selected.value += 1;
    // }
  }
};
const previousForm = () => {
  selected.value = selected.value - 1;
};

// const updatePersonalInfo = async () => {
//   validatePersonal.value.$touch();
//   if (validatePersonal.value.$invalid) {
//     Toastify({
//       node: dom("#failed-edit-notification").clone().removeClass("hidden")[0],
//       duration: 3000,
//       newWindow: true,
//       close: true,
//       gravity: "top",
//       position: "right",
//       stopOnFocus: true,
//     }).showToast();
//   } else {
//     loading.value = true;
//     if (p_image.value != null) {
//       personal_info.p_image = p_image.value;
//     }
//     await backendApi
//       .post(`profile/edit/${profileData.value.id}`, personal_info, {
//         headers: {
//           "Content-Type": "multipart/form-data",
//         },
//       })
//       .then((response) => {
//         loading.value = false;
//         Toastify({
//           node: dom("#success-edit-notification").clone().removeClass("hidden")[0],
//           duration: 3000,
//           newWindow: true,
//           close: true,
//           gravity: "top",
//           position: "right",
//           stopOnFocus: true,
//         }).showToast();
//       })
//       .catch((error) => {
//         loading.value = false;
//         Toastify({
//           node: dom("#failed-edit-notification").clone().removeClass("hidden")[0],
//           duration: 3000,
//           newWindow: true,
//           close: true,
//           gravity: "top",
//           position: "right",
//           stopOnFocus: true,
//         }).showToast();
//       });
//   }
// };
// const updateAddressInfo = async () => {
//   validateAddress.value.$touch();
//   if (validateAddress.value.$invalid) {
//     Toastify({
//       node: dom("#failed-edit-notification").clone().removeClass("hidden")[0],
//       duration: 3000,
//       newWindow: true,
//       close: true,
//       gravity: "top",
//       position: "right",
//       stopOnFocus: true,
//     }).showToast();
//   } else {
//     loading.value = true;
//     address_info.profile_id = profile_id.value;
//     await backendApi
//       .put(`address/${profileData.value.address.id}`, address_info)
//       .then((response) => {
//         loading.value = false;

//         Toastify({
//           node: dom("#success-edit-notification").clone().removeClass("hidden")[0],
//           duration: 3000,
//           newWindow: true,
//           close: true,
//           gravity: "top",
//           position: "right",
//           stopOnFocus: true,
//         }).showToast();
//       })
//       .catch((error) => {
//         loading.value = false;
//         Toastify({
//           node: dom("#failed-edit-notification").clone().removeClass("hidden")[0],
//           duration: 3000,
//           newWindow: true,
//           close: true,
//           gravity: "top",
//           position: "right",
//           stopOnFocus: true,
//         }).showToast();
//       });
//   }
// };
// const updateBodyInfo = async () => {
//   validateBody.value.$touch();
//   if (validateBody.value.$invalid) {
//     Toastify({
//       node: dom("#failed-edit-notification").clone().removeClass("hidden")[0],
//       duration: 3000,
//       newWindow: true,
//       close: true,
//       gravity: "top",
//       position: "right",
//       stopOnFocus: true,
//     }).showToast();
//   } else {
//     loading.value = true;
//     bodyInfo.profile_id = profile_id.value;
//     await backendApi
//       .put(`body/${profileData.value.body.id}`, bodyInfo)
//       .then((response) => {
//         loading.value = false;

//         Toastify({
//           node: dom("#success-edit-notification").clone().removeClass("hidden")[0],
//           duration: 3000,
//           newWindow: true,
//           close: true,
//           gravity: "top",
//           position: "right",
//           stopOnFocus: true,
//         }).showToast();
//       })
//       .catch((error) => {
//         loading.value = false;
//         Toastify({
//           node: dom("#failed-edit-notification").clone().removeClass("hidden")[0],
//           duration: 3000,
//           newWindow: true,
//           close: true,
//           gravity: "top",
//           position: "right",
//           stopOnFocus: true,
//         }).showToast();
//       });
//   }
// };
// const updateOpenInfo = async () => {
//   validateOpenQuestions.value.$touch();
//   if (validateOpenQuestions.value.$invalid) {
//     Toastify({
//       node: dom("#failed-edit-notification").clone().removeClass("hidden")[0],
//       duration: 3000,
//       newWindow: true,
//       close: true,
//       gravity: "top",
//       position: "right",
//       stopOnFocus: true,
//     }).showToast();
//   } else {
//     loading.value = true;
//     open_questions.profile_id = profile_id.value;
//     await backendApi
//       .put(`question/${profileData.value.question.id}`, open_questions)
//       .then((response) => {
//         loading.value = false;

//         Toastify({
//           node: dom("#success-edit-notification").clone().removeClass("hidden")[0],
//           duration: 3000,
//           newWindow: true,
//           close: true,
//           gravity: "top",
//           position: "right",
//           stopOnFocus: true,
//         }).showToast();
//       })
//       .catch((error) => {
//         loading.value = false;
//         Toastify({
//           node: dom("#failed-edit-notification").clone().removeClass("hidden")[0],
//           duration: 3000,
//           newWindow: true,
//           close: true,
//           gravity: "top",
//           position: "right",
//           stopOnFocus: true,
//         }).showToast();
//       });
//   }
// };
// const updateMediaInfo = async () => {
//   validatePicturesUpdate.value.$touch();
//   if (validatePicturesUpdate.value.$invalid) {
//     Toastify({
//       node: dom("#failed-edit-notification").clone().removeClass("hidden")[0],
//       duration: 3000,
//       newWindow: true,
//       close: true,
//       gravity: "top",
//       position: "right",
//       stopOnFocus: true,
//     }).showToast();
//   } else {
//     loading.value = true;
//     pictures.profile_id = profile_id.value;
//     pictures.talent = talents_list.value;
//     pictures.profession = professions_list.value;
//     pictures.links = works_link.value;
//     await backendApi
//       .post(`updateProfile/${profileData.value.id}`, pictures, {
//         headers: {
//           "Content-Type": "multipart/form-data",
//         },
//       })
//       .then((response) => {
//         loading.value = false;

//         Toastify({
//           node: dom("#success-edit-notification").clone().removeClass("hidden")[0],
//           duration: 3000,
//           newWindow: true,
//           close: true,
//           gravity: "top",
//           position: "right",
//           stopOnFocus: true,
//         }).showToast();
//       })
//       .catch((error) => {
//         loading.value = false;
//         Toastify({
//           node: dom("#failed-edit-notification").clone().removeClass("hidden")[0],
//           duration: 3000,
//           newWindow: true,
//           close: true,
//           gravity: "top",
//           position: "right",
//           stopOnFocus: true,
//         }).showToast();
//       });
//   }
// };

// const getImageURl = (link) => {
//   return "http://back.ewenetstage.com/storage/" + link;
// };
// const profile_id = ref(null);
// const mode = ref("createMode");
// const profileData = ref(null);
// onMounted(async () => {
//   loading.value = true;
//   await backendApi
//     .get("/profile", {
//       headers: {
//         Authorization: "Bearer " + authStore.access_token,
//       },
//     })
//     .then((response) => {
//       loading.value = false;
//       if (response.data.length > 0) {
//         mode.value = "updateMode";
//         showForm.value = true;
//         profileData.value = response.data[0];
//         // set personal info
//         profile_id.value = profileData.value.id;
//         personal_info.first_name = profileData.value.first_name;
//         personal_info.middle_name = profileData.value.middle_name;
//         personal_info.last_name = profileData.value.last_name;
//         personal_info.sex = profileData.value.sex;
//         personal_info.date_of_birth = profileData.value.date_of_birth;
//         personal_info.marital_status = profileData.value.marital_status;
//         personal_info.education_status = profileData.value.education_status;
//         personal_info.mother_toung = profileData.value.mother_toung;
//         if (profileData.value.p_image != null) {
//           profileImage.value = getImageURl(profileData.value.p_image);
//         }
//         // set address info
//         if (profileData.value.address) {
//           address_info.a_email = profileData.value.address.email;
//           address_info.phone_1 = profileData.value.address.phone_1;
//           address_info.phone_2 = profileData.value.address.phone_2;
//           address_info.youtube = profileData.value.address.youtube;
//           address_info.telegram = profileData.value.address.telegram;
//           address_info.tiktok = profileData.value.address.tiktok;
//           address_info.nationality = profileData.value.address.nationality;
//           address_info.country = profileData.value.address.country;
//           address_info.state = profileData.value.address.state;
//           address_info.current_residence = profileData.value.address.current_residence;
//         }
//         if (profileData.value.question) {
//           open_questions.overtime = profileData.value.question.overtime;
//           open_questions.fulltime = profileData.value.question.fulltime;
//           open_questions.travel = profileData.value.question.travel;
//           open_questions.night = profileData.value.question.night;
//           open_questions.holiday = profileData.value.question.holiday;
//           open_questions.mediacal_issue = profileData.value.question.mediacal_issue;
//           open_questions.handicap = profileData.value.question.handicap;
//           open_questions.kiss = profileData.value.question.kiss;
//           open_questions.experiance = profileData.value.question.experiance;
//           open_questions.medical_detail = profileData.value.question.medical_detail;
//           open_questions.experiance_detail = profileData.value.question.experiance_detail;
//           open_questions.handicap_detail = profileData.value.question.handicap_detail;
//           open_questions.about = profileData.value.question.about;
//         }
//         if (profileData.value.body) {
//           bodyInfo.height = profileData.value.body.height;
//           bodyInfo.skin_color = profileData.value.body.skin_color;
//           bodyInfo.hair_color = profileData.value.body.hair_color;
//           bodyInfo.hair_length = profileData.value.body.hair_length;
//           bodyInfo.tj_height = profileData.value.body.tj_height;
//           bodyInfo.tj_neck_height = profileData.value.body.tj_neck_height;
//           bodyInfo.tj_neck = profileData.value.body.tj_neck;
//           bodyInfo.tj_shoulders = profileData.value.body.tj_shoulders;
//           bodyInfo.tj_shoulder_angle = profileData.value.body.tj_shoulder_angle;
//           bodyInfo.tj_brest = profileData.value.body.tj_brest;
//           bodyInfo.tj_bust_girth = profileData.value.body.tj_bust_girth;
//           bodyInfo.tj_arm_length = profileData.value.body.tj_arm_length;
//           bodyInfo.tj_upper_arm_glith = profileData.value.body.tj_upper_arm_glith;
//           bodyInfo.tj_wrist = profileData.value.body.tj_wrist;
//           bodyInfo.tj_stomach_form = profileData.value.body.tj_stomach_form;
//           bodyInfo.tj_waist = profileData.value.body.tj_waist;
//           bodyInfo.tj_hip_grith = profileData.value.body.tj_hip_grith;
//           bodyInfo.tj_hip_height = profileData.value.body.tj_hip_height;
//           bodyInfo.tj_thigh_grith = profileData.value.body.tj_thigh_grith;
//           bodyInfo.tj_calf_grith = profileData.value.body.tj_calf_grith;
//           bodyInfo.tj_lower_leg = profileData.value.body.tj_lower_leg;
//         }
//         if (profileData.value.links.length > 0) {
//           works_link.value = profileData.value.links.map((link) => link.link);
//         }
//         if (profileData.value.talent.length > 0) {
//           talents_list.value = profileData.value.talent.map((talent) => talent.talent);
//         }
//         if(profileData.value.proffession.length > 0){
//           professions_list.value =  profileData.value.proffession.map(profession => profession.proffession);
//         }
//         if (profileData.value.media.length > 0) {
//           if (profileData.value.media[0].face != null) {
//             faceUrl.value = getImageURl(profileData.value.media[0].face);
//             pictures.face = profileData.value.media[0].face;
//           }
//           if (profileData.value.media[0].front != null) {
//             frontUrl.value = getImageURl(profileData.value.media[0].front);
//             pictures.front = profileData.value.media[0].front;
//           }
//           if (profileData.value.media[0].left != null) {
//             leftUrl.value = getImageURl(profileData.value.media[0].left);
//             pictures.left = profileData.value.media[0].left;
//           }
//           if (profileData.value.media[0].right != null) {
//             rightUrl.value = getImageURl(profileData.value.media[0].right);
//             pictures.right = profileData.value.media[0].right;
//           }
//           if (profileData.value.media[0].pose_1 != null) {
//             pose1Url.value = getImageURl(profileData.value.media[0].pose_1);
//             pictures.pose_1 = profileData.value.media[0].pose_1;
//           }
//           if (profileData.value.media[0].pose_2 != null) {
//             pose2Url.value = getImageURl(profileData.value.media[0].pose_2);
//             pictures.pose_2 = profileData.value.media[0].pose_2;
//           }
//         }
//       } else {
//         mode.value = "createMode";
//       }
//     })
//     .catch((error) => {
//       loading.value = false;
//     });
// });
</script>
  