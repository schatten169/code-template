// Cek apakah null atau spasi kosongan
function IsNullOrWhiteSpace(str) {
  return str === null || str.match(/^ *$/) !== null;
}

let your_words = " hohoHo";
console.log(IsNullOrWhiteSpace(your_words));