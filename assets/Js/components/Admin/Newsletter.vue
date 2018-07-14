<template>
   <div class="container mt-2 mb-4" id="newsletter">
      <h2>Subscribed Emails</h2>
      <div class="card my-4 py-3">
         <div class="row p-1 text-center">
            <div class="col-5 pt-1">
               We have <span><b>{{ newsletters|length }}</b></span> emails subscribed in our newsletter.
            </div>
            <div class="col-7">
               <span>Export in CSV Format:</span>
               <a href="./newsletter/export/all" class="btn btn-sm btn-primary">All</a>
               <a href="./newsletter/export/enabled" class="btn btn-sm btn-primary">Enabled only</a>
               <a href="./newsletter/export/disabled" class="btn btn-sm btn-primary">Disabled only</a>
            </div>
         </div>
      </div>

      <input type="email" v-model="searchEmailValue" placeholder="search for email">
      <button class="btn btn-sm btn-primary" @click="search">Search</button>

      <span class="alert alert-danger text-center d-none" >Email not found!</span>

      <table class="table table-striped table-bordered w-100 d-none" v-if="searchItem.length > 0">
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
            <th scope="row" class="text-center" id="search-id"></th>
            <td id="search-email"></td>
            <td class="text-center" id="search-enabled"></td>
            <td class="text-center" id="search-created"></td>
            <td class="text-center">
               <span id="search-enabled-action"></span>
               <span class="text-center" id="search-delete-action"></span>
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
               <b class="text-color-green" v-if="newsletter.enabled=1">Yes</b>
               <b class="text-color-red" v-else>No</b>
            </td>
            <td class="text-center"><span>{{ newsletter.created|date('Y-m-d H:i:s') }}</span></td>
            <td class="text-center">
               <!--{% if newsletter.enabled == 1 %}-->
               <!--<a class="btn btn-info bt-sm" href="./newsletter/disable/{{ newsletter.id }}">Disable</a>-->
               <!--{% else %}-->
               <!--<a class="btn btn-info bt-sm" href="./newsletter/enable/{{ newsletter.id }}">Enable</a>-->
               <!--{% endif %}-->
               <!--<a class="btn btn-danger bt-sm" href="./newsletter/delete/{{ newsletter.id }}">Delete</a>-->

            </td>
         </tr>
         </tbody>
      </table>
   </div>
</template>

<script>
    export default {
        name: "newsletter",
        data: function ()
        {
            return {
                searchEmailValue: '',
                searchItem: [],
                newsletters: [],
            }
        },
        methods: {
            search: function ()
            {

            }
        }
    }
</script>
