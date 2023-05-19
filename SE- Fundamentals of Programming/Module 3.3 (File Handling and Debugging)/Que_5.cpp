//WAP to take two Array input from user and sort them in ascending or descending order as per user’s choice:


#include <stdio.h>

int main() {
    int arr1[100], arr2[100], n1, n2, i, j, temp;
    char order;

   
    printf("Enter the size of first array: ");   // Taking input arrays from the user
    scanf("%d", &n1);
    printf("Enter the elements of first array: ");
    for(i=0; i<n1; i++) {
        scanf("%d", &arr1[i]);
    }

    printf("Enter the size of second array: ");
    scanf("%d", &n2);
    printf("Enter the elements of second array: ");
    for(i=0; i<n2; i++) {
        scanf("%d", &arr2[i]);
    }

    
    printf("Enter 'a' for ascending order or 'd' for descending order: "); // Getting the user's choice for sorting order
    scanf(" %c", &order);

    // Sorting the arrays in the desired order
    if (order == 'a') {
        for(i=0; i<n1; i++) {
            for(j=i+1; j<n1; j++) {
                if(arr1[i] > arr1[j]) {
                    temp = arr1[i];
                    arr1[i] = arr1[j];
                    arr1[j] = temp;
                }
            }
        }
        for(i=0; i<n2; i++) {
            for(j=i+1; j<n2; j++) {
                if(arr2[i] > arr2[j]) {
                    temp = arr2[i];
                    arr2[i] = arr2[j];
                    arr2[j] = temp;
                }
            }
        }
    } else {
        for(i=0; i<n1; i++) {
            for(j=i+1; j<n1; j++) {
                if(arr1[i] < arr1[j]) {
                    temp = arr1[i];
                    arr1[i] = arr1[j];
                    arr1[j] = temp;
                }
            }
        }
        for(i=0; i<n2; i++) {
            for(j=i+1; j<n2; j++) {
                if(arr2[i] < arr2[j]) {
                    temp = arr2[i];
                    arr2[i] = arr2[j];
                    arr2[j] = temp;
                }
            }
        }
    }

    // Displaying the sorted arrays
    printf("Sorted first array: ");
    for(i=0; i<n1; i++) {
        printf("%d ", arr1[i]);
    }
    printf("\n");

    printf("Sorted second array: ");
    for(i=0; i<n2; i++) {
        printf("%d ", arr2[i]);
    }
    printf("\n");

    return 0;
}

