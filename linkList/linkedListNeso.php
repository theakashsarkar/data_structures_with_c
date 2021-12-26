<?php
class Node
{
    public $data;
    public $next;
}
class linkedList
{
    public $head = NULL;
    public function linkedList(int $x)
    {
        $tmp = new Node();
        $tmp->data = $x;
        while($this->head == NULL)
        {
            $this->head = $tmp;
            return;
        }
        $_head = $this->head;
        while($_head->next != NULL)
        {
            $_head = $_head->next;
        }
        $_head->next = $tmp;
    }
    public function print()
    {
        $_head = $this->head;
        while($_head !== NULL)
        {
            echo " ". $_head->data;
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
