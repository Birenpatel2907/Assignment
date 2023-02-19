#include<stdio.h>
main()
{
	int days;
	float year;
	
	printf("\nEnter Days: ");
	scanf("%d",&days);
	
	year=days/365;
	printf("\nYear is:%f",year);
}