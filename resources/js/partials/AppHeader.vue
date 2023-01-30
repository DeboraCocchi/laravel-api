<script>
export default {
  name:'AppHeader'
}
</script>
<template>
  <header class="">
    <nav>
    <img src="/img/logo-annidato-bn.png" alt="" class="logo">
      <ul class="p-0 m-0 d-flex">
        <li class="me-3">
          <router-link :to="{name: 'home'}">Home</router-link>
        </li>
        <li>
          <router-link :to="{name: 'projects'}">Progetti</router-link>
        </li>
      </ul>
    </nav>
  </header>
</template>


<style lang="scss" scoped>
  header{
    position:fixed;
    z-index: 90;
    left:0;
    top:0;
    width:100vw;
    height:60px;
    padding:10px 20px;
    background-color: white;
    justify-content:space-between;
    align-items:center;
    border-bottom:1px solid aliceblue;
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
        a{
            color:#9160f5;
            transition:all .2s ease-in-out;
            &:hover{
            color:#ffc107;
            text-decoration:underline;
    }
        }
      }
    }
  }
</style>
