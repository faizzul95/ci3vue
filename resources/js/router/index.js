import {
    createRouter,
    createWebHistory
} from 'vue-router'

import admin from './admin'
import notfound from './notfound'

const routes = [
    ...admin,
    ...notfound,
]

export default createRouter({
    history: createWebHistory(),
    routes
})