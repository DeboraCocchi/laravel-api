<script>

import AppHeader from './partials/AppHeader.vue'
import Home from './pages/Home.vue'
import Projects from './pages/Projects.vue'
export default {
    name:'App',
    data(){
        return{
        baseUrl:'http://127.0.0.1:8002/api/projects',
        projects_collection:[]
        }
    },
    components:{
        AppHeader,
        Home,
        Projects,
    },

}
</script>
<template>
    <AppHeader />

    <router-view></router-view>




</template>


<style lang="scss">
 @use '../scss/appVue.scss';
</style>
