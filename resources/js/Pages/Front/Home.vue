<template>
    <MasterLayout>

        <Hero />
        <About />


        </MasterLayout>
    </template>

<script>
    import MasterLayout from "./Layout/MasterLayout.vue";
    import Hero from "../../Components/Front/Home/Hero.vue";
    import About from "../../Components/Front/Home/About.vue";
    
    export default {
        name: "Home",
        components: {
            MasterLayout, Hero, About
    } ,
}
</script>

<style scoped>

</style>
