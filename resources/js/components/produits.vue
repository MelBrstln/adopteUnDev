<template>
    <div>
        <h1>Ceci zerty</h1>
        <ul >
            <li v-for="item in items" >
                {{ item.message }}
            </li>
        </ul>
        <h1>{{dev}}</h1>
    </div>
</template>

<script>

    export default {
        name: "produits",

        data(){
                return{
            items: [
                { message: 'Nom : Richard' },
                { message: 'Talent : Il est bô' },
                { message: 'Passion : le sandwich au jambon' }
            ]}}
    }
</script>

<style scoped>

</style>