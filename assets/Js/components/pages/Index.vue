<template>
    <MainLayout class="home-page">
        <section id="starter" class="container-fluid bg-darken-gradient">
            <div class="row p-0">
                <NavBar class="col p-0 pt-2"></NavBar>
            </div>
            <div class="row">
                <div class="col px-md-3 px-0">
                    <div class="bg-dotted-map px-4 d-flex align-items-center">
                        <div class="m-auto text-center">
                            <h1>
                                ERC20 & ERC223 Smart Contracts<br> and DApps enabled blockchain,
                                secured by Websites and Internet of Things
                            </h1>
                            <a href="https://webchain.network/Webchain_white_paper.pdf" target="_blank" class="btn btn-dark-header">whitepaper</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="description">
            <SeparatorBanner data-aos="flip-up">
            <span>
                Webchain is a transparent, egalitarian, ASIC-resistant and smart
                contract compatible blockchain protocol, built to be mined via
                websites and developed with the support of the community.
            </span>
            </SeparatorBanner>
        </section>

        <section id="stocks" class="container-fluid mt-5 pt-3 text-center" data-aos="zoom-out-right" data-aos-delay="200">
            <span class="d-inline-block m-0 text-center">Don't miss opportunity to get in early! Trade WEB on</span>

            <div class="row">
                <div class="col">
                    <div class="d-inline-block px-4">
                        <a href="https://stocks.exchange/trade/WEB/BTC" rel="nofollow" target="_blank" data-aos="zoom-out-right">
                            <img src="../../../Images/stocks-logo.png" class="my-3" data-aos="zoom-out-left" data-aos-delay="250"/>
                        </a>
                    </div>
                    <div class="d-inline-block px-4 bitebtc-block">
                        <a href="https://stocks.exchange/trade/WEB/BTC" rel="nofollow" target="_blank" data-aos="zoom-out-right">
                            <h2 class="bitebtc-text">BiteBTC</h2>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="divisions">
            <Division>
                <template slot="title">
                    <span class="d-block" data-aos="zoom-out-left" data-aos-delay="200">
                        Secure DApps from any device
                    </span>
                </template>
                <template slot="content">
                    <p data-aos="zoom-out-left" data-aos-delay="300">
                        With Webchain, It’s possible to use resources of Internet
                        of Things or any device that can render JavaScript to mine.
                    </p>
                </template>
                <template slot="image">
                    <img src="../../../Images/art_2.svg" data-aos="zoom-out-left"/>
                </template>
            </Division>
            <Division :is-reversed="true">
                <template slot="title">
                    <span class="d-block" data-aos="zoom-out-right" data-aos-delay="200">
                        Decentralized and ASIC-Resistant
                    </span>
                </template>
                <template slot="content">
                    <div data-aos="zoom-out-right" data-aos-delay="300">
                        <p>
                            ASICs are machines created for the sole purpose of cryptocurrency
                            mining while rapidly increasing the block difficulty over time;
                            turning mining for regular devices users unprofitable. Since ASIC
                            operators sell coins to pay for expenses, they also drive coin
                            prices down.
                        </p>
                        <p>
                            We designed and implemented our own fully customized version of
                            Cryptonight hashing algorithm. To stay ASIC-resistant in future,
                            we will keep updating it regularly.
                        </p>
                    </div>
                </template>
                <template slot="image">
                    <img src="../../../Images/art_3.svg" data-aos="zoom-out-right"/>
                </template>
            </Division>
            <Division>
                <template slot="title">
                    <span class="d-block" data-aos="zoom-out-left" data-aos-delay="200">
                        Fair distribution. CPU minable
                    </span>
                </template>
                <template slot="content">
                    <p data-aos="zoom-out-left" data-aos-delay="300">
                        By making Webchain CPU mineable, we make sure that everyone can mine it.
                        Neither ASICs nor GPU miners will have big advantages over CPU miners.
                        We believe such distribution of coins is much more beneficial for the
                        community.
                    </p>
                </template>
                <template slot="image">
                    <img src="../../../Images/art_4.svg" data-aos="zoom-out-left"/>
                </template>
            </Division>
            <Division :is-reversed="true">
                <template slot="title">
                    <span class="d-block" data-aos="zoom-out-right" data-aos-delay="200">
                        No ICO
                    </span>
                </template>
                <template slot="content">
                    <p data-aos="zoom-out-right" data-aos-delay="300">
                        Since this project is meant to be for everyone – not only for those
                        with deep pockets – we are holding no Initial Coin Offering.
                    </p>
                </template>
                <template slot="image">
                    <img src="../../../Images/art_5.svg" data-aos="zoom-out-right"/>
                </template>
            </Division>
            <Division>
                <template slot="title">
                    <span class="d-block" data-aos="zoom-out-left" data-aos-delay="200">
                        Very fast transactions
                    </span>
                </template>
                <template slot="content">
                    <p data-aos="zoom-out-left" data-aos-delay="300">
                        Our on-chain transactions are among the fastest - only 10s. Adding
                        off-chain solutions will make them instant.
                    </p>
                </template>
                <template slot="image">
                    <img src="../../../Images/art_6.svg" data-aos="zoom-out-left"/>
                </template>
            </Division>
            <Division :is-reversed="true">
                <template slot="title">
                    <span class="d-block" data-aos="zoom-out-right" data-aos-delay="200">
                        Transparent, botnet unfriendly
                    </span>
                </template>
                <template slot="content">
                    <p data-aos="zoom-out-right" data-aos-delay="300">
                        The transactions made on our blockchain are entirely public,
                        so Webchain won’t be a friendly place for botnet attackers
                        or any sort of harmful illegal activities.
                    </p>
                </template>
                <template slot="image">
                    <img src="../../../Images/art_7.svg" data-aos="zoom-out-right"/>
                </template>
            </Division>
        </section>

        <section id="webchain-coinimp" class="container-fluid my-5" data-aos="zoom-in">
            <div class="row mx-3 d-flex">
                <div class="col-7 offset-5 text-left">
                    <h2>Website monetization via CoinIMP</h2>
                    <p>Our two projects CoinIMP and WEB are going to create full ecosystem for webmasters to monetize on their websites, breaking Google Adsense and Facebook ads monopoly.</p>
                </div>
            </div>
            <img src="../../../Images/webchain-coinimp.png" />
        </section>

        <section id="roadmap">
            <DescriptionBlock data-aos="zoom-in" class="mt-md-5">
                <template slot="title">Roadmap</template>
                <template slot="content">
                    <Roadmap class=" p-0 pt-3">
                        <div>
                            <h3>2018 - 2nd Quarter</h3>
                            <ul>
                                <li>GitHub Integration</li>
                                <li>Social Media campaign</li>
                                <li>Announcement Thread on Bitcointalk.org</li>
                                <li>Webchain pool development</li>
                                <li>Webchain explorer development</li>
                                <li>Miner for Webchain</li>
                                <li>Webchain Network development</li>
                            </ul>
                        </div>
                        <div>
                            <h3>2018 - 3rd Quarter</h3>
                            <ul>
                                <li>JS Mining Script</li>
                                <li>Webchain available on javascript mining services</li>
                                <li>GUI wallet</li>
                                <li>Sidechain Prototype</li>
                                <li>Mobile Wallet</li>
                            </ul>
                        </div>
                        <div>
                            <h3>2018 - 4th Quarter / 1st Quarter 2019</h3>
                            <ul>
                                <li>Supporting developers to build DApps on top of Webchain</li>
                                <li>IPFS</li>
                                <li>Compatibility with different blockchains</li>
                                <li>Improvements to mitigate differences between local and web mining</li>
                            </ul>
                        </div>
                        <div>
                            <h3>More features to come</h3>
                            <ul><li>Sharding the Webchain Network</li></ul>
                        </div>
                    </Roadmap>
                </template>
            </DescriptionBlock>
        </section>
        <section id="join">
            <FeaturedButton href="https://bitcointalk.org/index.php?topic=3649170.0" data-aos="zoom-in">
                Join our Bitcointalk thread
            </FeaturedButton>
        </section>
        <section id="tw-widget" class="container-fluid m-auto pb-5">
            <h2>Recent tweets</h2>
            <TwtrTimeline id="TheWebchain" :options="twConfiguration" />
        </section>
    </MainLayout>
