//WAP of Addition, Subtraction, Multiplication and Division using Switch case.(Must Be Menu Driven):

#include <stdio.h>

main() 
{
    int choice;
    float num1, num2, result;

    printf("Enter two numbers:\n");
    scanf("%f %f", &num1, &num2);

    printf("\nMENU\n");
    printf("1. Addition\n");
    printf("2. Subtraction\n");
    printf("3. Multiplication\n");
    printf("4. Division\n");
    printf("Enter your choice (1-4):\n");
    scanf("%d", &choice);

    switch (choice) {
        case 1:
            result = num1 + num2;
            printf("The sum of %.2f and %.2f is: %.2f\n", num1, num2, result);
            break;
        case 2:
            result = num1 - num2;
            printf("The difference of %.2f and %.2f is: %.2f\n", num1, num2, result);
            break;
        case 3:
            result = num1 * num2;
            printf("The product of %.2f and %.2f is: %.2f\n", num1, num2, result);
            break;
        case 4:
            if (num2 != 0) {
                result = num1 / num2;
                printf("The quotient of %.2f and %.2f is: %.2f\n", num1, num2, result);
            } else {
                printf("Error: Division by zero.\n");
            }
            break;
        default:
            printf("Error: Invalid choice.\n");
            break;
    }

 return 0;   
}

