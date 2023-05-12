/* WAP to make simple calculator (operation include Addition, Subtraction,
Multiplication, Division, modulo): */

#include <stdio.h>
main()
 {
 
  	
int a,b,c,num;
  	
  	 printf("\n+:Addition.\n-:Substraction.\n*:Multiplication.\n/:Division.\n");
  
  	
  	
  	
	printf("enter your first number :");
  	scanf("%d",&a);
  	printf("enter your second number :");
	scanf("%d",&b);
	fflush(stdin);
  	printf("enter your choice :");
  	scanf("%s",&num);
  	
  	
  	switch (num){
  		
  		
  		case'+':
  			c=a+b;
  			printf("add = %d",c);
  			break;
  			
  		case'-':
  			c=a-b;
  			printf("sub = %d",a-b);
  			break;
  			
  		case'*':
  			c=a*b;
  			printf("mul = %d",c);
  			break;
  			
  		case'/':
  			c=a/b;
  			printf("div = %d",c);
  			break;
  			
  		
  			
	  }
  }

 
