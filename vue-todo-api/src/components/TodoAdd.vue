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
          <button class="btn btn-primary" @click.prevent="addTodoTask">Add todo task</button>
        </div>
      </form>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "TodoAdd",
  data(){
    return{
      formValues:{
        name: "",
        description:"",
      }
    }
  },
  methods:{
    addTodoTask(){
      axios.post("http://localhost:8000/api/todos", this.formValues)
          .then(()=>{this.$router.push("/todos")})
    }
  }
}
</script>

<style scoped>

</style>