<template>
    <div>
        <vue-progress-bar />
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
                        <span>Map Localisation here</span>
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
                                <form @submit.prevent="contactItem()"  @keydown="form.onKeydown($event)" class="contact-form">
                                    <div class="text-center padd-20-btm">
                                        <h2 class="groupEdWd-red-color">Vous avez des questions pour vos futures
                                            rèalisations?</h2>
                                        <p>Contactez-nous à travers ce formulaire</p>
                                    </div>
                                    <div class="form-group padd-20-btm">
                                        <label for="name">Nom et Prènom <span
                                                class="groupEdWd-required">*</span></label>
                                        <input type="text"
                                               v-model="form.name"
                                               class="form-control form-bordered"
                                               name="name"
                                               placeholder="Insèrez votre nom complet"
                                               id="name">
                                           <has-error :form="form" class="groupEdWd-required" field="name"/>
                                    </div>
                                    <div class="row padd-20-btm">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="email" class="form-label">Addresse e-mail <span
                                                        class="groupEdWd-required">*</span></label>
                                                <input type="email"
                                                       v-model="form.email"
                                                       class="form-control form-bordered"
                                                       name="email"
                                                       placeholder="Insèrez votre courier électronique"
                                                       id="email">
                                                   <has-error :form="form" class="groupEdWd-required" field="email"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="phone" class="form-label">Numero de Télephone <span
                                                        class="groupEdWd-required">*</span></label>
                                                <input type="number"
                                                       v-model="form.phone"
                                                       class="form-control form-bordered"
                                                       name="phone"
                                                       placeholder="Insèrez votre numèro de télephone"
                                                       id="phone">
                                                <has-error :form="form" class="groupEdWd-required" field="phone"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group padd-20-btm">
                                        <label for="subject">Suject Message <span
                                                class="groupEdWd-required">*</span></label>
                                        <input type="text"
                                               v-model="form.subject"
                                               class="form-control form-bordered"
                                               name="subject"
                                               placeholder="Insèrez votre sujet de contact"
                                               id="subject">
                                        <has-error :form="form" class="groupEdWd-required" field="subject"/>
                                    </div>
                                    <div class="form-group padd-20-btm">
                                        <label for="message" class="form-label">Message <span
                                                class="groupEdWd-required">*</span></label>
                                        <textarea v-model="form.message"
                                                  class="form-control form-bordered"
                                                  rows="6"
                                                  name="message"
                                                  placeholder="Insèrez votre message"
                                                  id="message">
                                        </textarea>
                                        <has-error :form="form" class="groupEdWd-required" field="message"/>
                                    </div>
                                    <div class="form-group padd-20-btm">
                                        <button type="submit" :disabled="!checkValidation || form.busy"
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
            document.title = `Nous Contactez | ${this.name_site}`;
            return {
                form: new Form({
                    name: '',
                    subject: '',
                    message:'',
                    phone:'',
                    email:'',
                }),
            }
        },
        computed: {
            checkValidation() {
                return (this.form.name && this.form.subject &&
                    this.form.message &&
                    this.form.email) ? true : false;
            }
        },
        methods: {
            contactItem() {
                this.$Progress.start();
                // Submit the form via a POST request
                this.form.busy = true;
                this.form.post('/contact-us/send').then(() => {
                    //Insertion de l'alert !
                   toastr.success('Message envoyé correctement', '', {timeOut: 5000});
                    //Fin insertion de l'alert !

                    this.form.reset();
                    //End Progress bar

                    this.$Progress.finish();
                }).catch(() => {
                    //Failled message
                    this.$Progress.fail();
                    //Alert error
                   toastr.error('The information is incorrect', '', {timeOut: 5000});
                })
            },
             
        },
        created() {
            this.$Progress.start();
            this.$Progress.finish();
        }
    }
</script>

<style scoped>

</style>
