function CapitalizeFirstLetter(str, lower = false) {
    if (lower == true) str = str.toLowerCase();
    return str.charAt(0).toUpperCase() + str.slice(1);
}

function CapitalizeEachWord(str, lower = false) {
    if (lower == true) str = str.toLowerCase();
    var words = str.split(" ");
    
    return words.map((w) => {
        return w.charAt(0).toUpperCase() + w.slice(1);
    }).join(' ');
}

console.log(CapitalizeFirstLetter("helLlo"));
console.log(CapitalizeFirstLetter("helLlo Wo0Ld"));
console.log(CapitalizeFirstLetter(("helLlo Wo0Ld", true)));
console.log(CapitalizeEachWord("helLlo Wo0Ld"));