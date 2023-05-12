// patterns:


#include<stdio.h>
main()
{
	int i,j,num=1;
	for(i=1;i<=5;i++)
	{
		for(j=1;j<=i;j++)
		{
			printf("%d\t",num);
			num++;
		}
		printf("\n"); 
	}
}
