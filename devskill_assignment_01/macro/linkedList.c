#include<stdio.h>
#include<stdlib.h>
#define HEAD 0;

struct Node{
    int data;
    struct Node *next;
};
struct Node* temp = (struct Node*)malloc(sizeof(struct Node));

void insert_tail(int x)
{

    struct Node* copy_node = temp;
    while(copy_node != NULL)
    {
        copy_node = copy_node->next;
    }
    copy_node->next = temp;
}
void print()
{
    struct Node *head = temp->next;
    while(head != NULL)
    {
        printf("%d\n",head->data);
        head = head->next;
    }
}
void main()
{
    insert_tail(4);
    insert_tail(10);
    insert_tail(20);
    print();
}