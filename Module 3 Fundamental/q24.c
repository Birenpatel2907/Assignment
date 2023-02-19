#include<stdio.h>
main()
{
       int b;
       printf("Enter number of subject: ");
       scanf("%d", &b);

       int mark[b];
       char sub[b][50];
       int max_marks = 100;
       int total = 0; 
       int max_total = max_marks * b;
       int passing_mark = 40;
       int passing_total = passing_mark * b;
       float percentage;


       for (int i = 0; i < b; i++)
       {
              printf("Enter %d subject name: ", i + 1);
              scanf("%s", sub[i]);
       }
       for (int i = 0; i < b; i++)
       {
              printf("Enter %s mark: ", sub[i]);
              scanf("%d", &mark[i]);
       }
       printf("\nSubject\t\t|\tMax_marks\t|\tPassing_Mark\t|\tMarks_Obtain\n\n");

       for (int i = 0; i < b; i++)
       {
              printf("%s\t\t|\t%d\t\t|\t%d\t\t|\t%d\n", sub[i], max_marks, passing_mark, mark[i]);
       }
       for (int i = 0; i < b; i++)
       {
              total = mark[i] + total;
       }


       percentage = total / b;

       printf("\nTotal\t\t|\t%d\t\t|\t%d\t\t|\t%d\n", max_total, passing_total, total);
       printf("Percentage is %f", percentage);

}