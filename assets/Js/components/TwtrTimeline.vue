<template>
    <div v-html="timeline"></div>
</template>

<script>
    export default {
        name: 'TwtrTimeline',
        mounted: function () {
            this.loadTwttr();
        },
        props: {
            id: String,
            options: Object
        },
        data() {
            return {
                addScriptPromise: null
            };
        },
        methods: {
            loadTwttr: function () {
                this.addScript('https://platform.twitter.com/widgets.js');
            },
            addScript: function (src) {
                if (!this.addScriptPromise) {
                    const s = document.createElement('script');
                    s.setAttribute('src', src);
                    document.body.appendChild(s);
                    this.addScriptPromise = new Promise((resolve, reject) => {
                        s.onload = resolve
                    });
                }
                return this.addScriptPromise;
            }
        },
        computed: {
            timeline: function () {
                let node = document.createElement('a');
                node.setAttribute('class', 'twitter-timeline');
                node.setAttribute('href', 'https://twitter.com/' + this.id);
                for (let option in this.options)
                    node.setAttribute('data-' + option, this.options[option]);

                return node.outerHTML;
            }
        }
    }
</script>