// Filtering object value yang memiliki criteria (array filter php)
function FindInObject(object, criteria) {
	return object.filter(function (obj) {
		return Object.keys(criteria).every(function (c) {
			return obj[c] == criteria[c];
		});
	});
}

let data = [
	{
		value: false,
		text: "aaa",
	},
	{
		value: true,
		text: "bbb",
	},
];
console.log(FindInObject(data, { value: true }));