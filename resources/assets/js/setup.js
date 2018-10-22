
// Setup vue
import Vue from 'vue';
window.Vue = Vue;

// Setup Axios Library
import Axios from 'axios';
window.axios = Axios
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// Set up the csrf token as a common header on ajax requests if available
let token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
    window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
}
