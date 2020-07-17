<template>
    <div>
        <vue-progress-bar />
        <NavbarHome/>
        <InformationsContact />
        <h4>Home Component</h4>
        <Informations/>
        <Valeurs/>
        <Clients/>
        <Subscribe/>
        <Footer/>
    </div>
</template>

<script>
    import NavbarHome from "../../layouts/Site/NavbarHome";
    import Footer from "../../layouts/Site/Footer";
    import Subscribe from "../Site/inc/Subscribe";
    import InformationsContact from "../Site/inc/InformationsContact";
    import Informations from "../Site/inc/Informations";
    import Clients from "../Site/inc/Clients";
    import Valeurs from "../Site/inc/Valeurs";

    export default {
        name: "Home",
        components: {Subscribe, NavbarHome, Footer, Subscribe, InformationsContact, Informations, Clients, Valeurs},
         data() {
            document.title = `Groupe Ed-Wd | ${this.name_site}`;
            return {
                //
            }
        },
        created() {
            this.$Progress.start();
            this.$Progress.finish();
        }
    }
</script>

<style scoped>
    .block-section.bg-theme,
    .content-section.bg-theme {
        background-color: #f2f2f2;
        color: inherit;
    }
</style>
