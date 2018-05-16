<template>
    <div class="container-fluid division py-1">
        <div class="row" :class="{ 'reversed': isReversed }">
            <div class="d-flex align-items-end justify-content-lg-center justify-content-xl-start">
                <h2>
                    <slot name="title"></slot>
                </h2>
            </div>
            <div class="d-flex align-items-xl-start align-items-lg-center justify-content-lg-start">
                <span>
                    <slot name="content"></slot>
                </span>
            </div>
            <div class="d-none d-md-flex align-items-center justify-content-center">
                <slot name="image"></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Division',
        props: {
            isReversed: {
                type: Boolean
            }
        }
    }
</script>

<style lang="sass">
    @import "~bootstrap/scss/functions"
    @import "~bootstrap/scss/variables"
    @import "~bootstrap/scss/mixins/breakpoints"
    
    .division
        max-width: 90%
        
        .row
            display: grid
            grid-column-gap: 4%
            grid-template-columns: 48% 48%
            
            @include media-breakpoint-down(md)
                display: block
    
            & > div
                grid-column: 1
            
                &:last-of-type
                    grid-row: 1 / 3
                    grid-column: 2
                
                @include media-breakpoint-only(lg)
                    &:nth-of-type(1)
                        grid-row: 1
                        grid-column: 1 / 3
        
                    &:nth-of-type(2)
                        grid-row: 2
                        grid-column: 1
        
                    &:nth-of-type(3)
                        grid-row: 2
                        grid-column: 2
                
            &.reversed > div
                grid-column: 2
    
                @include media-breakpoint-only(lg)
                    &:first-of-type
                        grid-column: 1 /3
        
                &:last-of-type
                    grid-column: 1
            
        //@include media-breakpoint-up(xxl)
            max-width: 80%
            
        //@include media-breakpoint-only(md)
            @for $index from 1 through 4
                .row > div:nth-last-of-type(#{$index})
                    order: #{$index}
            .row > div
                margin-bottom: 2%
                
        //@include media-breakpoint-only(lg)
            .row > div:first-of-type
            
        
        //.reversed
            flex-direction: row-reverse
            
        span, p, h2
            display: block
</style>