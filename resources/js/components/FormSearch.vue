<script>
import axios from 'axios'
import {apiUrl, showPaginator} from '../data/data'
import {store} from '../data/store'
export default {
    name:'FormSearch',
    data(){
        return{
            apiUrl,
            tosearch:'',
            showPaginator,
            store

        }
    },
    methods:{
        getApi(){
            const data= new FormData()
            data.append('tosearch', this.tosearch)
            axios.post(apiUrl+'/search', data)
            .then(res=>{
                store.projects=res.data.projects.data;
                this.showPaginator=false
                this.tosearch=''
                console.log(store.projects.length);
                console.log(res.data.projects.data);
            })
        },



    }
}
</script>
<template>
    <div class="form-search input-group">
        <input type="text" placeholder="Cerca..." class="form-control" v-model="this.tosearch" @keyup.enter="getApi" >
    <button class="btn btn-outline-warning text-black bg-warning" @click="getApi">Invia</button>
    </div>

</template>


<style lang="scss" scoped>
    .form-search.input-group{
        width:300px;
        height: 40px;;

    }
</style>
