<template>
    <div>Ceci est ma page devs
    {{this.dev}}
    </div>
</template>

<script>
    export default {
        name: "devs",
        props: ["dev"]
    }
</script>

<style scoped>

</style>