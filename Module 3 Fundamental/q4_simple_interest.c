#include<stdio.h>
main()
{
	int a,t;
	float r,ans;
	
	printf("\nEnter A: ");
	scanf("%d",&a);
	printf("\nEnter T: ");
	scanf("%d",&t);
	printf("\nEnter R: ");
	scanf("%f",&r);
	
	ans=a*t*r/100;
	printf("\nAnswer is:%f",ans);
}
