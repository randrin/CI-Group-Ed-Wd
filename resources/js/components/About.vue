<template>
    <div>
        <Navbar/>
        <h4>Avout Component</h4>
        <Footer/>
    </div>
</template>

<script>
    import Navbar from "../layouts/Navbar";
    import Footer from "../layouts/Footer";
    export default {
        name: "About",
        components: {Navbar, Footer}
    }
</script>

<style scoped>

</style>
