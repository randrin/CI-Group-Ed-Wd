<template>
    <div>
        <vue-progress-bar/>
        <Navbar/>
        <div class="main-title block-section padd-100-top padd-100-btm bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="main-title-primary">Nos Faqs</h1>
                        <h4 class="main-title-secondary">Foire Aux Questions</h4>
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
                            <li class="active">Nos Faqs</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-main">
            <div class="content-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="entry-content">
                                <article class="blog-entry">
                                    <div class="blog-entry-content">
                                        <div class="section-title marg-20-top">
                                            <h3>Vous avez des questions?</h3>
                                        </div>
                                        <div class="panel-group" id="accordion" role="tablist"
                                             aria-multiselectable="true">
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                           href="#collapseOne" aria-expanded="true"
                                                           aria-controls="collapseOne">
                                                            Do you agree?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel"
                                                     aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                        But I must explain to you how all this mistaken idea of
                                                        denouncing pleasure and praising pain was born and I will give
                                                        you a complete account of the system, and expound the actual
                                                        teachings of the great explorer of the truth, the
                                                        master-builder. I am so happy, my dear friend, so absorbed in
                                                        the exquisite sense of mere tranquil existence, that I neglect
                                                        my talents. I should be incapable of drawing a single stroke at
                                                        the present moment; and yet I feel that I never was a greater
                                                        artist than now.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                           data-parent="#accordion" href="#collapseTwo"
                                                           aria-expanded="false" aria-controls="collapseTwo">
                                                            What we wanna do?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                        One morning, when Gregor Samsa woke from troubled dreams, he
                                                        found himself transformed in his bed into a horrible vermin. He
                                                        lay on his armour-like back, and if he lifted his head a little
                                                        he could see his brown belly. A wonderful serenity has taken
                                                        possession of my entire soul, like these sweet mornings of
                                                        spring which I enjoy with my whole heart. I am alone, and feel
                                                        the charm of existence in this spot, which was created for the
                                                        bliss of souls like mine.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion"
                                                           href="#collapseThree" aria-expanded="true"
                                                           aria-controls="collapseThree">
                                                            Do you agree?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                        But I must explain to you how all this mistaken idea of
                                                        denouncing pleasure and praising pain was born and I will give
                                                        you a complete account of the system, and expound the actual
                                                        teachings of the great explorer of the truth, the
                                                        master-builder. I am so happy, my dear friend, so absorbed in
                                                        the exquisite sense of mere tranquil existence, that I neglect
                                                        my talents. I should be incapable of drawing a single stroke at
                                                        the present moment; and yet I feel that I never was a greater
                                                        artist than now.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFour">
                                                    <h4 class="panel-title">
                                                        <a class="collapsed" role="button" data-toggle="collapse"
                                                           data-parent="#accordion" href="#collapseFour"
                                                           aria-expanded="false" aria-controls="collapseTwo">
                                                            What we wanna do?
                                                        </a>
                                                    </h4>
                                                </div>
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel"
                                                     aria-labelledby="headingFour">
                                                    <div class="panel-body">
                                                        One morning, when Gregor Samsa woke from troubled dreams, he
                                                        found himself transformed in his bed into a horrible vermin. He
                                                        lay on his armour-like back, and if he lifted his head a little
                                                        he could see his brown belly. A wonderful serenity has taken
                                                        possession of my entire soul, like these sweet mornings of
                                                        spring which I enjoy with my whole heart. I am alone, and feel
                                                        the charm of existence in this spot, which was created for the
                                                        bliss of souls like mine.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
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
    import Navbar from "../../../layouts/Site/Navbar";
    import Footer from "../../../layouts/Site/Footer";

    export default {
        name: "Faqs",
        components: { Navbar, Footer},
        data() {
            //
        },
        methods: {
            loadData() {
                //
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
