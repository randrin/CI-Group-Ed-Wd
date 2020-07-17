<template>
    <div class="header-navbar" data-parallax="scroll">
        <div id="topbar" class="topbar topbar-page">
            <div class="container">
                <div class="row margin-row padd-20-top padd-20-btm">
                    <div class="col-sm-6">
                        <div class="nav-utility">
                            <span class="nav-item">Nous sommes à votre écoute pour votre rêve de construction</span>
                        </div>
                    </div>
                    <div class="col-sm-3 hidden-xs">
                        <div class="nav-utility nav-right">
                            <a href="#" class="nav-item"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="nav-item"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="nav-item"><i class="fa fa-linkedin"></i></a>
                            <a href="mailto:groupEdWd-assistance@gmail.com" class="nav-item"><i class="fa fa-envelope-o"></i></a>
                        </div>
                    </div>
                    <div class="col-sm-3 hidden-xs">
                        <div class="nav-utility nav-right">
                            <div class="dropdown" v-if="userConnected">
                                <div class="groupEdWd-button button">
                                    <i class="fa fa-user-circle"></i>
                                    <span>{{username}}</span>
                                </div>
                                <div class="dropdown-content">
                                    <router-link :to="{name: 'dashboard.index' }">
                                        <i class="fa fa-dashboard groupEdWd-dropdown-icon"></i>
                                        <span class="groupEdWd-dropdown-link">Dashboard</span>
                                    </router-link>
                                    <a href="#">
                                        <i class="fa fa-user-circle groupEdWd-dropdown-icon"></i>
                                        <span class="groupEdWd-dropdown-link">Mon Profil</span>
                                    </a>
                                    <a href="#">Link 3</a>
                                    <a href="/user/logout">
                                        <i class="fa fa-sign-out groupEdWd-dropdown-icon"></i>
                                        <span class="groupEdWd-dropdown-link">Se Déconnecter</span>
                                    </a>
                                </div>
                            </div>
                            <router-link :to="{name: 'site.login' }" v-else class="button button-navbar">
                                <i class="fa fa-user-circle"></i>
                                <span>Zone Privée</span>
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-header-affix-wrapper">
            <header id="masthead" class="site-header header-dark" role="banner">
                <div class="container">
                    <div class="row margin-row">
                        <div class="col-sm-3">
                            <div class="site-branding">
                                <h1 class="site-title title-image">
                                    <a href="/" rel="home">
                                        <img src="/assets/site/images/img-logo.png" alt="construction business"
                                             class="img-responsive">
                                    </a>
                                </h1>
                            </div>
                        </div>

                        <div class="col-sm-9">
                            <nav id="site-navigation" class="main-navigation" role="navigation">
                                <button class="menu-toggle" type="button" aria-controls="primary-menu"
                                        aria-expanded="false">
                                    <span class="pe-7s-menu"></span><span class="sr-only">Primary Menu</span>
                                </button>
                                <div class="menu-testing-menu-container">
                                    <ul id="primary-menu" class="menu nav-menu" aria-expanded="false">
                                        <li class="menu-item current-menu-item"><a href="/">Accueil</a></li>
                                        <li class="menu-item">
                                            <a href="/about">
                                                <span>A' Propos</span>
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-has-children" aria-haspopup="true">
                                            <a href="/nos-services">
                                                <span>Nos Services</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item current-menu-item"><a href="service.html">Tous nos
                                                    Services</a></li>
                                                <li class="menu-item"><a href="service-item.html">Construction
                                                    Consultant</a></li>
                                                <li class="menu-item"><a href="service-item.html">General
                                                    Contracting</a></li>
                                                <li class="menu-item"><a href="service-item.html">House Renovation</a>
                                                </li>
                                                <li class="menu-item"><a href="service-item.html">Construction
                                                    Management</a></li>
                                                <li class="menu-item"><a href="service-item.html">Design and Build</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item">
                                            <a href="/nos-projects">
                                                <span>Nos Projects</span>
                                            </a>
                                        </li>
                                        <!--<li class="menu-item menu-item-has-children" aria-haspopup="true">
                                            <a href="#">Features</a>
                                            <ul class="sub-menu">
                                                <li class="menu-item"><a href="single.html">Single Post</a></li>
                                                <li class="menu-item"><a href="single-fullwidth.html">Single Post Full Width</a></li>
                                                <li class="menu-item"><a href="page-fullwidth.html">Page Full Width</a></li>
                                                <li class="menu-item"><a href="page-sidebar.html">Page With Sidebar</a></li>
                                                <li class="menu-item menu-item-has-children" aria-haspopup="true"><a href="#">Shortcodes</a>
                                                    <ul class="sub-menu">
                                                        <li class="menu-item"><a href="alert.html">Alert</a></li>
                                                        <li class="menu-item"><a href="progress.html">Progress Bar</a></li>
                                                        <li class="menu-item"><a href="social.html">Social Icon</a></li>
                                                        <li class="menu-item"><a href="button.html">Button &amp; Label</a></li>
                                                        <li class="menu-item"><a href="accordion.html">Accordion</a></li>
                                                        <li class="menu-item"><a href="tab.html">Tabs</a></li>
                                                        <li class="menu-item"><a href="pricing.html">Pricing</a></li>
                                                    </ul>
                                                </li>
                                                <li class="menu-item"><a href="typography.html">Typography</a></li>
                                                <li class="menu-item"><a href="404.html">Not Found</a></li>
                                                <li class="menu-item"><a href="comingsoon.html">Comingsoon</a></li>
                                            </ul>
                                        </li>-->
                                        <!--<li class="menu-item"><a href="blog.html">Blog</a></li>-->
                                        <li class="menu-item">
                                            <a href="/contact-us">
                                                <span>Nous Contactez</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Navbar",
        data() {
            return {
                userConnected: false,
                username: '',
            }
        },
        created() {
            this.getInfosUserConnected();
        },
        methods: {
            getInfosUserConnected() {
                if (window.user.user !== null) {
                    this.username = window.user.user.username;
                    this.userConnected = this.username !== null ? true : false;
                }
            }
        }
    }
</script>

<style scoped>
.button.button-navbar {
    color: #fff !important;
    border-color: #ffa800 !important;
    background-color: #ffa800 !important;
}
</style>
