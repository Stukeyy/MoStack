<template lang="html">
  <div>
    <h1>Sign Up</h1>
    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
  </div>
</template>

<script>
export default {
  name: 'signup',
  components: {

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
