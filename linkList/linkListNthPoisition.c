#include<stdio.h>
#include<stdlib.h>
struct Node{
    int data;
    struct Node* next;
};
struct Node* head;
void Insert(int data, int n)
{
    struct  Node* temp = (struct Node*)malloc(sizeof(struct Node));
    temp->data = data;
    temp->next = NULL;
    if (n == 1)
    {
        temp->next = head;
        head       = temp;
        return;
    }
    struct Node* temp1 = head;
    for (int i = 0; i < n-2; i++)
    {
        temp1 = temp1->next;
    }
    temp->next = temp1->next;
    temp1->next = temp;
}
void print()
{
    struct  Node* temp = head;
    printf("List is: ");
    while (temp != NULL)
    {
        printf("%d ",temp->data);
        temp = temp->next;
    }
    printf("\n");
};
int main(){
    head = NULL;
    Insert(3,1);
    Insert(4,2);
    Insert(2,1);
    print();
}
