import Index from './components/pages/Index';
import AOS from 'aos';

AOS.init({
	duration: 800,
	once: true,
    startEvent: 'load'
});

new Vue({
    el: '#app',
    render (h) { return h(Index) }
});
