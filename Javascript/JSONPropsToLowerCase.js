var localList = [];  // Our main list
var tempList = [];  // List that contain JSON data to convert its prop name to lower

tempList.forEach((data) => {
	var y = new Object(); // Create Temporary Object
	for(var x in data){
		y[x.toLowerCase()] = data[x]; // Convert Props Name to Lower Case, you can make it Upper Case too
	}
	// If you want to add custom data, add here before push
	// y.a = a;  
	
	localList.push(y);  // Push to variable
}); 