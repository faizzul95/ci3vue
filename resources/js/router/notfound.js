import {
    baseUrl,
    siteUrl
} from '@/js/components/Helpers/url';

const notfound = [{
    path: '/:pathMatch(.*)*',
    name: 'NotFound',
    alias: [
        siteUrl,
        baseUrl
    ],
    component: () => import("@/js/components/Modules/GENERAL/Pages/NotFound.vue"),
}, ];

export default notfound;