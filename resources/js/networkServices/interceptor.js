import instance from "./api.js";
import { useAuthStore } from "../stores/auth.js";
import { useRouter } from "vue-router";
const setup = () => {
    instance.interceptors.request.use(
    (config) => {
        const authStore = useAuthStore();
        const token = authStore.getAccessToken
        const is_authenticated = authStore.getStatus
        if(token && is_authenticated && config.url !== '/api/login'){
            config.headers["Authorization"] = 'Bearer ' + token;  
        }
        return config
    },
    (error) => {
      return Promise.reject(error);
    }
  );

  instance.interceptors.response.use(
    (res) => {
      return res;
    },
    async (err) => {
      const originalConfig = err.config;
      if (originalConfig.url !== "/api/v1/auth/loginEmail" && err.response) {
      // Access Token was expired
      if(err.response.status == 401 ){
        const authStore = useAuthStore();
        authStore.logout()
        const router = useRouter();
        router.push("/login")
      }
      
      // if (err.response.status === 401 && !originalConfig._retry) {
            
      //     originalConfig._retry = true;
      //         try {
      //           const rs = await instance.get("/refresh");
      //           store.setAccessToken(rs.data.access_token)
      //           store.setRefreshToken(rs.data.refresh_token)
      //           return instance(originalConfig);
      //         } catch (_error) {
      //           authStore.logout()
      //           return Promise.reject(_error);
      //         }
      //   }
      }
      return Promise.reject(err);
    }
  );
};

export default setup;