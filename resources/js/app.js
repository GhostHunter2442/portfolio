
require('./bootstrap');

window.Vue = require('vue');


Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.component('save-data', require('./components/Savedata.vue').default);



const app = new Vue({
    el: '#app',
});
