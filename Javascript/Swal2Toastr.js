/**
 * Toastr using SweetAlert2
 * 
 * REQUIRE: SweetAlert2 library
 * TODO: change class
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
let Toastr = new Object({
    info: (message = "", timer = 5000) => {
        var t = { ...ToastConfig };
        t.timer = timer;

        Swal.mixin(t).fire({
            icon: "info",
            text: message,
            customClass: {
                icon: "text-white border-white border-3",
                popup: "bg-info",
                htmlContainer: "text-white"
            }
        });
    },
    success: (message = "", timer = 5000) => {
        var t = { ...ToastConfig };
        t.timer = timer;

        Swal.mixin(t).fire({
            icon: "success",
            text: message,
            customClass: {
                popup: "bg-success",
                htmlContainer: "text-white"
            }
        });
    },
    warning: (message = "", timer = 5000) => {
        var t = { ...ToastConfig };
        t.timer = timer;

        Swal.mixin(t).fire({
            icon: "warning",
            text: message,
            customClass: {
                icon: "text-white border-white border-3",
                popup: "bg-warning",
                htmlContainer: "text-white"
            }
        });
    },
    error: (message = "", timer = 5000) => {
        var t = { ...ToastConfig };
        t.timer = timer;

        Swal.mixin(t).fire({
            icon: "error",
            text: message,
            customClass: {
                popup: "bg-danger",
                htmlContainer: "text-white"
            }
        });
    },
    question: (message = "", timer = 5000) => {
        var t = { ...ToastConfig };
        t.timer = timer;

        Swal.mixin(t).fire({
            icon: "question",
            text: message,
        });
    },
});