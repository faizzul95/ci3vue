import {
    createRouter,
    createWebHistory
} from 'vue-router'

import auth from './auth'
import admin from './admin'
import notfound from './notfound'

const routes = [
    ...auth,
    ...admin,
    ...notfound,
]

export default createRouter({
    history: createWebHistory(),
    routes
})