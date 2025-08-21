/**
 * Check breakpoint of your page (browser)
 * Example used is bootstrap
 */

/* Check Breakpoint State */
function GetCurrentBreakpoint() {
    if (window.matchMedia('(max-width: 575.98px)').matches)
        return 'xs';
    else if (window.matchMedia('(max-width: 767.98px)').matches)
        return 'sm';
    else if (window.matchMedia('(max-width: 991.98px)').matches)
        return 'md';
    else if (window.matchMedia('(max-width: 1199.98px)').matches)
        return 'lg';
    else
        return 'xl';
}