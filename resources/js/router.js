import { createRouter, createWebHistory } from "vue-router";
import Home from './pages/Home.vue'
import Projects from './pages/Projects.vue'
const router = createRouter({
    history:createWebHistory(),
    linkExactActiveClass:'active',
    routes:[
        {
            path:'/',
            name:'home',
            component:Home
        },
        {
            path:'/progetti',
            name:'projects',
            component:Projects
        },
        // {
        //     path:'/tipi',
        //     name:'types',
        //     component:Types
        // },
        // {
        //     path:'/tecnologie',
        //     name:'technologies',
        //     component:Technologies
        // },
        // {
        //     path:'/:pathMatch(.*)*',
        //     component:Error404
        // },


    ]
})

export {router}
