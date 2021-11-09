<?php

use Node as GlobalNode;

class Node{
    public $data;
    public $next;
}
class LinkedListReverse{
    public $head;
    public  $current;
    public  $prev;
    public  $next;

    public function __construct()
    {
        $this->head = NULL;
    }
    public function reverse($head)
    {
        $newNode = new Node();
        $this->current = $head;
        $this->prev    = NULL;
        while($this->current != NULL)
        {
            $this->next = $this->current->next;
            $this->current->next = $this->prev;
            $this->next = $this->current;
            $this->current = $this->next; 
        }
        $this->head = $this->prev;
        return $this->head;
    }
    public function Insert($head, $data){
        $newNode = new Node();
        $newNode->data = $data;
        $newNode->next = NULL;
        if($head == NULL) $head = $newNode->data;
        else{
            $temp1 = $newNode;
            while($temp1->next != NULL){
                $temp1 = $temp1->next;
            }
            $temp1->next = $newNode;
        }
    }
    public function display($currentNode){
        while($currentNode !== NULL){
             echo $currentNode->data."\n";
             $currentNode = $currentNode->next;
        }
    }
}
$newNode  = new LinkedListReverse();
$head = NULL;
$head = $newNode->Insert($head, 2);
$head = $newNode->Insert($head, 4);
$head = $newNode->Insert($head, 6);
$head = $newNode->Insert($head, 8);
$newNode->display($head);
$head = $newNode->reverse($head);
$newNode->display($head);
