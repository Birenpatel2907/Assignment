#include<stdio.h>
main()
{ 
	int h,w,r,n;
	float ans;
	
	printf("\n\nSelect Operation to Perform: ");
	printf("\n1. Circle \n2. Triangle \n3. Ractangle\n\n");
	scanf("%d",&n);
	
	
	switch(n)
	{
		case 1:
			printf("\nEnter a Radius: ");
			scanf("%d",&r);
			ans=3.14 * (r*r);
			printf("\nCircle = %f",ans);
			break;
		case 2:
			printf("\nEnter a height: ");
			scanf("%d",&h);
			printf("\nEnter a Base: ");
			scanf("%d",&w);
			ans=0.5 * (h*w);
			printf("\nTriangle = %f",ans);
			break;
		case 3:
			printf("\nEnter a height: ");
			scanf("%d",&h);
			printf("\nEnter a Width: ");
			scanf("%d",&w);
			ans=h * w;
			printf("\nRactangle = %f",ans);
			break;
		default:
			printf("\nInvalid Input!!");	
		 	
	}
}