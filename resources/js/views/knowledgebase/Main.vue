<template>
  <h2 class="intro-y text-lg font-medium mt-10">KnowledgeBase</h2>
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
                  <option value="title">Title</option>
                  <option value="description">Description</option>
                  <option value="catagory">Catagory</option>
                  <option value="file">File</option>
                  <option value="link">Link</option>
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
          <div class="font-medium" id="message_s_f">All Knowledgebase Fetch Successfully.</div>
        </div>
      </div>
    </div>

    <div id="failed-notification-content_fetch" class="toastify-content hidden">
      <div class="flex w-full h-full">
        <XCircleIcon class="text-danger" />
        <div class="ml-4 mr-4">
          <div class="font-medium" id="message">There has been an Error Fetching the Knowledgebases. Please Try Again.</div>
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

const attFile = ref("#");

const data = ref([]);

const filter = reactive({
  field: "title",
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

  await backendApi.get("v1/knowledgebase", {
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
                  <h1 class="text-2xl font-bold ">Knowledgebase</h1>
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
          title: "Title",
          minWidth: 200,
          field: "title",
          hozAlign: "center",
          vertAlign: "middle",
          print: true,
          download: true,      
        },{     
          title: "Description",
          minWidth: 200,
          field: "description",
          responsive: 1,
          hozAlign: "center",
          vertAlign: "middle",
          print: true,
          download: true,
          formatter(cell) {
            const f = dom(`<div>${cell.getData().description}</div>`);

            const g= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]
          
            g.append(f[0])

            return g
          },
        },{     
          title: "Catagory",
          minWidth: 200,
          field: "catagory",
          hozAlign: "center",
          vertAlign: "middle",
          print: true,
          download: true,
        },{
          title: "File",
          minWidth: 200,
          field: "file",
          responsive: 1,
          hozAlign: "center",
          vertAlign: "middle",
          print: false,
          download: false,
          formatter(cell) {
            const a = dom(`
                  <a href="http://maledamirchaye.com/storage/${cell.getData().file}" target="_blank">
                    <img src="http://maledamirchaye.com/storage/${cell.getData().file}" alt="Attached File" />
                  </a>`);

            const c= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]

            c.append(a[0])
            
            return c
          },
        },{
          title: "Link",
          minWidth: 200,
          field: "link",
          responsive: 1,
          hozAlign: "center",
          vertAlign: "middle",
          print: true,
          download: true,
          formatter(cell) {
            //add if to remove the button if there is no link
            const a = dom(`
                  <a href=${cell.getData().link} class="font-medium whitespace-nowrap">
                    Click To See
                  </a>`);
            
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
</script>
