// Write a program to find out the max number from given array using function:

#include <stdio.h>

int findMax(int arr[], int size);                                    //function declation
	int N;
	printf("Enter the number:");
	scanf("%d", &N);

int arr[N] 

int main() 
{
    int size = sizeof(arr) / sizeof(arr[0]);
   
    int max = findMax(arr, size);                                    //function calling
    printf("The maximum number in the array is: %d\n", max);
    return 0;
}

int findMax(int arr[], int size) 									//function defination
{
	int i;

    int max = arr[0];
    for ( i = 1; i < size; i++) {
        if (arr[i] > max) 
		{
            max = arr[i];
        }
    }
    return max;
}
