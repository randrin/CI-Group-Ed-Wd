<template>
    <div class="block-section bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-11">
                    <div class="header-caption">
                        <h2 class="caption-title text-secondary-bold">We're preparing for launch.</h2>
                        <h6>We'll be launching our new site in the coming weeks. Hit the form below to get notified as we launch. Thanks for your interest!.</h6>
                        <form class="subscribe-form">
                            <div class="input-group input-group-lg">
                                <input type="text" class="form-control" placeholder="Enter Email Address">
                                <span class="input-group-btn">
                        <button class="btn btn-theme" type="button">Subscribe</button>
                      </span>
                            </div>
                        </form>
                        <p><small>*We won't share your email with third parties.</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Subscribe"
    }
</script>

<style scoped>
    .header-caption {
        padding: 40px 0;
        color: inherit;
    }
</style>
