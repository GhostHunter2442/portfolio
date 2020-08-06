
require('./bootstrap');
import VueCarousel from '@chenfengyuan/vue-carousel';
import VueYoutube from 'vue-youtube'


window.Vue = require('vue');
Vue.use(VueCarousel);
Vue.use(VueYoutube)
Vue.component('save-data', require('./components/Savedata.vue').default);
Vue.component('clock-time', require('./components/Clocktime.vue').default);


const app = new Vue({
    el: '#app',
});
