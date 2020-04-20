<template>
    <div id="career">
    	<Slide :career="career"/>
    </div>
</template>

<script>
	import { mapGetters } from 'vuex'
	import Slide from './Slide'
	export default {
	    name: "CAREER",
	    computed: {
	    	...mapGetters({
	    		career: 'career'
	    	}),
	    },
	    components: {
	    	'Slide': Slide
	    }
	};
</script>

<style scoped>
#career {
    color: #fd7e14;
    height: 800px;
    padding: 20px;
}
</style>
