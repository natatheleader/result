<template>
    <h2 class="intro-y text-lg font-medium mt-10">All Users</h2>
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
                    <option value="name">Username</option>
                    <option value="email">Email</option>
                    <option value="r_code">Refferal Code</option>
                    <option value="reff">Reffered By</option>
                    <option value="created_at">Registered At</option>
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

      <!-- Forget Modal -->
      <Modal :show="forgetHandleModal" @hidden="forgetHandleModal = false">
        <ModalBody class="p-0">
          <div class="p-5 text-center">
            <EditIcon class="w-16 h-16 text-warning mx-auto mt-3" />
            <div class="text-3xl mt-5">Send Reset Password Link</div>
            <div class="text-slate-500 mt-2">
              You are about to send an Email <br> That allows the user to reset their password. <br> Are you sure you want to continue?
            </div>
          </div>
          
          <!-- <div class="p-5"> -->
            <!-- BEGIN: Form Layout -->
            <!-- <div class="intro-y col-span-12 lg:col-span-6">
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
          </div> -->
          <div class="px-5 pb-8 text-center">
            <!-- <div v-can="'read profile'"> -->
              <button type="button" class="btn btn-success w-24 m-5" @click="sendForget()">Send</button>
            <!-- </div> -->
            <button type="button" @click="forgetHandleModal = false" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
          </div>
        </ModalBody>
      </Modal>

      <!-- Forget Modal -->
      <Modal :show="refferalHandleModal" @hidden="refferalHandleModal = false">
        <ModalBody class="p-0">
          <div class="p-5 text-center">
            <EditIcon class="w-16 h-16 text-warning mx-auto mt-3" />
            <div class="text-3xl mt-5">Resend Refferal Link</div>
            <div class="text-slate-500 mt-2">
              You are about to send an Email <br> That allows the user to get their refferal code and link. <br> Are you sure you want to continue?
            </div>
          </div>
        
          <div class="px-5 pb-8 text-center">
            <!-- <div v-can="'read profile'"> -->
              <button type="button" class="btn btn-success w-24 m-5" @click="sendRefferal()">Send</button>
            <!-- </div> -->
            <button type="button" @click="refferalHandleModal = false" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
          </div>
        </ModalBody>
      </Modal>

      <!-- Edit Modal -->
      <Modal :show="editHandleModal" @hidden="editHandleModal = false">
        <ModalBody class="p-0">
          <div class="p-5 text-center">
            <EditIcon class="w-16 h-16 text-warning mx-auto mt-3" />
            <div class="text-3xl mt-5">Edit User Data</div>
            <div class="text-slate-500 mt-2">
              You are about to Edit a Users Data, <br> Please make sure all data is CORRECT.
            </div>
          </div>
          
          <div class="p-5">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y col-span-12 lg:col-span-6">
              <div class="intro-y  p-5">
                <div>
                  <label for="u_n" class="form-label">Username</label>
                  <input v-model.trim="user_data.username" id="u_n" type="text" class="form-control w-full" placeholder="Name" :class="{ 'border-danger': validateUser.username.$error }"/>
                  <template v-if="validateUser.username.$error">
                    <div
                      v-for="(error, index) in validateUser.username.$errors"
                      :key="index"
                      class="text-danger mt-2"
                      >
                      {{error.$message}}
                    </div>
                  </template>
                </div>
                <div>
                  <label for="e" class="form-label">Email</label>
                  <input v-model.trim="user_data.email" id="e" type="email" class="form-control w-full" placeholder="Email" :class="{ 'border-danger': validateUser.email.$error }"/>
                  <template v-if="validateUser.email.$error">
                    <div
                      v-for="(error, index) in validateUser.email.$errors"
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
            <!-- <div v-can="'read profile'"> -->
              <button type="button" class="btn btn-success w-24 m-5" @click="editUser(user_data.id)">Update</button>
            <!-- </div> -->
            <button type="button" @click="editHandleModal = false" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
          </div>
        </ModalBody>
      </Modal>

      <!-- Modal for view -->
      <Modal :show="viewHandleModal" @hidden="viewHandleModal = false">
        <ModalBody class="p-0">
          <div class="p-5 text-center">
            <UserIcon class="w-16 h-16 text-success mx-auto mt-3" />
            <div class="text-3xl mt-5">User Data</div>
            <div class="text-slate-500 mt-2">
              You are viewing a users data.
            </div>
          </div>
          
          <div class="p-5">
            <div class="intro-y col-span-12 lg:col-span-6">
              <div class="flex flex-col lg:flex-row border-b border-slate-200/60 dark:border-darkmode-400 pb-5 -mx-5">
                <div class="flex flex-1 px-5 items-center justify-center">
                  <div class="w-20 h-20 sm:w-24 sm:h-24 flex-none lg:w-32 lg:h-32 image-fit relative">
                    <img
                      :alt="`Profile picture of ${user_data.profile.first_name} ${user_data.profile.last_name}`"
                      class="rounded-full"
                      :src="`http://maledamirchaye.com/storage/${user_data.profile.profile_pic}`"
                    />
                  </div>
                  <div class="ml-5">
                    <div class="w-24 sm:w-40 truncate sm:whitespace-normal font-medium text-lg">
                      {{ user_data.profile.first_name }} {{ user_data.profile.last_name }}
                    </div>
                    <div class="text-slate-500">Email: {{ user_data.email }}</div>
                    <div class="text-slate-500">Username: {{ user_data.username }}</div>
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
                      {{ user_data.profile.phonenumber }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                      <FlagIcon class="w-4 h-4 mr-2" /> Region :
                      {{ user_data.profile.region }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                      <MapPinIcon class="w-4 h-4 mr-2" /> City :
                      {{ user_data.profile.city }}
                    </div>
                    <div class="truncate sm:whitespace-normal flex items-center mt-3">
                      <MapIcon class="w-4 h-4 mr-2" /> Address :
                      {{ user_data.profile.special_area }}
                    </div>
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

      <div id="success-notification-content_fetch" class="toastify-content hidden">
        <div class="flex w-full h-full">
          <XCircleIcon class="text-success" />
          <div class="ml-4 mr-4">
            <div class="font-medium" id="message_s_f">All Users Fetch Successfully.</div>
          </div>
        </div>
      </div>

      <div id="success-notification-content" class="toastify-content hidden">
        <div class="flex w-full h-full">
          <XCircleIcon class="text-success" />
          <div class="ml-4 mr-4">
            <div class="font-medium" id="message_s">Users Approved Successfully</div>
          </div>
        </div>
      </div>

      <div id="success-get-content" class="toastify-content hidden">
        <div class="flex w-full h-full">
          <XCircleIcon class="text-success" />
          <div class="ml-4 mr-4">
            <div class="font-medium" id="message_s_g">Users Approved Successfully</div>
          </div>
        </div>
      </div>

      <div id="failed-notification-content" class="toastify-content hidden">
        <div class="flex w-full h-full">
          <XCircleIcon class="text-danger" />
          <div class="ml-4 mr-4">
            <div class="font-medium" id="message_f_f">There has been an Error Approving the User. Please Try Again.</div>
          </div>
        </div>
      </div>

      <div id="failed-notification-content_fetch" class="toastify-content hidden">
        <div class="flex w-full h-full">
          <XCircleIcon class="text-danger" />
          <div class="ml-4 mr-4">
            <div class="font-medium" id="message_f">There has been an Error Fetching the Users. Please Try Again.</div>
          </div>
        </div>
      </div>

      <div id="failed-get-content" class="toastify-content hidden">
        <div class="flex w-full h-full">
          <XCircleIcon class="text-danger" />
          <div class="ml-4 mr-4">
            <div class="font-medium" id="message_g_f">There has been an Error Fetching the Users. Please Try Again.</div>
          </div>
        </div>
      </div>

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

  const user_data = reactive({
    username: "",
    email: "",
    profile: "",
  })

  const rules = {
    username: {
      required,
    },
    email: {
      required,
    },
  };

  const validateUser = useVuelidate(rules, toRefs(user_data));
  
  const filter = reactive({
    field: "name",
    type: "like",
    value: "",
  });
  
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
    filter.field = "name";
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
      sheetName: "Users",
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
  
    await backendApi.get("v1/users", {
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
                    <h1 class="text-2xl font-bold ">All Users</h1>
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
            title: "Userame",
            minWidth: 200,
            field: "name",
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,      
          },{   
            title: "Email",
            minWidth: 200,
            field: "email",
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,      
          },{   
            title: "Refferal Code",
            minWidth: 200,
            field: "r_code",
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,      
          },{     
            title: "Reffered By",
            minWidth: 200,
            field: "reff",
            responsive: 1,
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,
          },{     
            title: "Email Verified",
            minWidth: 200,
            field: "email_verified_at",
            responsive: 1,
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,
          },{     
            title: "Has Profile",
            minWidth: 200,
            field: "profile",
            responsive: 1,
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,
            formatter(cell) {              
              const a = dom(`
                  <div>
                    <a href="" class="font-medium whitespace-nowrap">
                      No, Doesn't Have Profile
                    </a>
                  </div>`);
              
              const b = dom(`
                  <div>
                    <a href="" class="font-medium whitespace-nowrap">
                      Yes, Have Profile
                    </a>
                  </div>`);
            
              const c= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]
            
              if (cell.getData().profile == null) {
                c.append(a[0])
              } else {
                c.append(b[0])
              }

              return c
            },
          },{
            title: "Is Active",
            minWidth: 200,
            field: "active",
            responsive: 1,
            hozAlign: "center",
            vertAlign: "middle",
            print: false,
            download: false,
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
                      <a class="flex items-center m-3 btn btn-success" href="javascript:;" @click="forgetHandleModal.value = true; c_id.value = ${cell.getData().id}">
                      <i class="fa-solid fa-pen-to-square mx-4"></i> Resend Password Reset Link</a>
                    </div>
              </div>`);

              const e = dom(`
              <div>
                    <div>
                      <a class="flex items-center m-3 btn btn-success" href="javascript:;" @click="refferalHandleModal.value = true; c_id.value = ${cell.getData().id}">
                      <i class="fa-solid fa-pen-to-square mx-4"></i> Resend Refferal Link</a>
                    </div>
              </div>`);

              const b = dom(`
              <div>
                    <div>
                      <a class="flex items-center m-3 btn btn-success" href="javascript:;" @click="viewModal.value = true; c_id.value = ${cell.getData().id}">
                      <i class="fa-solid fa-user mx-4"></i> View</a>
                    </div>
              </div>`);

              const d = dom(`
              <div>
                    <div>
                      <a class="flex items-center m-3 btn btn-warning w-24" href="javascript:;" @click="editHandleModal.value = true; c_id.value = ${cell.getData().id}">
                      <i class="fa-solid fa-user mx-4"></i> Edit</a>
                    </div>
              </div>`);

              dom(a).on("click", function () {
                forgetHandleModal.value = true,
                c_id.value = cell.getData().id
              });

              dom(b).on("click", function () {
                viewHandleModal.value = true, 
                fetchData(cell.getData().id),
                c_id.value = cell.getData().id
              });

              dom(d).on("click", function () {
                editHandleModal.value = true, 
                fetchData(cell.getData().id),
                c_id.value = cell.getData().id
              });

              dom(e).on("click", function () {
                refferalHandleModal.value = true,
                c_id.value = cell.getData().id
              });

              const c= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]
            
              c.append(a[0], b[0], d[0], e[0])

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

  const sendForget = async () => {
    await backendApi.get("v1/users/forget/" + c_id.value, {
    },{
    headers: {
        'Authorization': "Bearer " + authStore.access_token,
        'Content-Type': 'multipart/form-data'
    }})
    .then((response) => {
      //save to store user details and token
      forgetHandleModal.value = false

      var message = document.getElementById('message_s_g');
      message.innerHTML = "Email Sent Successfully.";

      Toastify({
        node: dom("#success-get-content").clone().removeClass("hidden")[0],
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
      }).showToast();
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

  const sendRefferal = async () => {
    await backendApi.get("v1/users/refferal/" + c_id.value, {
    },{
    headers: {
        'Authorization': "Bearer " + authStore.access_token,
        'Content-Type': 'multipart/form-data'
    }})
    .then((response) => {
      //save to store user details and token
      refferalHandleModal.value = false

      var message = document.getElementById('message_s_g');
      message.innerHTML = "Email Sent Successfully.";

      Toastify({
        node: dom("#success-get-content").clone().removeClass("hidden")[0],
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
      }).showToast();
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

  const fetchData = async (id) => {
    await backendApi.get("v1/user/detailByAdmin/" + id, {
    },{
    headers: {
        'Authorization': "Bearer " + authStore.access_token,
        'Content-Type': 'multipart/form-data'
    }})
    .then((response) => {
      //save to store user details and token
      data.value = response.data
      user_data.username = data.value.user.name
      user_data.email = data.value.user.email
      user_data.profile = data.value.user.profile
      // user_data.region = data.value.profile.region
      // user_data.city = data.value.profile.city
      // user_data.special_address = data.value.profile.special_area
      user_data.id = data.value.user.id
      // user_data.pic = data.value.profile.profile_pic
      // user_data.bank_name = data.value.profile.bank.bank_name
      // user_data.account_holder_name = data.value.profile.bank.account_holder_name
      // user_data.account = data.value.profile.bank.account

      // profile_data.level = data.value.level
      // profile_data.position = data.value.position
      // profile_data.total_reffered = data.value.total_reffered
      // profile_data.total_earned = data.value.total_earned
      // profile_data.total_withdrawn = data.value.total_withdrawn
      // profile_data.available = data.value.available
      // profile_data.total_reff = data.value.total_reff
      // profile_data.total_reff_5 = data.value.total_reff_5
      // profile_data.total_reff_init = data.value.total_reff_init
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

  const editUser = async (uId) => {
    validateUser.value.$touch();
    if (validateUser.value.$invalid) {

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

      await backendApi.post("v1/user/adminUpdate/" + uId, {
        name: user_data.username,
        email: user_data.email,
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
        message.innerHTML = "Success!! User Updated Successfully!";

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
  
  onMounted(async () => {  
    //Table
    initializeTable(); 
  });

  const forgetHandleModal = ref(false);
  const editHandleModal = ref(false);
  const viewHandleModal = ref(false);
  const refferalHandleModal = ref(false);
  const c_id = ref();
</script>
  