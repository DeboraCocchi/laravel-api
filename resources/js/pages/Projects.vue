<script>
import axios from 'axios'
import {apiUrl} from '../data'
import ProjectCard from '../components/ProjectCard.vue'
export default {
    name:'Projects',
    components:{
    ProjectCard
  },
    data(){
        return{
            apiUrl,
            projects_collection:[]
        }
    },
    methods:{
        getProjects(){
            axios.get(apiUrl)

        .then(result =>{
             console.log(result.data);
            this.projects_collection= result.data;
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
        <h1>I miei progetti</h1>
            <div class="row justify-content-between">
            <ProjectCard v-for="project in this.projects_collection" :project="project" :key="project.id"></ProjectCard>
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
