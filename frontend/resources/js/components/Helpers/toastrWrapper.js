import {
    useToast
} from 'vue-toastification'

const toast = useToast()

const options = {
    position: "top-right",
    timeout: 3000,
    closeOnClick: true,
    pauseOnFocusLoss: true,
    pauseOnHover: true,
    draggable: true,
    draggablePercent: 2,
    showCloseButtonOnHover: true,
    hideProgressBar: false,
    closeButton: "button",
    icon: true,
    rtl: false
};

export const toastr = {
    i: noti('i'),
    s: noti('s'),
    e: noti('e'),
    w: noti('w')
}

function noti(type) {
    return (message) => {
        return eval(type + '("' + message + '")');
    }
}

function i(message) {
    return toast.info(message, options);
}

function s(message) {
    return toast.success('Great! ' + message, options);
}

function e(message) {
    return toast.error('Ops! ' + message, options);
}

function w(message) {
    return toast.warning(message, options);
}