import {
    appName,
    baseUrl,
    siteUrl
} from '@/js/components/Helpers/url';

import LoginLayout from '@/views/LoginLayout.vue'

const auth = [{
    path: siteUrl,
    alias: [
        siteUrl,
        baseUrl
    ],
    component: LoginLayout,
    children: [{
        path: 'auth/login',
        name: 'Login',
        component: () => import("components/Modules/GENERAL/Auth/Login.vue"),
        meta: {
            // auth: true,
            title: 'Login | ' + appName,
            breadCrumb: [{
                text: 'Login'
            }]
        }
    }, ],
}];

export default auth;