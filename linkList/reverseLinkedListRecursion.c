#include <stdio.h>
#include <stdlib.h>

struct Node{
    int data;
    struct Node *next;
};
struct Node* head;
void Reverse( struct Node* p )
{
    if( p->next == NULL )
    {
        head = p;
        return;
    };
    Reverse( p->next );
    struct Node* q = p->next;
    q->next = p;
    p->next = NULL;
}
void print(struct Node* head)
{
    while(head != NULL){
        printf("%d ", head->data);
        head = head->next;
    }   
}
int main(){
    struct Node* head = NULL;
    Reverse(2);
    Reverse(4);
    Reverse(6);
    Reverse(8);
    print(head);
    printf("\n");
} 