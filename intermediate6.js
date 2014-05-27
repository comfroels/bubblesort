var x = [4,6,2,7,9,1]

var notSorted = true;

while (notSorted) {
	var count = 0
	for (var i = 1; i < x.length; i++) {
		
		if (x[i] < x[i - 1]) {
			var temp = x[i - 1];
			x[i - 1] = x[i];
			x[i] = temp;
			count += 1;
		}
	}
	if (count === 0) {
		notSorted = false;
	}
}

console.log(x);