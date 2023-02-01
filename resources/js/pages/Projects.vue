<script>
import axios from 'axios'
import {apiUrl, showPaginator} from '../data/data'
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
            store,
            showPaginator,
            pagination:{
                current:1,
                last:1,
                per_page:10,
                stored:0
            },


        }
    },
    methods:{

        getProjects(page){
            this.pagination.current = page
            axios.get(apiUrl,{
                params:{
                    page: this.pagination.current
                }
            })
        .then(result =>{
            store.projects= result.data.projects.data;
                this.pagination.current=result.data.projects.current_page;
                this.pagination.per_page=result.data.projects.per_page
                let difference= result.data.projects.total / result.data.projects.per_page
                if(!difference % 2){
                    this.pagination.last=difference+1
                }else{
                    this.pagination.last=difference
                }
                if(this.pagination.current>this.pagination.last){
                    this.pagination.current=this.pagination.last
                }

                console.log(this.pagination.stored,this.pagination.per_page);
        })
        .catch( err=>{
            console.log('Si è verificato un errore');
        })
        },
  },
    mounted(){
        this.getProjects(1);
        this.showPaginator = true;

    },
   created(){
       console.log(store.projects.length);
    // setInterval(function() {console.log(store.projects.length)}, 1000);
    }
}
</script>
<template>

    <main>

        <div class="container-fluid mb-5 p-0">
            <div class="d-flex justify-content-between dc-black-bg pe-5">
                <h1 class="ms-4">I miei progetti</h1>
                <FormSearch />
            </div>

            <div class="row justify-content-between px-5 py-4">
                <ProjectCard v-for="project in store.projects" :project="project" :key="project.id"></ProjectCard>


                <nav aria-label="Page navigation" >
                    <div class="pagination d-flex justify-content-end mt-3"
                    v-show="!store.projects.length < 10">
                        <button class="page-link btn" aria-label="Previous"
                            :class="{disabled: (pagination.current ===1)}"
                            @click="getProjects(pagination.current - 1)">
                            <span aria-hidden="true">&laquo;</span>
                        </button>

                        <button class="page-link"
                            v-for="i in pagination.last" :key=i
                            @click="getProjects(i)"
                            :class="{active: (pagination.current === i)}"
                            >{{i}}
                        </button>

                        <button class="page-link"
                            aria-label="Next"
                            :class="{disabled: (pagination.current ===pagination.last)}"
                            @click="getProjects(page= pagination.current + 1)">
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
