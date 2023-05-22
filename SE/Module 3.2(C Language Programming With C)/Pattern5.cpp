//patterns:


#include<stdio.h>
main()
{
	char i,j;
	char num='A';
	for(i=1;i<=5;i++)
	{
		for(j=1;j<=i;j++)
		{
			printf("%c",num);
			++num;
		}
		printf("\n"); 
	}
}
