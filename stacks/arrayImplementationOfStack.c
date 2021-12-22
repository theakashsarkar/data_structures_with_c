#include<stdio.h>
#include<stdlib.h>
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
int pop()
{
    int value;
    if(top == -1)
    {
        printf("stack underflow");
        exit(1);
    }
    value = stack_arr[top];
    top = top - 1;
    return value; //this value 4
}
void print()
{
    int i;
    if(top == -1)
    {
        printf("stack underflow");
        return;
    }
    for(i = top; i >= 0; i--)
    {
        printf("%d ", stack_arr[i]);
    }
}
int main()
{
    int data;
    push(1);
    push(2);
    push(3);
    push(4);
    //push(4);
    data = pop();
    printf("%d \n", data);
    // data = pop();
    print();
    return 0;
}