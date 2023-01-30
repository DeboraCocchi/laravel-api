<script>
import axios from 'axios'
import {apiUrl} from '../data/data'
import {store} from '../data/store'
import FormSearch from '../components/FormSearch.vue'
import ProjectCard from '../components/ProjectCard.vue'
export default {
    name:'Projects',
    components:{
    FormSearch,
    ProjectCard
  },
    data(){
        return{
            apiUrl,
            store

        }
    },
    methods:{
        getProjects(){
            axios.get(apiUrl)

        .then(result =>{
             console.log(result.data);
            store.projects= result.data;
        })
        .catch( err=>{
            console.log('Si è verificato un errore');
        })
        },
  },
    mounted(){
        this.getProjects();
    }
}
</script>
<template>

    <main>

        <div class="container-fluid">
            <div class="d-flex justify-content-between">
                <h1>I miei progetti</h1>
                <FormSearch />
            </div>

            <div class="row justify-content-between">
            <ProjectCard v-for="project in store.projects" :project="project" :key="project.id"></ProjectCard>
        </div>

        <div class="paginator">

        </div>
        </div>

    </main>


</template>


<style lang="scss" scoped>
    h1{
        color:#3a0764;
    }
</style>
