#include<stdio.h>
int main(){
    int a[5] = {1,2,3,4,5};
    int *ptr = &a[3];
    printf("%d \n",*ptr);
    printf("%d \n",*(ptr + 1));
    printf("%d \n",*(ptr -1));
}