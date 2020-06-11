<template>
    <div class="wrapper">
        <Navbar />
        <div class="main-panel" id="main-panel">
            <NavTop />
            <Footer></Footer>
        </div>
    </div>
</template>

<script>
    import NavTop from "../../layouts/Dashboard/NavTop";
    import Navbar from "../../layouts/Dashboard/Navbar";
    import Footer from "../../layouts/Dashboard/Footer";
    export default {
        name: "Dashboard",
        components: {NavTop, Navbar, Footer}
    }
</script>

<style scoped>

</style>
