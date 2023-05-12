#include <stdio.h>
int main()
{
    int num1, num2, addition, subtraction, multiply;
    float divide;

    printf("Enter Number 1\n");
    scanf("%d", &num1);
    printf("Enter Number 2\n");
    scanf("%d", &num2);
    addition       = num1 + num2 ;
    subtraction = num1 - num2;
    multiply = num1 * num2;
    divide     = num1 / (float)num2;   
    printf("Addition = %d\n",addition);
    printf("Subtraction = %d\n",subtraction);
    printf("Multiplication = %d\n",multiply);
    printf("Division = %.2f\n",divide);

    return 0;
}
