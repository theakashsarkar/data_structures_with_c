#include<stdio.h>
#include<stdlib.h>
#define MAX 10

int x[MAX];
int front, rear;
void Queue()
{
    front = -1;
    rear  = -1;
}
int isEmpty()
{
    if(front == -1 && rear == -1)
    {
        return;
    }
}
int isFull()
{
    if(rear == sizeof(x) - 1)
    {
        return;
    }
}

