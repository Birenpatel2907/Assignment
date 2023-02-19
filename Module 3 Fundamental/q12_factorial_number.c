#include<stdio.h>
main()
{
	int n,i,ans=1;
	
	printf("Enter a number to find Factorial : ");
	scanf("%d",&n);
	
	for(i=n;i>0;i--)
	{
		ans = ans*i;
	}
	printf("\nFactorial = %d",ans);
}