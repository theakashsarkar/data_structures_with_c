#include<stdio.h>
void swap(int *n1, int *n2)
{
    int temp = *(n1);
       *(n2) = *(n1);
       *(n1) = temp;
}
int main()
{
    int num1 = 10, num2 = 20;
    printf("Number1 = %d Number2 = %d\n", num1, num2);
    swap(&num1, &num2);
    printf("Number1 = %d Number2 = %d\n", num1, num2);
}