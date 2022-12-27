import {
    appName,
    baseUrl,
    siteUrl
} from '@/js/components/Helpers/url';

import BasicLayout from '@/views/BasicLayout.vue'

const admin = [{
    path: siteUrl,
    alias: [
        siteUrl,
        baseUrl
    ],
    component: BasicLayout,
    children: [{
            path: 'dashboard',
            name: 'Dashboard',
            component: () => import("components/Modules/GENERAL/Pages/Home.vue"),
            meta: {
                // auth: true,
                title: 'Dashboard | ' + appName,
                breadCrumb: [{
                    text: 'Dashboard'
                }]
            }
        },
        {
            path: 'about',
            name: 'About',
            component: () => import("components/Modules/GENERAL/Pages/About.vue"),
            meta: {
                // auth: true,
                title: 'About | ' + appName,
                breadCrumb: [{
                    text: 'About'
                }]
            }
        },
        {
            path: 'user',
            name: 'Login',
            component: () => import("components/Modules/GENERAL/Pages/User.vue"),
            meta: {
                // auth: true,
                title: 'User | ' + appName,
                breadCrumb: [{
                    text: 'User'
                }]
            }
        },
    ],
}];

export default admin;