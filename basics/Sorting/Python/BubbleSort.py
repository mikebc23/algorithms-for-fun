"""
Bubble sort algorithm

Basic example of Bubble Sort
Sample array: 23, 8, 15, 17, 4, 40, 11, 31
Complexity: O (2^n)
"""

def bubleSort(dataset):
	#TODO
	for i in range(len(dataset)-1,0,-1):
		for j in range(i):
			if dataset[j] > dataset[j+1]:
				temp = dataset[j]
				dataset[j] = dataset[j+1]
				dataset[j+1] = temp

	#	print ("Current state: ", dataset)



def main():
	list1 = [6,39,90,13,2,96,87,36,41]
	bubleSort(list1)
	print("Result: ", list1)

if __name__ == "__main__":
	main()

