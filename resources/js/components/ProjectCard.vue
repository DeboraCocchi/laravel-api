
<script>
export default {
    name:'ProjectCard',
    props:{
        project:Object
    },
    methods:{
        cutText(text){
            if(text.length > 80){
                text=text.slice(0, 100)+'...'
      }
      return text
    }
  }
}
</script>
<template>
<div class="dc-card my-3 p-0">
    <router-link :to="{name: 'project-detail', params:{ slug: project.slug} }">
        <div class="content-card h-100 w-100">
            <span class="type badge text-bg-dark">{{project.type.name}}</span>
            <img :src="project.cover_image" class="card-img-top" :alt="project.image_original_name">
            <div class="card-body">
                <h4 class="card-title mb-1 text-black">{{project.name}}</h4>
                <h5 class="card-title mb-1">{{project.client_name}}</h5>
                <p class="card-text text-black m-0">{{this.cutText(project.summary)}}</p>
                <div class="technologies p-1 m-0">
                <span v-for="technology in project.technologies" :key="technology.id" class="badge">{{technology.name}}</span>
                </div>
            </div>
        </div>
    </router-link>


  </div>
</template>


<style lang="scss" scoped>
  .dc-card{
    width:18%;
    border-radius:0.8rem;
    box-shadow: 10px 8px 10px rgba(#3a0764, 0.3);
    transition: all .3s ease-in-out;
    &:hover{
        transform: scale(105%);
    }
    .content-card{
      background-color:aliceblue;
      position:relative;
      border-radius:0.8rem;
      span.type{
          position:absolute;
          left:5px;
          top:5px;
      }
      .card-body{
        text-align: center;
        padding:20px;
        overflow-y:auto;
        h5.card-title{
             color:#9160f5;
        }
        .technologies{
          justify-content: center;
          width:100%;
          display:flex;
          flex-wrap: wrap;
          .badge{
          padding:3px;
          background-color:#646cff;
          color:white;
          border-radius:.3rem;
          margin:3px;
        }
        }

      }

    }
    img{
      width:100%;
      max-height:200px;
      object-fit: cover;
      object-position: center;
      border-top-left-radius:0.8rem;
      border-top-right-radius:0.8rem;
    }
  }
</style>
