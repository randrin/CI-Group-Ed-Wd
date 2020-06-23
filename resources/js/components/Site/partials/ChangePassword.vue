<template>
    <div>
        <Navbar/>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h2 class="text-center padd-20-btm padd-60-top groupEdWd-red-color">Modification Mot de Passe</h2>
                    <form @submit.prevent="changePassword" class="contact-form">
                        <div class="form-group padd-20-btm">
                            <label for="old_password">Mot de Passe Actuel</label>
                            <input type="password" v-model="form.old_password" name="old_password" class="form-control form-bordered"
                                   placeholder="Insèrez votre mot de passe actuel" id="old_password">
                        </div>
                        <div class="form-group padd-20-btm">
                            <label for="password">Nouveau Mot de Passe</label>
                            <input type="password" v-model="form.password" name="password"
                                   class="form-control form-bordered" placeholder="Insèrez votre nouveau mot de passe"
                                   id="password">
                        </div>
                        <div class="form-group padd-20-btm">
                            <label for="password_confirmation">Confirmation Mot de Passe</label>
                            <input type="password" v-model="form.password_confirmation" name="password_confirmation"
                                   class="form-control form-bordered" placeholder="Confirmez votre mot de passe"
                                   id="password_confirmation">
                        </div>
                        <div class="form-group padd-20-btm">
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
                form: {
                    old_password: '',
                    password: '',
                    password_confirmation: ''
                },
                errors: []
            }
        },
        computed: {
            checkValidation() {
                return (this.form.old_password && this.form.password && this.form.password_confirmation) ? true : false;
            }
        },
        methods: {
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
                        setTimeout(function() {
                            notify.update({'type': 'success', 'message': '<strong>Password updated successfully.</strong>', 'progress': 75});
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
