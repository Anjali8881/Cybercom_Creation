var years = [1990,1965,1937,2005,1998];

	 function arrayCal(arr,fn){
	 	var arrRes = [];
	 	for(var i = 0; i < arr.length; i++){
             arrRes.push(fn(arr[i])); 
             //pushes the values return by fn(calAge) into arrRes
	 	}
	 	return arrRes;
	 };	

	 function calAge(age){
	 	return 2016 - age;
	 }

     var result = arrayCal(years,calAge);
      // arr =years & fn = calAge();
     console.log(result); 
     //prints the ages