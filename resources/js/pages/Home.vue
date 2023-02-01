<script>
import AppFooter from '../partials/AppFooter.vue'
export default {
    name:'Home',
    components:{
        AppFooter
    }


}
</script>
<template>
<div class="main-wrapper">
     <section class="jumbotron d-flex align-items-center justify-content-center">
        <div class="quote">
            <p class=""><em>Come l'ape raccoglie il succo dei fiori senza danneggiarne colore e profumo, <br>così il saggio dimori nel mondo. </em></p>
            <h6 class="mt-2 text-bold">Siddharta Gautama, Buddha</h6>
        </div>
    </section>

    <section class="text yellow flex-column">
        <h2>Il problema: la moria delle api</h2>
        <p class="">La moria planetaria delle api sta portando alla luce il ruolo cruciale degli insetti impollinatori negli equilibri e nel progredire della vita sulla terra. &Egrave; essenziale proteggere questi preziosissimi insetti e provvedere all'allevamento delle api per prevenire gravi conseguenze sulla disponibilità delle colture in futuro.</p>
    </section>
    <section class="img-text whitey">
        <div class="text">
            <p>Le api, una delle specie più importanti tra gli impollinatori, hanno un ruolo essenziale nell’equilibrio degli ecosistemi poichè garantiscono la proliferazione della maggior parte delle piante che danno nutrimento a uomini e animali.</p>

        </div>
        <img src="/img/api/flowers.jpg" alt="flower">

    </section>
    <section class="img-text whitey">
        <img src="/img/api/atterraggio.jpg" alt="flower">

        <div class="text">
            <p>
             Gli insetti impollinatori sono dunque un anello fondamentale della catena alimentare. Senza il loro lavoro buona parte delle coltivazioni agrarie (frutta, verdura e anche il foraggio) non avrebbe modo di perpetuarsi e la nostra stessa sopravvivenza sarebbe in pericolo, visto che <strong>un terzo del cibo che consumiamo dipende dall’opera di impollinazione.</strong>

            </p>
        </div>
    </section>
    <section class="img-text whitey">


        <div class="text">


            <p class="mb-0 mt-2">
                Qualora le api scomparissero, l’unica soluzione sarebbe quella - già adottata oggi in alcune parti rurali della Cina - di <strong>impollinare i fiori, uno a uno, manualmente.</strong>
                <br>Si stima che senza il contributo degli insetti impollinatori circa un terzo delle colture dovrebbe essere impollinato con altri mezzi.


            </p>
        </div>
        <img src="/img/api/bombo.jpg" alt="bombo">
    </section>
    <section class="text flex-column causes p-0">
        <div class="hive-bg">&nbsp;</div>
        <div class="causes-container">
            <h2 class="mt-5">Le cause del problema</h2>
            <p class="mb-4">Sono principalmente quattro le cause che assillano le api e che ne hanno determinato una rapida diminuzione:</p>
            <div class="container-fluid">
                    <div class="row justify-content-around py-3 px-5">
                        <div class="causa col-5 p-0 my-3">

                            <div class="text">
                                <div class="image">
                                    <img src="/img/api/urbanizzazione.jpg" alt="urbanize">
                                </div>
                                <h6 class="mt-2">URBANIZZAZIONE</h6>
                                <p>A causa delle massive industrializzazione e urbanizzazione, lo spazio vitale di questi insetti si è frammentato, urbanizzato, nel complesso ridotto drasticamente.</p>
                            </div>
                        </div>
                        <div class="causa col-5 p-0 my-3">

                            <div class="text">
                                <div class="image">
                                <img src="/img/api/c-climatico.jpg" alt="flower">
                            </div>
                                <h6 class="">CAMBIAMENTO CLIMATICO</h6>
                                <p>L’innalzamento delle temperature, il mutato andamento delle precipitazioni e i più irregolari - ed estremi - eventi meteorologici hanno un impatto sempre più evidente sulle popolazioni di impollinatori. Tali modifiche influiscono sugli insetti sia individualmente che sulle comunità, traducendosi in un <strong>aumento del tasso di estinzione.</strong>
                                </p>
                            </div>
                        </div>
                        <div class="causa col-5 p-0 my-3">

                            <div class="text">
                                <div class="image">
                                <img src="/img/api/pesticidi.jpg" alt="flower">
                            </div>
                                <h6 class="">VELENI E PESTICIDI</h6>
                                <p>I pesticidi rappresentano il rischio più diretto per gli insetti impollinatori. Le comuni pratiche agricole si basano sull’uso intensivo (e spropositato) di prodotti chimici: sui terreni italiani vengono versate annualmente 175mila tonnellate di sostanze chimiche. Appena <strong>1 grammo di un pesticida neonicotinoide ha una tossicità equivalentemente a 7 kg del vecchio DDT.</strong></p>
                            </div>
                        </div>
                        <div class="causa col-5 p-0 my-3">

                            <div class="text">
                                <div class="image">
                                    <img src="/img/api/parassiti.jpg" alt="parassiti">
                                </div>
                                <h6 class="mt-3">virus e parassiti</h6>
                                <p>I fattori di stress dovuti a cambiamenti climatici e all’uso di pesticidi compromettono il sistema immunitario dell’ape, facilitando esplosioni virali letali per le colonie. Altamente invasivo è l’acaro Varroa Destructor.</p>
                            </div>
                        </div>
                    </div>

            </div>
        </div>

    </section>
    <section class="text black flex-column py-5">
        <h2 class="mt-4">Una situazione allarmante</h2>
        <p class="">l’Università di Harvard ha diffuso dei dati molto preoccupanti: i ricercatori hanno infatti calcolato che <strong>la scomparsa totale degli impollinatori potrebbe portare a un aumento di quasi il 3% della mortalità globale.</strong> <br>La riduzione consistente della produzione globale di frutta, verdura e semi (rispettivamente 22,9%, 16,3% e 22,9%) potrebbe infatti determinare una carenza degli apporti vitaminici fondamentali, soprattutto per quelle popolazioni che già hanno un’alimentazione inadeguata, causando un aumento delle malattie legate alla malnutrizione.</p>
        <br>
        <p class="pb-2">Il ruolo delle api negli ecosistemi, dunque, è di gran lunga superiore al valore stesso della produzione di miele: dal meccanismo dell’impollinazione dipendono strettamente la qualità e la quantità di cibo che il pianeta riuscirà a produrre in futuro.</p>
    </section>

    <section class="stripes">
        <!-- <div class="black p-0 m-0">&nbsp;</div> -->
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
</div>






