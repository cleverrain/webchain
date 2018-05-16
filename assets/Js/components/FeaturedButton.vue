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
    @import ~bootstrap/scss/functions
    @import ~bootstrap/scss/mixins/breakpoints
    @import ../../Sass/variables
    
    
    .featured-btn
        margin: 5em auto
        font-size: 1vw
        
        @include media-breakpoint-up(xxl)
            font-size: 0.8em
        @include media-breakpoint-down(sm)
            font-size: 2vw
        
        a
            width: 80%
            color: $color-background !important
            
            @include media-breakpoint-up(md)
                width: 60%
            
            div:first-of-type
                display: flex
                align-items: center
                justify-content: center
                text-align: center
                background-color: $color-title
                border-radius: 6px
                width: 100%
                float: left
                transition: background-color .3s ease-in-out
                padding: 0.4em
                
                @include media-breakpoint-up(lg)
                    white-space: nowrap
                    padding-right: 3em
                    border-radius: 100px
                    border-bottom-left-radius: 20px
                    border-top-left-radius: 20px
            
            .arrow-circular
                display: none
            
                @include media-breakpoint-up(lg)
                    display: block
                    background: url("../../Images/bitcointalk-icon.svg") no-repeat
                    background-size: 100% 100%
                    border-radius: 100%
                    width: 3em
                    height: 3em
                    position: absolute
                    right: 19%
                    transform: translateY(-20%)
            
            &:hover
                div:not(.arrow-circular)
                    background-color: $color-light-hover
</style>