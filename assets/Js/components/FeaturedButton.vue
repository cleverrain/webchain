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

<style lang="sass">
    $circle-img: "../../Images/bitcointalk-icon.svg"
    @import "../../Sass/FeaturedButton"
</style>