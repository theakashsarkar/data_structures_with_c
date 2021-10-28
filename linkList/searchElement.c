#include<stdio.h>
#include<stdlib.h>
struct Node *CreateLinkedList( int arr[], int size );
int searchInLinklist(struct Node *head, int value);

struct Node
{
    int data;
    struct Node *next;
};

int main()
{
    int a[] = { 5,6,30 };
    struct Node *head;
    head = CreateLinkedList( a, 3 );
    struct Node *current = head;
   printf("Index: %d", searchInLinklist(head, 30));
    return 0;
}

int searchInLinklist( struct Node *head, int value )
{
    int index = 1;
    while( head != NULL )
    {
        if( head->data == value )
        {
            return index;
        }
        else{
            index++;
            head  = head->next;
        }

    }
    return -1;
}

struct Node *CreateLinkedList(int arr[], int size)
{
    struct Node *head = NULL , *temp = NULL, *current = NULL;
    int i;
    for(i=0; i< size; i++){
       temp       = ( struct Node* )malloc( sizeof( struct Node ));
       temp->data = arr[i];
       temp->next = NULL;
       if ( head == NULL )
       {
           head    = temp;
           current = temp;
       }else{
           current->next = temp;
           current       = current->next;
       }
       
    }
    return head;
}