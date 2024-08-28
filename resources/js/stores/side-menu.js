import { defineStore } from "pinia";

export const useSideMenuStore = defineStore("sideMenu", {
  state: () => ({
    menu: [
      {
        icon: "HomeIcon",
        pageName: "dashboard",
        title: "Dashboard",
      },
      {
        icon: "HomeIcon",
        pageName: "task",
        title: "Tasks",
        subMenu: [
          {
            icon: "",
            pageName: "task",
            title: "All Tasks",
            permission: "read task"
          },
          {
            icon: "",
            pageName: "myTask",
            title: "My Tasks",
            permission: "read task"
          },
          {
            icon: "",
            pageName: "taskHistory",
            title: "All Task",
            permission: "read all task"
          },
          {
            icon: "",
            pageName: "approveTask",
            title: "Tasks To Approve",
            permission: "approve task completion"
          },
        ],
      },
      {
        icon: "HomeIcon",
        pageName: "withdrawal",
        title: "Withdrawals",
        subMenu: [
          {
            icon: "",
            pageName: "withdrawal",
            title: "My Withdrawals",
            permission: "read withdrawal"
          },
          {
            icon: "",
            pageName: "allWithdrawal",
            title: "All Withdrawals",
            permission: "read all withdrawal"
          },
          {
            icon: "",
            pageName: "approveWithdrawal",
            title: "Withdrawals To Approve",
            permission: "approve withdrawal completion"
          },
        ],
      },
      {
        icon: "HomeIcon",
        pageName: "profile",
        title: "Profile",
        subMenu: [
          {
            icon: "",
            pageName: "allProfile",
            title: "All Profiles",
            permission: "read all profile"
          },
          {
            icon: "",
            pageName: "addProfile",
            title: "My Profile",
            permission: "read profile"
          },
        ],
      },
      {      
        icon: "HomeIcon",
        pageName: "refferal",
        title: "Refferals",
        subMenu: [
          {
            icon: "",
            pageName: "refferal",
            title: "All Refferal",
            permission: "read all refferal"
          },
          {
            icon: "",
            pageName: "myRefferal",
            title: "My Refferals",
            permission: "read refferal"
          },
        ],
      },
      "devider",
      {
        icon: "HomeIcon",
        pageName: "knowledgebase",
        title: "Knowledgebase",
        subMenu: [
          {
            icon: "",
            pageName: "knowledgebase",
            title: "All Knowledgebase",
            permission: "read knowledgebase",
          },
          {
            icon: "",
            pageName: "add-knowledgebase",
            title: "Add New Knowledgebase",
            permission: "create knowledgebase",
          },
        ],
      },
      {
        icon: "HomeIcon",
        pageName: "complain",
        title: "Complain",
        subMenu: [
          {
            icon: "",
            pageName: "complain",
            title: "All Complains",
            permission: "read all complain",
          },
          {
            icon: "",
            pageName: "addComplain",
            title: "Add Complain",
            permission: "create complain",
          },
        ],
      },
      {
        icon: "HomeIcon",
        pageName: "notification",
        title: "Notification",
        permission: "read all notification",
        subMenu: [
          {
            icon: "",
            pageName: "notification",
            title: "All Notifications",
            permission: "read all notification",
          },
        ],
      },
      "devider",
      {
        icon: "HomeIcon",
        pageName: "allUsers",
        title: "Users",
        permission: "read all notification",
        subMenu: [
          {
            icon: "",
            pageName: "allUsers",
            title: "All Users",
            permission: "read users",
          },
        ],
      },
      // {
      //   icon: "HomeIcon",
      //   pageName: "staff",
      //   title: "Staff",
      //   subMenu: [
      //     {
      //       icon: "",
      //       pageName: "staff",
      //       title: "All Staff",
      //     },
      //     {
      //       icon: "",
      //       pageName: "add-staff",
      //       title: "Add New Staff",
      //     },
      //   ],
      // },
      // "devider",
      // {
      //   icon: "HomeIcon",
      //   pageName: "profile",
      //   title: "Profile",
      // },      
    ],
  }),
});