<AppFooter />
</template>


<style lang="scss" scoped>
@use '../../scss/partials/_variables.scss' as * ;


    h2{
        font-family: 'EB Garamond', serif;
        font-weight:600;
        margin-bottom:1rem;
    }
    .yellow{
            background-color:$yellow-lighter;
            h2{
                color:$soft-white;
            }
    }
    .whitey{
            background-color:$soft-white;
    }

    .black{
        background-color: $black;
        color:$soft-white;
        h2{
            color:$yellow-lighter;
        }
    }
    section.jumbotron{
        background-image: url('/img/api/jumbo.jpg');
        height:50vh;
        width:100vw;
        display:flex;
        align-items:center;
        margin-top:80px;
        background-position: center;
        background-size: cover;
        .quote{
            width:60%;
            border-radius:0.8rem;
            padding:30px;
            background-color: $soft-white;
            text-align: center;
            font-family: 'EB Garamond', serif;
            & p{
                font-size:200%;
            }
            & h6{
                font-weight:500;
                font-size:108%;
            }
    }
    }

    section.img-text{
        height:40vh;
        display: flex;
        img{
            height:100%;
            width:50vw;
            object-fit:cover;
            object-position: center;;
        }
        .text{
            width:50vw;
            padding:30px 40px;
            color:black;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:space-evenly;
            overflow-y:auto;
            & p{
                width:50%;
                font-size:1.2rem;
            }
        }

    }
    section.text{

        text-align:center;
        padding:50px;
        min-height:300px;
        display:flex;
        align-items:center;
        & p{
            width:60%;
            margin:0 auto;
            font-size:1.4rem;
        }
    }
    main{
        top:calc(100vh - 80px - 50vh);
        padding-top:30px;
    }
    .causa{
        padding:20px;
        display:flex;
        border-radius:1.5rem;
        h6{
            font-size:1.3rem;
            text-transform: uppercase;
            color:$yellow-darker;
        }

        img{
                object-fit:cover;
                height:190px;
                width:190px;
                border-radius:50%;
                border:1px solid $yellow-lighter;
                position:absolute;
                top:calc(50% - (190px / 2));
                left:- (calc(190px / 2));
            }

        .text{
            position:relative;
            padding:40px;
            border-radius:1.5rem;
            border:1px solid $yellow-lighter;
            box-shadow:3px 3px 6px $yellow-darker;
            p{
                font-size:98%;
            }
        }
    }
    section.causes{
        min-height:90vh;
        display:flex;
        position:relative;
        justify-content:center;

        .hive-bg{
            height:100vh;
            width:100%;
            flex:1;
            margin:0;
            padding:0 0 50px 0;
            background-image:url('/img/api/miele.jpg');
            background-repeat: no-repeat;
            background-size: cover;
             filter: opacity(0.6);
             display:block;


        }
        .causes-container{
            z-index:2;
            padding:30px;
            position:absolute;
            top:0;
            left:0;
            .row{
                margin-bottom:50px;
                .causa{
                background-color:$soft-white;
                vertical-align: middle;
                .text{
                    padding:20px 15px 20px 30px;
                }
            }
            }


        }
    }
    section.stripes{
        filter:opacity(0.9);
        .col-3{
            height:30vw;
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
