<?php
class Node
{
    public $data;
    public $next;
    public function __construct($data)
    {
        $this->data = $data;
    }
}
class LinkeListImplement
{
    public $head = null;
    public function insert_at_tail($data)
    {
        $tmp = new Node($data);
        if($this->head == NULL)
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
    public function insert_at_head($data)
    {
        $tmp = new Node($data);
        $tmp->next = $this->head;
        $this->head = $tmp;
    }
    public function insert_at_any_position($data, $n)
    {
        $tmp = new Node($data);
        if($n == 1)
        {
            $tmp->next  = $this->head;
            $this->head = $tmp;
            return;
        }
        $tmp1 = $this->head;
        while($n -= 2)
        {
             $tmp = $tmp1->next;
        }
        $tmp->next  = $tmp1->next;
        $tmp1->next = $tmp;
        // while($n -= 2)
        // {
        //     $tmp = $tmp1->next;
        // }
        // $tmp1->next = $tmp;
    }
    public function getElement($pos)
    {
        $curr = $this->head;
        while($pos -- )
        {
            $curr = $curr->next;

        }
        return $curr->data;
    }
    public function delete_at(int $position)
    {
        $curr = $this->head;
        while($position--)
        {
            $curr = $curr->next;
        }
        $nextNode   = $curr->next; 
        $curr->next = $nextNode;
        unset($curr);
    }


    public function display()
    {
        $_head = $this->head;
        while($_head != NULL)
        {
            echo " ". $_head->data;
            $_head =  $_head->next;
        }
    }
}
$linkeListImplement = new LinkeListImplement();
$linkeListImplement->insert_at_any_position(20,1);
$linkeListImplement->insert_at_any_position(10,2);
$linkeListImplement->insert_at_any_position(6,1);
$linkeListImplement->insert_at_any_position(5,2);
$linkeListImplement->display();
echo "\n";
$linkeListImplement->delete_at(1);
$linkeListImplement->display();
// echo "\n";
// echo $linkeListImplement->getElement(1);
// echo " ";
// echo $linkeListImplement->getElement(0);
// $linkeListImplement->display();
