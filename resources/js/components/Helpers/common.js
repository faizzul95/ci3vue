import {
    toastr
} from "./toastrWrapper";

import {
    callApiWrapper
} from "./callApiWrapper";

async function callApi(method, url, dataObj = null) {

    const {
        res,
        error
    } = await callApiWrapper(method, url, dataObj);

    return {
        res,
        error
    }
}

function noti(code, text = 'Something when wrong') {
    if (isDef(code)) {
        if (isSuccess(code))
            toastr.s(text);
        else if (isError(code) || isUnauthorized(code))
            toastr.e(text);
    } else {
        toastr.e(text);
    }
}

function countData(data) {
    if (isset(data)) {
        if (isArray(data))
            return data.length;
        else if (isObject)
            return Object.keys(data).length;
        else
            return 0;
    } else {
        return 0;
    }
}

function retrieve(res) {
    if (isDef(res)) {
        return isset(res.value.data) ? res.value.data : '';
    } else {
        return '';
    }
}

function isSuccess(res) {
    if (isDef(res)) {
        const successStatus = [200, 201, 302];
        const status = typeof res === 'number' ? res : res.value.status;
        return successStatus.includes(status);
    } else {
        return false;
    }
}

function isError(res) {
    if (isDef(res)) {
        const errorStatus = [400, 404, 419, 422, 500];
        const status = typeof res === 'number' ? res : res.value.status;
        return errorStatus.includes(status);
    } else {
        return false;
    }
}

function isUnauthorized(res) {
    if (isDef(res)) {
        const unauthorizedStatus = [401, 403];
        const status = typeof res === 'number' ? res : res.value.status;
        return unauthorizedStatus.includes(status);
    } else {
        return false;
    }
}

function array_push(arrayData = null, newData = null) {
    return arrayData.push(newData);
}

function implode(arrayData = null, delimiter = ',') {
    return arrayData.join(delimiter);
}

function explode(data = null, delimiter = ',') {
    return data.split(delimiter);
}

function trimData(text = null) {
    if (text != null && text != '')
        return typeof text === 'string' ? text.trim() : text;
    else
        return null;
}

function isArray(val) {
    return Array.isArray(val) ? true : false;
}

function isObject(obj) {
    return obj !== null && typeof obj === 'object'
}

function isWeekend(date = new Date()) {
    return date.getDay() === 6 || date.getDay() === 0;
}

function getCurrentTime() {
    var today = new Date();
    var hh = today.getHours();

    if (hh < 10) {
        hh = '0' + hh
    }
    return hh + ":" + today.getMinutes() + ":" + today.getSeconds();
}

function getCurrentDate() {

    // Use Javascript
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth() + 1; //January is 0 so need to add 1 to make it 1!
    var yyyy = today.getFullYear();
    if (dd < 10) {
        dd = '0' + dd
    }
    if (mm < 10) {
        mm = '0' + mm
    }

    return yyyy + '-' + mm + '-' + dd;
}

function maxLengthCheck(object) {
    if (object.value.length > object.maxLength)
        object.value = object.value.slice(0, object.maxLength)
}

function isNumeric(evt) {
    var theEvent = evt || window.event;
    var key = theEvent.keyCode || theEvent.which;
    key = String.fromCharCode(key);
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }
}

function isset(variable_name) {
    if (isDef(variable_name)) {
        return true;
    }

    return false;
}

function isUndef(v) {
    return typeof v === undefined || v === null
}

function isDef(v) {
    return typeof v !== undefined && v !== null
}

function isTrue(v) {
    return v === true
}

function isFalse(v) {
    return v === false
}

function loadingBtn(id, display = false, text = "<i class='fa fa-save me-2'></i> Save") {
    document.getElementById(id).innerHTML = text;
    if (display) {
        document.getElementById(id).setAttribute("disabled", true);
    } else {
        document.getElementById(id).removeAttribute("disabled");
    }
}

function actionNoti(code, method) {
    var text = {
        'post': isSuccess(code) ? 'Save successfully' : 'Failed to Save',
        'put': isSuccess(code) ? 'Update successfully' : 'Failed to Update',
        'patch': isSuccess(code) ? 'Update successfully' : 'Failed to Update',
        'delete': isSuccess(code) ? 'Remove successfully' : 'Failed to removed',
    };
    noti(code, text[method]);
}

function urlCheck(data) {
    var pattern = /^https:\/\//i
    if (pattern.test(data)) {
        return true;
    } else {
        return false;
    }
}

function imageUrl(image) {
    return urlCheck(image) == true ?
        image :
        asset(image);
}

function asset(path) {
    var base_path = window._asset || '';
    return base_path + path;
}

function fileUrl(data, file_compression_type, default_image_if_image_not_available) {
    // console.log('fileUrl data', data);
    const fileCompression = {
        full_size: 0,
        compressed: 1,
        thumbnail: 2,
    };

    if (data) {
        if (data.file_path_is_url) {
            return data.file_path;
        } else {
            if (file_compression_type != 'full_size' && data.file_compression >= fileCompression[file_compression_type]) {
                return asset(data.file_folder + '/' + data.file_name + '_' + file_compression_type + data.file_extension);
            }
            return asset(data.file_path);
        }
    }
    // console.log('fileUrl', default_image_if_image_not_available);
    if (isDef(default_image_if_image_not_available)) {
        if (urlCheck(default_image_if_image_not_available)) {
            return default_image_if_image_not_available;
        }
        return asset(default_image_if_image_not_available)
    } else {
        return asset('images/default-user.png');
    }
}

export {
    isSuccess,
    isError,
    isUnauthorized,
    isset,
    array_push,
    implode,
    explode,
    trimData,
    isArray,
    isWeekend,
    getCurrentTime,
    getCurrentDate,
    maxLengthCheck,
    isNumeric,
    isObject,
    isUndef,
    isDef,
    isTrue,
    isFalse,
    callApi,
    countData,
    loadingBtn,
    noti,
    actionNoti,
    urlCheck,
    imageUrl,
    asset,
    retrieve,
    fileUrl,
}