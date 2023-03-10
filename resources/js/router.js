import { createRouter, createWebHistory } from "vue-router";
import Home from './pages/Home.vue'
import Projects from './pages/Projects.vue'
import ProjectDetail from './pages/ProjDetail.vue'
import Contacts from './pages/Contacts.vue'
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
        {
            path:'/progetti/dettaglio-progetto/:slug',
            name:'project-detail',
            component:ProjectDetail
        },
        {
            path:'/contatti',
              name:'contacts',
             component:Contacts
     },
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
