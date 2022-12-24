import {
    useToast
} from 'vue-toastification'

const toast = useToast()

const options = {
    position: "top-right",
    timeout: 3500,
    closeOnClick: true,
    pauseOnFocusLoss: false,
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
    i: alertSwal('i'),
    s: alertSwal('s'),
    e: alertSwal('e'),
    swr: alertSwal('w')
}

function alertSwal(type) {
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
