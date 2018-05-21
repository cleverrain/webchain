<template>
    <div>
        <div id="wrapper" class="pb-5">
            <slot></slot>
        </div>
        <footer class="container-fluid mt-3 py-4 px-5">
            <div class="row text-center">

                <div class="col-12 text-center">
                    <p class="d-block align-items-center justify-content-center">
                        <a href="https://www.facebook.com/webchain.network" class="mr-3" rel="nofollow" target="_blank">
                            <img :src="facebook" :width="50">
                        </a>
                        <a href="https://www.linkedin.com/company/webchain-blockchain" class="mr-3" rel="nofollow" target="_blank">
                            <img :src="linkedin" :width="50">
                        </a>
                        <a href="https://www.twitter.com/TheWebchain" class="mr-3" rel="nofollow" target="_blank">
                            <img :src="twitter" :width="50">
                        </a>
                        <a href="https://www.reddit.com/r/Webchain" class="mr-3" rel="nofollow" target="_blank">
                            <img :src="reddit" :width="50">
                        </a>
                        <a href="https://www.t.me/joinchat/IdMikBC1Ew28ufxKdfnKMQ" class="mr-3" rel="nofollow" target="_blank">
                            <img :src="telegram_channel" :width="50">
                        </a>
                        <a href="https://www.t.me/webchainnetwork" class="mr-3" rel="nofollow" target="_blank">
                            <img :src="telegram_group" :width="50">
                        </a>
                        <a href="https://www.discordapp.com/invite/K7AptZt" class="mr-3" rel="nofollow" target="_blank">
                            <img :src="discord" :width="50">
                        </a>
                    </p>
                </div>

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
    import facebook from "../../../Images/social/icon-facebook.png"
    import linkedin from "../../../Images/social/icon-linkedin.png"
    import twitter from "../../../Images/social/icon-twitter.png"
    import reddit from "../../../Images/social/icon-reddit.png"
    import telegram_channel from "../../../Images/social/icon-telegram.png"
    import telegram_group from "../../../Images/social/icon-telegram-group.png"
    import discord from "../../../Images/social/icon-discord.png"

    export default {
        name: "MainLayout",
        data: function () {
            return {
                facebook: facebook,
                linkedin: linkedin,
                twitter: twitter,
                reddit: reddit,
                telegram_channel: telegram_channel,
                telegram_group: telegram_group,
                discord: discord
            }
        }
    }
</script>