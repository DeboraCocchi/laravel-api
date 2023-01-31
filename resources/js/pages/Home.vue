<script>

export default {
    name:'Home',
    data(){
        return{

        }
    },


}
</script>
<template>
<main class="text-center">
    <h1 class="my-5">Benvenuto nella homepage</h1>
    <section class="jumbotron">

    </section>
    <section class="quote">
        <p class="col-md-8 fs-4 mt-5">Come l'ape raccoglie il succo dei fiori senza danneggiarne colore e profumo,<br>così il saggio dimori nel mondo. </p>
            <h6 class="mt-5">Siddharta Gautama, Buddha</h6>
    </section>


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
