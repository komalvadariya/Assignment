//WAP to make addition, Subtraction and multiplication of two matrix using 2-D Array:

#include<stdio.h>

int main()
{
	int i,j,a[2][2],b[2][2],sum[2][2],k,mul[2][2],sub[2][2];
	printf("Enter Matrix : 1\n\n");
	for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
			printf("Enter Number : ");
			scanf("%d",&a[i][j]);
		}
	}
	printf("Enter Matrix : 2\n\n");
	for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
			printf("Enter Number : ");
			scanf("%d",&b[i][j]);
		}
	}
	printf("Matrix : 1\n");
	for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
			printf("%d",a[i][j]);
		}
		printf("\n");
	}
	printf("\n");
	printf("Matrix : 2\n");
	for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
			printf("%d",b[i][j]);
		}
		printf("\n");
	}
	printf("\n");
	for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
			mul[i][j]=0;
			for(k=0;k<2;k++)
			{
				mul[i][j]+=a[i][k]*b[k][j];
			}
		}
	}
	
	printf("Both are Matrix Multiplication : \n");
	for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
			printf("%d\t",mul[i][j]);
		}
		printf("\n");
	}
	printf("\n");
	for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
			sum[i][j]=0;
			for(k=0;k<2;k++)
			{
				sum[i][j]+=a[i][k]+b[k][j];
			}
		}
	}
	printf("Both are Matrix Addition : \n");
	for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
			printf("%d\t",sum[i][j]);
		}
		printf("\n");
	}
	printf("\n");
	for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
			sub[i][j]=0;
			for(k=0;k<2;k++)
			{
				sub[i][j]=a[i][k]-b[k][j];
			}
		}
	}
	printf("Both are Matrix Substraction : \n");
	for(i=0;i<2;i++)
	{
		for(j=0;j<2;j++)
		{
			printf("%d\t",sub[i][j]);
		}
		printf("\n");
	}
	return 0;
}
