<script>
import ContactForm from '../components/ContactForm.vue'
export default {
    name:'Contacts',
    components:{
        ContactForm
    }
}
</script>
<template>
<main>
    <ContactForm />
    <section class="stripes">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <img src="/img/api/flower.jpg" alt="bee">
                </div>
                <div class="col-3">
                    <img src="/img/api/favo.jpg" alt="bee">
                </div>
                <div class="col-3">
                    <img src="/img/api/impollinata.jpg" alt="bee" class="polline">
                </div>
                <div class="col-3">
                    <img src="/img/api/miele2.jpg" alt="bee">
                </div>

            </div>
        </div>
    </section>

</main>

</template>


<style lang="scss" scoped>
    section.stripes{
        filter:opacity(0.8);
        .col-3{
            height:20vw;
            padding:0;
            img{
                height:100%;
                width:100%;
                object-fit:cover;
                object-position: center;
                &.polline{
                    object-position: bottom;
                }
            }
        }
    }
</style>
