<template lang="html">
  <div>
    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand"><h1>Vue</h1></a>
      <ul class="nav justify-content-end">
        <li class="nav-item">
          <router-link v-bind:to="{name:'home'}">Home</router-link>
        </li>
        <li class="nav-item">
          <router-link v-bind:to="{name:'signup'}">Sign Up</router-link>
        </li>
        <li class="nav-item">
          <router-link v-bind:to="{name:'signin'}">Sign In</router-link>
        </li>
        <li class="nav-item">
          <router-link v-bind:to="{name:'dashboard'}">User</router-link>
        </li>
        <li class="nav-item">
          Logout
        </li>
      </ul>
    </nav>
  </div>
</template>

<script>
export default {
  name: 'navbar',
}
</script>

<style lang="css" scoped>

.nav{
  width: 50%;
}

.navbar-brand {
  cursor: default;
  font-size: 28pt;
  padding: 1%;
}

.nav-item {
  cursor: pointer;
  font-size: 14pt;
  color: white;
  padding: 2%;
}

a:link, a:visited, a:hover, a:active {
  text-decoration: none;
  color: white;
}

</style>
