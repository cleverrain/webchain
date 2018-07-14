<template>
   <div class="container mt-2 mb-4">
      <h2>Subscribed Emails</h2>
      <div class="card my-4 py-3">
         <div class="row p-1 text-center">
            <div class="col-5 pt-1">
               We have <span><b>{{ newsletters.length }}</b></span> emails subscribed in our newsletter.
            </div>
            <div class="col-7">
               <span>Export in CSV Format:</span>
               <a href="./newsletter/export/all" class="btn btn-sm btn-primary">All</a>
               <a href="./newsletter/export/enabled" class="btn btn-sm btn-primary">Enabled only</a>
               <a href="./newsletter/export/disabled" class="btn btn-sm btn-primary">Disabled only</a>
            </div>
         </div>
      </div>

      <input type="email" class="text-center" v-model="searchEmailValue" placeholder="search for email">
      <button class="btn btn-sm btn-primary" @click="search">Search</button>

      <span class="alert alert-danger text-center d-block" v-if="searchError">Email not found!</span>

      <table class="table table-striped table-bordered w-100 d-table" v-if="searchNewsletter.id != -1">
         <thead>
         <tr>
            <th scope="col" class="text-center">ID</th>
            <th scope="col">Email</th>
            <th scope="col" class="text-center">Enabled</th>
            <th scope="col" class="text-center">Joined</th>
            <th scope="col" class="text-center">Actions</th>
         </tr>
         </thead>
         <tbody>
         <tr>
            <th scope="row" class="text-center" v-html="searchNewsletter.id"></th>
            <td v-html="searchNewsletter.email"></td>
            <td class="text-center">
               <b class="text-color-green" v-if="searchNewsletter.enabled==1">Yes</b>
               <b class="text-color-red" v-else>No</b>
            </td>
            <td class="text-center" v-html="searchNewsletter.created"></td>
            <td class="text-center">
               <a class="btn btn-info bt-sm" :href="'./newsletter/disable/' + searchNewsletter.id" v-if="searchNewsletter.enabled==1">Disable</a>
               <a class="btn btn-info bt-sm" :href="'./newsletter/enable/' + searchNewsletter.id" v-else>Enable</a>
               <a class="btn btn-danger bt-sm" :href="'./newsletter/delete/' + searchNewsletter.id">Delete</a>
            </td>
         </tr>
         </tbody>
      </table>

      <small class="float-right">recent 10 emails</small>
      <table class="table table-striped table-bordered w-100">
         <thead>
         <tr>
            <th scope="col" class="text-center">ID</th>
            <th scope="col">Email</th>
            <th scope="col" class="text-center">Enabled</th>
            <th scope="col" class="text-center">Joined</th>
            <th scope="col" class="text-center">Actions</th>
         </tr>
         </thead>
         <tbody>
         <tr v-for="newsletter in newsletters">
            <th scope="row" class="text-center">{{ newsletter.id }}</th>
            <td><span>{{ newsletter.email }}</span></td>
            <td class="text-center">
               <b class="text-color-green" v-if="newsletter.enabled==1">Yes</b>
               <b class="text-color-red" v-else>No</b>
            </td>
            <td class="text-center"><span>{{ newsletter.created }}</span></td>
            <td class="text-center">

               <a class="btn btn-info bt-sm" :href="'./newsletter/disable/' + newsletter.id" v-if="newsletter.enabled==1">Disable</a>
               <a class="btn btn-info bt-sm" :href="'./newsletter/enable/' + newsletter.id" v-else>Enable</a>
               <a class="btn btn-danger bt-sm" :href="'./newsletter/delete/' + newsletter.id">Delete</a>

            </td>
         </tr>
         </tbody>
      </table>
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
        name: "NewsletterAdmin",
        data: function ()
        {
            return {
                searchEmailValue: '',
                searchNewsletter: {'id': -1, 'email': '', 'enabled': '', 'created': '' },
                newsletters: [],
                searchError: false
            }
        },
        methods: {
            search: function ()
            {
                this.$http.post('/admin/newsletter/search/'+this.searchEmailValue, {}).then(function (ret)
                {
                    ret = ret.body;

                    if(ret.status == 'error')
                    {
                        this.searchError = true;
                        this.searchNewsletter.id = -1;
                        return;
                    }

                    this.searchError = false;
                    this.searchNewsletter = ret;
                });
            },
            getAllNewsletters: function ()
            {
                this.$http.post('/admin/newsletter/get/all', {}).then(function (ret)
                {
                    var self = this;
                    ret = ret.body;

                    ret.forEach(function(newsletter)
                    {
                        self.newsletters.push(newsletter);
                    });
                });
            }
        },
        created: function()
        {
            this.getAllNewsletters()
        }
    }
</script>
