#include<stdio.h>
int sum(int *a, int size){
    int i;
    int sum = 0;
    for(i = 0; i < size; i++){
        sum = sum + *(a+i);
    }
    return sum;
}
int main()
{
    int arr[3] = {4,2,7};
    int result = sum(arr, 3);
    printf("arry sum = %d", result);
}