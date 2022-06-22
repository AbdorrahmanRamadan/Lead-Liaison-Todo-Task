import { createApp } from 'vue'
import App from './App.vue'
import TodoList from "./components/TodoList";
import TodoDetails from "./components/TodoDetails";
import TodoEdit from "./components/TodoEdit";
import TodoAdd from "./components/TodoAdd";
import{createRouter, createWebHistory} from 'vue-router'
import 'bootstrap/dist/css/bootstrap.min.css'

const routes = [
    {
        path:"/todos",
        component:TodoList
    },
    {
        path:"/todos/:id",
        component:TodoDetails
    },
    {
        path:"/todos/edit/:id",
        component:TodoEdit
    },
    {
        path:"/todos/add",
        component:TodoAdd
    }
]
const router = createRouter({
    history:createWebHistory(),
    routes
})
createApp(App).use(router).mount('#app')

import 'bootstrap/dist/js/bootstrap.min.js'
