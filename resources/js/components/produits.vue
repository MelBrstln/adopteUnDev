<template>
    <div>
        <h1>Un profil</h1>
        <div v-for="de in this.devs">
            <h4>{{ de.name }}</h4>
        </div>
    </div>
</template>

<script>

    export default {
        name: "produits",
        props: ["devs"]
    }
</script>

<style scoped>

</style>