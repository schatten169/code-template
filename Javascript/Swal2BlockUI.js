/**
 * Block UI using SweetAlert2
 * Unblock using close function
 * 
 * REQUIRE: SweetAlert2 library
 */

/* Block UI object config */
let BlockUIConfig = {
    title: "Loading",
    html: "",
    timer: 0,
    allowOutsideClick: false,
    allowEscapeKey: false,
    didOpen: () => {
        Swal.showLoading();
    },
};

/* Block UI function */
let BlockUI = {
    block: () => {
        var bconf = { ...BlockUIConfig };
        Swal.mixin(bconf).fire();
    },
    close: () => {
        Swal.close();
    },
}