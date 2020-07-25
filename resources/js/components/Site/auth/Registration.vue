<template>
    <div>
        <vue-progress-bar/>
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
                                <has-error :form="form" class="groupEdWd-required" field="name"/>
                            </div>
                            <div class="form-group padd-20-btm">
                                <label for="username">Username <span class="groupEdWd-required">*</span></label>
                                <input type="text" v-model="form.username" name="username"
                                       class="form-control form-bordered" placeholder="Insèrez votre Pseudo"
                                       id="username">
                                <has-error :form="form" class="groupEdWd-required" field="username"/>
                            </div>
                            <div class="form-group padd-20-btm">
                                <label for="email">Adresse Email <span class="groupEdWd-required">*</span></label>
                                <input type="text" v-model="form.email" name="email" class="form-control form-bordered"
                                       placeholder="Insèrez votre courrier électronique" id="email">
                                <has-error :form="form" class="groupEdWd-required" field="email"/>
                            </div>
                            <div class="form-group padd-20-btm">
                                <label for="password">Mot De Passe <span class="groupEdWd-required">*</span></label>
                                <input :type="passwordType" name="password" v-model="form.password"
                                       class="form-control form-bordered" placeholder="Insèrez votre mot de passe"
                                       id="password">
                                <div @click="showRidePwd" class="groupEdWd-container-show-ride-pwd">
                                    <i :class="getPasswordIcon()"></i>
                                </div>
                                <has-error :form="form" class="groupEdWd-required" field="password"/>
                            </div>
                            <div class="form-group padd-20-btm">
                                <label for="password_confirmation">Confirmation Mot De Passe <span class="groupEdWd-required">*</span></label>
                                <input :type="password_confirmationType" name="password_confirmation"
                                       v-model="form.password_confirmation"
                                       class="form-control form-bordered" placeholder="Confirmez votre mot de passe"
                                       id="password_confirmation">
                                <div @click="showRideConfirmationPwd" class="groupEdWd-container-show-ride-pwd">
                                    <i :class="getConfirmationPasswordIcon()"></i>
                                </div>
                                <has-error :form="form" class="groupEdWd-required" field="password_confirmation"/>
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

    import Swal from "sweetalert2";
    export default {
        name: "Registration",
        components: {Footer, Navbar},
        data() {
            document.title = `${this.name_site} Inscription | ${this.name_site}`;
            return {
                form: new Form({
                    name: '',
                    username: '',
                    email: '',
                    password: '',
                    password_confirmation: ''
                }),
                passwordType: 'password',
                password_confirmationType: 'password'
            }
        },
        computed: {
            checkValidation() {
                return (this.form.name && this.form.username && this.form.email
                    && this.form.password && this.form.password_confirmation) ? true : false;
            }
        },
        methods: {
            showRidePwd() {
                this.passwordType = (this.passwordType === 'password' ? 'text' : 'password');
                this.getPasswordIcon();
            },
            showRideConfirmationPwd() {
                this.password_confirmationType = (this.password_confirmationType === 'password' ? 'text' : 'password');
                this.getConfirmationPasswordIcon();
            },
            getPasswordIcon() {
                return (this.passwordType === 'password' ? 'fa fa-eye' : 'fa fa-eye-slash');
            },
            getConfirmationPasswordIcon() {
                return (this.password_confirmationType === 'password' ? 'fa fa-eye' : 'fa fa-eye-slash');
            },
            register() {
                this.$Progress.start();
                this.form.busy = true;
                this.form.post('register')
                    .then((response) => {

                       Swal.fire({
                            title: "Bien joué",
                            text: "Votre compte à bien été crée veillz verifier votre boite mail pour confirmer votre compte",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonClass: "btn btn-success",
                            confirmButtonText: 'Compris !',
                            showCancelButton: false,
                        });

                    this.$router.push('/');

                    this.form.reset();
                    //End Progress bar
                    this.$Progress.finish();

                    }).catch((error) => {
                    this.$Progress.fail();
                    console.log(error.response);
                     toastr.error('The information is incorrect', '', {timeOut: 5000});
                })
            }
        }
    }
</script>

<style scoped>

</style>
