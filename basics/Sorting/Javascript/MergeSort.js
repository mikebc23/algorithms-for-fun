/*
 * Basic example of Merge Sort
 * Divide-and-conquer alrorithm
 * Complexity: O (n log n)
 */

function mergeSort (list) {

	if (list.length < 2) {
		return list; 
	}

	var middle   = Math.floor(list.length / 2);
	var leftSet  = mergeSort(list.slice(0, middle));
	var rightSet = mergeSort(list.slice(middle));

	var resultList = [];
	
	while (leftSet.length > 0 && rightSet.length > 0)
		resultList.push(leftSet[0] < rightSet[0]? leftSet.shift() : rightSet.shift());
	
	return resultList.concat(leftSet.length? leftSet : rightSet);

}

const list = [6,5,3,1,8,7,2,4,2,5,1,2,3] 

console.log("Original: " + list) 
console.log("Result:   " + mergeSort(list)) 
