<template>
    <div class="container-fluid descrition-block text-center">
        <div class="row">
            <h2 class="col">
                <slot name="title"></slot>
            </h2>
        </div>
        <div class="row">
            <div class="col">
                <div class="m-auto">
                    <slot name="content"></slot>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'DescriptionBlock'
    }
</script>

<style lang="sass">
    @import ~bootstrap/scss/functions
    @import ~bootstrap/scss/variables
    
    .descrition-block .col > *
        max-width: map-get($grid-breakpoints, "xl")
</style>