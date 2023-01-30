
<script>
    import axios from 'axios'
    import {apiUrl} from '../data'

    export default {
        name: 'About',
        data(){
            return{
                apiUrl,
                project: []
            }
        },
        methods:{
            getProjects(){
                console.log(this.$route.params);
            axios.get(apiUrl+this.$route.params.slug)
            .then(result =>{
                console.log(result.data);
                this.project= result.data;
            })
            .catch( err=>{
                console.log('Si è verificato un errore');
            })
            },
            manipulateDate(date){
                date=new Date()
                let y=date.getFullYear()

                let m=(date.getMonth())+1
                if(m<10){
                    m='0'+m
                }
                let d=date.getDate()
                if(d<10){
                    d='0'+d
                }
                return date=d+'/'+m+'/'+y
            }
        },
        mounted(){
            console.log(this.project);
            this.getProjects()

            }
        }

</script>




<template>
    <div class="container-fluid">
        <div class="d-flex justify-content-between my-4">
            <h1>Pagina di dettaglio progetto <span class="text-warning">{{this.project.name}}</span></h1>
            <router-link :to="{name: 'projects'}" class="purple"><i class="fa-solid fa-rotate-left"></i> Torna all'elenco progetti</router-link>
        </div>

        <div class="row">
            <div class="col-3">
                <img :src="project.cover_image" :alt="project.name">
            </div>
            <div class="col-8 ms-3">
                <h2><span class="purple">Title: </span>{{project.name}}</h2>
                 <span v-if="project.type" class="badge text-bg-primary  d-inline-block mb-3">{{project.type.name}}</span>

                    <h6 class=""><span class="purple">Client: </span>{{project.client_name}}</h6>



                <p><span class="purple">Created on: </span>{{manipulateDate(project.created)}}</p>

                <p>
                    <span class="purple">Summary: </span>
                    <span v-html="project.summary"></span>
                </p>
                <ul class="technologies p-0 list-unstyled" v-if="project.technologies">
                    <span class="purple">Technologies: </span>
                    <li v-for=" technology in project.technologies" :key="technology.id">
                        {{technology.name}}
                    </li>
                </ul>
            </div>

        </div>
    </div>

</template>



<style lang="scss" scoped>
    .purple{
          color:#9160f5;
    }
    a.purple{

            transition:all .2s ease-in-out;
            &:hover{
            color:#ffc107;
            text-decoration:underline;
    }
        }
    img{
        min-height: 400px;
        width:auto;
        max-width: 100%;
        object-fit: cover;
     }
</style>
