<template>
    <div class="container-fluid featured-btn" data-aos="zoom-in">
        <div class="row">
            <div class="col">
                <a :href="href" target="_blank" class="m-auto d-block h2">
                    <div>
                        <slot />
                    </div>
                    <div class="arrow-circular"></div>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'FeaturedButton',
        props: {
            href: String
        }
    }
</script>

<style lang="sass" src="../../Sass/FeaturedButton.sass">
    .arrow-circular
        @include media-breakpoint-up(lg)
            background: url("../../Images/bitcointalk-icon.svg") no-repeat
</style>