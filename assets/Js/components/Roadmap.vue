<template>
    <div class="container-fluid">
        <div class="row timeline m-auto">
            <div class="col-12 my-2 my-md-0 p-0 text-left"
                 v-for="(slot, index) in this.$slots.default"
                 v-if="slot.tag === 'div'"
                 :class="{
                        'road-active': index === 0,
                        'road-endpoint': index === 0
                    }"
                 v-vpshow>
                <div v-html="gen(slot)"></div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'Roadmap',
        directives: {
            vpshow: {
                inViewport: function (el) {
                    var rect = el.getBoundingClientRect();
                    return window.innerHeight - rect.bottom > 0;
                },

                bind: function (el, binding) {
                    el.$onScroll = function () {
                        if (el.classList.contains('road-active') && binding.def.inViewport(el)) {
                            el.classList.add('enter');

                            var nextSibling = el.nextSibling;
                            while(nextSibling && nextSibling.nodeType !== 1)
                                nextSibling = nextSibling.nextSibling;

                            if (nextSibling)
                                nextSibling.classList.add('road-active-before');
                            
                            el.addEventListener('transitionend', function(event) {
                                
                                if (event.propertyName !== 'height' ||
                                    !nextSibling)
                                    return;

                                

                                if (nextSibling && nextSibling.classList.contains('road-active-before')) {
                                    nextSibling.classList.remove('road-active-before');
                                    nextSibling.classList.add('road-active');
                                    nextSibling.classList.add('road-endpoint');
                                }
                                
                                el.classList.remove('road-endpoint');
                                document.dispatchEvent(new Event('scroll'));
                            });
                            binding.def.unbind(el, binding);
                        }
                    };
                    
                    document.addEventListener('scroll', el.$onScroll);
                },

                inserted: function (el) {
                    el.$onScroll()
                },

                unbind: function (el) {
                    document.removeEventListener('scroll', el.$onScroll);
                    delete el.$onScroll
                }
            }
        },
        methods: {
            gen: function (node) {
                var html = '';
                for (var i in node.children)
                    if (node.children[i].tag !== undefined)
                        html += '<' + node.children[i].tag + ' data-aos-offset="100px" data-aos="zoom-out-left">' +
                            this.gen(node.children[i]) +
                            '</' + node.children[i].tag + '>';
                    else
                        html += node.children[i].text;

                return html;
            }
        }

    }
</script>

<style lang="sass">
    @import ~bootstrap/scss/functions
    @import ~bootstrap/scss/variables
    @import ~bootstrap/scss/mixins/breakpoints
    @import ../../Sass/variables
    
    $block-height: 15em
    
    @include media-breakpoint-up(md)
        .timeline
            width: 50%
    
            .col-12
                margin-left: 2em
                min-height: $block-height
                color: $color-roadmap-text
    
                @include media-breakpoint-up(xxl)
                    margin-left: 3em
                
                &:last-of-type
                    min-height: auto
                
                &:after, &:before
                    content: ""
                    position: absolute
                    background: $color-roadmap-line

                &:before
                    z-index: 1
                    width: 1.2em
                    height: 1.2em
                    border-radius: 50%
                    top: 2%
                    left: -8%
                    opacity: 0
                    transition: background-color .3s, width .3s, left .3s
                    @include media-breakpoint-up(xxl)
                        left: -16%
    
                &:after
                    height: 0
                    width: 4px
                    left: calc(-8% + 0.6em - 4px / 2)
                    top: calc(2% + 1.2em)
                    transition: height linear .7s, left .3s
    
                    @include media-breakpoint-up(xxl)
                        left: calc(-16% + 0.6em - 4px / 2)
                    
                &:first-of-type :before
                    opacity: 1
                    
                &:last-of-type:after
                    height: 0!important
                    
                &.road-active-before, &.road-active
                    &:before
                        opacity: 1
                    
                &.enter
                    &.road-active:after
                        height: calc(100% - 1.2em)
    
                &.road-endpoint
                    h3
                        color: $color-roadmap-active
                    
                    &:before
                        left: calc(-8% - (1.5em - 1.3em) / 2)
                        width: 1.5em
                        height: 1.5em
                        background: $color-roadmap-active
    
                        @include media-breakpoint-up(xxl)
                            left: calc(-16% - (1.5em - 1.2em) / 2)
                        
        
</style>