#include<stdio.h>
#include<stdlib.h>

struct Node{
    int value;
    struct Node *next;
};
struct Node *head;
void insert(int x)
{
    struct Node *temp = (struct Node*)malloc(sizeof(struct Node));
    temp->value = x;
    temp->next  = NULL;
    if(head == NULL){
        head = temp;
        return;
    }
    struct Node *copy_head = head;
    while(copy_head->next != NULL)
    {
        copy_head = copy_head->next;
    }
    copy_head->next = temp;
}
void print()
{
    struct Node *temp = head;
    while(temp != NULL)
    {
        printf("%d ",temp->value);
        temp = temp->next;
    }
}
int main()
{

    insert(20);
    insert(10);
    insert(40);
    print();
}