<template>
    <h2 class="intro-y text-lg font-medium mt-10">Your Tasks</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
      <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <div class="intro-y box p-5 mt-5">
          <div  class=" hidden md:flex flex-col sm:flex-row sm:items-end xl:items-start">
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
                  <option value="task">Task</option>
                  <option value="amount">Amount</option>
                  <option value="account_holder">Deposite To</option>
                  <option value="status">Status</option>
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
      
      <!-- END: Pagination -->
    </div>

    <!-- BEGIN: Delete Confirmation Modal -->
    <Modal
      :show="deleteConfirmationModal"
      @hidden="deleteConfirmationModal = false"
    >
      <ModalBody class="p-0">
        <div class="p-5 text-center">
          <!-- <XCircleIcon class="w-16 h-16 text-danger mx-auto mt-3" /> -->
          <div class="text-3xl mt-5">Submit Your Request Bellow</div>
          <div class="text-slate-500 mt-2">
            Please Fill the form correctly and <br> attach the necessary files
          </div>
        </div>
        <div>
            <form>
                <!-- <div class="input-form w-full mt-3"> -->
              <!-- <div>
                <label for="crud-form-1" class="form-label">Sent To Account</label>
                <input v-model.trim="validateProfile.account.$model" id="crud-form-1" type="text" class="form-control w-full" placeholder="Name" :class="{ 'border-danger': validateProfile.account.$error }"/>
                <template v-if="validateProfile.account.$error">
                  <div
                    v-for="(error, index) in validateProfile.account.$errors"
                    :key="index"
                    class="text-danger mt-2"
                  >
                    {{error.$message}}
                  </div>
                </template>
              </div> -->
              <div class="m-10">
                <label for="crud-form-1" class="form-label">Sent Amount</label>
                <input v-model.trim="validateProfile.amount.$model" id="crud-form-1" type="text" class="form-control w-full" placeholder="Sent Amount" :class="{ 'border-danger': validateProfile.amount.$error }"/>
                <template v-if="validateProfile.amount.$error">
                  <div
                    v-for="(error, index) in validateProfile.amount.$errors"
                    :key="index"
                    class="text-danger mt-2"
                  >
                    {{error.$message}}
                  </div>
                </template>
              </div>
              <div class="m-10">
                <label
                  for="bank_iconcreate"
                  class="form-label w-full flex flex-col sm:flex-row"
                >
                  <div class="relative w-full h-32 border-[1px] border-dashed ring-2 ring-outline-2 flex justify-center items-center bg-gray-200 rounded-lg dark:bg-gray-800">
                      <img src="../../assets/images/logo.svg" class="h-full w-auto"/>
                      <p class="font-bold text-lg w-full text-center "> Click Here To Upload Your Payment Recipt</p>
                  </div>
                </label>
                <input
                  id="bank_iconcreate"
                  @change="uploadFile"
                  type="file"
                  name="file"
                  class="form-control hidden"
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
            </form>
        </div>
        <div class="px-5 pb-8 text-center">
          <button type="button" class="btn btn-success w-24 m-5" @click="submitRecipt">Submit</button>
          <button
            type="button"
            @click="deleteConfirmationModal = false"
            class="btn btn-outline-secondary w-24 mr-1"
          >
            Cancel
          </button>
        </div>
      </ModalBody>
    </Modal>
    <!-- END: Delete Confirmation Modal -->

    <div id="success-notification-content_fetch" class="toastify-content hidden">
    <div class="flex w-full h-full">
      <XCircleIcon class="text-success" />
      <div class="ml-4 mr-4">
        <div class="font-medium" id="message_s_f">All Task Fetch Successfully.</div>
      </div>
    </div>
  </div>

  <div id="success-notification-content" class="toastify-content hidden">
    <div class="flex w-full h-full">
      <XCircleIcon class="text-success" />
      <div class="ml-4 mr-4">
        <div class="font-medium" id="message_s">Task Approved Successfully</div>
      </div>
    </div>
  </div>

  <div id="failed-notification-content" class="toastify-content hidden">
    <div class="flex w-full h-full">
      <XCircleIcon class="text-danger" />
      <div class="ml-4 mr-4">
        <div class="font-medium" id="message">There has been an Error Approving the Task. Please Try Again.</div>
      </div>
    </div>
  </div>

  <div id="failed-notification-content_fetch" class="toastify-content hidden">
    <div class="flex w-full h-full">
      <XCircleIcon class="text-danger" />
      <div class="ml-4 mr-4">
        <div class="font-medium" id="message">There has been an Error Fetching the Tasks. Please Try Again.</div>
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

