<template>
    <div>
        <Navbar />
        <div id="contact" class="contact block-section image-block bg-white">
            <div class="container-fluid container-no-padding">
                <div class="row row-no-margin">
                    <div class="image-block-item col-md-5 col-sm-5 col-xs-12">
                        <img src="/assets/site/images/img-logo-footer.png" alt="bootstrap theme for construction companies" class="img-responsive marg-20-btm marg-20-top">
                    </div>
                </div>
            </div>

            <div class="container clear">
                <div class="row">
                    <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-10 col-xs-offset-1 padd-20-top padd-60-btm">
                        <h3 class="text-center padd-20-btm padd-60-top">Bienvenue sur la Page de Registration</h3>
                        <form @submit.prevent="login" class="contact-form">
                            <div class="form-group padd-20-btm">
                                <label for="name">Nom et Prènom</label>
                                <input type="text" v-model="form.name" name="name" class="form-control form-bordered" id="name">
                            </div>
                            <div class="form-group padd-20-btm">
                                <label for="username">Username</label>
                                <input type="text" v-model="form.username" name="username" class="form-control form-bordered" id="username">
                            </div>
                            <div class="form-group padd-20-btm">
                                <label for="email">Adresse Email</label>
                                <input type="text" v-model="form.email" name="email" class="form-control form-bordered" id="email">
                            </div>
                            <div class="form-group padd-20-btm">
                                <label for="password">Mot De Passe</label>
                                <input type="password" v-model="form.password" name="password" class="form-control form-bordered" id="password">
                            </div>
                            <div class="form-group padd-20-btm">
                                <label for="password_confirmation">Confirmation Mot De Passe</label>
                                <input type="password" v-model="form.password" name="password_confirmation" class="form-control form-bordered" id="password_confirmation">
                            </div>
                            <button type="submit" class="button btn-square btn-block">Submit</button>
                            <hr class="groupEdWd-line-divider"/>
                            <p>Vous avez déjà un compte sur le site? <router-link :to="{ name: 'site.login' }"><span>Connectez-vous</span></router-link></p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <Footer />
    </div>
</template>

<script>
    import Navbar from "../../../layouts/Site/Navbar";
    import Footer from "../../../layouts/Site/Footer";
    export default {
        name: "Registration",
        components: {Footer, Navbar},
        data() {
            return {
                form: {
                    name: '',
                    username: '',
                    email: '',
                    password: '',
                    password_confirmation: ''
                }
            }
        }
    }
</script>

<style scoped>

</style>
