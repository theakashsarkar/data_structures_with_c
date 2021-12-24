<?php
class Node{
    public $value;
    public $next;
    public function __construct($x)
    {
      $this->value = $x;
    }
}
class LinkedList
{
    public $head = NULL;
    public function linkedList($x)
    {
        $temp = new Node($x);
        if($this->head == NULL)
        {
            $this->head = $temp;
            return;
        }
        $_head = $this->head;
        while($_head->next !== NULL)
        {
            $_head = $_head->next;
        }
        $_head->next = $temp;
    }
    public function print()
    {
        $_head = $this->head;
        while($_head != NULL)
        {
            echo " ". $_head->value;
            $_head = $_head->next;
        }
    }
}
$linedList = new LinkedList;
$linedList->linkedList(20);
$linedList->linkedList(30);
$linedList->linkedList(40);
$linedList->linkedList(30); 
$linedList->print(); //output:- 20 30 40 30