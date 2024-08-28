import { createRouter, createWebHistory } from "vue-router";
import SideMenu from "../layouts/side-menu/Main.vue";
// import SimpleMenu from "../layouts/simple-menu/Main.vue";
// import TopMenu from "../layouts/top-menu/Main.vue";
import Dashboard from "../views/dashboard/Main.vue";
import AddKnowledgeBase from "../views/knowledgebase/addKnowledgebase.vue";
import Knowledgebase from "../views/knowledgebase/Main.vue";
import Notification from "../views/notification/main.vue";
import AddProfile from "../views/profile/add-profile.vue";
import AllProfile from "../views/profile/main.vue";
import AllUsers from "../views/user/main.vue";
import Task from "../views/tasks/tasks.vue"
import TaskHistory from "../views/tasks/history.vue"
import MyTask from "../views/tasks/Main.vue";
import ApproveTask from "../views/tasks/approve.vue";
import Withdrawal from "../views/withdrawal/main.vue";
import AllWithdrawal from "../views/withdrawal/history.vue";
import ApproveWithdrawal from "../views/withdrawal/approve.vue";
import Refferal from "../views/refferal/main.vue";
import MyRefferal from "../views/refferal/myRefferal.vue";
import Complain from "../views/complain/main.vue";
import AddComplain from "../views/complain/addComplain.vue";

import Example from "../views/page-2/Main.vue";

import Staff from "../views/staff/Main.vue";
import AddStaff from "../views/staff/addStaff.vue";
import Register from "../views/auth/register.vue";
import Login from "../views/auth/login.vue";
import ForgotPass from '../views/auth/forgetPass.vue';
import Verify from '../views/auth/verify.vue';
import Landing from '../views/landing/main2.vue';
import { useAuthStore } from "../stores/auth";

const routes = [
  {
    path: "/land",
    name: "landing",
    component: Landing,
    requiresAuth: false,
  }, 
  {
    path: "/login",
    name: "login",
    component: Login,
    requiresAuth: false,
  },   
  {
    path: "/reset-password/:token",
    name: "reset-password",
    component: ForgotPass,
    requiresAuth: false,
  },
  {
    path: "/register",
    name: "register",
    component: Register,
    requiresAuth: false,
  },
  {
    path: "/verify",
    name: "verify",
    component: Verify,
    requiresAuth: false,
  },
  {
    path: "/",
    component: SideMenu,
    meta: { requiresAuth: true},
    children: [
      {
        path: "/",
        name: "dashboard",
        component: Dashboard,
      },
      {
        path: "/task",
        name: "task",
        component: Task,
      },
      {
        path: "/my-task",
        name: "myTask",
        component: MyTask,
      },
      {
        path: "/task-history",
        name: "taskHistory",
        component: TaskHistory,
      },
      {
        path: "/approve-task",
        name: "approveTask",
        component: ApproveTask,
      },
      {
        path: "/withdraw",
        name: "withdrawal",
        component: Withdrawal,
      },
      {
        path: "/allWithdraw",
        name: "allWithdrawal",
        component: AllWithdrawal,
      },
      {
        path: "/approve-withdraw",
        name: "approveWithdrawal",
        component: ApproveWithdrawal,
      },
      {
        path: "/allProfile",
        name: "allProfile",
        component: AllProfile,
      },
      {
        path: "/add-profile",
        name: "addProfile",
        component: AddProfile,
      },
      {
        path: "/my-profile",
        name: "myProfile",
        component: Example,
      },
      {
        path: "/allUsers",
        name: "allUsers",
        component: AllUsers,
      },
      {
        path: "/refferal",
        name: "refferal",
        component: Refferal,
      },
      {
        path: "/my-refferal",
        name: "myRefferal",
        component: MyRefferal,
      },
      {
        path: "/knowledgebase",
        name: "knowledgebase",
        component: Knowledgebase,
      },
      {
        path: "/add-knowledgebase",
        name: "add-knowledgebase",
        component: AddKnowledgeBase,
      },
      {
        path: "/complain",
        name: "complain",
        component: Complain,
      },
      {
        path: "/add-complain",
        name: "addComplain",
        component: AddComplain,
      },
      {
        path: "/notification",
        name: "notification",
        component: Notification,
      },
      // {
      //   path: "/add-staff",
      //   name: "add-staff",
      //   component: AddStaff,
      // }
    ],
  },
  // {
  //   path: "/simple-menu",
  //   component: SimpleMenu,
  //   children: [
  //     {
  //       path: "page-1",
  //       name: "simple-menu-page-1",
  //       component: Page1,
  //     },
  //     {
  //       path: "page-2",
  //       name: "simple-menu-page-2",
  //       component: Page2,
  //     },
  //   ],
  // },
  // {
  //   path: "/top-menu",
  //   component: TopMenu,
  //   children: [
  //     {
  //       path: "page-1",
  //       name: "top-menu-page-1",
  //       component: Page1,
  //     },
  //     {
  //       path: "page-2",
  //       name: "top-menu-page-2",
  //       component: Page2,
  //     },
  //   ],
  // },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
  scrollBehavior(to, from, savedPosition) {
    return savedPosition || { left: 0, top: 0 };
  },
});

router.beforeEach((to, from) => {
  const authStore = useAuthStore()
  if (to.meta.requiresAuth == true && authStore.status == false && from.name != "login") {
    return {
      path: '/land',
      query: { redirect: to.fullPath },
    }
  }
  else if(authStore.user_data != null){
    // console.log(authStore.user_data.phone,authStore.user_data.email_verified_at,to.name);
    if (authStore.user_data.email_verified_at == null && to.name != "verify" && to.name != 'login') {  
      return {
        path:"/verify"
        // path: "/login",
      }
    }
    // else if (authStore.has_paied == false && to.path != "/pricing-layout-2" && to.path != "/verify"  && to.name != 'login' && (authStore.user_data.type == 2 || authStore.user_data.type == 3 || authStore.user_data.type == 1 )) {
    //   console.log(to.name)
    //   return {
    //     path: "/pricing-layout-2",
    //     query: { redirect: to.fullPath },
    //   }
    // }
  }
})

export default router;
