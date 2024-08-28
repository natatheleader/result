import { defineStore } from "pinia";
import { useRouter } from "vue-router";

export const useAuthStore = defineStore("auth", {
  state: () => ({
    access_token:null,
    user_data : null,
    refresh_token:null,
    status:false,
    profile:null,
    register:null, 
  }),
  getters: {
    getUserData(state){
      return state.user_data
    },
    getAccessToken(state) {
        return state.access_token
    },
    getRefreshToken(state){
        return state.refresh_token
    },
    getStatus(state) {
        return state.status
    },
    getProfile(state) {
      return state.profile
    },
    getPermission(state) {
      return state.user_data.permission.map(d=>d.name)
    },
    getRegistration(state) {
      return state.register
    }
  },
  actions: {
    setUserData(data){
      this.user_data = data
    },
    setAccessToken(token) {
      this.access_token = token
    },
    setRefreshToken(token){
        this.refresh_token = token
    },
    setProfile(data){
      this.profile = data
    },
    logout(){
        this.access_token = null 
        this.status = false
        this.has_paid = false
        localStorage.removeItem('access_token')
        localStorage.removeItem('user')
        localStorage.removeItem('profile')
    },
    authenticateUser(status){
        this.status = status
    },
    initializeAuth(){
      if(localStorage.getItem('access_token') && localStorage.getItem('user')){
        const token = localStorage.getItem('access_token');
        this.user_data = JSON.parse(localStorage.getItem('user'));
        // this.has_paied = localStorage.getItem('has_paied');
        this.access_token = token 
        this.status = true
      }
    }
  },
});