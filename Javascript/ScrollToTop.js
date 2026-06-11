/* Back to top function */
// classic
function backToTop() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

// Alternative
function backToTop(selector = '#content') {
    $(selector).animate({ scrollTop: 0 });
}

// Handle show scroll button when scrolled
// Code below can be used for any scrollable component
$(document).ready(function () {
    $("#content").scroll(function () {
        if ($(this).scrollTop() > 0)
            $("#backTop").removeClass("d-none");
        else
            $("#backTop").addClass("d-none");
    });
});