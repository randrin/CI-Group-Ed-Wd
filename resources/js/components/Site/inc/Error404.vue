<template>
    <div>
        <Navbar/>
        <div class="main-title block-section padd-100-top padd-100-btm bg-grey">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="main-title-primary groupEdWd-red-color">404</h1>
                        <h1 class="main-title-primary groupEdWd-red-color">Page non Trouvée</h1>
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
                            <li class="active">Page non Trouvée</li>
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
                                        <div class="row">
                                            <div class="col-md-8 col-md-offset-2 text-center">
                                                <h5 class="text-upper">OOPS! THAT PAGE CAN’T BE FOUND.</h5>
                                                <p>It looks like nothing was found at this location. Maybe try one of
                                                    the links below or a one of another keyword to search.</p>
                                                <form class="search-form">
                                                    <div class="form-group">
                                                        <label for="search" class="sr-only">Search</label>
                                                        <input class="form-control search-field" id="search" type="text"
                                                               placeholder="Search...">
                                                    </div>
                                                    <button type="submit" class="btn btn-default search-submit"><i
                                                            class="fa fa-search"></i></button>
                                                </form>

                                                <section class="widget widget_tag_cloud">
                                                    <h2 class="widget-title"><span>Tags</span></h2>
                                                    <div class="tagcloud">
                                                        <a href="#">design <span>52</span></a> <a href="#">interior
                                                        <span>86</span></a>
                                                        <a href="#">thoughts <span>13</span></a> <a href="#">inspiring
                                                        <span>7</span></a>
                                                        <a href="#">tips <span>64</span></a> <a href="#">dowork
                                                        <span>9</span></a>
                                                    </div>
                                                </section>
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
        name: "Error404",
        components: {Footer, Navbar}
    }
</script>

<style scoped>

</style>
