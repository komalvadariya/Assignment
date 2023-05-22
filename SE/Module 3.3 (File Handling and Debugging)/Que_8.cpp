// WAP to reverse a string and check that the string is palindrome or not :

#include<stdio.h>
main()
{
	char name[10];
	int i, length=0, j, flag=0;
	printf("Name of String : ");
	scanf("%s",name);
		
	for(i=0;name[i]!='\0';i++)
		{
		length++;
		}

	printf("Rverse of String : ");
	
	for (i = length - 1; i >= 0; i--)
	    {
	    
	        printf("%c", name[i]);
	    }
	 for (i = 0, j = length - 1; i < length / 2; i++, j--)
	    {
	        if (name[i] != name[j])
	        {
	            flag = 1;
	            break;
	        }
	    }
	    
	    if (flag == 1)
	    {
	        printf("\n%s is not a palindrome\n", name);
	    }
	    else
	    {
	        printf("\n%s is a palindrome\n", name);
	    }
	    return 0;
	}
