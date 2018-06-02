<template>
    <header>
        <b-navbar px-5 pt-3 toggleable="md" type="dark">
            <b-navbar-toggle class="order-2" target="nav_collapse"></b-navbar-toggle>
            <b-navbar-brand  class="w-auto">
                <a href="/" class="logo fg-main">
                    webchain.<span class="text-white">network</span>
                </a>
            </b-navbar-brand>

            <b-collapse is-nav id="nav_collapse">
                <b-navbar-nav class="ml-auto p-3">
                    <b-nav-item target="_self"  href="/faq">FAQ</b-nav-item>
                    <b-nav-item target="_self"  href="/start">How to Start</b-nav-item>
                    <b-nav-item target="_self"  href="/news">News</b-nav-item>
                    <b-nav-item target="_blank" href="https://pool.webchain.network">Pool</b-nav-item>
                    <b-nav-item target="_blank" href="https://explorer.webchain.network">Explorer</b-nav-item>
                    <b-nav-item target="_blank" href="https://github.com/webchain-network" class="d-block d-md-none">GitHub</b-nav-item>
                    <b-nav-item target="_blank" href="https://github.com/webchain-network" class="ml-2 float-right d-none d-md-block">
                        <div class="github-icon d-block position-absolute"></div>
                    </b-nav-item>
                </b-navbar-nav>
            </b-collapse>
        </b-navbar>
    </header>
</template>


<script>
    import NavBar from 'bootstrap-vue/es/components/navbar';

    export default {
        name: 'Navbar',
        components: { NavBar },
        mounted () {
            $(document).click(function (event) {
                var clickover = $(event.target);
                var _opened = $("#nav_collapse").hasClass("show");
                if (_opened === true && !clickover.hasClass("navbar-toggler") && !clickover.hasClass("navbar-toggler-icon"))
                    $("button.navbar-toggler").click();
            });
        }
    }
</script>
