<template>
    <div>
        <div id="wrapper">
            <slot></slot>
        </div>
        <footer class="container-fluid mt-3 py-4 px-5">
            <div class="row text-center">
                <div class="col-12">
                    <a class="p-0 pr-2" href="mailto:support@webchain.network">Contact Us</a>
                </div>
                <div class="col-12 mt-2">
                    <p class="text-white m-0">Copyright 2018 Webchain.network, All rights reserved</p>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
    export default {
        name: "MainLayout"
    }
</script>