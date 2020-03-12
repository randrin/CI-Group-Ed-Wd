<template>
    <div>
        <NavbarHome/>
        <h4>Home Component</h4>
        <Subscribe/>
        <Footer/>
    </div>
</template>

<script>
    import NavbarHome from "../layouts/NavbarHome";
    import Footer from "../layouts/Footer";
    import Subscribe from "./inc/Subscribe";

    export default {
        name: "Home",
        components: {Subscribe, NavbarHome, Footer, Subscribe}
    }
</script>

<style scoped>

</style>
