<script>
import axios from 'axios'
import {apiUrl} from '../data'

export default {
    name: 'About',
    data(){
        return{
            apiUrl,
            project: {}
        }
    },
    methods:{
        getProjects(){
        axios.get(apiUrl+'/'+this.$route.params)
        .then(result =>{
            console.log(this.$route.params);
            console.log(result.data);
            this.project= result.data;
        })
        .catch( err=>{
            console.log('Si è verificato un errore');
        })
        }
    },
    mounted(){
        this.getProjects()
    }
}

</script>
<template>
    <div class="container-fluid">
        <h1>Pagina di dettaglio</h1>
        <div class="row">
            <div class="col-4">
                <img :src="project.image" :alt="project.name">
            </div>
            <div class="col-8">
                <h2>{{project.name}}</h2>
            </div>
        </div>
    </div>
</template>


<style>

</style>
