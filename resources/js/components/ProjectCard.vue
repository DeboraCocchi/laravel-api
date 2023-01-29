
<script>
export default {
    name:'ProjectCard',
    props:{
        project:Object
    },
    methods:{
        cutText(text){
            if(text.length > 100){
                text=text.slice(0, 100)+'...'
      }
      return text
    }
  }
}
</script>
<template>
<div class="dc-card my-3">
    <router-link :to="{name: 'project-detail', params:{ slug: project.slug} }">
        <div class="content-card">
      <img :src="project.cover_image" class="card-img-top" :alt="project.image_original_name">
      <div class="card-body">
        <h4 class="card-title mb-2 text-black">{{project.name}}</h4>
        <h5 class="card-title mb-2">{{project.client_name}}</h5>
        <p class="card-text text-black">{{this.cutText(project.summary)}}</p>
        <div class="technologies">
          <span v-for="technology in project.technologies" :key="technology.id" class="badge">{{technology.name}}</span>
        </div>
      </div>
    </div>
    </router-link>


  </div>
</template>


<style lang="scss" scoped>
  .dc-card{
    width:calc(100% / 5);
    padding:5px;
    .content-card{
      border-radius:0.8rem;
      background-color:aliceblue;
      .card-body{
        text-align: center;
        padding:10px;

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
      height:auto;
      object-fit: cover;
    }
  }
</style>
