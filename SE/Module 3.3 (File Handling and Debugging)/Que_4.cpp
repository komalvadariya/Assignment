//WAP to find factorial using recursion.c:
#include <stdio.h>

int factorial(int n);

int main() 
{
    int num;
    printf("Enter a non-negative integer:\n");
    scanf("%d", &num);
    
    if (num < 0) 
	{
        printf("Error: Invalid input.\n");
        return 1;
    }
    
    int result = factorial(num);
    printf("The factorial of %d is: %d\n", num, result);
    return 0;
}

int factorial(int n) 
{
    if (n == 0) {
        return 1; // base case
    } 
	
	else 
	{
        return n * factorial(n - 1); // recursive case
    }
    return 0;
}
