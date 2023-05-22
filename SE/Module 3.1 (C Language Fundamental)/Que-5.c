// WAP to check if the given year is a leap year or not:

#include<stdio.h>
main()
{
	int year;
	printf("\n Please Enter any year you wish \n");
	scanf("%d", &year);
	
	if(year%4 == 0)
	{
		if(year%100 == 0)
		{
			if(year%400 == 0)
			printf("\n %d is a leap year.", year);
			else
			printf("\n %d is not the leap year.", year);
		}
		else
		printf("\n %d is a leap year.", year);
	}
	else
	printf("\n %d is not the leap year.", year);
}