const filter = reactive({
  field: "task",
  type: "like",
  value: "",
});

const uFile = ref(null);

const profile_data = reactive({
  amount:"",
  file:"",
})

const rules = {
  amount:{
    required,
  },
  file: {
    required,
  },
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

const submitRecipt = async () => {
  validateProfile.value.$touch();
  if (validateProfile.value.$invalid) {
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

    await backendApi.post("v1/verifyTask", {
      to_id: profile_data.account,
      amount: profile_data.amount,
      recipt: profile_data.file,
    },{
    headers: {
        'Authorization': "Bearer " + authStore.access_token,
        'Content-Type': 'multipart/form-data'
    }})
    .then((response) => {
      //save to store user details and token
      deleteConfirmationModal.value = false;

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

const data = ref([]);

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

  await backendApi.get("v1/myTask", {
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
                <h1 class="text-2xl font-bold ">New Task Report</h1>
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
      },
      // {
      //   title: "ID",
      //   minWidth: 100,
      //   responsive: 0,
      //   field: "id",
      //   vertAlign: "middle",
      //   hozAlign:"center",
      //   print: true,
      //   download: true,
      //   formatter(cell) {
      //     return `<div>
      //           <div class="font-medium whitespace-nowrap">${
      //             cell.getData().id
      //           }</div>
      //         </div>`;
      //   },
      // },
      // For HTML table
      {   
        title: "Task",
        minWidth: 200,
        field: "task",
        hozAlign: "center",
        vertAlign: "middle",
        print: true,
        download: true,      
      },{     
        title: "Amount",
        minWidth: 200,
        field: "amount",
        hozAlign: "center",
        vertAlign: "middle",
        print: true,
        download: true,
        formatter(cell) {
          const a = dom(`<div>
                <a href="" class="font-medium whitespace-nowrap">
                    ${cell.getData().amount}
                </a>
                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                    ${cell.getData().description}
                </div></div>`);

          const c= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]

          c.append(a[0])
          
          return c
        },
      },{ 
        title: "Deposit To",
        minWidth: 200,
        field: "account_holder",
        hozAlign: "center",
        vertAlign: "middle",
        print: true,
        download: true, 
        formatter(cell) {
          const a = dom(`<div>
                <a href="" class="font-medium whitespace-nowrap">
                    ${cell.getData().account_holder}
                </a>
                <div class="text-slate-500 text-xs whitespace-nowrap mt-0.5">
                    ${cell.getData().account}
                </div></div>`);

          const c= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]

          c.append(a[0])
          
          return c
        },     
      },{ 
        title: "Status",
        minWidth: 200,
        field: "status",
        hozAlign: "center",
        vertAlign: "middle",
        print: true,
        download: true,      
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
          if (cell.getData().status == "Not Paied" || cell.getData().status == "Rejected") {
            const a = dom(`
                <div>
                  <a class="flex items-center mr-3 btn btn-success w-24" href="javascript:;" @click="deleteConfirmationModal.value = true; c_id.value = ${cell.getData().id}">
                    <i class="fa-solid fa-clipboard-check w-4 h-4 mr-1"></i> Approval</a></div>`);
            dom(a).on("click", function () {
              deleteConfirmationModal.value = true, c_id.value = cell.getData().id
            });
          } else {
            const a = dom(`
                <div>
                  <a href="" class="font-medium whitespace-nowrap">
                    ${cell.getData().status}
                  </a>
                </div>`);
          }
          const c= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]
         
          c.append(a[0])

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

onMounted(async () => {
  initializeTable();
});
  
  
  const deleteConfirmationModal = ref(false);
  </script>
  