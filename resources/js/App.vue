<script>
import axios from 'axios'
export default {
    name:'App',
    data(){
        return{
        baseUrl:'http://127.0.0.1:8002/api/projects',
        projects_collection:[]
        }
    },
    methods:{
        getProjects(){
        axios.get(store.apiUrl)
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



</template>


<style lang="scss">
 @use '../scss/appVue.scss';
</style>
