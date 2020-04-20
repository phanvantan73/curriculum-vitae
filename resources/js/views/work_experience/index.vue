<template>
    <div id="career">
      <el-row>
      	<el-col :span="24">
      	  <blockquote class="quote-box">
      		<p class="quotation-mark" style="font-size: 30px;">
	          “
      		</p>
	      	<p class="quote-text">
	          Education is not Preparation.
	          For Life, Education is Life Itself. 
	      	</p>
	      	<hr>
	      	<div class="blog-post-actions">
	          <p class="blog-post-bottom pull-left">
	          	Beckham Roy
	          </p>
	      	</div>
    	  </blockquote>
      	</el-col>
      </el-row>
	  <el-row>
        <el-col :span="8" :offset="3" v-for="item, index in experience" :key="index">
          <el-card class="box-card">
            <div slot="header" class="clearfix">
              <span>{{ item.work }}</span>
            </div>
            <div class="text item">
              <img src="https://shadow.elemecdn.com/app/element/hamburger.9cf7b091-55e9-11e9-a976-7f4d0b07eef6.png" class="image">
              <br>
            </div>
            <div class="text item">
              Experience
              <ul class="list-group list-group-flush">
			    <li class="list-group-item" v-for="(exp, k) in item.experience" :key="k">
		    	  {{ exp }}
			    </li>
		  	  </ul>
          	</div>
          	<hr>
          	<div class="text item">
          	  From {{ item.start_time }} to {{ item.end_time }}
      	  	</div>
          </el-card>
        </el-col>
      </el-row>
    </div>
</template>

<script>
	import { mapGetters } from 'vuex'
	export default {
	    name: "WORK_EXPERIENCE",
	    computed: {
	    	...mapGetters({
	    		experience: 'experience'
	    	}),
	    }
	};
</script>

<style scoped>
#career {
    color: #fd7e14;
    padding: 20px;
}

.time {
  font-size: 13px;
  color: #999;
}

.bottom {
  margin-top: 13px;
  line-height: 12px;
}

.button {
  padding: 0;
  float: right;
}

.image {
  width: 100%;
  display: block;
}

.clearfix:before,
.clearfix:after {
  display: table;
  content: "";
}

.clearfix:after {
  clear: both
}
</style>
