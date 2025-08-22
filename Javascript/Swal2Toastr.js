/**
 * Toastr using SweetAlert2
 * 
 * REQUIRE: SweetAlert2 library
 * TODO: change class
 */


/**
 * How to use option
 * 
 * var option = { ...toast };
 * option.timer = 2000;
 * option.didClose = function() {
 *      // did something after toast done
 *      alert('hohoho');
 * };
 */

/* Toast object config */
let ToastConfig = {
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
};

/* Toastr function */
let toastr = new Object({
    info: (message = "", option = { ...toast }) => {
        Swal.mixin(option).fire({
            icon: "info",
            text: message,
            customClass: {
                icon: "text-white border-white border-3",
                popup: "bg-info",
                htmlContainer: "text-white"
            }
        });
    },
    success: (message = "", option = { ...toast }) => {
        Swal.mixin(option).fire({
            icon: "success",
            text: message,
            customClass: {
                popup: "bg-success",
                htmlContainer: "text-white"
            }
        });
    },
    warning: (message = "", option = { ...toast }) => {
        Swal.mixin(option).fire({
            icon: "warning",
            text: message,
            customClass: {
                icon: "text-white border-white border-3",
                popup: "bg-warning",
                htmlContainer: "text-white"
            }
        });
    },
    error: (message = "", option = { ...toast }) => {
        Swal.mixin(option).fire({
            icon: "error",
            text: message,
            customClass: {
                popup: "bg-danger",
                htmlContainer: "text-white"
            }
        });
    },
    question: (message = "", option = { ...toast }) => {
        Swal.mixin(option).fire({
            icon: "question",
            text: message,
        });
    },
});