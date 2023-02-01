
<script>
    import axios from 'axios'
    import {apiUrl} from '../data/data'


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
                console.log(this.$route.params)

            axios.get(apiUrl+'/'+this.$route.params.slug)
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
    <div class="main-wrapper">
        <div class="glass-container">
            <div class="container-fluid">

                <div class="d-flex justify-content-between my-4">
                    <h1>Pagina di dettaglio progetto<br> <span class="purple">{{this.project.name}}</span></h1>
                    <router-link :to="{name: 'projects'}" class="darkpurple"><i class="fa-solid fa-rotate-left"></i> Torna all'elenco</router-link>
                </div>

                <div class="row">
                    <div class="col-5">
                        <img :src="project.cover_image" :alt="project.name">
                    </div>
                    <div class="col-6 ms-3 mt-3">
                        <h2><span class="purple me-3">Title: </span>{{project.name}}</h2>
                        <span v-if="project.type" class="badge text-bg-warning  d-inline-block mb-3">{{project.type.name}}</span>

                            <h4 class=""><span class="purple me-3">Client: </span>{{project.client_name}}</h4>



                        <p><span class="purple me-3">Created on: </span>{{manipulateDate(project.created)}}</p>

                        <p>
                            <span class="purple me-3">Summary: </span>
                            <span v-html="project.summary"></span>
                        </p>
                        <div class="container technologies d-flex p-0">
                            <span class="purple me-3">Technologies: </span>
                            <ul class=" px-3 list-unstyled" v-if="project.technologies">

                                <li v-for=" technology in project.technologies" :key="technology.id">
                                    {{technology.name}}
                                </li>
                            </ul>
                        </div>

                    </div>

                </div>
            </div>

        </div>

    </div>

</template>



<style lang="scss" scoped>

     @use '../../scss/partials/_variables.scss' as * ;

    .main-wrapper{
        background:linear-gradient(135deg, $yellow-darker, $yellow-lighter);

        width:100vw;
        padding:100px 0;
        height:100vh;
        position:relative;
        bottom:0;
        overflow:hidden;
        .glass-container{
        background-color: rgba(255,255,255,0.8);
        box-shadow: 8px 6px 5px rgba(0,0,0,0.4);
        padding:20px;
        border-radius:0.8rem;
        width:70%;
        margin:40px auto;
    .col-8 span, .col-8 p{
        font-size:110%;
    }
        }
    .purple{
          color:#9160f5;
        }
        .darkpurple{
            color:#3a0764;
        }
    a.darkpurple{

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
        margin:10px;
        border-radius:0.8rem;
        }
    }

</style>
