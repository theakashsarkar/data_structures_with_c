<?php
abstract class Node{
    public $data;
    public $next;
}

class LinkedList extends Node{
    public $head;
    
    public function __construct(){
        $this->head = null;
    }
    public function PrintList(){
        $temp = $this->head;

        if($temp != null){
            echo "\nThe list contains ";
            while($temp != null){
                echo $temp->data. " ";
                $temp = $temp->next;
            }
        }else{
            echo "\nThe list is empty";
        }
    }   
}
$myList = new LinkedList();
$myList->data = 10;
$myList->next = null;
$first = new Node();
$first->data = 10;
$first->next = null;
$myList->head = $first;
$myList->PrintList(new Node);
$second = new Node();
$second->data = 20;
$second->next = null;
$myList->head = $second;
$myList->PrintList();