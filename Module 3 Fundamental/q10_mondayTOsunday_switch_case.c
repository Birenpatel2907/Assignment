#include<stdio.h>
main()
{
	int n;   //char c
	printf("Enter a number between 1to7: ");
	scanf("%d",&n);   //%c,&c
	
	switch(n)                  //switch(c)
	{
		case 1:      //case 1: = case 'a':
			printf("\nSunday!");
			break;
		case 2:
			printf("\nMonday!");
			break;
		case 3:
			printf("\nTuesday!");
			break;
		case 4:
			printf("\nWednesday!");
			break;			
		case 5:
			printf("\nThursday!");
			break;	
		case 6:
			printf("\nFriday!");
			break;	
		case 7:
			printf("\nSaterday!");
			break;	
		default:
			printf("\nInvalide Number!!");	
	}
}