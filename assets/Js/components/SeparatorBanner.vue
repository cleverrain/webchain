<template>
    <div class="separator-banner w-100">
        <div class="mx-auto text-center">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'SeparatorBanner'
    }
</script>

<style lang="sass">
    @import ~bootstrap/scss/functions
    @import ~bootstrap/scss/variables
    @import ~bootstrap/scss/mixins/breakpoints
    @import ../../Sass/variables
    
    .separator-banner > div
            color: $color-background
            background-color: $color-black-bg
            width: 90%
            position: relative
            font-size: 1.2em
            padding: 2.5% 3%
            margin-top: -6%
        
            @include media-breakpoint-up(md)
                margin-top: -8%
                width: 62%
            @include media-breakpoint-up(xxl)
                margin-top: -5%
            @include media-breakpoint-down(sm)
                margin-top: -10%
            @include media-breakpoint-down(xs)
                margin-top: -12%
            @media screen and (max-width: 400px)
                margin-top: -20%
</style>