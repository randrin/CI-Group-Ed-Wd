<template>
    <div>
        <Navbar/>
        <div class="main-title block-section padd-100-top padd-100-btm bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="main-title-primary">A' Propos de nous</h1>
                        <h4 class="main-title-secondary">Notre vision dans le BTP</h4>
                    </div>
                </div>
            </div>
        </div>

        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="/">Accueil</a></li>
                            <li class="active">A' Propos de nous</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-main">
            <div class="about content-section">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <img src="/assets/site/images/img-content-04.jpg" class="img-responsive cast-shadow">
                        </div>
                        <div class="col-md-4 col-md-offset-1 col-sm-5 col-sm-offset-1 padd-40-top">
                            <p>Construction, Inc. traces its roots back to 2005 in Orange and since then have never
                                looked back. With thousands of successful projects under our belt, we can proudly say
                                that we are one.</p>
                            <p>For more than 10 years, Construction has offered a wide range of construction services in
                                Colorado, many other cities of United States and around the world. We strive to
                                maintain.<br>We aim to eliminate the task of dividing your project between different
                                architecture and construction company.</p>
                        </div>
                    </div>
                </div>
            </div>

            <Team/>
            <Expertise/>
        </div>
        <Footer/>
    </div>
</template>

<script>
    import Navbar from "../../layouts/Site/Navbar";
    import Footer from "../../layouts/Site/Footer";
    import Team from "../Site/inc/Team";
    import Expertise from "../Site/inc/Expertise";

    export default {
        name: "About",
        components: {Expertise, Navbar, Footer, Team, Expertise},
        data(){
            document.title = `À propos de nous | ${this.name_site}`;
            return {

            }

        },
        created() {
            this.loadData();
        },
        methods: {
            loadData() {
            }
        }
    }
</script>

<style scoped>

</style>
