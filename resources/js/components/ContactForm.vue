<script>
import axios from 'axios'
import {store} from '../data/store'
import App from '../App.vue'
export default {
  components: { App },
    name:'ContactForm',
    data(){
        return{
            name:'',
            email:'',
            message:'',
            errors:{},
            loading:false
        }
    },
    methods:{
        sendForm(){
            this.loading=true;
            const data={
                name:this.name,
                email:this.email,
                object:this.object,
                message:this.message
            }
        axios.post('http://127.0.0.1:8000/api/contacts', data)
        .then(res=>{
            console.log(res.data);
            if(!res.data.success){
                this.errors = res.data.errors;
                console.log(this.errors);
            }else{
                this.name='';
                this.email='';
                this.object='';
                this.message='';
                this.errors={};
            }
        })

        }
    }
}
</script>
<template>
<main>
    <h1 class="text-warning">Form di contatto</h1>
    <h5 class="text-white">Resta aggiornato sulle iniziative, gli eventi e gli approfondimenti sul mondo delle api</h5>
<!-- siccome usiamo v-model possiamo non mettere il name nei campi di input -->
  <form @submit.prevent="sendForm()" class="mt-4 form-floating">
      <!-- triggero l'evento submit -->

    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="mail-object" placeholder="Inserisci un oggetto"
        :class="{'is-invalid':errors.object}"
        v-model.trim="object">
        <label for="mail-object">Oggetto della mail</label>
    </div>
    <div class="form-floating mb-3">
        <input type="text" class="form-control" id="mail-name" placeholder="Inserisci il tuo nome"
        :class="{'is-invalid':errors.name}"
        v-model.trim="name">
        <label for="mail-name">Il tuo nome</label>
    </div>
    <div class="form-floating mb-3">
        <input type="email" class="form-control" id="mail-email" placeholder="mail@example.com"
        :class="{'is-invalid':errors.email}"
        v-model.trim="email">
        <label for="mail-email">La tua e-mail</label>
    </div>

        <!-- <p class="error" v-for="(error,index in errors.name)" :key="'name'+index">{{error}}</p> -->
        <div class="form-floating">
            <textarea class="form-control" placeholder="Scrivi il tuo messaggio" :class="{'is-invalid':errors.message}" id="mail-message" style="height:200px"></textarea>
            <label for="mail-message">Scrivi il tuo messaggio</label>
        </div>

        <p class="error invalid-feedback"></p>

        <button type="submit" :disabled="loading" class="btn btn-warning mt-2">{{loading? 'Invio in corso...' : 'Invia'}}</button>
  </form>
</main>

</template>


<style lang="scss" scoped>
main{
    background-color: rgba(18, 19, 22, 0.917);
}
    label{
        color:#cc9900;
    }
</style>
