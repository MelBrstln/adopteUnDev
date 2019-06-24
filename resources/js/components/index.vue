<template>
    <div id="app">
    <h1>{{ title }}{{this.devs[(counter)].name}}</h1>
        {{this.counter}}
        <button v-on:click="numeroIdDecrement()">profil précédent</button>
        <button v-on:click="numeroIdIncrement()">profil suivant</button>

        <!--<button v-on:click="envoyerMessage(this.devs[(counter)].id)">Mettre dans le panier</button>-->
    <button v-on:click='envoyerMessage(counter)'>Mettre dans son panier</button>
    </div>
</template>

<script>

    export default {
        resource: null,
        data() {
            return {
                title: 'Profil de ',
                counter: this.ids,
            }
        },
        props: ["devs", "ids"],
        methods: {
            numeroIdDecrement : function (){
                if(this.counter <1){
                    this.counter = 1;
                }
                this.counter --;

            },
            numeroIdIncrement : function (){
                this.counter ++;
                this.ids ++;
                if(this.counter === this.devs.length){
                    this.counter = this.counter -1 ;
                }

            },
            envoyerMessage : function($id){
                location.href = $id + "/sendMessage";

            }
        }
    }



</script>

<style scoped>

</style>