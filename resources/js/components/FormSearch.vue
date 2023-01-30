<script>
import axios from 'axios'
import {apiUrl} from '../data/data'
import {store} from '../data/store'
export default {
    name:'FormSearch',
    data(){
        return{
            apiUrl,
            tosearch:'',
            store
        }
    },
    methods:{
        getApi(){
            const data= new FormData()
            data.append('tosearch', this.tosearch)
            axios.post(apiUrl+'search', data)
            .then(res=>{
                console.log(res.data);
                store.projects=res.data
                this.tosearch=''
            })
        }
    }
}
</script>
<template>
    <div class="form-search input-group">
        <input type="text" placeholder="Cerca..." class="form-control" v-model="this.tosearch" @keyup.enter="getApi">
    <button class="btn btn-outline-warning text-black" @click="getApi">Invia</button>
    </div>

</template>


<style lang="scss" scoped>
    .form-search.input-group{
        width:300px;
        height: 40px;;
        &:focus{
            color:purple;
        }
    }
</style>
