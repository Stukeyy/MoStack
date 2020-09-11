<template lang="html">
  <div>
    <h1>Welcome {{ userName }}</h1>
  </div>
</template>

<script>
export default {

  name: 'dashboard',

  data: function() {
    return {
      userName: ''
    }
  },

  components: {

  }
}
</script>

<style lang="css" scoped>
</style>
