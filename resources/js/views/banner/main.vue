<template>
    <h2 class="intro-y text-lg font-medium mt-10">Banner</h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
      <!-- BEGIN: Data List -->
      <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
        <button class="btn btn-primary shadow-md mr-2" @click="createHandleModal = true">Create Banner</button>
        <div class="intro-y box p-5 mt-5">
          <div class=" hidden md:flex flex-col sm:flex-row sm:items-end xl:items-start">
            <form id="tabulator-html-filter-form" class="xl:flex sm:mr-auto">
              <div class="sm:flex items-center sm:mr-4">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Field</label>
                <select id="tabulator-html-filter-field" v-model="filter.field" class="form-select w-full sm:w-32 2xl:w-full mt-2 sm:mt-0 sm:w-auto">
                  <option value="name">Name</option>
                  <option value="title">Title</option>
                  <option value="detail">Detail</option>
                  <option value="link">Link</option>
                </select>
              </div>
              <div class="sm:flex items-center sm:mr-4 mt-2 xl:mt-0">
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Type</label>
                <select id="tabulator-html-filter-type" v-model="filter.type" class="form-select w-full mt-2 sm:mt-0 sm:w-auto">
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
                <label class="w-12 flex-none xl:w-auto xl:flex-initial mr-2">Value</label>
                <input id="tabulator-html-filter-value" v-model="filter.value" type="text" class="form-control sm:w-40 2xl:w-full mt-2 sm:mt-0" placeholder="Search..."/>
              </div>
              <div class="mt-2 xl:mt-0">
                <button id="tabulator-html-filter-go" type="button" class="btn btn-primary w-full sm:w-16" @click="onFilter">Go</button>
                <button id="tabulator-html-filter-reset" type="button" class="btn btn-secondary w-full sm:w-16 mt-2 sm:mt-0 sm:ml-1" @click="onResetFilter">Reset</button>
              </div>
            </form>
            <div class="flex mt-5 sm:mt-0">
              <button id="tabulator-print" class="btn btn-outline-secondary w-1/2 sm:w-auto mr-2" @click="onPrint">
                <PrinterIcon class="w-4 h-4 mr-2" /> 
                Print 
              </button>
              <Dropdown class="w-1/2 sm:w-auto">
                <DropdownToggle class="btn btn-outline-secondary w-full sm:w-auto">
                  <FileTextIcon class="w-4 h-4 mr-2" /> 
                  Export
                  <ChevronDownIcon class="w-4 h-4 ml-auto sm:ml-2" />
                </DropdownToggle>
                <DropdownMenu class="w-40">
                  <DropdownContent>
                    <DropdownItem @click="onExportCsv">
                      <FileTextIcon class="w-4 h-4 mr-2" /> 
                      Export CSV
                    </DropdownItem>
                    <DropdownItem @click="onExportJson">
                      <FileTextIcon class="w-4 h-4 mr-2" /> 
                      Export JSON
                    </DropdownItem>
                    <DropdownItem @click="onExportXlsx">
                      <FileTextIcon class="w-4 h-4 mr-2" /> 
                      Export XLSX
                    </DropdownItem>
                    <DropdownItem @click="onExportHtml">
                      <FileTextIcon class="w-4 h-4 mr-2" /> 
                      Export HTML
                    </DropdownItem>
                  </DropdownContent>
                </DropdownMenu>
              </Dropdown>
            </div>
          </div>
          <div class="overflow-x-auto scrollbar-hidden">
            <div id="tabulator" ref="tableRef" class="mt-5 table-report table-report--tabulator"></div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Modal for Create -->
    <Modal :show="createHandleModal" @hidden="createHandleModal = false">
        <ModalBody class="p-0">
          <div class="p-5 text-center">
            <EditIcon class="w-16 h-16 text-warning mx-auto mt-3" />
            <div class="text-3xl mt-5">Create Banner</div>
            <div class="text-slate-500 mt-2">
              You are about to create a Banner.
            </div>
          </div>
          
          <div class="p-5">
            <!-- BEGIN: Form Layout -->
            <div class="intro-y col-span-12 lg:col-span-6">
              <div class="intro-y p-5">
                <div>
                  <label for="ty" class="form-label">Name</label>
                  <input v-model.trim="banner_data.name" id="name" type="text" class="form-control w-full" placeholder="Name" :class="{ 'border-danger': validateBanner.name.$error }"/>
                  <template v-if="validateBanner.name.$error">
                    <div
                      v-for="(error, index) in validateBanner.name.$errors"
                      :key="index"
                      class="text-danger mt-2"
                      >
                      {{error.$message}}
                    </div>
                  </template>
                </div>
                <div>
                  <label for="tit" class="form-label">Title</label>
                  <input v-model.trim="banner_data.title" id="tit" type="text" class="form-control w-full" placeholder="Title" :class="{ 'border-danger': validateBanner.title.$error }"/>
                  <template v-if="validateBanner.title.$error">
                    <div
                      v-for="(error, index) in validateBanner.title.$errors"
                      :key="index"
                      class="text-danger mt-2"
                    >
                      {{error.$message}}
                    </div>
                  </template>
                </div>
                <div>
                  <label for="det" class="form-label">Detail</label>
                  <input v-model.trim="banner_data.detail" id="det" type="text" class="form-control w-full" placeholder="Detail" :class="{ 'border-danger': validateBanner.detail.$error }"/>
                  <template v-if="validateBanner.detail.$error">
                    <div
                      v-for="(error, index) in validateBanner.detail.$errors"
                      :key="index"
                      class="text-danger mt-2"
                    >
                      {{error.$message}}
                    </div>
                  </template>
                </div>
                <div>
                  <label for="lin" class="form-label">Link</label>
                  <input v-model.trim="banner_data.link" id="lin" type="text" class="form-control w-full" placeholder="link" :class="{ 'border-danger': validateBanner.link.$error }"/>
                  <template v-if="validateBanner.link.$error">
                    <div
                      v-for="(error, index) in validateBanner.link.$errors"
                      :key="index"
                      class="text-danger mt-2"
                    >
                      {{error.$message}}
                    </div>
                  </template>
                </div>
                <div >
                  <label for="att" class="form-label">Attachement
                    <div class="relative w-full h-32 border-[1px] border-dashed ring-2 ring-outline-2 flex justify-center items-center bg-gray-200 rounded-lg dark:bg-gray-800">
                      <img src="../../assets/images/logo.svg" class="h-full w-auto"/>
                      <p class="font-bold text-lg w-full text-center "> Click Here To Upload Your File</p>
                    </div>
                  </label>
                  <input
                    id="att"
                    @change="uploadFile"
                    type="file"
                    name="attachement"
                    class="form-control w-full h-full hidden"
                    :class="{ 'border-danger': validateBanner.attachement.$error }"
                  />
                  <!-- <input v-model.trim="notification_data.link" id="lin" type="text" class="form-control w-full" placeholder="link" :class="{ 'border-danger': validateNotification.link.$error }"/> -->
                  <template v-if="validateBanner.attachement.$error">
                    <div
                      v-for="(error, index) in validateBanner.attachement.$errors"
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
            <!-- <div v-can="'create notification'"> -->
              <button type="button" class="btn btn-warning w-24 m-5" @click="createBanner()">Create</button>
            <!-- </div> -->
            <button type="button" @click="createHandleModal = false" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
          </div>
        </ModalBody>
      </Modal>

    <!-- Modal for Edit -->
    <Modal :show="editHandleModal" @hidden="editHandleModal = false">
      <ModalBody class="p-0">
        <div class="p-5 text-center">
          <EditIcon class="w-16 h-16 text-warning mx-auto mt-3" />
          <div class="text-3xl mt-5">Edit Banner</div>
          <div class="text-slate-500 mt-2">
            You are about to edit a Banner. <br> Please Make sure to put The correct Data.
          </div>
        </div>
        
        <div class="p-5">
          <!-- BEGIN: Form Layout -->
          <div class="intro-y col-span-12 lg:col-span-6">
            <div class="intro-y p-5">
              <div>
                <label for="ty" class="form-label">Name</label>
                <input v-model.trim="banner_data.name" id="name" type="text" class="form-control w-full" placeholder="Name" :class="{ 'border-danger': validateBanner.name.$error }"/>
                <template v-if="validateBanner.name.$error">
                  <div
                    v-for="(error, index) in validateBanner.name.$errors"
                    :key="index"
                    class="text-danger mt-2"
                    >
                    {{error.$message}}
                  </div>
                </template>
              </div>
              <div>
                <label for="tit" class="form-label">Title</label>
                <input v-model.trim="banner_data.title" id="tit" type="text" class="form-control w-full" placeholder="Title" :class="{ 'border-danger': validateBanner.title.$error }"/>
                <template v-if="validateBanner.title.$error">
                  <div
                    v-for="(error, index) in validateBanner.title.$errors"
                    :key="index"
                    class="text-danger mt-2"
                  >
                    {{error.$message}}
                  </div>
                </template>
              </div>
              <div>
                <label for="det" class="form-label">Detail</label>
                <input v-model.trim="banner_data.detail" id="det" type="text" class="form-control w-full" placeholder="Detail" :class="{ 'border-danger': validateBanner.detail.$error }"/>
                <template v-if="validateBanner.detail.$error">
                  <div
                    v-for="(error, index) in validateBanner.detail.$errors"
                    :key="index"
                    class="text-danger mt-2"
                  >
                    {{error.$message}}
                  </div>
                </template>
              </div>
              <div>
                <label for="lin" class="form-label">Link</label>
                <input v-model.trim="banner_data.link" id="lin" type="text" class="form-control w-full" placeholder="link" :class="{ 'border-danger': validateBanner.link.$error }"/>
                <template v-if="validateBanner.link.$error">
                  <div
                    v-for="(error, index) in validateBanner.link.$errors"
                    :key="index"
                    class="text-danger mt-2"
                  >
                    {{error.$message}}
                  </div>
                </template>
              </div>
              <div >
                <label for="att" class="form-label">Attachement
                  <div class="relative w-full h-32 border-[1px] border-dashed ring-2 ring-outline-2 flex justify-center items-center bg-gray-200 rounded-lg dark:bg-gray-800">
                    <img src="../../assets/images/logo.svg" class="h-full w-auto"/>
                    <p class="font-bold text-lg w-full text-center "> Click Here To Upload Your File</p>
                  </div>
                </label>
                <input
                  id="att"
                  @change="uploadFile"
                  type="file"
                  name="attachement"
                  class="form-control w-full h-full hidden"
                  :class="{ 'border-danger': validateBanner.attachement.$error }"
                />
                <!-- <input v-model.trim="notification_data.link" id="lin" type="text" class="form-control w-full" placeholder="link" :class="{ 'border-danger': validateNotification.link.$error }"/> -->
                <template v-if="validateBanner.attachement.$error">
                  <div
                    v-for="(error, index) in validateBanner.attachement.$errors"
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
          <!-- <div v-can="'edit notification'"> -->
            <button type="button" class="btn btn-warning w-24 m-5" @click="updateBanner(banner_data.id)">Update</button>
          <!-- </div> -->
          <button type="button" @click="editHandleModal = false" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
        </div>
      </ModalBody>
    </Modal>

    <!-- BEGIN: Delete Handling Modal -->
    <Modal :show="deleteHandleModal" @hidden="deleteHandleModal = false">
      <ModalBody class="p-0">
        <div class="p-5 text-center">
          <xCircleIcon class="w-16 h-16 text-danger mx-auto mt-3" />
          <div class="text-3xl mt-5">Delete the Banner</div>
          <div class="text-slate-500 mt-2">
            Are you sure you want to delete the Banner?
          </div>
        </div>
        <div class="px-5 pb-8 text-center">
          <button type="button" class="btn btn-danger w-24 m-5" @click="deleteBanner(banner_data.id)">Delete</button>
          <button type="button" @click="deleteHandleModal = false" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
        </div>
      </ModalBody>
    </Modal>
  <!-- END: Delete Handling Modal -->
  
    <div id="success-notification-content_fetch" class="toastify-content hidden">
      <div class="flex w-full h-full">
        <XCircleIcon class="text-success" />
        <div class="ml-4 mr-4">
          <div class="font-medium" id="message_s_f">All Banner Fetch Successfully.</div>
        </div>
      </div>
    </div>
  
    <div id="failed-notification-content_fetch" class="toastify-content hidden">
      <div class="flex w-full h-full">
        <XCircleIcon class="text-danger" />
        <div class="ml-4 mr-4">
          <div class="font-medium" id="message_g_f">There has been an Error Fetching the Banners. Please Try Again.</div>
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
  
    const uFile = ref(null);

    const tableRef = ref();
    const tabulator = ref();
  
    const filter = reactive({
      field: "type",
      type: "like",
      value: "",
    });

    const banner_data = reactive({
        id:"",
        name: "",
        title: "",
        detail: "",
        attachement: "",
        link:"",
    })

    const rules = {
        name: {
            required,
        },
        title: {
            required,
        },
        detail: {
        },
        attachement: {
            
        },
        link: {},
        id: {},
    };
    const validateBanner = useVuelidate(rules, toRefs(banner_data));
  
    const uploadFile = (event) => {
        banner_data.attachement = event.target.files[0]
        let fr = new FileReader();
        fr.onload = () => {
            uFile.value = fr.result;
        };
        fr.readAsDataURL(banner_data.attachement);
    }

    const createBanner = async () => {
        validateBanner.value.$touch();
        console.log(validateBanner.value)
        if (validateBanner.value.$invalid) {

            var message = document.getElementById('message_g_f');
            message.innerHTML = "One or More of The Data That You Entered Are Invalid. Please Try Again.";

            Toastify({
            node: dom("#failed-notification-content_fetch")
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

            await backendApi.post("v1/banner", {
                name: banner_data.name,
                title: banner_data.title,
                detail: banner_data.detail,
                attachement: banner_data.attachement,
                link: banner_data.link,
            // recipt: profile_data.recipt,
            // bank_name: profile_data.bank_name,
            // account_holder_name: profile_data.account_holder_name,
            // account: profile_data.account,
            },{
            headers: {
                'Authorization': "Bearer " + authStore.access_token,
                'Content-Type': 'multipart/form-data'
            }})
            .then((response) => {
            //save to store user details and token
            loading.value = false;

            Toastify({
                node: dom("#success-notification-content_fetch").clone().removeClass("hidden")[0],
                duration: 3000,
                newWindow: true,
                close: true,
                gravity: "top",
                position: "right",
                stopOnFocus: true,
            }).showToast();

            // console.log('Profile added', response.data);
            // authStore.profile = response.data.profile;
            // localStorage.setItem("user",JSON.stringify(response.data.user));
            
            //temporary fix
            // authStore.logout();
            // myrouter.push({ name: "login" });
            createHandleModal.value = false;
            myrouter.push("/");
            // console.log('final')
        })
        .catch((error) => {
            var message = document.getElementById('message_g_f');
            message.innerHTML = error.response.data.message;

            loading.value = false;

            Toastify({
                node: dom("#failed-notification-content_fetch").clone().removeClass("hidden")[0],
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

  const fetchData = async (id) => {
    await backendApi.get("v1/banner/" + id, {
    },{
      headers: {
        'Authorization': "Bearer " + authStore.access_token,
        'Content-Type': 'multipart/form-data'
      }})
      .then((response) => {
        //save to store user details and token
        data.value = response.data

        banner_data.name = data.value.name
        banner_data.title = data.value.title
        banner_data.detail = data.value.detail
        banner_data.link = data.value.link
        banner_data.attachement = data.value.attachement
        banner_data.id = data.value.id
        // profile_data.pic = data.value.profile.profile_pic
        // profile_data.bank_name = data.value.profile.bank.bank_name
        // profile_data.account_holder_name = data.value.profile.bank.account_holder_name
        // profile_data.account = data.value.profile.bank.account

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
        node: dom("#failed-notification-content_fetch").clone().removeClass("hidden")[0],
        duration: 3000,
        newWindow: true,
        close: true,
        gravity: "top",
        position: "right",
        stopOnFocus: true,
      }).showToast();
    });
  }

  const updateBanner = async (pId) => {
    validateBanner.value.$touch();
    if (validateBanner.value.$invalid) {

      var message = document.getElementById('message_g_f');
      message.innerHTML = "One or More of The Data That You Entered Are Invalid. Please Try Again.";

      Toastify({
        node: dom("#failed-notification-content_fetch")
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

      await backendApi.post("v1/banner/u/" + pId, {
        name: banner_data.name,
        title: banner_data.title,
        detail: banner_data.detail ?? "",
        attachement: banner_data.attachement ?? "",
        link: banner_data.link ?? "",
      },{
      headers: {
          'Authorization': "Bearer " + authStore.access_token,
          'Content-Type': 'multipart/form-data'
      }})
      .then((response) => {
        //save to store user details and token
        loading.value = false;

        editHandleModal.value = false;

        var message = document.getElementById('message_s_f');
        message.innerHTML = "Success!! Banner Updated Successfully!";

        Toastify({
          node: dom("#success-notification-content_fetch").clone().removeClass("hidden")[0],
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
        var message = document.getElementById('message_g_f');
        console.log(error, error.response)
        message.innerHTML = error.response.data.message;

        loading.value = false;

        Toastify({
          node: dom("#failed-notification-content_fetch").clone().removeClass("hidden")[0],
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

  const deleteBanner = async (pId) => {
      //send request to the server for token
      loading.value = true;

      await backendApi.delete("v1/banner/" + pId, {
      },{
      headers: {
          'Authorization': "Bearer " + authStore.access_token,
          'Content-Type': 'multipart/form-data'
      }})
      .then((response) => {
        //save to store user details and token
        loading.value = false;

        deleteHandleModal.value = false;

        var message = document.getElementById('message_s_f');
        message.innerHTML = "Success!! Banner Deleted Successfully!";

        Toastify({
          node: dom("#success-notification-content_fetch").clone().removeClass("hidden")[0],
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
        var message = document.getElementById('message_g_f');
        message.innerHTML = error.response.data.message;

        loading.value = false;

        Toastify({
          node: dom("#failed-notification-content_fetch").clone().removeClass("hidden")[0],
          duration: 3000,
          newWindow: true,
          close: true,
          gravity: "top",
          position: "right",
          stopOnFocus: true,
        }).showToast();
      });
    }
  

    // const approveRequest = async (app) => {
    //   //send request to the server for token
    //   loading.value = true;
  
    //   await backendApi.post("v1/approveComplain", {
    //     status: app,
    //     id: c_id.value,
    //   },{
    //   headers: {
    //       'Authorization': "Bearer " + authStore.access_token,
    //       'Content-Type': 'multipart/form-data'
    //   }})
    //   .then((response) => {
    //     //save to store user details and token
    //     complainHandleModal.value = false;
        
    //     Toastify({
    //       node: dom("#success-notification-content").clone().removeClass("hidden")[0],
    //       duration: 3000,
    //       newWindow: true,
    //       close: true,
    //       gravity: "top",
    //       position: "right",
    //       stopOnFocus: true,
    //     }).showToast();
  
    //     myrouter.push("/");
    //   })
    //   .catch((error) => {
    //     complainHandleModal.value = false;
  
    //     var message = document.getElementById('message');
    //     message.innerHTML = error.response.data.message;
  
    //     loading.value = false;
  
    //     Toastify({
    //       node: dom("#failed-notification-content").clone().removeClass("hidden")[0],
    //       duration: 3000,
    //       newWindow: true,
    //       close: true,
    //       gravity: "top",
    //       position: "right",
    //       stopOnFocus: true,
    //     }).showToast();
    //   });
    // };
  
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
      filter.field = "type";
      filter.type = "like";
      filter.value = "";
      onFilter();
    };
    const onExportCsv = () => {
      tabulator.value.download("csv", "Banner.csv");
    };
    const onExportJson = () => {
      tabulator.value.download("json", "Banner.json");
    };
    const onExportXlsx = () => {
      const win = window;
      win.XLSX = xlsx;
      tabulator.value.download("xlsx", "Banner.xlsx", {
        sheetName: "Banner",
      });
    };
    const onExportHtml = () => {
      tabulator.value.download("html", "Banner.html", {
        style: true,
      });
    };
    const onPrint = () => {
      tabulator.value.print();
    };
  
    const initializeTable = async () => {
      loading.value=true
  
      await backendApi.get("v1/banner", {
      },{
        headers: {
          'Authorization': "Bearer " + authStore.access_token,
          'Content-Type': 'multipart/form-data'
        }
      })
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
                    <h1 class="text-2xl font-bold ">Banner Report</h1>
                    <p class="p-2 border-2px rounded ">${day}-${month}-${year}
                  </div>`;
        },
        printFooter: () => {
          return `<div class="w-full py-3 border-dashed border-2 flex justify-center items-center w-full">
            <h2 class="w-full text-center">Generated by Results<h2>
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
            title: "Name",
            minWidth: 200,
            field: "name",
            hozAlign: "left",
            vertAlign: "middle",
            print: true,
            download: true,      
          },{   
            title: "Title",
            minWidth: 200,
            field: "title",
            hozAlign: "left",
            vertAlign: "middle",
            print: true,
            download: true,      
          },{
            title: "Detail",
            minWidth: 200,
            field: "detail",
            responsive: 1,
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,
          },{
            title: "Attachement",
            minWidth: 200,
            field: "attachement",
            responsive: 1,
            hozAlign: "center",
            vertAlign: "middle",
            print: true,
            download: true,
            formatter(cell) {
            const a = dom(`
                  <a href="http://localhost:8000/storage/${cell.getData().attachement}" target="_blank">
                    <img src="http://localhost:8000/storage/${cell.getData().attachement}" alt="Attached File" />
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
          },{
            title: "Action",
            minWidth: 200,
            field: "action",
            responsive: 1,
            hozAlign: "center",
            vertAlign: "middle",
            print: false,
            download: false,
            formatter(cell) {
              // const a = dom(`
              // <div>
              //       <div>
              //         <a class="flex items-center m-3 btn btn-info" href="javascript:;" @click="viewHandleModal.value = true; c_id.value = ${cell.getData().id}">
              //         <i class="fa-solid fa-pen-to-square mx-4"></i> View Notification</a>
              //       </div>
              // </div>`);

              const b = dom(`
              <div>
                    <div>
                      <a class="flex items-center m-3 btn btn-warning" href="javascript:;" @click="editHandleModal.value = true; c_id.value = ${cell.getData().id}">
                      <i class="fa-solid fa-pen-to-square mx-4"></i> Edit</a>
                    </div>
              </div>`);

              const d = dom(`
              <div>
                    <div>
                      <a class="flex items-center m-3 btn btn-danger" href="javascript:;" @click="deleteHandleModal.value = true; c_id.value = ${cell.getData().id}">
                      <i class="fa-solid fa-user mx-4"></i> Delete</a>
                    </div>
              </div>`);

            //   const d = dom(`
            //   <div>
            //         <div>
            //           <a class="flex items-center m-3 btn btn-warning w-24" href="javascript:;" @click="editHandleModal.value = true; c_id.value = ${cell.getData().id}">
            //           <i class="fa-solid fa-user mx-4"></i> Edit</a>
            //         </div>
            //   </div>`);

              // dom(a).on("click", function () {
              //   viewHandleModal.value = true,
              //   fetchData(cell.getData().id),
              //   c_id.value = cell.getData().id
              // });

              dom(b).on("click", function () {
                editHandleModal.value = true, 
                fetchData(cell.getData().id),
                c_id.value = cell.getData().id
              });

              dom(d).on("click", function () {
                deleteHandleModal.value = true, 
                fetchData(cell.getData().id),
                c_id.value = cell.getData().id
              });

            //   dom(e).on("click", function () {
            //     refferalHandleModal.value = true,
            //     c_id.value = cell.getData().id
            //   });

              const c= dom(`<div class="flex flex-row justify-between items-center"></div>`)[0]
            
              c.append(
                // a[0], 
              b[0], 
              d[0])

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
  
    const viewHandleModal = ref(false);
    const editHandleModal = ref(false);
    const deleteHandleModal = ref(false);
    const createHandleModal = ref(false);
    const c_id = ref();
  </script>
    