#include<stdio.h>
#include<stdlib.h>
struct Node{
    int data;
    struct Node  *next;
};
struct Node* head; //global variable;
void insert(int data, int x){
    struct  Node* temp1 = (struct Node*)malloc(sizeof(struct Node));
    temp1->data = data;
    temp1->next = null;
    if(n == 1){
        temp1->next = head;
        head        = temp1;
        return;
    }
    Node* temp2 = head;
    for(int i; i < n-2; i++){
       temp2 = tem2->next; 
    }
    temp1->next = temp2->next;
    temp2->next = temp1;

};
void print();

int main()
{
    head = NULL;
    insert(2,1);
    insert(3,2);
    insert(4,1);
    insert(5,2);
    print();
}