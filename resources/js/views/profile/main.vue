<template>
    <h2 class="intro-y text-lg font-medium mt-10">All Profiles</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
      <!-- BEGIN: Data List -->
      <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <div class="intro-y box p-5 mt-5">
            <div class=" hidden md:flex flex-col sm:flex-row sm:items-end xl:items-start">
              <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
                <div class="sm:flex items-center sm:mr-4">
                  <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2"
                    >Field</label
                  >
                  <select
                    id="tabulator-html-filter-field"
                    v-model="filter.field"
                    class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto"
                  >
                    <option value="first_name">First Name</option>
                    <option value="last_name">Last Name</option>
                    <option value="phone_number">Phone Number</option>
                    <option value="region">Region</option>
                    <option value="city">City</option>
                    <option value="special_area">Special Area</option>
                    <option value="bank">Bank</option>
                    <option value="account_holder_name">Account Holder Name</option>
                    <option value="account">Account</option>
                  </select>
                </div>
                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                  <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2"
                    >Type</label
                  >
                  <select
                    id="tabulator-html-filter-type"
                    v-model="filter.type"
                    class="form-select w-full mt-2 sm:mt-0 sm:w-auto"
                  >
                    <option value="like" selected>like</option>
                    <option value="=">=</option>
                    <option value="<">&lt;</option>
                    <option value="<=">&lt;=</option>
                    <option value=">">></option>
                    <option value=">=">>=</option>
                    <option value="!=">!=</option>
                  </select>
                </div>
                <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                  <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2"
                    >Value</label
                  >
                  <input
                    id="tabulator-html-filter-value"
                    v-model="filter.value"
                    type="text"
                    class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0"
                    placeholder="Search..."
                  />
                </div>
                <div class="mt-2 xl:mt-0">
                  <button
                    id="tabulator-html-filter-go"
                    type="button"
                    class="btn btn-primary w-full sm:w-16"
                    @click="onFilter"
                  >
                    Go
                  </button>
                  <button
                    id="tabulator-html-filter-reset"
                    type="button"
                    class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1"
                    @click="onResetFilter"
                  >
                    Reset
                  </button>
                </div>
              </form>
              <div class="flex mt-5 sm:mt-0">
                <button
                  id="tabulator-print"
                  class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2"
                  @click="onPrint"
                >
                  <PrinterIcon class="w-4 h-4 mr-2" /> Print
                </button>
                <Dropdown class="w-1/2 sm:w-auto">
                  <DropdownToggle class="btn btn-outline-secondary w-full sm:w-auto">
                    <FileTextIcon class="w-4 h-4 mr-2" /> Export
                    <ChevronDownIcon class="w-4 h-4 ml-auto sm:ml-2" />
                  </DropdownToggle>
                  <DropdownMenu class="w-40">
                    <DropdownContent>
                      <DropdownItem @click="onExportCsv">
                        <FileTextIcon class="w-4 h-4 mr-2" /> Export CSV
                      </DropdownItem>
                      <DropdownItem @click="onExportJson">
                        <FileTextIcon class="w-4 h-4 mr-2" /> Export JSON
                      </DropdownItem>
                      <DropdownItem @click="onExportXlsx">
                        <FileTextIcon class="w-4 h-4 mr-2" /> Export XLSX
                      </DropdownItem>
                      <DropdownItem @click="onExportHtml">
                        <FileTextIcon class="w-4 h-4 mr-2" /> Export HTML
                      </DropdownItem>
                    </DropdownContent>
                  </DropdownMenu>
                </Dropdown>
              </div>
            </div>
            <div class="overflow-x-auto scrollbar-hidden">
              <div
                id="tabulator"
                ref="tableRef"
                class="mt-5 table-report table-report--tabulator"
              ></div>
            </div>
          </div>
        </div>
      </div>
  
      <div id="success-notification-content_fetch" class="toastify-content hidden">
        <div class="flex w-full h-full">
          <XCircleIcon class="text-success" />
          <div class="ml-4 mr-4">
            <div class="font-medium" id="message_s_f">All Profiles Fetch Successfully.</div>
          </div>
        </div>
      </div>

      <div id="success-notification-content" class="toastify-content hidden">
        <div class="flex w-full h-full">
          <XCircleIcon class="text-success" />
          <div class="ml-4 mr-4">
            <div class="font-medium" id="message_s">Profiles Approved Successfully</div>
          </div>
        </div>
      </div>

      <div id="success-get-content" class="toastify-content hidden">
        <div class="flex w-full h-full">
          <XCircleIcon class="text-success" />
          <div class="ml-4 mr-4">
            <div class="font-medium" id="message_s_g">Profiles Approved Successfully</div>
          </div>
        </div>
      </div>

      <div id="failed-notification-content" class="toastify-content hidden">
        <div class="flex w-full h-full">
          <XCircleIcon class="text-danger" />
          <div class="ml-4 mr-4">
            <div class="font-medium" id="message_f_f">There has been an Error Approving the Profiles. Please Try Again.</div>
          </div>
        </div>
      </div>

      <div id="failed-notification-content_fetch" class="toastify-content hidden">
        <div class="flex w-full h-full">
          <XCircleIcon class="text-danger" />
          <div class="ml-4 mr-4">
            <div class="font-medium" id="message_f">There has been an Error Fetching the Profiles. Please Try Again.</div>
          </div>
        </div>
      </div>

      <div id="failed-get-content" class="toastify-content hidden">
        <div class="flex w-full h-full">
          <XCircleIcon class="text-danger" />
          <div class="ml-4 mr-4">
            <div class="font-medium" id="message_g_f">There has been an Error Fetching the Profiles. Please Try Again.</div>
          </div>
        </div>
      </div>

      <!-- Modal for Edit -->
      <Modal :show="editHandleModal" @hidden="editHandleModal = false">
        <ModalBody class="p-0">
          <div class="p-5 text-center">
            <EditIcon class="w-16 h-16 text-warning mx-auto mt-3" />
            <div class="text-3xl mt-5">Edit User Profile</div>
            <div class="text-slate-500 mt-2">
              You are about to edit a users Profile. <br> Please Make sure to put The correct Data.
            </div>
          </div>
          
          <div class="p-5">
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
              </div>
            </div>
          </div>
          <div class="px-5 pb-8 text-center">
            <div v-can="'read profile'">
              <button type="button" class="btn btn-warning w-24 m-5" @click="updateUserProfile(profile_data.id)">Update</button>
            </div>
            <button type="button" @click="editHandleModal = false" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
          </div>
        </ModalBody>
      </Modal>

      <!-- Modal for view -->
      <Modal :show="viewHandleModal" @hidden="viewHandleModal = false">
        <ModalBody class="p-0">
          <div class="p-5 text-center">
            <UserIcon class="w-16 h-16 text-success mx-auto mt-3" />
            <div class="text-3xl mt-5">User Profile</div>
            <div class="text-slate-500 mt-2">
              You are viewing a users Profile.
            </div>
          </div>
          
          <div class="p-5">
            <div class="intro-y col-span-12 lg:col-span-6">
              <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                <div class="flex flex-1 px-5 items-center justify-center">
                  <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img
                      :alt="`Profile picture of ${profile_data.first_name} ${profile_data.last_name}`"
                      class="rounded-full"
                      :src="`http://maledamirchaye.com/storage/${profile_data.pic}`"
                    />
                  </div>
                  <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">
                      {{ profile_data.first_name }}
                    </div>
                    <div class="text-slate-500">{{ profile_data.last_name }}</div>
                  </div>
                </div>
              </div>
              <div>
                <div class="mt-6 lg:mt-0 flex-1 px-5 border-l border-r border-slate-200/60 dark:border-darkmode-400 border-t lg:border-t-0 pt-5 lg:pt-0">
                  <div class="font-medium text-center lg:text-left lg:mt-3">
                    Details
                  </div>
                  <div class="flex flex-col justify-center items-center lg:items-start mt-4">
                    <div class="truncate sm:whitespace-normal flex items-center">
                      <PhoneIcon class="w-4 h-4 mr-2" /> Phone : 
                      {{ profile_data.phone }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                      <FlagIcon class="w-4 h-4 mr-2" /> Region :
                      {{ profile_data.region }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                      <MapPinIcon class="w-4 h-4 mr-2" /> City :
                      {{ profile_data.city }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                      <MapIcon class="w-4 h-4 mr-2" /> Address :
                      {{ profile_data.special_address }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                      <HomeIcon class="w-4 h-4 mr-2" /> Bank :
                      {{ profile_data.bank_name }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                      <ClipboardIcon class="w-4 h-4 mr-2" /> Account Holder Name :
                      {{ profile_data.account_holder_name }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                      <BookIcon class="w-4 h-4 mr-2" /> Account :
                      {{ profile_data.account }}
                    </div>
                  </div>
                </div>
                <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                  <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">{{ profile_data.level }}</div>
                    <div class="text-slate-500">Level</div>
                  </div>
                  <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">{{ profile_data.position }}</div>
                    <div class="text-slate-500">Position</div>
                  </div>
                  <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">{{ profile_data.total_reffered }}</div>
                    <div class="text-slate-500">Reffered Users</div>
                  </div>
                </div>

                <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                  <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">{{ profile_data.total_earned }}</div>
                    <div class="text-slate-500">Total earning</div>
                  </div>
                  <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">{{ profile_data.total_withdrawn }}</div>
                    <div class="text-slate-500">Withdrawn Sofar</div>
                  </div>
                  <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">{{ profile_data.available }}</div>
                    <div class="text-slate-500">Available Balance</div>
                  </div>
                </div>

                <div class="mt-6 lg:mt-0 flex-1 flex items-center justify-center px-5 border-t lg:border-0 border-slate-200/60 dark:border-darkmode-400 pt-5 lg:pt-0">
                  <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">{{ profile_data.total_reff }}</div>
                    <div class="text-slate-500">Earnings from Refferal (Total)</div>
                  </div>
                  <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">{{ profile_data.total_reff_init }}</div>
                    <div class="text-slate-500">Earnings from Refferal (Initial)</div>
                  </div>
                  <div class="text-center rounded-md w-20 py-3">
                    <div class="font-medium text-primary text-xl">{{ profile_data.total_reff_5 }}</div>
                    <div class="text-slate-500">Earnings from Refferal (5%)</div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
          <div class="px-5 pb-8 text-center">
            <button type="button" @click="viewHandleModal = false" class="btn btn-outline-secondary w-24 mr-1">Close</button>
            <!-- <button type="button" @click="c_id.value = profile_data.id; editHandleModal = true; viewHandleModal = false" class="btn btn-warning w-24 mr-1">Edit</button> -->
          </div>
        </ModalBody>
      </Modal>

      <myLoading v-show="loading" class="z-[9999]" />
  </template>
  
  <script setup>
  import { ref, reactive, onMounted, toRefs } from "vue";
  import Toastify from "toastify-js";
  
  import xlsx from "xlsx";
  import { createIcons, icons } from "lucide";
  import Tabulator from "tabulator-tables";
  
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
  
  const tableRef = ref();
  const tabulator = ref();
  
  const data = ref([]);

  const profile_data = reactive({
    first_name: "",
    last_name: "",
    phone: "",
    region: "",
    city: "",
    special_address: "",
    bank_name:"",
    account_holder_name:"",
    account:"",
    pic:""
  })

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
    bank_name: {
      required,
    },
    account_holder_name: {
      required,
    },
    account: {
      required,
    },
    pic: {

    }
  };
  const validateProfile = useVuelidate(rules, toRefs(profile_data));
  
  const filter = reactive({
    field: "first_name",
    type: "like",
    value: "",
  });

  // const uploadFile = (event) => {
  //   profile_data.file = event.target.files[0]
  //   let fr = new FileReader();
  //   fr.onload = () => {
  //       uFile.value = fr.result;
  //   };
  //   fr.readAsDataURL(profile_data.file);
  // }

  const updateUserProfile = async (pId) => {
    validateProfile.value.$touch();
    if (validateProfile.value.$invalid) {

      var message = document.getElementById('message_g_f');
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

      await backendApi.post("v1/profile/adminUpdate/" + pId, {
        first_name: profile_data.first_name,
        last_name: profile_data.last_name,
        phonenumber: profile_data.phone,
        region: profile_data.region,
        city: profile_data.city,
        special_area: profile_data.special_address,
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

        editHandleModal.value = false;

        var message = document.getElementById('message_s_g');
        message.innerHTML = "Success!! Profile Updated Successfully!";

        Toastify({
          node: dom("#success-get-content").clone().removeClass("hidden")[0],
          duration: 3000,
          newWindow: true,
          close: true,
          gravity: "top",
          position: "right",
          stopOnFocus: true,
        }).showToast();

        // authStore.profile = response.data.profile;
        // localStorage.setItem("user",JSON.stringify(response.data.user));
        
        //temporary fix
        // authStore.logout();
        // myrouter.push({ name: "login" });

        myrouter.push("/");
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
  }
  
  var  tabledata = []
  const reInitOnResizeWindow = () => {
    window.addEventListener("resize", () => {
      tabulator.value.redraw();
      createIcons({
        icons,
        "stroke-width": 1.5,
        nameAttr: "data-lucide",
      });
    });
  };
  const onFilter = () => {
    tabulator.value.setFilter(filter.field, filter.type, filter.value);
  };
  const onResetFilter = () => {
    filter.field = "first_name";
    filter.type = "like";
    filter.value = "";
    onFilter();
  };
  const onExportCsv = () => {
    tabulator.value.download("csv", "data.csv");
  };
  const onExportJson = () => {
    tabulator.value.download("json", "data.json");
  };
  const onExportXlsx = () => {
    const win = window;
    win.XLSX = xlsx;
    tabulator.value.download("xlsx", "data.xlsx", {
      sheetName: "Products",
    });
  };
  const onExportHtml = () => {
    tabulator.value.download("html", "data.html", {
      style: true,
    });
  };
  const onPrint = () => {
    tabulator.value.print();
  };
  
  const initializeTable = async () => {
    loading.value=true
  
    await backendApi.get("v1/profile", {
      },{
      headers: {
          'Authorization': "Bearer " + authStore.access_token,
          'Content-Type': 'multipart/form-data'
      }})
      .then((response) => {
        tabledata = response.data
        loading.value=false
  
        Toastify({
          node: dom("#success-notification-content_fetch").clone().removeClass("hidden")[0],
          duration: 3000,
          newWindow: true,
          close: true,
          gravity: "top",
          position: "right",
          stopOnFocus: true,
        }).showToast();
  
      }).catch((error)=>{
        loading.value = false
        Toastify({
          node: dom("#failed-notification-content_fetch").clone().removeClass("hidden")[0],
          duration: 3000,
          newWindow: true,
          close: true,
          gravity: "top",
          position: "right",
          stopOnFocus: true,
        }).showToast();
      })
      tabulator.value = new Tabulator(tableRef.value, {
        data: tabledata,
        printAsHtml: true,
        printStyled:true,
        pagination: "local",
        paginationSize: 10,
        paginationSizeSelector: [10, 20, 30, 40],
        layout: "fitColumns",
        responsiveLayout: "collapse",
        placeholder: "No matching records found",
        printHeader: () => {
          const date = new Date()
          let day = date.getDate();
          let month = date.getMonth() + 1;
          let year = date.getFullYear();
          return `<div class="w-full flex  justify-between items-center py-3 border-b-2">
                    <h1 class="text-2xl font-bold ">All Profiles</h1>
                    <p class="p-2 border-2px rounded ">${day}-${month}-${year}
                  </div>`;
        },
        printFooter: () => {
          return `<div class="w-full py-3 border-dashed border-2 flex justify-center items-center w-full">
          <h2 class="w-full text-center">Generated by Maleda Mirchaye<h2>
          </div>`
        },
        columns: [
          {
            formatter: "responsiveCollapse",
            width: 40,
            minWidth: 30,
            hozAlign: "center",
            resizable: true,
            headerSort: true,
            print:false,
          },{
            title: "Profile Picture",
            minWidth: 200,
            field: "profile_pic",
            responsive: 1,
            hozAlign: "center",
            vertAlign: "middle",
            print: false,
            download: false,
            formatter(cell) {
              const a = dom(`
                      <div>
                        <a href="http://maledamirchaye.com/storage/${cell.getData().profile_pic}" target="_blank">
                          <img
                            style="width:80px; height:80px; border-radius: 50%;"
                            alt="Profile picture of ${cell.getData().first_name} ${cell.getData().last_name}"
                            class="rounded-full"
                            src="http://maledamirchaye.com/storage/${cell.getData().profile_pic}"
                          />
                        </a></div>`);

              const c= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]

              c.append(a[0])
              
              return c
            }
          },{   
            title: "First Name",
            minWidth: 200,
            field: "first_name",
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,      
          },{   
            title: "Last Name",
            minWidth: 200,
            field: "last_name",
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,      
          },{   
            title: "Phone Number",
            minWidth: 200,
            field: "phonenumber",
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,      
          },{   
            title: "Address",
            minWidth: 200,
            field: "region",
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true, 
            formatter(cell) {
              const a = dom(`<div>
                    <a href="" class="font-medium whitespace-nowrap">
                        ${cell.getData().region}
                    </a>
                    <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                        ${cell.getData().city}, ${cell.getData().special_area }
                    </div></div>`);

              const c= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]

              c.append(a[0])
              
              return c
            },     
          },{     
            title: "Bank",
            minWidth: 200,
            field: "bank_name",
            responsive: 1,
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,
            formatter(cell) {
              const a = dom(`
                    
                    <div>
                      <a href="" class="font-medium whitespace-nowrap">
                        ${cell.getData().bank['bank_name']}
                      </a>
                    </div>`);
              const c= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]

              c.append(a[0])
              
              return c
            }
          },{     
            title: "Account Holder Name",
            minWidth: 200,
            field: "account_holder_name",
            responsive: 1,
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,
            formatter(cell) {
              const a = dom(`
                    
                    <div>
                      <a href="" class="font-medium whitespace-nowrap">
                        ${cell.getData().bank['account_holder_name']}
                      </a>
                    </div>`);
              const c= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]

              c.append(a[0])
              
              return c
            },
          },{     
            title: "Account",
            minWidth: 200,
            field: "account",
            responsive: 1,
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,
            formatter(cell) {
              const a = dom(`
                    
                    <div>
                      <a href="" class="font-medium whitespace-nowrap">
                        ${cell.getData().bank['account']}
                      </a>
                    </div>`);
              const c= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]

              c.append(a[0])
              
              return c
            },
          },{
            title: "Actions",
            minWidth: 200,
            field: "actions",
            responsive: 1,
            hozAlign: "center",
            vertAlign: "middle",
            print: false,
            download: false,
            formatter(cell) {
              const a = dom(`
              <div>
                    <div>
                      <a class="flex items-center m-3 btn btn-success w-24" href="javascript:;" @click="editHandleModal.value = true; c_id.value = ${cell.getData().id}">
                      <i class="fa-solid fa-pen-to-square mx-4"></i> Edit</a>
                    </div>
              </div>`);

              const b = dom(`
              <div>
                    <div>
                      <a class="flex items-center m-3 btn btn-warning w-24" href="javascript:;" @click="viewHandleModal.value = true; c_id.value = ${cell.getData().id}">
                      <i class="fa-solid fa-user mx-4"></i> View</a>
                    </div>
              </div>`);

              dom(a).on("click", function () {
                editHandleModal.value = true, 
                fetchData(cell.getData().id),
                c_id.value = cell.getData().id
              });

              dom(b).on("click", function () {
                viewHandleModal.value = true, 
                fetchData(cell.getData().id),
                c_id.value = cell.getData().id
              });

              const c= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]
            
              c.append(a[0])
              c.append(b[0])

              return c
            },
          },
        ],
        renderComplete() {
          createIcons({
            icons,
            "stroke-width": 1.5,
            nameAttr: "data-lucide",
          });
        },
      });
      reInitOnResizeWindow();
  }

  const fetchData = async (id) => {
    await backendApi.get("v1/profile/detailByAdmin/" + id, {
    },{
    headers: {
        'Authorization': "Bearer " + authStore.access_token,
        'Content-Type': 'multipart/form-data'
    }})
    .then((response) => {
      //save to store user details and token
      data.value = response.data

      profile_data.first_name = data.value.profile.first_name
      profile_data.last_name = data.value.profile.last_name
      profile_data.phone = data.value.profile.phonenumber
      profile_data.region = data.value.profile.region
      profile_data.city = data.value.profile.city
      profile_data.special_address = data.value.profile.special_area
      profile_data.id = data.value.profile.id
      profile_data.pic = data.value.profile.profile_pic
      profile_data.bank_name = data.value.profile.bank.bank_name
      profile_data.account_holder_name = data.value.profile.bank.account_holder_name
      profile_data.account = data.value.profile.bank.account

      profile_data.level = data.value.level
      profile_data.position = data.value.position
      profile_data.total_reffered = data.value.total_reffered
      profile_data.total_earned = data.value.total_earned
      profile_data.total_withdrawn = data.value.total_withdrawn
      profile_data.available = data.value.available
      profile_data.total_reff = data.value.total_reff
      profile_data.total_reff_5 = data.value.total_reff_5
      profile_data.total_reff_init = data.value.total_reff_init
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
  
  onMounted(async () => {  
    //Table
    initializeTable(); 
  });

  const editHandleModal = ref(false);
  const viewHandleModal = ref(false);
  const c_id = ref();
</script>
  