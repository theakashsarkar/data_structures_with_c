#include<stdio.h>
#include<stdlib.h>

int main(){
    int *ptr;
    ptr = (int *)calloc(5,sizeof(int));
    if(ptr == NULL)
    {
        printf("momery not allocated");
    }else{
        printf("momery allocated successful");
    }
    return 0;
}
