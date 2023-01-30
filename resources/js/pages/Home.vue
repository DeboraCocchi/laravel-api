<script>
import axios from 'axios'
export default {
    name:'Home',
    data(){
        return{
            quote:{}
        }
    },
    methods:{
        getQuoteApi(){
            axios.get('https://zenquotes.io/api/random')
            .then(res=>{
                console.log(res)
                this.quote=res.data
            })
            .catch( err=>{
                console.log('Si è verificato un errore');
            })
        }
    },
    mounted(){
        this.getQuoteApi()
    }
}
</script>
<template>
<main class="text-center">
<h1 class="my-5">Benvenuto nella homepage</h1>

<img src="/img/ape-b-n.png" alt="DVORA">
<div class="quote">
    <h5>{{this.quote.q}}</h5>
    <h6>{{this.quote.a}}</h6>
</div>
</main>


</template>


<style lang="scss" scoped>
    main{
        background-color: rgba(255, 255, 255, 0.81);
        height:calc(100vh - 60px);
        width:100vw;
        img{
            height:200px;
        }
         h1{
        color:#3a0764;
    }
    }
</style>
