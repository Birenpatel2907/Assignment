#include<stdio.h>
main()
{

     float hieght,width, area;

     printf("Enter a value hieght: ");
     scanf("%f",&hieght);
      printf("Enter a value width: ");
     scanf("%f",&width);

     area = 0.5 * ( hieght * width );

     printf("Area = %f\n",area);

     return 0;
}