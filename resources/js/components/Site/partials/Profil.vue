<template>
    <div>
        <vue-progress-bar/>
        <Navbar/>
        <div class="container" v-if="!loadingData">
            <div class="row text-center padd-100-top padd-100-btm">
                <span class="font-weight-bold groupEdWd-red-color">Loading ....</span>
            </div>
        </div>
        <div class="container" v-else>
            <h2 class="text-center font-weight-bold groupEdWd-red-color padd-100-top padd-100-btm">Bienvenue sur votre
                Profil</h2>
            <div class="row">
                <div class="col-md-4 text-center padd-20-top padd-20-btm">
                    <img :alt="user.name" :src="user.avatar" class="groupEdWd-profil-img">
                    <span class="popular-entry-title">
                        <h3 class="font-weight-bold">{{user.name}}</h3>
                        <span class="popular-entry-date">Membre depuis {{user.created_at | formatDate}}</span>
                      </span>
                </div>
                <div class="col-md-8">
                    <div class="entry-content">
                        <article class="blog-entry">
                            <div class="blog-entry-content">
                                <ul class="nav nav-tabs nav-justified" id="secondTab"
                                    role="tablist">
                                    <li class="active" role="presentation">
                                        <a aria-controls="first" aria-expanded="true" data-toggle="tab" href="#first"
                                           id="first-tab" role="tab"><i class="fa fa-user-circle"></i>
                                            Mes Informations Personnelles</a>
                                    </li>
                                    <li class="" role="presentation">
                                        <a aria-controls="second" aria-expanded="false" data-toggle="tab"
                                           href="#second" id="second-tab"
                                           role="tab"><i class="fa fa-address-card"></i> Mon Adresse de
                                            Domicile</a>
                                    </li>
                                </ul>
                                <div class="tab-content" id="mySecondContent">
                                    <div aria-labelledby="first-tab" class="tab-pane fade active in" id="first"
                                         role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="form-group padd-20-btm">
                                                    <label for="sex">Civilité</label>
                                                    <input :value="user.sex === 'Male' ? 'Je suis un Homme' : 'Je suis une Femme'"
                                                           class="form-control form-bordered" disabled
                                                           id="sex"
                                                           name="sex"
                                                           type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <div class="form-group padd-20-btm">
                                                    <label for="username">Mon Pseudo</label>
                                                    <input :value="user.username" class="form-control form-bordered"
                                                           disabled
                                                           id="username" name="username" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group padd-20-btm">
                                                    <label for="name">Nom et Prènom</label>
                                                    <input :value="user.name" class="form-control form-bordered"
                                                           disabled
                                                           id="name" name="name" type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="email">Mon Adresse E-mail</label>
                                                    <input :value="user.email" class="form-control form-bordered"
                                                           disabled
                                                           id="email" name="email" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="phone">Mon Numéro De Télephone</label>
                                                    <input :value="user.phone" class="form-control form-bordered"
                                                           disabled
                                                           id="phone" name="phone" type="text">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div aria-labelledby="second-tab" class="tab-pane fade" id="second"
                                         role="tabpanel">
                                        <p>One morning, when Gregor Samsa woke from troubled dreams,
                                            he found himself transformed in his bed into a horrible
                                            vermin. He lay on his armour-like back, and if he lifted
                                            his head a little he could see his brown belly. A
                                            wonderful serenity has taken possession of my entire
                                            soul, like these sweet mornings of spring which I enjoy
                                            with my whole heart. I am alone, and feel the charm of
                                            existence in this spot, which was created for the bliss
                                            of souls like mine.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="row groupEdWd-profil-section marg-40-btm">
                <div class="col-md-7 padd-20-btm">
                    <h3>Mon Mot de Passe</h3>
                    <span>Sur cette section, vous pouvez voir votre mot de passe ou le modifier.</span>
                </div>
                <div class="col-md-3 padd-40-top padd-20-btm">
                    <span v-if="showPasswordText"> Votre Mot de passe est: {{userPassword}}</span>
                    <button @click="showPassword" class="btn btn-success"><i :class="iconPassword"></i> Voir le Mot de
                        Passe
                    </button>
                </div>
                <div class="col-md-2 padd-40-top padd-20-btm">
                    <a class="btn btn-success" href="/change/password"><i class="fa fa-pencil"></i> Modifier</a>
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
        name: "Profil",
        components: {Navbar, Footer},
        data() {
            return {
                loadingData: false,
                showPasswordText: false,
                iconPassword: 'fa fa-eye',
                messagePassword: '',
                userPassword: '',
                user: {},
                errors: []
            }
        },
        methods: {
            loadData() {
                let username = this.$route.params.username;
                axios.get('/profil/' + username)
                    .then((response) => {
                        this.user = response.data;
                        this.loadingData = true;
                    })
                    .catch((error) => {
                        this.errors = error.response.data;
                    })
            },
            getIconPassword() {
                console.log(this.iconPassword);
                this.iconPassword == 'fa fa-eye' ? this.iconPassword == 'fa fa-eye-slash' : this.iconPassword == 'fa fa-eye';
            },
            showPassword() {
                console.log('showPassword');
                this.getIconPassword();
                this.showPasswordText = !this.showPasswordText;
                this.userPassword = this.$aes.decrypt(this.user.password);
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
