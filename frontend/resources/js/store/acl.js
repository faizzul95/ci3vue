// GitHub : https://github.com/victorybiz/vue-simple-acl

import router from "@/js/router/index";
import user from "./authStore";

import {
    createAcl,
    defineAclRules
} from 'vue-simple-acl';

const rules = () => defineAclRules((setRule) => {
    setRule(user.permissions, (user) => user);
});

const acl = createAcl({
    user, // short for user: user
    rules, // short for rules: rules
    router, // OPTIONAL, short for router: router
    onDeniedRoute: '/unauthorized' // OR { path: '/unauthorized' } OR { name: 'unauthorized', replace: true} or '$from'
    // onDeniedRoute: {
    //     name: 'unauthorized',
    //     replace: true
    // }
});

export default acl;