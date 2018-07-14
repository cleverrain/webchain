import './config/config';
import NewsletterAdmin from './components/Admin/Newsletter';

new Vue({
    el: '#newsletter',
    render (h) { return h(NewsletterAdmin) }
});