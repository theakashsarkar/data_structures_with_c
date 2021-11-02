#include<stdio.h>
#include<stdlib.h>
struct Node{
    int data;
    struct Node *next;
};
struct Node* head;
void insert(int data)
{
    struct Node* temp = ( struct Node* )malloc( sizeof( struct Node ));
    temp->data = data;
    temp->next = head;
    head      = temp; 
};
void Delete(int n)
{
    struct Node* temp1 = head;
    if(n == 1)
    {
        head = temp1->next;//head now points to second node.
        free(temp1);
        return;
    }
    int i;
    for(i = 0; i<n-2; i++)
        temp1 = temp1->next;
    //temp1 points to (n-1)th Node
    struct  Node* temp2 = temp1->next;//nth Node
    temp1->next = temp2->next;//(n+1)th Node 
    free(temp2);//delete temp2;
}
void print(){
    struct Node* temp = head;
    while(temp != NULL){
        printf("%d ", temp->data);
        temp = temp->next;
    }
    
};
int main()
{
    head = NULL;
    insert(4);
    insert(5);
    insert(6);
    insert(9);
    insert(10);
    print();
    int n;
    printf("Enter a position\n");
    scanf("%d",&n);
    Delete(n);
    print(n);
}