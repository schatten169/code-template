/** 
 * Handle sidebar toggle state, saved using localstorage 
 * 
 * REQUIRE: get breakpoint function from GetBreakpoint.js
 * TODO: change localstorage key and class selector
*/

/* Handle sidebar state */
$(document).ready(function () {
    var sidebarState = (GetCurrentBreakpoint() == 'lg' || GetCurrentBreakpoint() == 'xl') && localStorage.getItem("sidebarOpen")
        ? localStorage.getItem("sidebarOpen")
        : "true";

    if (sidebarState == "true")
        $("body").removeClass("sb-sidenav-toggled");
    else
        $("body").addClass("sb-sidenav-toggled");
});


/* Handle sidebar button */
$("#sidebarToggle").on("click", function (e) {
    e.preventDefault();

    var sidebarState = (GetCurrentBreakpoint() == 'lg' || GetCurrentBreakpoint() == 'xl') && localStorage.getItem("sidebarOpen")
        ? localStorage.getItem("sidebarOpen")
        : "true";

    if (sidebarState == "false") {
        sidebarState = "true";
        if (GetCurrentBreakpoint() == 'lg' || GetCurrentBreakpoint() == 'xl')
            localStorage.setItem("sidebarOpen", "true");
    } else {
        sidebarState = "false";
        if (GetCurrentBreakpoint() == 'lg' || GetCurrentBreakpoint() == 'xl')
            localStorage.setItem("sidebarOpen", "false");
    }
});