<template>
    <div>
        <Navbar/>
        <!-- begin:main-title -->
        <div class="main-title block-section padd-100-top padd-100-btm bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="main-title-primary">Nous Contactez</h1>
                        <h4 class="main-title-secondary">Laissez nous un message ou appellez-nous.</h4>
                    </div><!-- .col-## -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .main-title -->
        <!-- end:main-title -->

        <!-- begin:breadcrumb -->
        <div class="breadcrumbs">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ol class="breadcrumb">
                            <li><a href="/">Accueil</a></li>
                            <li class="active">Nous Contactez</li>
                        </ol>
                    </div><!-- .col-md-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .site-breadcrumb -->
        <!-- end:breadcrumb -->

        <!-- begin:site-main -->
        <div class="site-main">
            <!-- begin:block-section -->
            <div class="block-section">
                <InformationsContact />

                <!-- begin:contact -->
                <div id="contact" class="contact block-section image-block bg-white">
                    <div class="container-fluid container-no-padding">
                        <div class="row row-no-margin">
                            <div class="image-block-item col-md-5 col-sm-5 col-xs-12">
                                <div class="map image-block-item-background image-block-item-map" data-lat="-7.866315" data-lng="110.389574"></div>
                            </div><!-- .image-block-item -->
                        </div><!-- .row -->
                    </div><!-- .container-fluid -->

                    <div class="container clear">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-10 col-xs-offset-1 padd-20-top padd-60-btm">
                                <form class="contact-form">
                                    <p>Call or submit our online form to request an estimate or for general questions about our services. We look forward to serving you!</p>
                                    <div class="form-group">
                                        <label for="contact_name">Full Name</label>
                                        <input type="text" class="form-control form-bordered" id="contact_name">
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contact_email" class="form-label">Email Address</label>
                                                <input type="email" class="form-control form-bordered" id="contact_email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contact_email" class="form-label">Phone Number</label>
                                                <input type="email" class="form-control form-bordered" id="contact_email">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_subject">Subject</label>
                                        <input type="text" class="form-control form-bordered" id="contact_subject">
                                    </div>
                                    <div class="form-group">
                                        <label for="contact_message" class="form-label">Message</label>
                                        <textarea class="form-control form-bordered" rows="6" id="contact_message"></textarea>
                                    </div>
                                    <button type="submit" class="button btn-square">Submit</button>
                                </form><!-- .contact-form -->
                            </div><!-- .col-## -->
                        </div><!-- .row -->
                    </div><!-- .container -->
                </div><!-- #contact -->
                <!-- end:contact -->
            </div><!-- .block-section -->
            <!-- end:block-section -->
        </div><!-- .site-main -->
        <!-- end:site-main -->
        <Footer/>
    </div>
</template>

<script>
    import Navbar from "../layouts/Navbar";
    import Footer from "../layouts/Footer";
    import InformationsContact from "./inc/InformationsContact";
    export default {
        name: "Contact",
        components: {InformationsContact, Navbar, Footer, InformationsContact}
    }
</script>

<style scoped>

</style>
