// WAP Find out length of string without using inbuilt function:

#include<stdio.h>
main()
{
	char name[10];
	int i, length=0;
	
	printf("Name of String : ");
	scanf("%s",name);
	
	for(i=0;name[i]!='\0';i++)
		{
		length++;
		}
		
	printf("Length of string :%d\n",length);


return 0;	
}
