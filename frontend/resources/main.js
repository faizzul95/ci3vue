import {
    createApp
} from 'vue'

import App from './App.vue'

import {
    appName,
    baseUrl,
    siteUrl
} from './js/components/Helpers/url'

import router from "./js/router/index";
import store from './js/store'

import '@/css/main.sass'

import Slideout from '@hyjiacan/vue-slideout';
import '@hyjiacan/vue-slideout/dist/slideout.css';

import Toast from "vue-toastification";
import "vue-toastification/dist/index.css";

import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

const app = createApp(App)

app.config.globalProperties.$appName = appName
app.config.globalProperties.$baseUrl = baseUrl
app.config.globalProperties.$siteUrl = siteUrl

app.use(router)
    .use(store)
    .use(Slideout, {})
    .use(Toast, {
        transition: "Vue-Toastification__fade",
        maxToasts: 5,
        newestOnTop: true
    })
    .mount('#app')