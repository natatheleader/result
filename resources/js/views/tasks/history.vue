<template>
    <h2 class="intro-y text-lg font-medium mt-10">Task History</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
      <!-- BEGIN: Data List -->
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
                  <option value="description">Description</option>
                  <option value="amount">Amount</option>
                  <option value="name">Deposited By</option>
                  <option value="c_time">Deposite Time</option>
                  <option value="Status">Status</option>
                  <option value="u_time">Status Changed Time</option>
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
          <div class="font-medium" id="message_s_f">All Task Fetch Successfully.</div>
        </div>
      </div>
    </div>

    <div id="failed-notification-content_fetch" class="toastify-content hidden">
      <div class="flex w-full h-full">
        <XCircleIcon class="text-danger" />
        <div class="ml-4 mr-4">
          <div class="font-medium" id="message">There has been an Error Fetching the Task. Please Try Again.</div>
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

const filter = reactive({
  field: "task",
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
  filter.field = "task";
  filter.type = "like";
  filter.value = "";
  onFilter();
};
const onExportCsv = () => {
  tabulator.value.download("csv", "TaskHistory.csv");
};
const onExportJson = () => {
  tabulator.value.download("json", "TaskHistory.json");
};
const onExportXlsx = () => {
  const win = window;
  win.XLSX = xlsx;
  tabulator.value.download("xlsx", "TaskHistory.xlsx", {
    sheetName: "History",
  });
};
const onExportHtml = () => {
  tabulator.value.download("html", "TaskHistory.html", {
    style: true,
  });
};
const onPrint = () => {
  tabulator.value.print();
};

const initializeTable = async () => {
  loading.value=true

  await backendApi.get("v1/allTask", {
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
                <h1 class="text-2xl font-bold ">Tasks Report</h1>
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
        title: "Descripton",
        minWidth: 200,
        field: "description",
        hozAlign: "center",
        vertAlign: "middle",
        print: true,
        download: true,
      },{ 
        title: "Amount",
        minWidth: 200,
        field: "d_amount",
        hozAlign: "center",
        vertAlign: "middle",
        print: true,
        download: true,      
      },{ 
        title: "Deposite By",
        minWidth: 200,
        field: "name",
        hozAlign: "center",
        vertAlign: "middle",
        print: true,
        download: true,      
      },{ 
        title: "Deposite Time",
        minWidth: 200,
        field: "c_time",
        hozAlign: "center",
        vertAlign: "middle",
        print: true,
        download: true,      
      },{     
        title: "Attachement",
        minWidth: 200,
        field: "attachement",
        hozAlign: "center",
        vertAlign: "middle",
        print: false,
        download: false,
        formatter(cell) {
          const a = dom(`
          <div>
                <a href="http://maledamirchaye.com/storage/${cell.getData().attached_file}" target="_blank">
                  <img
                    style="width:80px; height:80px; border-radius: 50%;"
                    alt="Attachement"
                    class="rounded-full"
                    src="http://maledamirchaye.com/storage/${cell.getData().attached_file}"
                  />
                </a></div>`);

          const b = dom(`
          <div>
                  <a href="" class="font-medium whitespace-nowrap">
                    By System
                  </a>
                </div>`);

          const c= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]

          if (cell.getData().attached_file == "By System") {
            c.append(b[0])
          } else {
            c.append(a[0])
          }
          
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
        title: "Status Updated Time",
        minWidth: 200,
        field: "u_time",
        hozAlign: "center",
        vertAlign: "middle",
        print: true,
        download: true,      
      }
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
 initializeTable()
})
</script>
  