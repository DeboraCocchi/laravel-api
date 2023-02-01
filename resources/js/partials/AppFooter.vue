<template>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-4 p-2">
                    <p class="p-1">
                        Tutti i contenuti testuali di questa pagina sono tratti dal sito del FAI -  FONDO PER L'AMBIENTE ITALIANO ETS - Via Carlo Foldi, 2 - 20135 Milano
                    </p>
                </div>
                <div class="col-4">
                    <div class="p-2 text-center">
                        <h6 class="whitey">Visita il sito del FAI per scoprire come difendere le api</h6>
                    <a href="https://fondoambiente.it/il-fai/il-fai-che-vigila/salvailsuolo/le-api/" target="_blank" class="btn btn-warning">Vail al sito</a>
                    </div>

                </div>
                <div class="col-4">

                </div>

            </div>
        </div>
    </footer>
</template>

<script>
export default {
    name:'AppFooter'
}
</script>

<style lang="scss" scoped>
    @use '../../scss/partials/_variables.scss' as * ;
     .yellow{
            background-color:$yellow-lighter;
            h2{
                color:$soft-white;
            }
    }
    .whitey{
            color:$soft-white;
    }

    .black{
        background-color: $black;
        color:$soft-white;
        h2{
            color:$yellow-lighter;
        }
    }
    footer{
        position:fixed;
        z-index:10;
        bottom:0;
        left:0;
        height:10vh;
        background-color: $black;
        color:$yellow-lighter;
        .col-4{
            p{
                font-size:90%;
            }
        }
    }
</style>
