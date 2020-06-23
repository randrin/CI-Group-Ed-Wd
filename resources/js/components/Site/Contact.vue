<template>
    <div>
        <Navbar/>
        <div class="main-title block-section padd-100-top padd-100-btm bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="main-title-primary">Nous Contactez</h1>
                        <h4 class="main-title-secondary">Laissez nous un message ou appellez-nous.</h4>
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
                            <li class="active">Nous Contactez</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-main">
            <div class="block-section">
                <InformationsContact/>

                <div id="contact" class="contact block-section image-block bg-white">
                    <div class="container-fluid container-no-padding">
                        <div class="row row-no-margin">
                            <div class="image-block-item col-md-5 col-sm-5 col-xs-12">
                                <div class="map image-block-item-background image-block-item-map" data-lat="-7.866315"
                                     data-lng="110.389574"></div>
                            </div>
                        </div>
                    </div>

                    <div class="container clear">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-10 col-xs-offset-1 padd-20-top padd-60-btm">
                                <form @submit.prevent="contact" class="contact-form">
                                    <div class="text-center padd-20-btm">
                                        <h2 class="groupEdWd-red-color">Vous avez des questions pour vos futures rèalisations?</h2>
                                        <p>Contactez-nous à travers ce formulaire</p>
                                    </div>
                                    <div class="form-group padd-20-btm">
                                        <label for="contact_name">Nom et Prènom</label>
                                        <input type="text" v-model="form.contact_name"
                                               class="form-control form-bordered" name="contact_name"
                                               placeholder="Insèrez votre nom complet" id="contact_name">
                                    </div>
                                    <div class="row padd-20-btm">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contact_email" class="form-label">Addresse e-mail</label>
                                                <input type="email" v-model="form.contact_email"
                                                       class="form-control form-bordered"
                                                       name="contact_email"
                                                       placeholder="Insèrez votre courier électronique"
                                                       id="contact_email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="contact_phone" class="form-label">Numero de Télephone</label>
                                                <input type="number" v-model="form.contact_phone"
                                                       class="form-control form-bordered"
                                                       name="contact_phone"
                                                       placeholder="Insèrez votre numèro de télephone"
                                                       id="contact_phone">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group padd-20-btm">
                                        <label for="contact_subject">Suject Message</label>
                                        <input type="text" v-model="form.contact_subject"
                                               class="form-control form-bordered" name="contact_subject"
                                               placeholder="Insèrez votre sujet de contact" id="contact_subject">
                                    </div>
                                    <div class="form-group padd-20-btm">
                                        <label for="contact_message" class="form-label">Message</label>
                                        <textarea v-model="form.contact_message" class="form-control form-bordered"
                                                  rows="6" name="contact_message"
                                                  placeholder="Insèrez votre message" id="contact_message"></textarea>
                                    </div>
                                    <div class="form-group padd-20-btm">
                                        <button type="submit" :disabled="!checkValidation"
                                                class="btn btn-lg btn-warning">
                                            <span class="font-weight-bold">Envoyez</span>
                                            <i class="fa fa-long-arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Footer/>
    </div>
</template>

<script>
    import Navbar from "../../layouts/Site/Navbar";
    import Footer from "../../layouts/Site/Footer";
    import InformationsContact from "../Site/inc/InformationsContact";

    export default {
        name: "Contact",
        components: {InformationsContact, Navbar, Footer, InformationsContact},
        data() {
            return {
                form: {
                    contact_name: '',
                    contact_email: '',
                    contact_phone: '',
                    contact_subject: '',
                    contact_message: ''
                }
            }
        },
        computed: {
            checkValidation() {
                return (this.form.contact_name && this.form.contact_email &&
                    this.form.contact_phone && this.form.contact_subject &&
                    this.form.contact_message) ? true : false;
            }
        },
        methods: {
            contact() {

            }
        }
    }
</script>

<style scoped>

</style>
