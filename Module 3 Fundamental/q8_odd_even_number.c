#include<stdio.h>  
main()  
{  
    int n;  
  
    printf("Enter an integer number: ");  
    scanf("%d", &n);  
  
    if(n % 2 == 0) 
    {
    	printf("%d is Even number\n", n);
	}
	else
	{
		printf("%d is Odd  number\n", n);
	} 
    
}  