<template>
    <div>
        <vue-progress-bar/>
        <Navbar/>
        <div class="contact block-section image-block bg-white" id="contact">
            <div class="container-fluid container-no-padding">
                <div class="row row-no-margin">
                    <div class="image-block-item col-md-5 col-sm-5 col-xs-12">
                        <img alt="bootstrap theme for construction companies"
                             class="img-responsive marg-20-btm marg-20-top"
                             src="/assets/site/images/img-logo-footer.png">
                    </div>
                </div>
            </div>
            <div class="container clear">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-10 col-xs-offset-1 padd-20-top padd-60-btm">
                        <h3 class="text-center padd-20-btm padd-60-top groupEdWd-red-color">Vous avez oublié votre mot
                            de passe ?</h3>
                        <p class="padd-20-btm padd-60-top">Saisissez l'adresse mail que vous nous avez indiquée lors de
                            votre inscription,
                            afin de recevoir un lien de réinitialisation de votre mot de passe. </p>
                        <form @submit.prevent="reset()" class="contact-form">
                            <div class="form-group padd-20-btm">
                                <label for="email">Adresse Email <span class="groupEdWd-required">*</span></label>
                                <input class="form-control form-bordered"
                                        id="email"
                                        name="email"
                                        placeholder="Insèrez votre courrier électronique"
                                        type="email"
                                        v-model="form.email">
                                <has-error :form="form" field="email"/>
                            </div>
                            <div class="form-group padd-20-btm">
                                <button :disabled="!checkValidation" class="btn btn-lg btn-warning" type="submit">
                                    <span class="font-weight-bold">Valider</span>
                                    <i class="fa fa-long-arrow-right"></i>
                                </button>
                            </div>
                            <hr class="groupEdWd-line-divider"/>
                            <p class="text-center">Vous vous souvenez de votre mot de Passe?
                                <router-link :to="{ name: 'site.login' }">
                                    <span>Connnectz vous</span>
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

    import Swal from "sweetalert2";
    export default {
        name: "ResetPassword",
        components: {Navbar, Footer},
        data() {
            return {
                form: new Form({
                    email: '',
                }),
                errors: []
            };
        },
        computed: {
            checkValidation() {
                return (this.form.email) ? true : false;
            }
        },
        methods: {
            loadData() {
                //
            },
            reset() {
                 this.$Progress.start();
                // Submit the form via a POST request
                this.form.busy = true;
                this.form.post('/password/email')
                .then(() => {
                    //Insertion de l'alert !
                      Swal.fire({
                        text: "We have emailed you the reset password link",
                        icon: 'success',
                        footer: '<a href="/login">You remember your password?</a>',
                        buttonsStyling: false,
                        confirmButtonClass: "btn btn-info",
                        confirmButtonText: 'Ok, understood',
                        reverseButtons: true,
                    });

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
