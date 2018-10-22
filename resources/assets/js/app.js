

// Configuration and js app setup.
require('./setup');

// Bring in and register all global components
import SectionSlider from './components/home/SectionSlider.vue';
Vue.component('section-slider', SectionSlider);

// Register global components and create the app.
window.app = new Vue({
    el: '#app'
});
