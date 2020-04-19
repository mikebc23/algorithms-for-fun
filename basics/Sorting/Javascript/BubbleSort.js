/*
 * Basic example of Bubble Sort
 *
 * Sample array: 23, 8, 15, 17, 4, 40, 11, 31
 * Complexity: O (2^n)
 */
 
function sortBubble(numbers) {

    for(i=numbers.length-1; i>=0;i--) {
        for(j=0; j < numbers.length-1; j++) {
            if(numbers[j] > numbers[j+1]) {
                temp = numbers[j];
                numbers[j] = numbers[j+1];
                numbers[j+1] = temp;
            }
        }
        //console.log("Current state: " + numbers);
    }

    return numbers;
}

var numbers = [6,39,90,13,2,96,87,36,41];
result = sortBubble(numbers)
console.log("Result: " + result)