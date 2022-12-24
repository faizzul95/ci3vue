import {
    ref,
    isRef,
    unref,
    watchEffect
} from 'vue'
// import { useAuthStore } from '@/stores/auth';

import {
    baseUrl,
} from 'components/Helpers/url'

import {
    noti,
    actionNoti
} from "components/helpers/common";

export async function callApiWrapper(method, url, dataObj) {
    const successStatus = [200, 201];
    const unauthorizedStatus = [401, 403];
    const unknownStatus = [419, 500];
    const errorStatus = [422];

    const res = ref("");
    const error = ref("");

    // const authStore = useAuthStore();

    async function useAxios() {
        try {
            // let finalUrl = '/api/' + url;
            // let finalUrl = baseUrl + 'index.php/' + url;
            let finalUrl = baseUrl + url;

            if (method == 'get') {
                // finalUrl = baseUrl + 'index.php/' + url + '?' + serializeQuery(dataObj);
                finalUrl = baseUrl + url + '/' + dataObj;
            }

            let options = {
                method: method,
                url: finalUrl,
                headers: {
                    // Authorization: `Bearer ${authStore.token}`
                }
            }

            if (method == 'post' || method == 'put') {
                options.data = dataObj;
            }

            res.value = await axios(options);
        } catch (e) {
            const response = e.response;

            if (isUnauthorized(response.status)) {
                noti(403, response.data.message);
            } else {
                if (isError(response.status)) {
                    var error_count = 0;
                    for (var dataError in response.data.errors) {
                        if (error_count == 0) {
                            error.value = {
                                status: response.status,
                                message: response.data.error[dataError][0]
                            }
                        }
                        error_count++;
                    }
                } else {
                    if (isUnknown(response.status)) {
                        error.value = {
                            status: response.status,
                            message: response.data.message
                        }
                        // location.reload();
                    }
                }
            }
        }
    }

    function isSuccess(res) {
        const status = typeof res === 'number' ? res : res.status;

        return successStatus.includes(status);
    }

    function isError(res) {
        const status = typeof res === 'number' ? res : res.status;

        return errorStatus.includes(status);
    }

    function isUnknown(res) {
        const status = typeof res === 'number' ? res : res.status;

        return unknownStatus.includes(status);
    }

    function isUnauthorized(res) {
        const status = typeof res === 'number' ? res : res.status;

        return unauthorizedStatus.includes(status);
    }

    function serializeQuery(params, prefix) {
        const query = Object.keys(params).map((key) => {
            const value = params[key];

            if (params.constructor === Array)
                key = `${prefix}[]`;
            else if (params.constructor === Object)
                key = (prefix ? `${prefix}[${key}]` : key);

            if (typeof value === 'object')
                return serializeQuery(value, key);
            else
                return `${key}=${encodeURIComponent(value)}`;
        });

        return [].concat.apply([], query).join('&');
    }

    if (isRef(url)) {
        await watchEffect(useAxios)
    } else {
        await useAxios()
    }

    return {
        res,
        error
    }
}