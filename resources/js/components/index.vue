<template>
    <div>


        TEST ******************************
        <ul>
            <li v-for="(route, key) in routes">
                <router-link  :to="{ name : route.path }" :key="key" style="text-transform:capitalize;">{{route.name}}</router-link>
            </li>
        </ul>
        <div>
            <router-view></router-view>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                routes: [
                    {
                        name: 'Accueil',
                        path: 'home'
                    },

                    {
                        name: 'Produits',
                        path: 'products'
                    }
                ]
            }
        },
        mounted() {

        }
    }
</script>

<style scoped>

</style>