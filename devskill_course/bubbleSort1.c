#include<stdio.h>
void swap(int *a, int *b)
{
    int tmp = *a;
        *a  = *b;
        *b  = tmp;
}
void bubbleSort(int arr[], int n)
{
    for(int i = 0; i < n-1; i++)
    {
        for(int j = i + 1; j < n; j++)
        {
            if(arr[i] < arr[j])
            {
                swap(&arr[i], &arr[j]);
            }
        }
    }
}
void printArray(int arr[], int size)
{
    for(int i = 0; i < size; i++)
    {
        printf("%d ", arr[i]);
    }
}
int main()
{
    int arr[] = {60, 90, 40, 65, 5,85,67, 9};
    int n   = sizeof(arr) / sizeof(arr[0]);
    bubbleSort(arr, n);
    printf("Sorted array: \n");
    printArray(arr, n);
    printf("\n");
    return 0;
}