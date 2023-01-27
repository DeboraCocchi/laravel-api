<script>
import axios from 'axios'
import {apiUrl} from '../data'
export default {
    name:'Projects',
    data(){
        return{
            apiUrl,
            projects_collection:[]
        }
    },
    methods:{
        getProjects(){
        axios.get(this.apiUrl)
        .then(result =>{
            console.log(result.data.projects.data);
            this.projects_collection= result.data.projects.data;
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
<h2>I miei progetti</h2>
</template>


<style>

</style>
