#include <stdio.h>
void main() 
{
  int n, arr[100];
  printf("Enter the number of elements: ");
  scanf("%d", &n);

  for (int i = 0; i < n; ++i)
   {
    printf("Enter number%d: ", i + 1);
    scanf("%d", &arr[i]);
  }


  for (int i = 1; i < n; ++i)
   {
    if (arr[0] < arr[i])
     {
      arr[0] = arr[i];
    }
  }

  printf("MAX NUMBER = %d", arr[0]);

}