</template>

<script>
    import AOS from 'aos';

    AOS.init({
        duration: 800,
        once: true,
        startEvent: 'load'
    });

    import MainLayout from '../layouts/Mainlayout';
    import NavBar from '../Navbar';
    import SeparatorBanner from '../SeparatorBanner';
    import Roadmap from '../Roadmap';
    import DescriptionBlock from '../DescriptionBlock';
    import Division from '../Division';
    import TwtrTimeline from '../TwtrTimeline';
    import FeaturedButton from '../FeaturedButton';
    import Sidecar from '../../modules/GitterSidecar';

    Sidecar('webchain-network/public');

    export default {
        name: 'index',
        components: {
            MainLayout,
            NavBar,
            SeparatorBanner,
            Roadmap,
            DescriptionBlock,
            Division,
            TwtrTimeline,
            FeaturedButton
        },
        data() {
            return {
                reversed: true,
                twConfiguration: {
                    width: 1200,
                    height: 400,
                    chrome: 'nofooter, noheader, transparent',
                    'link-color': 'white'
                }
            }
        }
    }
</script>

<style lang="sass">
    @import ~bootstrap/scss/functions
    @import ~bootstrap/scss/variables
    @import ~bootstrap/scss/mixins/breakpoints
    @import ../../../Sass/variables

    .home-page
        #wrapper
            overflow: hidden

            & > *:not(#starter):not(#tw-widget):not(#webchain-coinimp)
                max-width: map-get($grid-breakpoints, xxxl)
                margin: 0 auto
    
    #starter
        .row:first-of-type
            height: 4.5em
        
        .bg-dotted-map
            padding-top: 3.6em
            padding-bottom: 5em

            div
                width: 85%
                padding-bottom: 2em
            
            @include media-breakpoint-up(md)
                padding-bottom: 5.5em
                background-size: 100%
                min-height: calc(100vh - 4.5em)
            
            h1
                color: $color-background
                animation: mass 2s
        
        .btn-dark-header
            font-size: 1em
            color: $color-background !important
            text-transform: uppercase
            margin: 2em auto
            padding: 4.6% 15.5%
            background-color: $color-whitepaper
            border-radius: 5rem
            transition: background-color .3s ease-in-out
    
            @include media-breakpoint-down(sm)
                @include media-orientation(landscape)
                    padding: 1.6% 5.5%
            
            @include media-breakpoint-up(md)
                font-size: 1.5em
                padding: 1.6% 5.5%
                
            &:hover
                color: $color-background !important
                background-color: $color-light-hover

    #stocks
        span
            font-family: $font-title
            font-size: 2.4rem
        img
            width: 100%
            @include media-breakpoint-down(sm)
                width: 60%

    .bitebtc-block
        vertical-align: middle

    .bitebtc-text
        font-family: $font-bitebtc
        color: $color-bitebtc
        font-size: 3.5rem
        @include media-breakpoint-down(sm)
            font-size: 2.1rem

    #webchain-coinimp
        .row
            padding-top: 9%
            position: absolute
        img
            visibility: hidden
            width: 100%
        *
            color: $color-background
        h2
            font-size: 3.5vw
        p
            font-size: 1.4vw

        background: url("../Images/webchain-coinimp.png") no-repeat center center
        background-size: 100%

    #divisions
        
        img
            display: block
            width: 100%
            
            @include media-breakpoint-only(md)
                width: 60%
        
        & > div
            margin-top: 5%
    
            @include media-breakpoint-down(sm)
                margin-top: 0
            
            &:first-of-type
                margin-top: 4%

    #roadmap
        h3, .h3
            font-family: $font-general
            font-weight: bold
        p
            margin-bottom: 0
            color: $color-title
    
    #tw-widget
        max-width: map-get($grid-breakpoints, "xl")
        
        iframe
            background-color: #F2F2F2
        
        div
            height: 430px
            padding: 15px 0
            border-top: 1px solid $color-text
            border-bottom: 1px solid $color-text

    .gitter-open-chat-button
        font-size: 1vw
        background-color: $color-chat
        color: $color-background!important
    
        @include media-breakpoint-down(sm)
            font-size: 1.5vw
        
        @include media-breakpoint-down(xs)
            font-size: 2vw
        
        &.is-collapsed
            display: none
            
        &:focus
            background-color: $color-chat
            
        &:hover
            background-color: $color-light-hover
            text-decoration: none
    
    @keyframes mass
        0%
            transform: translateY(-50px)
            opacity: 0
            clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 40%)
        
        20%
            transform: translateY(0)
            opacity: 1
            clip-path: polygon(100% 0, 100% 40%, 0 100%, 0 100%)
        
        100%
            transform: translateY(0)
            opacity: 1
            clip-path: polygon(100% 0, 100% 100%, 0 100%, 0 0)
</style>
