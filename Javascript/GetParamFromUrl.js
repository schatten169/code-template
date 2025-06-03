function GetParamFromUrl(paramName) {
    let p_url = new URL(window.location.href);
    let p_params = new URLSearchParams(p_url.search);
    return p_params.get(paramName);
}

console.log(GetParamFromUrl("id"));