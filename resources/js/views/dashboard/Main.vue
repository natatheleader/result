<template>
  <div class="grid grid-cols-12 gap-6">
    <div class="col-span-12 2xl:col-span-9">
      <div class="grid grid-cols-12 gap-6">
        <!-- BEGIN: General Report -->
        <div class="col-span-12 mt-8">
          <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium text-center mr-5">Welcome Back, Dear<strong>{{ " " + user_name }}</strong>. You are Now at Round {{ " " + dashboard_data.level + " " }} and at Level {{ " " + dashboard_data.position }}.</h2>
          </div>
        </div>
        <div class="col-span-8 mt-8"><!-- This is the main line -->
          <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">{{ $t('general-report') }}</h2>
            <a href="#" class="ml-auto flex items-center text-primary">
              <RefreshCcwIcon class="w-4 h-4 mr-3" /> Reload Data
            </a>
          </div>
          <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <FilmIcon class="report-box__icon text-primary" />
                    <div class="ml-auto">
                      <!-- <Tippy
                        tag="div"
                        class="report-box__indicator bg-success cursor-pointer"
                        content="33% Higher than last month"
                      >
                        0%
                        <ChevronUpIcon class="w-4 h-4 ml-0.5" />
                      </Tippy> -->
                    </div>
                  </div>
                  <div class="text-3xl font-medium leading-8 mt-6">
                    {{ dashboard_data.total_earnings }} ETB
                  </div>
                  <div class="text-base text-slate-500 mt-1">
                    Total Gross Earning
                  </div>
                </div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <PhoneCallIcon class="report-box__icon text-pending" />
                    <div class="ml-auto">
                      <!-- <Tippy
                        tag="div"
                        class="report-box__indicator bg-danger cursor-pointer"
                        content="2% Lower than last month"
                      >
                        0%
                        <ChevronDownIcon class="w-4 h-4 ml-0.5" />
                      </Tippy> -->
                    </div>
                  </div>
                  <div class="text-3xl font-medium leading-8 mt-6">
                    {{ dashboard_data.total_available_balance }} ETB
                  </div>
                  <div class="text-base text-slate-500 mt-1">Total Available Balance</div>
                </div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <ClockIcon class="report-box__icon text-warning" />
                    <div class="ml-auto">
                      <!-- <Tippy
                        tag="div"
                        class="report-box__indicator bg-success cursor-pointer"
                        content="12% Higher than last month"
                        0% <ChevronUpIcon class="w-4 h-4 ml-0.5" />
                        >
                      </Tippy> -->
                    </div>
                  </div>
                  <div class="text-3xl font-medium leading-8 mt-6">
                    {{ dashboard_data.all_reffered }}
                  </div>
                  <div class="text-base text-slate-500 mt-1">All Reffered Users</div>
                </div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <ClockIcon class="report-box__icon text-warning" />
                    <div class="ml-auto">
                      <!-- <Tippy
                        tag="div"
                        class="report-box__indicator bg-success cursor-pointer"
                        content="12% Higher than last month"
                      >
                        0% <ChevronUpIcon class="w-4 h-4 ml-0.5" />
                      </Tippy> -->
                    </div>
                  </div>
                  <div class="text-3xl font-medium leading-8 mt-6">
                    {{ dashboard_data.total_earning_refferal }} ETB
                  </div>
                  <div class="text-base text-slate-500 mt-1">Total Earning From Refferal</div>
                </div>
              </div>
            </div>
          </div>

          <!-- second round -->
          <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <ClockIcon class="report-box__icon text-warning" />
                    <div class="ml-auto">
                      <!-- <Tippy
                        tag="div"
                        class="report-box__indicator bg-success cursor-pointer"
                        content="12% Higher than last month"
                        0% <ChevronUpIcon class="w-4 h-4 ml-0.5" />
                        >
                      </Tippy> -->
                    </div>
                  </div>
                  <div class="text-3xl font-medium leading-8 mt-6">
                    {{ dashboard_data.total_reffered_init_income }} ETB
                  </div>
                  <div class="text-base text-slate-500 mt-1">Earnings From Initial Refferal Invitation</div>
                </div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <ClockIcon class="report-box__icon text-warning" />
                    <div class="ml-auto">
                      <!-- <Tippy
                        tag="div"
                        class="report-box__indicator bg-success cursor-pointer"
                        content="12% Higher than last month"
                        0% <ChevronUpIcon class="w-4 h-4 ml-0.5" />
                        >
                      </Tippy> -->
                    </div>
                  </div>
                  <div class="text-3xl font-medium leading-8 mt-6">
                    {{ dashboard_data.total_reffered_5_income }} ETB
                  </div>
                  <div class="text-base text-slate-500 mt-1">Earnings From 5% Refferals</div>
                </div>
              </div>
            </div>
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <ClockIcon class="report-box__icon text-warning" />
                    <div class="ml-auto">
                      <!-- <Tippy
                        tag="div"
                        class="report-box__indicator bg-success cursor-pointer"
                        content="12% Higher than last month"
                        0% <ChevronUpIcon class="w-4 h-4 ml-0.5" />
                        >
                      </Tippy> -->
                    </div>
                  </div>
                  <div class="text-3xl font-medium leading-8 mt-6">
                    {{ dashboard_data.total_withdrawal }} ETB
                  </div>
                  <div class="text-base text-slate-500 mt-1">Money Withdrawn So Far</div>
                </div>
              </div>
            </div>  
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <UserIcon class="report-box__icon text-success" />
                    <div class="ml-auto">
                       <!-- <Tippy
                        tag="div"
                        class="report-box__indicator bg-success cursor-pointer"
                        content="22% Higher than last month"
                      >
                        0% <ChevronUpIcon class="w-4 h-4 ml-0.5" />
                      </Tippy>  -->
                    </div>
                  </div>
                  <div class="text-3xl font-medium leading-8 mt-6">
                    {{ dashboard_data.total_users }}
                  </div>
                  <div class="text-base text-slate-500 mt-1">Total Registered Users</div>
                </div>
              </div>
            </div>
            
          </div>

          <!-- Third round -->
          <div class="grid grid-cols-12 gap-6 mt-5">
            <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">
              <div class="report-box zoom-in">
                <div class="box p-5">
                  <div class="flex">
                    <UserIcon class="report-box__icon text-success" />
                    <div class="ml-auto">
                       <!-- <Tippy
                        tag="div"
                        class="report-box__indicator bg-success cursor-pointer"
                        content="22% Higher than last month"
                      >
                        0% <ChevronUpIcon class="w-4 h-4 ml-0.5" />
                      </Tippy>  -->
                    </div>
                  </div>
                  <div class="text-3xl font-medium leading-8 mt-6">
                    {{ dashboard_data.refferal_code }}
                  </div>
                  <div class="text-base text-slate-500 mt-1">{{  $t('refferal_code') }}</div>
                </div>
              </div>
            </div>          
          </div>
        </div>
        <!-- END: General Report -->

        <!-- BEGIN: Notifications -->
        <div class="col-span-12 xl:col-span-4 mt-6">
          <div class="col-span-12 md:col-span-6 xl:col-span-12 xl:col-start-1 xl:row-start-1 2xl:col-start-auto 2xl:row-start-auto mt-3">
            <div class="intro-x flex items-center h-10">
              <h2 class="text-lg font-medium truncate mr-auto">Notifications</h2>
              <button
                data-carousel="important-notes"
                data-target="prev"
                class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
                @click="prevImportantNotes"
              >
                <ChevronLeftIcon class="w-4 h-4" />
              </button>
              <button
                data-carousel="important-notes"
                data-target="next"
                class="tiny-slider-navigator btn px-2 border-slate-300 text-slate-600 dark:text-slate-300 mr-2"
                @click="nextImportantNotes"
              >
                <ChevronRightIcon class="w-4 h-4" />
              </button>
            </div>
            <div class="mt-5 intro-x">
              <div class="box zoom-in">
                <div ref-key="importantNotesRef">                  
                  <div 
                    v-for="(notification) in dashboard_data.notification"
                    :key="notification.id"
                    class="p-5 m-2"
                    :class="{
                      '': notification.type == 0,
                      'bg-green-500': notification.type == 1,
                      'bg-yellow-500': notification.type == 2,
                      'bg-red-500': notification.type == 3,
                    }"
                  >
                    <div class="text-base text-2xl font-medium truncate">
                      {{ notification.title }}
                    </div>
                    <div class="text-base font-medium truncate">
                      {{ notification.sub_title }}
                    </div>
                    <div class="text-slate-800 mt-1">{{ getRelativeTime(notification.created_at) }}</div>
                    <img
                      v-if="(notification.attachement)"
                      :alt=notification.title 
                      :src="`https://maledamirchaye.com/storage/${notification.attachement}`"
                    />
                    <div class="text-slate-500 text-justify mt-1">
                      {{ notification.body }}
                    </div>
                    <div class="font-medium flex mt-5">
                      <a
                        v-if="(notification.link != null)"
                        target="_blank"
                        :href="url.format({ protocol: 'https:', hostname: notification.link })" 
                        >
                        <button                
                          type="button" class="btn btn-secondary py-1 px-2"
                        >
                          Click Here for Attached Link
                        </button>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END: Important Notes -->

        <!-- BEGIN: Weekly Best Sellers -->
        <div class="col-span-12 xl:col-span-4 mt-6">
          <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
              Weekly Top Achiever
            </h2>
          </div>
          <div class="mt-5">
            <div class="intro-y">
              <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                  <img
                    :alt=dashboard_data.top_refferers_1_name 
                    :src="`http://maledamirchaye.com/storage/${dashboard_data.top_refferers_1_pic}`"
                  />
                </div>
                <div class="ml-4 mr-auto">
                  <div class="font-medium">
                    {{ dashboard_data.top_refferers_1_name }}
                  </div>
                  <div class="text-slate-500 text-xs mt-0.5">
                    Level : {{ dashboard_data.top_refferers_1_level }}
                  </div>
                </div>
                <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">
                  {{ dashboard_data.top_refferers_1_total }}
                </div>
              </div>
            </div>

            <div class="intro-y">
              <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                  <img
                    :alt=dashboard_data.top_refferers_2_name 
                    :src="`http://maledamirchaye.com/storage/${dashboard_data.top_refferers_2_pic}`"
                  />
                </div>
                <div class="ml-4 mr-auto">
                  <div class="font-medium">
                    {{ dashboard_data.top_refferers_2_name }}
                  </div>
                  <div class="text-slate-500 text-xs mt-0.5">
                    Level : {{ dashboard_data.top_refferers_2_level }}
                  </div>
                </div>
                <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">
                  {{ dashboard_data.top_refferers_2_total }}
                </div>
              </div>
            </div>

            <div class="intro-y">
              <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                  <img
                    :alt=dashboard_data.top_refferers_3_name 
                    :src="`http://maledamirchaye.com/storage/${dashboard_data.top_refferers_3_pic}`"
                  />
                </div>
                <div class="ml-4 mr-auto">
                  <div class="font-medium">
                    {{ dashboard_data.top_refferers_3_name }}
                  </div>
                  <div class="text-slate-500 text-xs mt-0.5">
                    Level : {{ dashboard_data.top_refferers_3_level }}
                  </div>
                </div>
                <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">
                  {{ dashboard_data.top_refferers_3_total }}
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END: Weekly Best Sellers -->

        <!-- BEGIN: All Time Best Sellers -->
        <div class="col-span-12 xl:col-span-4 mt-6">
          <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
              All Time Top Achiever
            </h2>
          </div>
          <div class="mt-5">
            <div class="intro-y">
              <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                  <img
                    :alt=dashboard_data.all_time_top_refferers_1_name 
                    :src="`http://maledamirchaye.com/storage/${dashboard_data.all_time_top_refferers_1_pic}`"
                  />
                </div>
                <div class="ml-4 mr-auto">
                  <div class="font-medium">
                    {{ dashboard_data.all_time_top_refferers_1_name }}
                  </div>
                  <div class="text-slate-500 text-xs mt-0.5">
                    Level : {{ dashboard_data.all_time_top_refferers_1_level }}
                  </div>
                </div>
                <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">
                  {{ dashboard_data.all_time_top_refferers_1_total }}
                </div>
              </div>
            </div>

            <div class="intro-y">
              <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                  <img
                    :alt=dashboard_data.all_time_top_refferers_2_name 
                    :src="`http://maledamirchaye.com/storage/${dashboard_data.all_time_top_refferers_2_pic}`"
                  />
                </div>
                <div class="ml-4 mr-auto">
                  <div class="font-medium">
                    {{ dashboard_data.all_time_top_refferers_2_name }}
                  </div>
                  <div class="text-slate-500 text-xs mt-0.5">
                    Level : {{ dashboard_data.all_time_top_refferers_2_level }}
                  </div>
                </div>
                <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">
                  {{ dashboard_data.all_time_top_refferers_2_total }}
                </div>
              </div>
            </div>

            <div class="intro-y">
              <div class="box px-4 py-4 mb-3 flex items-center zoom-in">
                <div class="w-10 h-10 flex-none image-fit rounded-md overflow-hidden">
                  <img
                    :alt=dashboard_data.all_time_top_refferers_3_name 
                    :src="`http://maledamirchaye.com/storage/${dashboard_data.all_time_top_refferers_3_pic}`"
                  />
                </div>
                <div class="ml-4 mr-auto">
                  <div class="font-medium">
                    {{ dashboard_data.all_time_top_refferers_3_name }}
                  </div>
                  <div class="text-slate-500 text-xs mt-0.5">
                    Level : {{ dashboard_data.all_time_top_refferers_3_level }}
                  </div>
                </div>
                <div class="py-1 px-2 rounded-full text-xs bg-success text-white cursor-pointer font-medium">
                  {{ dashboard_data.all_time_top_refferers_3_total }}
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END: Weekly Best Sellers -->

        <!-- BEGIN: All Users -->
        <div v-if="checkPermission('read users')" class="col-span-12 mt-6">
          <div class="intro-y flex items-center h-10">
            <h2 class="text-lg font-medium truncate mr-5">
              All Users
            </h2>
          </div>
          <div class="intro-y overflow-auto lg:overflow-visible">
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
        <!-- END: Weekly Top Products -->

        <div class="2xl:pl-6 grid grid-cols-12 gap-x-6 2xl:gap-x-0 gap-y-6">
          <!-- BEGIN: Schedules -->
          <div
            class="col-span-12 md:col-span-6 xl:col-span-4 2xl:col-span-12 xl:col-start-1 xl:row-start-2 2xl:col-start-auto 2xl:row-start-auto mt-3"
          >
            <div class="intro-x flex items-center h-10">
              <!-- <h2 class="text-lg font-medium truncate mr-5">Schedules</h2> -->
              <!-- <a href="" class="ml-auto text-primary truncate flex items-center">
                <PlusIcon class="w-4 h-4 mr-1" /> Add New Schedules
              </a> -->
            </div>
            <div class="mt-5">
              <div class="intro-x box">
              </div>
            </div>
          </div>
          <!-- END: Schedules -->
        </div>
      </div>
    </div>
  </div>
  <myLoading v-show="loading" class="z-[9999]" />
