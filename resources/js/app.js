
require('./bootstrap');
import VueCarousel from '@chenfengyuan/vue-carousel';

window.Vue = require('vue');
Vue.use(VueCarousel);

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('save-data', require('./components/Savedata.vue').default);



const app = new Vue({
    el: '#app',
});
