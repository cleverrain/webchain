import 'babel-polyfill';
import Vue from 'vue';
import BootstrapVue from 'bootstrap-vue';
import SocialSharing from 'vue-social-sharing';
import '../../Sass/common.sass';

window.Vue = Vue;

Vue.use(SocialSharing);
Vue.use(BootstrapVue);

Vue.config.productionTip = false;
Vue.options.delimiters = ['{[', ']}'];

document.body.setAttribute('ondragstart', 'return false;');
document.body.setAttribute('ondrop', 'return false;');

const imagesCtx = require.context('../../Images', true, /\.(png|jpg|jpeg|gif|ico|svg|webp)$/);
imagesCtx.keys().forEach(imagesCtx);