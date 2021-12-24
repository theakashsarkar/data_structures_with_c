#include<stdio.h>
#include<stdlib.h>
struct node{
    int value;
    struct node *next;
};
struct node *head;
void liked_list_tail(int x)
{
    struct node *temp = (struct node*)malloc(sizeof(struct node));
    temp->value = x;
    temp->next  = NULL;
    if(head == NULL)
    {
        head = temp;
        return;
    }
    struct node *temp1 = head;
    while(temp1->next != NULL)
    {
        temp1 = temp1->next;
    }
    temp1->next = temp; 
}
void print()
{
    while(head != NULL)
    {
        printf("%d ",head->value);
        head = head->next;
    }
}
int main()
{
    liked_list_tail(10);
    liked_list_tail(20);
    liked_list_tail(20);
    liked_list_tail(40);
    print();
}
