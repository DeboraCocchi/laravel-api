<script>
import axios from 'axios'
import {apiUrl} from '../data/data'
import {store} from '../data/store'
export default {
    name:'FormSearch',
    data(){
        return{
            apiUrl,
            store,
            techValues:[]
        }
      },
    emits: ['regenerate'],
    methods:{

        getApi(){
            store.projects=[]
            const data= new FormData()
            data.append('tosearch', store.tosearch)
            axios.post(apiUrl + '/search', data)
            .then(res=>{
                store.projects=res.data.projects.data;
                store.pagination.current=res.data.projects.current_page;
                store.pagination.per_page=res.data.projects.per_page
                store.pagination.last=res.data.projects.last_page
                if(store.pagination.current>store.pagination.last){
                        store.pagination.current=store.pagination.last
                    }
                    console.log(store.pagination);
                store.tosearch=''

            })
                .catch(err =>{
                console.log('Si è verificato un errore');
            })

        },
        filterProjects(uri,id){
            if(id==0){
               this.$emit=("regenerate")
               console.log('riaggiornato');
            }else{
                axios.get(apiUrl +`/${uri}/${id}`)

            .then(res => {
                console.log(res.data);
                console.log(this.techValues);
                store.projects=[]
                store.projects=res.data.projects.data;
                store.pagination.current=res.data.projects.current_page;
                store.pagination.total=res.data.projects.total
                store.pagination.per_page=res.data.projects.per_page
                store.pagination.last=res.data.projects.last_page
                if(store.pagination.current>store.pagination.last){
                        store.pagination.current=store.pagination.last
                    }
                this.$emit=('total', store.pagination.total)
                console.log(store.pagination.total);
            })
            .catch(err =>{
                console.log('Si è verificato un errore');
            })

             }
        },
        // getTechnologies(id){
        //     techsarray=this.techsarray;

        //     if(this.techsarray.length===0){

        //         if(id==0){
        //             console.log('tipo:nullo, tecnologie:nulle');
        //         this.$emit=("regenerate")
        //         console.log('riaggiornato');
        //          }else{
        //             console.log('tipo:'+{id}+ ', tecnologie:nulle');
        //             axios.get(apiUrl +`/search-type/${id}`)
        //             .then(res => {
        //                 store.projects=[]
        //                 store.projects=res.data.projects.data;
        //                 store.pagination.current=res.data.projects.current_page;
        //                 store.pagination.total=res.data.projects.total
        //                 store.pagination.per_page=res.data.projects.per_page
        //                 store.pagination.last=res.data.projects.last_page
        //                 if(store.pagination.current>store.pagination.last){
        //                         store.pagination.current=store.pagination.last
        //                     }
        //                 this.$emit=('total', store.pagination.total)
        //                 console.log(store.pagination.total);
        //             })
        //             .catch(err => {
        //             console.log('errore nella chiamata...');
        //             })}
        //         }
        //         else{
        //             console.log('campi non vuoti');
        //         axios.get(apiUrl+`/search-type/${id}/advanced/${techsarray}`)
        //         .then(res =>{
        //             console.log(res.data.projects);
        //         })
        //         .catch(err => {
        //             console.log('errore nella chiamata tecnologie');
        //         })
        //     }
        //     // if(techVal==0){
        //     //    this.$emit=("regenerate")
        //     //    console.log('riaggiornato');
        //     // }else{
        //     //     axios.post(apiUrl +`/search-type/${techVal}`)

        //     // .then(res => {
        //     //     console.log(techVal);
        //     //     store.projects=[]
        //     //     store.projects=res.data.projects.data;
        //     //     store.pagination.current=res.data.projects.current_page;
        //     //     store.pagination.total=res.data.projects.total
        //     //     store.pagination.per_page=res.data.projects.per_page
        //     //     store.pagination.last=res.data.projects.last_page
        //     //     if(store.pagination.current>store.pagination.last){
        //     //             store.pagination.current=store.pagination.last
        //     //         }
        //     //     this.$emit=('total', store.pagination.total)
        //     //     console.log(store.pagination.total);
        //     // })
        //     // .catch(err =>{
        //     //     console.log('Si è verificato un errore');
        //     // })

        //     //  }

        // },

        filterProjs(event){


            console.log('partenza ', event);
            if(event.target.checked){

                console.log('checked ' ,this.techValues);
                this.techValues.push(event.target.id)
                console.log('selezionato' ,event);

            }else{
                console.log(event);
                console.log('deselezionato' ,this.techValues);
                 this.techValues.splice(event.target.id)

            }

        }




    }
}
</script>
<template>
    <div class="search-wrapper d-flex">
         <button class="btn-light
          btn me-3" @click="$emit('regenerate')">Refresh</button>

        <div class="filter d-flex">

            <!-- SELECT DEL TYPE -->
            <select class="form-select form-select-sm form-control me-3 bg-warning" aria-label=".form-select-sm example"
            v-model="store.searchedType"
            @change="filterProjects('search-type',store.searchedType)">
                <option selected value="0">Tipo</option>
                <option v-for="type in store.types" :key="type.id"
                :value="type.id">{{type.name}}</option>

            </select>

            <!-- CHECKBOX TECHNOLOGIES -->
            <button class="btn btn-secondary dropdown-toggle d-none" type="button" data-bs-toggle="dropdown" aria-expanded="true"
            >
                        <i class="fa-solid fa-swatchbook"></i>
            </button>
            <div class="dropdown-menu p-3">
                    <div class="form-check" v-for="technology in store.technologies" :key="technology.id">
                            <input class="form-check-input me-2" type="checkbox" :id="technology.id" v-model="techValues" @click="filterProjs($event)" :checked="technology.checked">
                            <label class="form-check-label" :for="technology.id">
                                {{technology.name}}
                            </label>

                    </div>
            </div>
            <button class="btn btn-outline-warning text-black bg-warning d-none" @click.prevent="filterProjects('search-technology', techValues)">Invia</button>
         </div>

        <div class="form-search input-group">
                <input type="text" placeholder="Cerca..." class="form-control" v-model="store.tosearch" @keyup.enter="getApi"  >
                <button class="btn btn-outline-warning text-black bg-warning" @click.prevent="getApi">Invia</button>

        </div>
    </div>



</template>


<style lang="scss" scoped>
    .form-search.input-group{
        width:300px;
        height: 40px;;

    }

</style>
