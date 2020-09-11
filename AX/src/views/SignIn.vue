<template lang="html">
  <div>
    <h1>Sign In</h1>
    <form @submit.prevent="signIn">
      <div class="form-group">
        <label>Email address</label>
        <input type="email" class="form-control" v-model="form.email" name="email">
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" v-model="form.password" name="password">
      </div>
      <button type="submit" class="btn btn-primary">Sign In</button>
    </form>
  </div>
</template>

<script>

import { mapActions } from 'vuex'

export default {

  data: function() {
    return {
      form: {
        email: '',
        password: ''
      }
    }
  },

  name: 'signin',

  components: {

  },

  methods: {

    signIn(_, credentials){
      this.axios.post('http://127.0.0.1:8000/api/auth/signin', {
        method: 'POST',
        email: this.form.email,
        password: this.form.password,
      })
      .then((response) => {
        this.email = '';
        this.password = '';
        console.log(response);
      })
    }

    // Vuex State Management of Token - Deprecated Packages would not work 
    //
    // ...mapActions({
    //   signIn: 'auth/signIn'
    // }),
    //
    // submit() {
    //   this.signIn(this.form)
    // }



  }

}
</script>

<style lang="css" scoped>

form {
  padding-left: 2%;
  padding-right: 2%;
}

button {
  margin-top: 2%;
}

</style>
