<template>
    <div>
        <input type="text" v-model="fruit" placeholder="ajouter un fruit"/>
        <button v-on:click="ajouterFruit">Ajouter !</button>
        <ul>
            <li v-for="(fruit, index) in fruits">
                {{fruit.nom}}
                <button v-on:click="supprimerFruit(index)">Supprimer</button>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                fruit: '',
                fruits: [
                    {
                        nom: "tomate"
                    },
                    {
                        nom: "cacao"
                    },
                    {
                        nom: "banane"
                    },
                    {
                        nom: "pomme"
                    },
                ]
            }
        },

        methods: {
            ajouterFruit: function () {
                var vm = this;
                vm.fruits.push({nom: vm.fruit});
            },
            supprimerFruit: function(index){
                var vm = this;
                vm.fruits.splice(index, 1);
            },
            getFruits : function () {
                return
            }
        },
        mounted() {

        }
    }
</script>

<style scoped>

</style>