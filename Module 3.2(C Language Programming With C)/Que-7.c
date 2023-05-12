// WAP to print Fibonacci series up to given numbers:

#include<stdio.h>
main()
{
	int i,n;
	int t1 = 0 , t2 = 1 , t3;
	printf("Enter the numbers : ");
	scanf("%d", &n);
	printf("Fibonacci series : %d %d", t1,t2 );
	
	for(i=2;i<n;i++)
	{
		
		t3=t1+t2;
		t1=t2;
		t2=t3;
		printf(" %d ",t3);
	}
}
