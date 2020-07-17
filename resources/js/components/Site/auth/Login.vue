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
                        <h3 class="text-center padd-20-btm padd-60-top groupEdWd-red-color">Bienvenue sur la Page de
                            Login</h3>
                        <form @submit.prevent="login()" @keydown="form.onKeydown($event)" class="contact-form">
                            <div class="form-group padd-20-btm">
                                <label for="username">Identifiant <span class="groupEdWd-required">*</span></label>
                                <input type="text" v-model="form.username" name="username"
                                       placeholder="Votre Pseudo" class="form-control form-bordered"
                                       id="username">
                                <has-error :form="form" field="username"/>
                            </div>
                            <div class="form-group padd-20-btm">
                                <label for="password">Mot De Passe <span class="groupEdWd-required">*</span></label>
                                <input :type="passwordType" name="password" v-model="form.password"
                                       placeholder="Votre mot de passe" class="form-control form-bordered"
                                       id="password">
                                <div @click="showRidePwd" class="groupEdWd-container-show-ride-pwd">
                                    <i :class="getPasswordIcon()"></i>
                                </div>
                                <has-error :form="form" field="password"/>
                                <p class="text-right">
                                    <router-link :to="{ name: 'site.register' }">
                                        <span>J'ai oublié mon mot de passe</span>
                                    </router-link>
                                </p>
                            </div>
                            <div class="form-group padd-20-btm">
                                <button :disabled="!checkValidation || form.busy" class="btn btn-lg btn-warning"
                                        type="submit">
                                    <span class="font-weight-bold">Se Connecter</span>
                                    <i class="fa fa-long-arrow-right"></i>
                                </button>
                            </div>
                            <hr class="groupEdWd-line-divider"/>
                            <p class="text-center">Vous êtes nouveau sur le site?
                                <router-link :to="{ name: 'site.register' }">
                                    <span>Enregistrez-vous</span>
                                </router-link>
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
    import Footer from "../../../layouts/Site/Footer";
    import Navbar from "../../../layouts/Site/Navbar";

    export default {
        name: "Login",
        components: {Navbar, Footer},
        data() {
            document.title = `Se connecter | ${this.name_site}`;
            return {
                form: new Form({
                    username: '',
                    password: '',
                }),
                passwordType: 'password',
                errors: []
            };
        },
        computed: {
            checkValidation() {
                return (this.form.username && this.form.password) ? true : false;
            }
        },
        methods: {
            showRidePwd() {
                this.passwordType = (this.passwordType === 'password' ? 'text' : 'password');
                this.getPasswordIcon();
            },
            getPasswordIcon() {
                return (this.passwordType === 'password' ? 'fa fa-eye' : 'fa fa-eye-slash');
            },
            login() {
                this.$Progress.start();
                this.form.busy = true;
                this.form.post('/login')
                    .then((response) => {


                        setTimeout(function () {
                            let notify = $.notify('<strong>Please wait a moment...</strong> ...', {
                                allow_dismiss: false,
                                showProgressbar: true,
                                placement: {
                                    align: 'right'
                                }
                            });
                            notify.update({
                                'type': 'success',
                                'message': '<strong>Welcome back.</strong>',
                                'progress': 75
                            });
                            this.$router.push('/');
                            location.reload(); // Pour faire le refresh de la page, changer le javascript
                            //location.reload(true);
                        }, 2000);

                        this.$Progress.finish();
                    })
                    .catch((error) => {
                        this.$Progress.fail();
                        console.log(error.response);
                        toastr.error('The information is incorrect', '', {timeOut: 5000})
                    })
            }
        },
        created() {
            this.$Progress.start();
            this.$Progress.finish();
        }
    }
</script>

<style scoped>

</style>
