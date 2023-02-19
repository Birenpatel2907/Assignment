#include<stdio.h>
main()
{
	
	
	int a,b;
	float ans;
	
	printf("\nEnter a Numner : ");
	scanf("%d",&a);
	printf("\nEnter Another Number: ");
	scanf("%d",&b);
	
	ans = a + b;
	printf("\nAddition of a & b = %f",ans);

	ans = a  - b;
	printf("\nSubtraction of a & b = %f",ans);
	
	ans = a * b;
	printf("\nMultiplication of a & b = %f",ans);
	
	ans = (float)a / (float)b;
	printf("\nDivision of a & b = %f",ans);
	
	ans = a%b;
	printf("\nReminder = %f",ans);
}