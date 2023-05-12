//  WAP to find area of rectangle:

#include<stdio.h>
main()
{
	float width,length,area;
	
	printf("\n Please Enter the width of a rectangle :");
	scanf("%f", &width);
	
	printf("\n Please Enter the length of a rectangle :");
	scanf("%f", &length);
	
	area=length*width;
	
	printf("\n The area of a rectangle = %.2f", area);
}
