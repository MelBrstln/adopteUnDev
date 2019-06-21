<template>
    @{{ message }}
    <router-link to="/vue/example"><a>url to example</a></router-link>
</template>
<script>
    export default {
        data () {
            return {
                message: 'This is the home component! and it is gonna become something like the profile page of some dev.'
            };
        }
    };
</script>
