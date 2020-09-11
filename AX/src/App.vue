<template lang="html">
  <div>
    <Navbar/>
    <router-view/>
  </div>

</template>

<script>

import Navbar from './components/Navbar.vue'

export default {
  name: 'app',
  components: {
    Navbar
  }
}

</script>

<style lang="css">

h1 {
  padding: 2%;
}

</style>
