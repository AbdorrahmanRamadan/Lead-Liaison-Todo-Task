<template>
  <div class="container">
    <div class="card w-50 m-auto mt-3">
      <div class="card-header">
        Task Details
      </div>
      <div class="card-body">
        <p>Task ID : {{todoTask.id}}</p>
        <p>Task name : {{todoTask.name}}</p>
        <p>Task description : {{todoTask.description}}</p>
        <p>Task creation time : {{todoTask.created_at}}</p>
        <p>Task last updated at : {{todoTask.updated_at}}</p>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "TodoDetails",
  data(){
    return{
      todoTaskID:0,
      todoTask:{},
    }
  },
  created(){
    this.getTodoTaskData()
  },
  methods:{
    async getTodoTaskData(){
      this.todoTaskID = this.$route.params.id
      await axios.get(`http://localhost:8000/api/todos/${this.todoTaskID}`)
          .then((response)=>{
            this.todoTask = response.data
            console.log(this.todoTask)
          })
    }
  }
}
</script>

<style scoped>

</style>
