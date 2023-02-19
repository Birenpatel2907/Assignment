#include<stdio.h>
main()
{
	int y;
	printf("\nEnter a Year: ");
	scanf("%d",&y);
	
/*	if(y%4==0)
	{
		if(y%100==0)
		{
			if(y%400==0)
			{
				printf("\n Leap Year!!");
			}
			else
			{
				printf("\n Not Leap Year!!");	
			}
		}
		else
		{
			printf("\n Leap Year!!");
		}
	}
	else
	{
		printf("\n Not Leap Year!!");
	}*/
	
	if((y%4==0 && y%100!=0) || y%400==0)
	{
		printf("\n Leap Year!!");
	}
	else
	{
		printf("\n Not Leap Year!!");
	}
}