</template>

<script setup>
import { ref, provide, onMounted, reactive } from "vue";
import Toastify from "toastify-js";

import xlsx from "xlsx";
import { createIcons, icons } from "lucide";
import Tabulator from "tabulator-tables";

import backendApi from "../../networkServices/api.js";
import myLoading from "@/components/myloading/Main.vue";

import { useAuthStore } from "../../stores/auth.js";
import { useRouter } from "vue-router";

import url from 'url';

const tableRef = ref();
const tabulator = ref();

const salesReportFilter = ref();
const importantNotesRef = ref();

const myrouter = useRouter();
const authStore = useAuthStore();

provide("bind[importantNotesRef]", (el) => {
  importantNotesRef.value = el;
});

const prevImportantNotes = () => {
  const el = importantNotesRef.value;
  el.tns.goTo("prev");
};

const nextImportantNotes = () => {
  const el = importantNotesRef.value;
  el.tns.goTo("next");
};

const dashboard_data = reactive({
  all_reffered: 0,
  total_earnings: 0,
  refferal_code: "",
});

const loading = ref(false);

const user_name = ref('')

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
  loading.value = true;

  const userData = useAuthStore();
  // if (userData.getPermission.includes(permission)) {
  //     return true;
  // }
  // console.log(authStore.user_data.profile.profile_pic)

  if (authStore.user_data.profile || authStore.user_data.profile !== null) {
    user_name.value = authStore.user_data.profile.first_name + " " + authStore.user_data.profile.last_name
  }

  await backendApi
    .get("/v1/dashboard")
    .then((response) => {
      loading.value = false;
      dashboard_data.total_earnings = response.data[0].total_earnings ?? 0;
      dashboard_data.refferal_code = response.data[0].r_code ?? "Register First";
      dashboard_data.total_available_balance = response.data[0].available_balance ?? 0;
      dashboard_data.total_earning_refferal = response.data[0].total_refferal_earning ?? 0;
      dashboard_data.total_withdrawal = response.data[0].top_withdrawal ?? 0;
      dashboard_data.all_reffered = response.data[0].refferals ?? 0;
      dashboard_data.total_reffered_init_income = response.data[0].total_refferal_init ?? 0;
      dashboard_data.total_reffered_5_income = response.data[0].total_refferal_5 ?? 0;
      dashboard_data.total_users = response.data[0].total_users ?? 0;

      dashboard_data.notification = response.data[0].notifications ?? 0;

      
      dashboard_data.top_refferers_1_name = response.data[0].top_refferals[0].name;
      dashboard_data.top_refferers_1_level = response.data[0].top_refferals[0].level;
      dashboard_data.top_refferers_1_pic = response.data[0].top_refferals[0].pic;
      dashboard_data.top_refferers_1_total = response.data[0].top_refferals[0].total_reffered;
      
      dashboard_data.top_refferers_2_name = response.data[0].top_refferals[1].name;
      dashboard_data.top_refferers_2_level = response.data[0].top_refferals[1].level;
      dashboard_data.top_refferers_2_pic = response.data[0].top_refferals[1].pic;
      dashboard_data.top_refferers_2_total = response.data[0].top_refferals[1].total_reffered;
      
      dashboard_data.top_refferers_3_name = response.data[0].top_refferals[2].name;
      dashboard_data.top_refferers_3_level = response.data[0].top_refferals[2].level;
      dashboard_data.top_refferers_3_pic = response.data[0].top_refferals[2].pic;
      dashboard_data.top_refferers_3_total = response.data[0].top_refferals[2].total_reffered;

      dashboard_data.all_time_top_refferers_1_name = response.data[0].all_time_top_refferals[0].name;
      dashboard_data.all_time_top_refferers_1_level = response.data[0].all_time_top_refferals[0].level;
      dashboard_data.all_time_top_refferers_1_pic = response.data[0].all_time_top_refferals[0].pic;
      dashboard_data.all_time_top_refferers_1_total = response.data[0].all_time_top_refferals[0].total_reffered;
      
      dashboard_data.all_time_top_refferers_2_name = response.data[0].all_time_top_refferals[1].name;
      dashboard_data.all_time_top_refferers_2_level = response.data[0].all_time_top_refferals[1].level;
      dashboard_data.all_time_top_refferers_2_pic = response.data[0].all_time_top_refferals[1].pic;
      dashboard_data.all_time_top_refferers_2_total = response.data[0].all_time_top_refferals[1].total_reffered;
      
      dashboard_data.all_time_top_refferers_3_name = response.data[0].all_time_top_refferals[2].name;
      dashboard_data.all_time_top_refferers_3_level = response.data[0].all_time_top_refferals[2].level;
      dashboard_data.all_time_top_refferers_3_pic = response.data[0].all_time_top_refferals[2].pic;
      dashboard_data.all_time_top_refferers_3_total = response.data[0].all_time_top_refferals[2].total_reffered;
      
      dashboard_data.level = response.data[0].level;
      dashboard_data.position = response.data[0].position;
      console.log(dashboard_data);
    })
    .catch((error) => {
      loading.value = false;
    });

    initializeTable(); 
});

const checkPermission = (permission) => {
  const userData = useAuthStore();
  if (userData.getPermission.includes(permission)) {
      return true;
  }
};

function getRelativeTime(time) {
  const createdAt = new Date(time);
  const timeDiff = new Date().getTime() - createdAt.getTime();

  const seconds = Math.floor(timeDiff / 1000);
  const minutes = Math.floor(seconds / 60);
  const hours = Math.floor(minutes / 60);
  const days = Math.floor(hours / 24);

  if (seconds < 60) {
    return `${seconds} seconds ago`;
  } else if (minutes < 60) {
    return `${minutes} minutes ago`;
  } else if (hours < 24) {
    return `${hours} hours ago`;
  } else {
    return `${days} days ago`;
  }
}
</script>
