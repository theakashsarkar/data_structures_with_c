#include<stdio.h>
#include<stdlib.h>
struct Node{
    int data;
    struct Node* next;
    struct Node* prev;
};
struct Node* head; // global variable -pointer to head node.
struct Node* GetNewNode(int x){
    struct Node* newNode = (struct Node*)malloc(sizeof(struct Node));
    newNode->data = x;
    newNode->prev = NULL;
    newNode->next = NULL;
    return newNode;
}
void InsertAtHead(int x)
{
   struct Node* newNode = GetNewNode(x);
   if(head == NULL){
       head = newNode;
       return;
   }
   head->prev    = newNode;
   newNode->next = head;
   head          = newNode;
}
int main()
{

}