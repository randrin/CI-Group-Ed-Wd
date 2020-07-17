<template>
    <div>
        <vue-progress-bar />
        <Navbar/>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h2 class="text-center padd-20-btm padd-60-top groupEdWd-red-color">Modification Mot de Passe</h2>
                    <form @keydown="form.onKeydown($event)" @submit.prevent="changePassword" class="contact-form">
                        <div class="form-group padd-20-btm">
                            <label for="old_password">Mot de Passe Actuel <span
                                    class="groupEdWd-required">*</span></label>
                            <input
                                    :type="passwordType"
                                    class="form-control form-bordered"
                                    id="old_password" name="old_password"
                                    placeholder="Insèrez votre mot de passe actuel"
                                    v-model="form.old_password">
                            <div @click="showRidePwd" class="groupEdWd-container-show-ride-pwd">
                                <i :class="getPasswordIcon()"></i>
                            </div>
                            <has-error :form="form" field="old_password"/>
                        </div>
                        <div class="form-group padd-20-btm">
                            <label for="password">Nouveau Mot de Passe <span
                                    class="groupEdWd-required">*</span></label>
                            <input
                                    :type="password_confirmationType"
                                    class="form-control form-bordered"
                                    id="password"
                                    name="password"
                                    placeholder="Insèrez votre nouveau mot de passe"
                                    v-model="form.password">
                            <div @click="showRideConfirmationPwd" class="groupEdWd-container-show-ride-pwd">
                                <i :class="getConfirmationPasswordIcon()"></i>
                            </div>
                            <has-error :form="form" field="password"/>
                        </div>
                        <div class="form-group padd-20-btm">
                            <label for="password_confirmation">Confirmation Mot de Passe <span
                                    class="groupEdWd-required">*</span></label>
                            <input
                                    :type="password_confirmationType"
                                    class="form-control form-bordered"
                                    id="password_confirmation"
                                    name="password_confirmation"
                                    placeholder="Confirmez votre mot de passe"
                                    v-model="form.password_confirmation">
                            <div @click="showRideConfirmationPwd" class="groupEdWd-container-show-ride-pwd">
                                <i :class="getConfirmationPasswordIcon()"></i>
                            </div>
                            <has-error :form="form" field="password_confirmation"/>
                        </div>
                        <div class="form-group padd-40-btm">
                            <button type="submit" :disabled="!checkValidation" class="btn btn-lg btn-warning">
                                <span class="font-weight-bold">Modifier</span>
                                <i class="fa fa-long-arrow-right"></i>
                            </button>
                        </div>
                    </form>
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
        name: "ChangePassword",
        components: {Footer, Navbar},
        data() {
            return {
                form: new Form({
                    old_password: '',
                    password: '',
                    password_confirmation: ''
                }),
                errors: [],
                passwordType: 'password',
                password_confirmationType: 'password'
            }
        },
        computed: {
            checkValidation() {
                return (this.form.old_password && this.form.password && this.form.password_confirmation) ? true : false;
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
            changePassword() {
                axios.post('/change_password', this.form)
                    .then((res) => {
                        console.log('response: ', res);
                        //Insertion de l'alert !
                        var notify = $.notify('<strong>Please wait a moment</strong> ...', {
                            allow_dismiss: false,
                            showProgressbar: true,
                            animate: {
                                enter: 'animated bounceInDown',
                                exit: 'animated bounceOutUp'
                            },
                        });
                        setTimeout(function () {
                            notify.update({
                                'type': 'success',
                                'message': '<strong>Password updated successfully.</strong>',
                                'progress': 75
                            });
                        }, 2000);
                        //Fin insertion de l'alert !

                        this.form.reset();
                    }).catch((error) => {
                    this.errors = error.response.data;
                    console.log(this.errors);
                    toastr.error('', 'Passwords Incorrects.');
                })
            },
        }
    }
</script>

<style scoped>

</style>
