// patterns:


#include<stdio.h>
main()
{
	char i,j;
	for(char i='A';i<='E';i++)
	{
		for(j='A';j<=i;j++)
		{
			printf("%c",i);
		}
		printf("\n"); 
	}
}
