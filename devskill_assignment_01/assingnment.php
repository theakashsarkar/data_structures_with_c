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
        for($i = 0; $i < $n - 2; $i++)
        {
            $tmp1 = $tmp1->next;
        }
        // $tmp->next  = $tmp1->next;
        $tmp1->next = $tmp;
    }

    public function display()
    {
        $_head = $this->head;
        while($_head != NULL)
        {
            echo " ". $_head->data;
            $_head = $_head->next;
        }
    }
}
$linkeListImplement = new LinkeListImplement();
// $linkeListImplement->insert_at_tail(1);
$linkeListImplement->insert_at_any_position(20,1);
$linkeListImplement->insert_at_any_position(30,2);
$linkeListImplement->insert_at_any_position(30,1);
$linkeListImplement->display();