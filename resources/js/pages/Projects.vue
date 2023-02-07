<script>
import axios from 'axios'
import {apiUrl} from '../data/data'
import {store} from '../data/store'
import FormSearch from '../components/FormSearch.vue'
import ProjectCard from '../components/ProjectCard.vue'
export default {
    name:'Projects',
    props: {
    results: Number
    },
    components:{
    FormSearch,
    ProjectCard
  },
    data(){
        return{
            apiUrl,
            store,
        }
    },
    methods:{
        getApi(){
            store.selected=''
            store.tosearch=''
            axios.get(apiUrl)
            .then(result =>{

                store.projects= result.data.projects.data;
                store.types=result.data.types
                store.technologies=result.data.technologies
                store.pagination.current=result.data.projects.current_page;
                store.pagination.per_page=result.data.projects.per_page
                store.pagination.last=result.data.projects.last_page
                store.pagination.total=result.data.projects.total
                    if(store.pagination.current>store.pagination.last){
                        store.pagination.current=store.pagination.last
                    }
                })
                .catch(err =>{
                    console.log('Si è verificato un errore');
                })
    }
    },

    mounted(){
        this.getApi()

    }
}
</script>
<template>

    <main>

        <div class="container-fluid mb-5 p-0">
            <div class="d-flex justify-content-between dc-black-bg pe-5">
                <h1 class="ms-4">I miei progetti</h1>
                <FormSearch @regenerate="getApi" @total="()=> store.pagination.total"/>
            </div>

            <div class="row justify-content-between px-5 py-4">
                <div class="alert alert-warning" role="alert">
                La ricerca comprende {{store.pagination.total}} risultati
                </div>
                <ProjectCard v-for="project in store.projects" :project="project" :key="project.id"></ProjectCard>


                <nav aria-label="Page navigation" >
                    <div class="pagination d-flex justify-content-end mt-3"
                    v-show="!store.projects.length < 10">
                        <button class="page-link btn" aria-label="Previous"
                            :class="{disabled: (store.pagination.current ===1)}"
                            @click="store.pagination.current = store.pagination.current - 1">
                            <span aria-hidden="true">&laquo;</span>
                        </button>

                        <button class="page-link"
                            v-for="i in store.pagination.last" :key=i
                            @click="store.pagination.current = i"
                            :class="{active: (store.pagination.current === i)}"
                            >{{i}}
                        </button>

                        <button class="page-link"
                            aria-label="Next"
                            :class="{disabled: (store.pagination.current ===store.pagination.last)}"
                            @click="store.pagination.current = store.pagination.current + 1">
                            <span aria-hidden="true">&raquo;</span>
                        </button>
                    </div>
                </nav>

            </div>
        </div>

    </main>


</template>


<style lang="scss" scoped>

    @use '../../scss/partials/_variables.scss' as * ;

    .dc-black-bg{
        background-color: $black;
        color:$yellow-lighter;
        width:100vw;
        padding:24px 90px;
        align-items: center;
        h1{
            color:$yellow-lighter;
        }
    }
    .pagination{
        button{
            border-color: rgba(0, 0, 0, 0.158);
            color:#636dff;
            border-radius:3px;
        }
        button.active{
        background-color: $black;
        color:$soft-white;
        }
        button.disabled{
        background-color: rgba(255,255,255, 0.6);
        color:white;
        }
    }

</style>
