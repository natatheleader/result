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
        pageName: "Home Elements",
        title: "Home Elements",
        subMenu: [
          {
            icon: "",
            pageName: "banner",
            title: "Banner",
          },
          {
            icon: "",
            pageName: "page",
            title: "First Video",
          }, 
          {
            icon: "",
            pageName: "page",
            title: "Second Video",
          }, 
          {
            icon: "",
            pageName: "page",
            title: "Products",
          }, 
          {
            icon: "",
            pageName: "page",
            title: "About",
          }, 
          {
            icon: "",
            pageName: "page",
            title: "Third Video",
          }, 
          {
            icon: "",
            pageName: "page",
            title: "Forth Video",
          },
          {
            icon: "",
            pageName: "page",
            title: "Ratings",
          },
          {
            icon: "",
            pageName: "page",
            title: "FAQ",
          },
          
        ],
      }, 
    ],
  }),
});
