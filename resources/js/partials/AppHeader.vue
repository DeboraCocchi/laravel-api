<script>

export default {
  name:'AppHeader'
}
</script>
<template>
  <header class="">
    <nav>
        <router-link :to="{name: 'home'}"><img src="/img/logo-annidato-bn.png" alt="logo" class="logo"></router-link>

      <ul class="p-0 m-0 d-flex">
        <li class="me-4">
          <router-link :to="{name: 'home'}">Home</router-link>
        </li>
        <li class="me-4">
          <router-link :to="{name: 'projects'}">Progetti</router-link>
        </li>
        <li>
          <router-link :to="{name: 'contacts'}">Contattaci</router-link>
        </li>
      </ul>
    </nav>
  </header>
</template>


<style lang="scss" scoped>
@use '../../scss/partials/_variables.scss' as * ;
  header{
    position:fixed;
    z-index: 90;
    left:0;
    top:0;
    width:100vw;
    height:80px;
    padding:10px 20px;
    background-color: white;
    justify-content:space-between;
    align-items:center;
    box-shadow: 1px 0 3px $yellow-darker;
    // border-bottom:1px solid rgba(100,108,254, 0.7);
    overflow-y:hidden;
    nav{
      height:100%;
      padding:0px 30px;
      display:flex;
      justify-content: space-between;
      align-items:center;
      .logo{
        height:50px;
      }
      ul{
        list-style:none;
        display:inline-block;
        li{
        //   &::after{
        //     content:'';
        //     border-bottom:2px solid $yellow-darker;
        //     padding:0 10px;
        //     position:absolute;
        //     bottom:0;
        //     right:0;
        //     left:0;
        //     margin:0 auto;
        //     width:0;
        //     transition:all .3s ease-in-out;
        //     }
            // &::after a:hover{
            //     width:100%;
            //     padding:0;
            //     border-bottom:2px solid $yellow-darker;
            //     }
            // &::after a.active,  &::after a:active{
            //     width:100%;
            //     padding:0;
            //     border-bottom:2px solid $yellow-darker;
            // }
         a{
            color:$black;
            text-transform: uppercase;
            font-weight: bold;
            display: block;
             &:hover ,  &:active , &.active {
            color:$yellow-darker;
                }
            // &::after:hover{
            //     width:100%;
            //     padding:0;
            //     border-bottom:2px solid $yellow-darker;
            //     }

            }

            }}
    }
  }
</style>
