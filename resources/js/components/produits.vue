<template>
    <div>
        Yolo
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