<template>
    <div>
        <Header/>
        <slot/>
        <Footer/>
    </div>
</template>

<script>
import Header from "./Header.vue";
import Footer from "./Footer.vue";

export default {
    name: "MasterLayout",
    components: {
        Footer, Header
    } ,
}
</script>

<style>
    @import '../../../../css/site/site.css';
</style>
