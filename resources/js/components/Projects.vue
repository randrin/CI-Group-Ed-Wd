<template>
    <div>
        <Navbar/>
            <!-- begin:main-title -->
            <div class="main-title block-section padd-100-top padd-100-btm bg-grey">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1 class="main-title-primary">Nos Projects</h1>
                            <h4 class="main-title-secondary">Tous nos projects de consultance</h4>
                        </div><!-- .col-## -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .main-title -->
            <!-- end:main-title -->

            <!-- begin:breadcrumb -->
            <div class="breadcrumbs">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <ol class="breadcrumb">
                                <li><a href="/">Accueil</a></li>
                                <li class="active">Projects</li>
                            </ol>
                        </div><!-- .col-md-12 -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .site-breadcrumb -->
            <!-- end:breadcrumb -->

        <!-- begin:site-main -->
        <div class="site-main">
            <!-- begin:content-section -->
            <div class="content-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="entry-content">
                                <ul class="work-filter">
                                    <li class="active" data-filter="*"><a href="#">All works</a></li>
                                    <li data-filter=".buildings"><a href="#buildings">Buildings</a></li>
                                    <li data-filter=".interior-design"><a href="#interior-design">Interior Design</a></li>
                                    <li data-filter=".isolation"><a href="#isolation">Isolation</a></li>
                                    <li data-filter=".house-renovation"><a href="#house-renovation">House Renovation</a></li>
                                </ul><!-- .work-filter -->

                                <ul class="work-grid">
                                    <li class="work-item buildings">
                                        <a href="assets/site/images/img-work-01.jpg" title="Avenue Hotels" class="image-lightbox">
                                            <div class="work-item-image">
                                                <img src="assets/site/images/img-work-01.jpg" alt="Avenue Hotels">
                                            </div><!-- .work-item-image -->
                                            <div class="work-item-info">
                                                <h4 class="work-item-title">Avenue Hotels</h4>
                                                <span class="work-item-desc">Buildings</span>
                                            </div><!-- .work-item-info -->
                                        </a>
                                    </li><!-- .work-item -->
                                    <li class="work-item interior-design">
                                        <a href="assets/site/images/img-work-02.jpg" title="Mark Bedroom" class="image-lightbox">
                                            <div class="work-item-image">
                                                <img src="assets/site/images/img-work-02.jpg" alt="Mark Bedroom">
                                            </div><!-- .work-item-image -->
                                            <div class="work-item-info">
                                                <h4 class="work-item-title">Mark Bedroom</h4>
                                                <span class="work-item-desc">Interior Design</span>
                                            </div><!-- .work-item-info -->
                                        </a>
                                    </li><!-- .work-item -->
                                    <li class="work-item buildings">
                                        <a href="assets/site/images/img-work-03.jpg" title="Edu Hostel" class="image-lightbox">
                                            <div class="work-item-image">
                                                <img src="assets/site/images/img-work-03.jpg" alt="Edu Hostel">
                                            </div><!-- .work-item-image -->
                                            <div class="work-item-info">
                                                <h4 class="work-item-title">Edu Hostel</h4>
                                                <span class="work-item-desc">Buildings</span>
                                            </div><!-- .work-item-info -->
                                        </a>
                                    </li><!-- .work-item -->
                                    <li class="work-item isolation house-renovation">
                                        <a href="assets/site/images/img-work-04.jpg" title="Alan Home" class="image-lightbox">
                                            <div class="work-item-image">
                                                <img src="assets/site/images/img-work-04.jpg" alt="Alan Home">
                                            </div><!-- .work-item-image -->
                                            <div class="work-item-info">
                                                <h4 class="work-item-title">Alan Home</h4>
                                                <span class="work-item-desc">Isolation</span>
                                            </div><!-- .work-item-info -->
                                        </a>
                                    </li><!-- .work-item -->
                                    <li class="work-item interior-design house-renovation">
                                        <a href="assets/site/images/img-work-05.jpg" title="Jannet Home" class="image-lightbox">
                                            <div class="work-item-image">
                                                <img src="assets/site/images/img-work-05.jpg" alt="Jannet Home">
                                            </div><!-- .work-item-image -->
                                            <div class="work-item-info">
                                                <h4 class="work-item-title">Jannet Home</h4>
                                                <span class="work-item-desc">House Renovation</span>
                                            </div><!-- .work-item-info -->
                                        </a>
                                    </li><!-- .work-item -->
                                    <li class="work-item design photography">
                                        <a href="assets/site/images/img-work-06.jpg" title="Papa Ron's Restaurant" class="image-lightbox">
                                            <div class="work-item-image">
                                                <img src="assets/site/images/img-work-06.jpg" alt="Papa Ron's Restaurant">
                                            </div><!-- .work-item-image -->
                                            <div class="work-item-info">
                                                <h4 class="work-item-title">Papa Ron's Restaurant</h4>
                                                <span class="work-item-desc">Interior Design</span>
                                            </div><!-- .work-item-info -->
                                        </a>
                                    </li><!-- .work-item -->
                                </ul><!-- .work-grid -->
                            </div><!-- .entry-content -->
                        </div><!-- .col-## -->
                    </div><!-- .row -->
                </div><!-- .container -->
            </div><!-- .content-section -->
            <!-- end:content-section -->
        </div><!-- .site-main -->
        <!-- end:site-main -->

        <Footer/>
    </div>
</template>

<script>
    import Navbar from "../layouts/Navbar";
    import Footer from "../layouts/Footer";

    export default {
        name: "Projects",
        components: {Navbar, Footer}
    }
</script>

<style scoped>

</style>
