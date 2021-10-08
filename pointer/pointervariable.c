#include<stdio.h>
int main()
{
    double cgpa = 3.70;
    double *ptr;
    ptr = &cgpa;
    printf("cgpa %2lf", *ptr);
}