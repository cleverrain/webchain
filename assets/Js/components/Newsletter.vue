<template>
    <div class="col-md-5 col-sm-12 mb-4 order-1 order-md-2 mt-md-4">
        <section class="container">
            <div class="row">
                <div class="text-center col-sm-12">
                    <h3 class="text-white newsletter-label">Signup in our Newsletter</h3>
                    <span class="text-white">Receive Webchain news and updates in your inbox.</span>
                    <div class="input-group mt-3">
                        <input type="email" v-model="email" class="form-control news round-left" placeholder="Your email address">
                        <button class="btn btn-primary round-right" @click="subscribe">SUBSCRIBE</button>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<script>

    import VueResource from 'vue-resource'
    import Toasted from 'vue-toasted';

    Vue.use(VueResource);

    Vue.use(Toasted, {
        position: 'top-center',
        duration: 5000,
    });

    export default {
        name: "NewsletterFooter",
        data: function() {
            return {
                email: '',
            }
        },
        methods: {
            subscribe: function ()
            {
                this.$http.post('/newsletter/join', {
                    email: this.email
                }).then(function(data){
                    data = data.body;
                    if (data.status == 'error')
                    {
                        this.$toasted.error('<span class="p-2 text-center">' + data.message + '</span>');
                    }else
                    {
                        this.$toasted.success('<span class="p-2 text-center">' + data.message + '</span>');
                    }
                });
            }
        }
    }
</script>
