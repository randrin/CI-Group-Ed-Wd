<template>
    <div>
        <NavbarHome/>
        <h4>Home Component</h4>
        <Footer/>
    </div>
</template>

<script>
    import NavbarHome from "../layouts/NavbarHome";
    import Footer from "../layouts/Footer";

    export default {
        name: "Home",
        components: {NavbarHome, Footer}
    }
</script>

<style scoped>

</style>
