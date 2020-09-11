import axios from 'axios'

export default {
  namespaced: true,

  state: {
    token: null,
    user: null
  },

  mutations: {

  },

  actions: {

    //  JWT Tokens are Outdated - Deprecated Packages - Moved to Laravel Sanctum
    //
    // async signIn({ dispatch }, credentials){
    //   let response = await axios.post('http://127.0.0.1:8000/api/auth/signin', credentials)
    //   console.log(response.data);
    //   // dispatch('attempt', response.data.token)
    // },
    //
    // // attempt (_, token){
    // //   console.log(token)
    // // }
    //

  }

}
