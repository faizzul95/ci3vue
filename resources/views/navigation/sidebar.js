import {
    siteUrl
} from '@/js/components/Helpers/url';

export default [{
        heading: 'General',
        menu: [{
            title: 'Dashboard',
            icon: 'menu-icon tf-icons ti ti-smart-home',
            router_name: siteUrl + 'dashboard',
            class: 'menu-link',
            permissions: [],
            roles: "",
            submenu: [],
        }],
    },
    {
        heading: 'Billings',
        menu: [{
            title: 'Invoice',
            icon: 'menu-icon tf-icons ti ti-file-dollar',
            router_name: siteUrl + 'about',
            class: 'menu-link',
            permissions: [],
            roles: [],
            submenu: [],
        }],
    },
    {
        heading: 'Example',
        menu: [{
            title: 'User',
            icon: 'menu-icon tf-icons ti ti-file-dollar',
            router_name: siteUrl + 'user',
            class: 'menu-link',
            permissions: [],
            roles: [],
            submenu: [],
        }],
    },
]