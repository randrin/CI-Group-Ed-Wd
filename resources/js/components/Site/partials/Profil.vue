<template>
    <div>
        <vue-progress-bar/>
        <Navbar/>
        <div>
            <a href="single.html" class="popular-entry-thumbnail">
                <img src="assets/img/img-blog-02.jpg" alt="Make your own library corner in your home">
            </a>
            <span class="popular-entry-title">
                        <a href="single.html" rel="bookmark" class="popular-entry-title-link">Make your own library corner in your home</a>
                        <span class="popular-entry-date">July 23, 2016</span>
                      </span>
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
                user: {},
                errors: []
            }
        },
        methods: {
            loadData() {
                //console.log($route.params.username)
                axios.get('/profil/randrino17')
                    .then((response) => {
                        this.user = response.data;
                        console.log('User: ', response);
                    })
                    .catch((error) => {
                        this.errors = error.response.data;
                    })
            }
        }
        ,
        created() {
            this.$Progress.start();
            this.loadData();
            this.$Progress.finish();
        }
    }
</script>

<style scoped>

</style>
