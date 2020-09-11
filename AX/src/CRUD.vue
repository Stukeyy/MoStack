<template>

  <div id="app">

    <h1>{{ msg }}</h1>

    <div class="row justify-content-center">
      <div class="col">

        <form id="nameForm" v-on:submit.prevent="addUser">
          <div class="form-group">
            <input type="text" class="form-control" id="user" name="createUser" v-model="createUser">
          </div>
        </form>

      </div>
    </div>

    <h1> Users </h1>

    <div id="userList">
      <p v-for="(user, index) in showUsers" v-bind:key="index">
        {{ index + 1 }}.  {{ user.name }}
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateNameModal" @click="nameToUpdate(index)">Edit</button>
        <button type="button" class="btn btn-danger" @click="deleteName(user.id)" >Delete</button>
      </p>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="updateNameModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="updateModalTitle">Update Name</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="updateForm" v-on:submit.prevent="updateName()">
              <div class="form-group">
                <input type="text" class="form-control" id="updateName" name="updateUsername"
                v-model="updateUsername">
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button ref="close" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" @click="updateName()">Update</button>
          </div>
        </div>
      </div>
    </div>

  </div>

</template>

<script>

export default {

  name: 'app',

  data () {
    return {
      msg: 'Please Enter Your Name',
      updateUsername: '',
      createUser: '',
      userId: '',
      showUsers: []
    }
  },

  mounted() {
    this.listUsers();
  },

  methods: {

    listUsers(){
      this.axios.get('http://localhost:8000/api/show')
      .then((response) => {
        this.showUsers = response.data.data;
        console.log(this.showUsers);
      })
      .catch(function(error){
        console.log(error)
      });
    },

    nameToUpdate(index) {
      this.updateUsername = this.showUsers[index].name;
      this.userId = this.showUsers[index].id;
    },

    updateName() {
      this.axios.put('http://localhost:8000/api/update/' + this.userId, {
          _method: 'PUT',
          user: this.updateUsername,
      })
      .then((response) => {
        $(this.$refs.close).click();
        this.showUsers = response.data.data;
        this.updateUsername = '';
      })
    },

    deleteName(id) {
      this.axios.delete('http://localhost:8000/api/delete/' + id, {
          _method: 'DELETE'
      })
      .then((response) => {
        this.showUsers = response.data.data;
        this.updateUsername = '';
      })
    },

    addUser() {
      this.axios.post('http://localhost:8000/api/add', {
          _method: 'POST',
          user: this.createUser,
      })
      .then((response) => {
        this.showUsers = response.data.data;
        this.createUser = '';
      })
    }

  }

}

</script>

<style>

#app {
  padding-left: 3%;
  margin-top: 5%;
}

#user {
  margin-bottom: 3%;
  margin-top: 1%;
  width: 50%;
}

#userList {
  margin-top: 1%;
}


</style>
