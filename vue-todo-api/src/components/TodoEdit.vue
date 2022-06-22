<template>
  <div>
    <div>
      <form class="w-50 m-auto mt-3">
        <div class="mb-3">
          <label>Name</label>
          <input type="text" class="form-control" v-model="formValues.name"/>
        </div>
        <div class="mb-3">
          <label>Description</label>
          <textarea type="text" class="form-control" v-model="formValues.description"/>
        </div>
        <div class="mb-3 text-center">
          <button class="btn btn-primary" @click.prevent="update">Update</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "TodoEdit",
  data(){
    return{
      formValues:{
        name: "",
        description:"",
      },
      todoTaskID:0
    }
  },
  created(){
    this.getTodoTask()
  },
  methods:{
    async getTodoTask(){
      this.todoTaskID = this.$route.params.id
      await axios.get(`http://localhost:8000/api/todos/${this.todoTaskID}`)
          .then((response)=>{
            this.formValues.name = response.data.name
            this.formValues.description = response.data.description
          })
    },
    update(){
      axios.put(`http://localhost:8000/api/todos/${this.todoTaskID}`, this.formValues)
          .then(()=>{this.$router.push("/todos")})

    }
  }
}
</script>

<style scoped>

</style>