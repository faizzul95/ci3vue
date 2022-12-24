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

// PLUGIN
import Slideout from '@hyjiacan/vue-slideout';
import Toast from "vue-toastification";
import acl from './js/store/acl';

import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// CSS
import '@/css/main.sass'
import '@hyjiacan/vue-slideout/dist/slideout.css';
import "vue-toastification/dist/index.css";

// HELPER
// import TableWrapper from "@/js/components/Assets/TableWrapper.vue";
import nodata from "@/js/components/Assets/NoDataComponent.vue";
import UnauthorizedAccess from "@/js/components/Assets/UnauthorizedAccessComponent.vue";

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
    .use(acl)
    // .component("TableWrapper", TableWrapper)
    .component("nodata", nodata)
    .component("unauthorizedAccess", UnauthorizedAccess)
    .mount('#app')