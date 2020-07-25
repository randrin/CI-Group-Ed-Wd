<template>
    <div>
        <vue-progress-bar/>
        <Navbar/>
        <Footer />
    </div>
</template>

<script>
    import Navbar from "../../../layouts/Site/Navbar";
    import Footer from "../../../layouts/Site/Footer";

    export default {
        name: "Profil",
        components: { Navbar, Footer},
        data() {

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
