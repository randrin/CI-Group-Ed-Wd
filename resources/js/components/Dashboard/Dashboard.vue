<template>
    <div class="wrapper">
        <vue-progress-bar/>
        <Navbar/>
        <div class="main-panel" id="main-panel">
            <NavTop/>
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
        components: {NavTop, Navbar, Footer},
        data() {
            return {}
        },
        methods: {
            loadData() {
                //
            }
        },
        created() {
            this.$Progress.start();
            this.loadData();
            this.$Progress.finish();
        }
    }
</script>

<style scoped>

</style>
