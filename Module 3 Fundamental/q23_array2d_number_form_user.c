#include<stdio.h>
void main()
{
    int s,a;

    printf("Enter a how many array: ");
    scanf("%d",&s);
    printf("Enter a how many element of array: ");
    scanf("%d",&a);

    int numbers[s][a];

    for(int i=0; i<s; i++)
    {
        for(int j=0; j<a; j++)
        {
         printf("Enter value for numbers[%d][%d]:", i, j);
         scanf("%d", &numbers[i][j]);
        }
    }

    printf("Two  array elements:\n");
    for(int i=0; i<s; i++) 
    {
      for(int j=0; j<a; j++)
       {
         printf("%d ", numbers[i][j]);   
       }
         printf("\n");
    }
}
