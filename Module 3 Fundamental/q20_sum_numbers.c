#include <stdio.h>
void main()
{
    int num, sum = 0, a;
    printf("Enter a number: ");
    scanf("%d", &num);
 
    while (num != 0)
    {
        a = num % 10;
        sum = sum + a;
        num = num / 10;
    }
    printf("Sum of digits of the number is %d", sum);
 
}