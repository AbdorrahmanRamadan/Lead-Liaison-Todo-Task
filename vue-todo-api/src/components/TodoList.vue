<template>
  <div class="container">
    <router-link :to="`/todos/add`" class="btn btn-primary btn-sm me-1">Add a task</router-link>
    <table class="table mt-4">
      <thead class="table-dark">
      <tr>
        <th>ID</th>
        <th>Task</th>
        <th>Actions</th>
      </tr>
      </thead>
      <tbody>
      <tr v-for="todo in todos" :key="todo.id">
        <td>{{todo.id}}</td>
        <td>{{todo.name}}</td>
        <td>
          <router-link :to="`/todos/${todo.id}`" class="btn btn-primary btn-sm me-1">Details</router-link>
          <router-link :to="`/todos/edit/${todo.id}`" class="btn btn-success btn-sm me-1">Edit</router-link>
          <button class="btn btn-danger btn-sm me-1" @click="deleteTodoTask(todo.id)">Delete</button>
        </td>
      </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "TodoList",
  data(){
    return{
      todos:[]
    }
  },
  created(){
    this.getTodoList()
  },
  methods:{
    async getTodoList(){
      await axios.get("http://localhost:8000/api/todos")
          .then((response)=>{
            this.todos = response.data['data']
          })
          .catch((err)=>{
            console.log(err)
          })

    },
    deleteTodoTask(id){
      axios.delete(`http://localhost:8000/api/todos/${id}`)
          .then(()=>{
            this.getTodoList()
          })
    }
  }
}
</script>

<style scoped>

</style>