#include<stdio.h>
#include<stdlib.h>

struct Node{
    int value;
    struct Node *next;
};
struct Node *head = NULL;
void insert(int x)
{
    struct Node *temp = (struct Node*)malloc(sizeof(struct Node));
    temp->value = x;
    temp->next  = head;
    head        = temp;
    // if(head == NULL){
    //     head = temp;
    //     return;
    // }
    // struct Node *temp1 = head;
    // while(temp1->next != NULL)
    // {
    //     temp1 = temp1->next;
    // }
    // temp1->next = temp;
}
void Delete(int n)
{
    struct Node *temp1 = head;
    if(n == 1)
    {
        head = temp1->next;
        free(temp1);
    }
    int i;
    for(i = 0; i < n-1; i++)
    {
        temp1 = temp1->next; //temp1 points to (n-1)th Node
    }
    struct Node* temp2 = temp1->next;//nth node
    temp1->next = temp2->next;//(n+1)th node
    free(temp2);
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
    head = NULL;
    insert(20);
    insert(10);
    insert(40);
    print();
    int n;
    printf("Enter a position\n");
    scanf("%d",&n);
    Delete(n);
    print(n);
}