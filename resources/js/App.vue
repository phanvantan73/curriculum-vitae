<template>
    <div>
        <Menu/>
        <router-view :key="$route.path"></router-view>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex'
    import { mapActions } from 'vuex'
    import Menu from './components/Menu'

    export default {
        name: "App",
        components: {
            'Menu': Menu
        },
        computed: {
            ...mapActions({
                getUser: 'getUser',
                getCareer: 'getCareer',
                getExperience: 'getExperience'
            })
        },
        mounted() {
            this.$store.dispatch('getUser'),
            this.$store.dispatch('getCareer'),
            this.$store.dispatch('getExperience')
        }
    };
</script>