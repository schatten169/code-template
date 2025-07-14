function CapitalizeFirstLetter(str) {
    return str.charAt(0).toUpperCase() + str.slice(1);
}

function CapitalizeEachWord(str){
    let words = str.split(" ");
    words.forEach(word => {
        word.charAt(0).toUpperCase() + word.slice(1);
    });
}

console.log(CapitalizeFirstLetter("helLlo"));
console.log(CapitalizeFirstLetter("helLlo Wo0Ld"));
console.log(CapitalizeFirstLetter(("helLlo Wo0Ld").toLowerCase()));