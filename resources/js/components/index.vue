<template>
    <div id="app">
    <h1>{{ title }}</h1>
        <router-link :to="{ name: 'products' }">Produit</router-link>
    <router-view></router-view>
        <h1>{{dev}}</h1>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                title: 'Welcome To My Site'
            }
        }
    }


</script>

<style scoped>

</style>