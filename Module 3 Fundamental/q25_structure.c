#include <stdio.h>
struct employee{
    char    name[30];
    char    add[100];
    int     empno,empage;
};
 
void main()
{
    /*declare structure variable*/
    struct employee emp;
     
    /*read employee details*/
    printf("\nEnter details :\n");
     
    printf("\nName ?:");          
    gets(emp.name);
    printf("\nADDRESS ?: ");  
    gets(emp.add);
    printf("\nNO ?: ");           
    scanf("%d",&emp.empno);
    printf("\nAGE ?: ");           
    scanf("%d",&emp.empage);      
     
    /*print employee details*/
    printf("\nEamploye detail is:");
    printf("\nNO: %d",emp.empno);
    printf("\nName: %s",emp.name);
    printf("\nADDRESS: %s",emp.add);
    printf("\nAGE: %d",emp.empage);
   
}