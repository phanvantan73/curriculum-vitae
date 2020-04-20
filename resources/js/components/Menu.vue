<template>
  <div>
    <el-menu
      :default-active="$route.path"
      class="el-menu-demo"
      mode="horizontal"
      background-color="#545c64"
      text-color="#fff"
      active-text-color="#ffd04b"
      :router="true"
    >
      <template v-for="routeObject in $router.options.routes">
        <el-menu-item
          :index="routeObject.path"
          :route="routeObject.path"
        >
          {{ routeObject.text }}
        </el-menu-item>
      </template>
    </el-menu>
  </div>
</template>

<script>
  export default {
    name: "Menu"
  }
</script>
