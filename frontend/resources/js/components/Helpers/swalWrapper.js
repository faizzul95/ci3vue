import Swal from "sweetalert2";

export const swal = {
    alertModal: dialog('alertModal'),
    infoModal: dialog('infoModal'),
}

function dialog(type) {
    return (params1, params2 = '') => {
        return eval(type + '("' + params1 + '","' + params2 + '")');
    }
}

function alertModal(actionType = 'submit', customText) {
    var textDisplay = (actionType == 'submit') ? "Form will be submitted!" : "You won't be able to revert this!";

    if (customText != '') {
        textDisplay = customText;
    }

    return Swal.fire({
        title: 'Are you sure?',
        html: textDisplay,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, Confirm!',
        reverseButtons: true,
        showLoaderOnConfirm: true,
        customClass: {
            container: 'my-swal',
        },
        preConfirm: () => {},
        allowOutsideClick: () => !Swal.isLoading()
    }).then(async (result) => {
        if (result.isConfirmed) {
            return true;
        } else {
            return false;
        }
    });
}

function infoModal(header, text) {
    return Swal.fire({
        title: header,
        html: text,
        icon: "info",
        showCancelButton: false,
        showCloseButton: true,
        cancelButtonColor: '#d33',
        reverseButtons: true,
        customClass: {
            container: 'my-swal',
        },
    }).then((result) => {
        return result;
    });
}
