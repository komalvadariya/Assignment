// WAP to find area of circle:

#include<stdio.h>
main()
{
	float pie = 3.14;
	int radius;
	
	printf("Enter the radius of circle : ");
	scanf("%d", &radius);
	
	printf("The radius of the circle is %d \n", radius);
	
	float area = (float) (pie*radius*radius);
	
	printf("The area of the given circle is %f", area);
	
	
}


