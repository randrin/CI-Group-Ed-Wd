<template>
    <div>
         <vue-progress-bar />
        <Navbar/>
        <div id="contact" class="contact block-section image-block bg-white">
            <div class="container-fluid container-no-padding">
                <div class="row row-no-margin">
                    <div class="image-block-item col-md-5 col-sm-5 col-xs-12">
                        <img src="/assets/site/images/img-logo-footer.png"
                             alt="bootstrap theme for construction companies"
                             class="img-responsive marg-20-btm marg-20-top">
                    </div>
                </div>
            </div>

            <div class="container clear">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-10 col-xs-offset-1 padd-20-top padd-60-btm">
                        <h3 class="text-center padd-20-btm padd-60-top groupEdWd-red-color">Bienvenue sur la Page de Registration</h3>
                        <form @submit.prevent="register()"  @keydown="form.onKeydown($event)" class="contact-form">
                            <div class="form-group padd-20-btm">
                                <label for="name">Nom et Prènom <span class="groupEdWd-required">*</span></label>
                                <input type="text" v-model="form.name" name="name" class="form-control form-bordered"
                                       placeholder="Insèrez votre nom complet" id="name">
                              <has-error :form="form" field="name"/>
                            </div>
                            <div class="form-group padd-20-btm">
                                <label for="username">Username <span class="groupEdWd-required">*</span></label>
                                <input type="text" v-model="form.username" name="username"
                                       class="form-control form-bordered" placeholder="Insèrez votre Pseudo"
                                       id="username">
                               <has-error :form="form" field="username"/>
                            </div>
                            <div class="form-group padd-20-btm">
                                <label for="email">Adresse Email <span class="groupEdWd-required">*</span></label>
                                <input type="text" v-model="form.email" name="email" class="form-control form-bordered"
                                       placeholder="Insèrez votre courrier électronique" id="email">
                              <has-error :form="form" field="email"/>
                            </div>
                            <div class="form-group padd-20-btm">
                                <label for="password">Mot De Passe <span class="groupEdWd-required">*</span></label>
                                <input type="password" v-model="form.password" name="password"
                                       class="form-control form-bordered" placeholder="Insèrez votre mot de passe"
                                       id="password">
                              <has-error :form="form" field="password"/>
                            </div>
                            <div class="form-group padd-20-btm">
                                <label for="password_confirmation">Confirmation Mot De Passe <span class="groupEdWd-required">*</span></label>
                                <input type="password" v-model="form.password_confirmation" name="password_confirmation"
                                       class="form-control form-bordered" placeholder="Confirmez votre mot de passe"
                                       id="password_confirmation">
                              <has-error :form="form" field="password_confirmation"/>
                            </div>
                            <div class="form-group padd-20-btm">
                                <button type="submit" :disabled="!checkValidation || form.busy" class="btn btn-lg btn-warning">
                                    <span class="font-weight-bold">S' Enregistrer</span>
                                    <i class="fa fa-long-arrow-right"></i>
                                </button>
                            </div>
                            <hr class="groupEdWd-line-divider"/>
                            <p class="text-center">Vous avez déjà un compte sur le site?
                                <router-link :to="{ name: 'site.login' }"><span>Connectez-vous</span></router-link>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <Footer/>
    </div>
</template>

<script>
    import Navbar from "../../../layouts/Site/Navbar";
    import Footer from "../../../layouts/Site/Footer";

    export default {
        name: "Registration",
        components: {Footer, Navbar},
        data() {
           document.title = `Inscription | ${this.name_site}`;
            return {
                 form: new Form({
                   name: '',
                    username: '',
                    email: '',
                    password: '',
                    password_confirmation: ''
                }),
            }
        },
        computed: {
            checkValidation() {
                return (this.form.name && this.form.username && this.form.email
                    && this.form.password && this.form.password_confirmation) ? true : false;
            }
        },
        methods: {
            register() {
                this.$Progress.start();
                this.form.busy = true;
                // Submit the form via a POST request
                this.form.post('register')
                    .then((response) => {
                        console.log(response)
                    }).catch((error) => {
                    //Failled message
                    this.$Progress.fail();
                    console.log(error.response)
                    $.notify("Ooop! Something wrong. Try later", {
                        type: 'danger',
                        animate: {
                            enter: 'animated bounceInDown',
                            exit: 'animated bounceOutUp'
                        }
                    });
                })
            }
        }
    }
</script>

<style scoped>

</style>
