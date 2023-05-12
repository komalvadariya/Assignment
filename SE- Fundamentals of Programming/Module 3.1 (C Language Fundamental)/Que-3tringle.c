// WAP to find area of triangle:

#include<stdio.h>
main()
{
	float base,height,area;
	
	printf("\n Please Enter the base of a triangle :");
	scanf("%f", &base);
	
	printf("\n Please Enter the height of a triangle :");
	scanf("%f", &height);
	
	area = (base*height) / 2;
	
	printf("\n The area of a triangle using base and height = %.2f\n", area);
	
}
