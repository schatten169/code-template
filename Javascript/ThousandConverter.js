let numbers = "a12312@31!12312131241226531/7??2*5\n314<br>77862318513268735185418528713815361735125310020030040 0500600700800 9 00";
let x = numbers.replace(/\D/g,'');
x = x.split( /(?=(?:...)*$)/ );
x = x.join(".");

console.log(x);