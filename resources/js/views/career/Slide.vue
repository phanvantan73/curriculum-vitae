<template>
  <div class="slide">
    <el-carousel indicator-position="outside">
      <el-carousel-item v-for="item, index in career" :key="index">
        <div>
          <el-image :src="item.url">
            <div slot="placeholder" class="image-slot">
              Loading<span class="dot">...</span>
            </div>
          </el-image>
          <h1>{{ item.career }}</h1>
        </div>
      </el-carousel-item>
    </el-carousel>
  </div>
</template>

<script>
  export default {
    name: 'Slide',
    props: ['career']
  }
</script>

<style>
  .slide {
    padding: 20px;
  }
  .el-image {
    width: 100%;
    height: 80%;
  }
  .el-carousel__container {
    height: 600px; 
  }
  .el-carousel__item h1 {
    font-size: 18px;
    opacity: 0.75;
  }

  .el-carousel__item:nth-child(2n) {
    background-color: #99a9bf;
    color: white;
  }

  .el-carousel__item:nth-child(2n+1) {
    background-color: #d3dce6;
  }
</style>