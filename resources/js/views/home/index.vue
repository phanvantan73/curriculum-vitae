<template>
    <div id="home">
        <el-row>
          <el-col :span="8">
            <el-card class="box-card">
              <div slot="header" class="clearfix">
                <span>Information</span>
              </div>
              <div class="text item">
                {{ 'Full name: ' + info.surname + ' ' + info.lastname }}
              </div>
              <div class="text item">
                {{ 'Age: ' + info.age }}
              </div>
              <div class="text item">
                {{ 'Email: ' + info.email }}
              </div>
            </el-card>
          </el-col>
          <el-col :span="13">
            <el-image :src="info.avatar" :fit="info.fit">
              <div slot="placeholder" class="image-slot">
                Loading<span class="dot">...</span>
              </div>
            </el-image>
          </el-col>
        </el-row>
    </div>
</template>

<script>
	import { mapGetters } from 'vuex'
	export default {
	    name: "Home",
	    computed: {
	    	...mapGetters({
	    		info: 'info'
	    	}),
	    }
	};
</script>

<style scoped>
#home {
  color: #fd7e14;
  padding: 20px;
  height: 500px;
  background-color: #d3dce6;
}
.text {
  font-size: 14px;
}

.item {
  margin-bottom: 18px;
}

.clearfix:before,
.clearfix:after {
  display: table;
  content: "";
}
.clearfix:after {
  clear: both
}

.box-card {
  width: 480px;
}
</style>
