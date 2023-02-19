#include<stdio.h>
main()
{
    int i,j;
 
    for(i=1;i<=5;i++)
    {
        for(j=1;j<=i;j++)
        {
            printf("%c ",(char)(j+64));
        }
 
        printf("\n");
    }
}