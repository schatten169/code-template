var separator_thousand = '.';
var separator_decimal = ',';

// Add this to on keyup input
function thousandFormatter(numbers) {
    var lastChar = numbers.slice(-1); // get last character
    var arr_numbers = numbers.split(separator_decimal); // split by decimal separator 
    var x = arr_numbers[0] ? arr_numbers[0].replace(/\D/g, '') : ''; // we want to add thousand separator here
    var y = arr_numbers[1] ? arr_numbers[1].replace(/\D/g, '') : ''; // then append decimal after separator

    // if x is empty then we dont want to calculate
    if (x.length > 0) {
        x = x.split(/(?=(?:...)*$)/); // split by regex to add thousand separator
        x = x.join(separator_thousand); // rejoin splitted array with thousand separator
        x = y || lastChar == ',' ? x + separator_decimal + y : x; // check if has decimal, or last character is decimal separator
    }

    return x; // rewrite current value to calculated result
}

// Add this to on change input
function separatorFormatter(numbers) {
    // goals => remove separator when there is no decimal
    var x = numbers.split(separator_decimal); // split by decimal separator
    x = x.filter(a => a); // remove empty array
    x = x.join(separator_decimal); // rejoin array

    return x; // rewrite current value to calculated result
}

console.log(thousandFormatter('9087728189162963'));
console.log(thousandFormatter('13128103ljshe179gaks,9162908621'));

console.log(separatorFormatter('90877281,0937'));
console.log(separatorFormatter('90123780,'));

console.log(separatorFormatter(thousandFormatter('7381963xiuqgwej,1023790,18293lasjdh')))