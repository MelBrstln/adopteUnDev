<template>
    <div id="app">
    <h1>{{ title }}{{this.devs[counter].name}}</h1>


        <button v-on:click="counter -= 1">profil précédent</button>
        <button v-on:click="counter += 1">profil suivant</button>






    </div>
</template>

<script>
    export default {
        resource: null,
        data() {
            return {
                title: 'Profil de ',
                counter: this.ids
            }
        },
        props: ["devs", "ids"]

        // mounted(){
        //     this.resource = this.$resource('/dev');
        //     this.resource.get().then((response) => {
        //         this.dev = response.body
        //     })
        // }
    }


</script>

<style scoped>

</style>