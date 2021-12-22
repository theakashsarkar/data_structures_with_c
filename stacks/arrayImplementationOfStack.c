#include<stdio.h>
#define MAX 4
int stack_arr[MAX];
int top = -1;

void push(int data)
{
    if(top == MAX - 1)
    {
        printf("Stack overflow\n");
        return;
    }
    top = top + 1;
    stack_arr[top] = data;
}
int main()
{
    push(1);
    push(2);
    push(3);
    push(4);
    push(4);
    return 0;
}