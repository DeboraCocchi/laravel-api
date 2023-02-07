<script>
import axios from 'axios'

import App from '../App.vue'
export default {
  components: { App },
    name:'ContactForm',
    data(){
        return{
            name:'',
            email:'',
            message:'',
            object:'',
            errors:{},
            loading:false,
            feedback:false,

        }
    },
    methods:{
        getfeedback:function(){
             this.feedback = true;
            setTimeout( () => {
             this.feedback=false;
             console.log('passing')}, 5000);
         },
        sendForm(){

            const data={
                name:this.name,
                email:this.email,
                object:this.object,
                message:this.message
            }
            this.loading=true
        axios.post('http://127.0.0.1:8001/api/contacts', data)
        .then(res=>{
            if(!res.data.success){
                this.errors = res.data.errors;
                console.log(res.data)
                // console.log(this.errors)
                this.loading=false
            }else{
                this.errors={}
                this.name=''
                this.email=''
                this.object=''
                this.message=''
                this.loading=false
                this.getfeedback();
                // console.log(this.loading)

            }
        })
        .catch( err => {
            console.log('Si è verificato un errore');
        })

        },







    }




}
</script>
<template>

    <div class="form-wrapper">
        <h1 class="text-warning">Form di contatto</h1>
        <h5 class="text-white">Resta aggiornato sulle iniziative, gli eventi e gli approfondimenti sul mondo delle api</h5>
        <div class="alert alert-warning" role="alert" v-if="feedback">
            E-mail inviata correttamente
            </div>

        <form @submit.prevent="sendForm()" class="mt-4 form-floating">
        <!-- triggero l'evento submit -->


            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="mail-name" placeholder="Inserisci il tuo nome" :class="{'is-invalid':errors.name}" v-model.trim="name">
                <label for="mail-name">Il tuo nome</label>
                <div class="error invalid-feedback" v-if="errors.name">
                    <p v-for="(error, index) in errors.name" :key="'name'+index">{{error}}</p>
                </div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="mail-object" placeholder="Inserisci un oggetto"  v-model.trim="object" :class="{'is-invalid':errors.object}">
                <label for="mail-object">Oggetto della mail</label>
                <div class="error invalid-feedback" v-if="errors.object">
                    <p v-for="(error, index) in errors.object" :key="'object'+index">{{error}}</p>
                </div>
            </div>



            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="mail-email" placeholder="mail@example.com"
                :class="{'is-invalid':errors.email}"
                v-model.trim="email">
                <label for="mail-email">La tua e-mail</label>
                <div class="error invalid-feedback" v-if="errors.email">
                    <p v-for="(error, index) in errors.email" :key="'email'+index">{{error}}</p>
                </div>
            </div>



                <div class="form-floating">
                    <textarea class="form-control" placeholder="Scrivi il tuo messaggio" :class="{'is-invalid':errors.message}" id="mail-message" style="height:200px"
                    v-model.trim="message"></textarea>
                    <label for="mail-message">Scrivi il tuo messaggio</label>
                    <div class="error invalid-feedback" v-if="errors.message">
                    <p v-for="(error, index) in errors.message" :key="'message'+index">{{error}}</p>
                </div>
                </div>

                <p class="error invalid-feedback"></p>

                <button type="submit" :disabled="loading" class="btn btn-warning mt-2">{{loading? 'Invio in corso...' : 'Invia'}}</button>
        </form>
    </div>



</template>


<style lang="scss" scoped>
        @use '../../scss/partials/_variables.scss' as * ;

            .form-wrapper{
                padding:30px 50px;
                background-color:$black;
            }

            label{
                color:#cc9900;
            }
</style>
