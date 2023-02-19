#include<stdio.h>
main()
{
	int a,b;       //10,20
	printf("\nEnter A: ");
	scanf("%d",&a);
	printf("\nEnter B: ");
	scanf("%d",&b);
	
	a=a+b;     //10+20=30
	b=a-b;     //30-20=10
	a=a-b;     //30-10=20
	
	printf("\nNew A:%d",a);
	printf("\nNew B:%d",b);
}