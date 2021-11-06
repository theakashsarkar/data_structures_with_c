<?php
class Node{
    public $data;
    public $next;

    public function __construct()
    {
        $this->data = 0;
        $this->next = null;
    }

    public function setData($data): void
    {
        $this->data = $data; 
    }
    public function getData():int
    {
        return $this->data;
    }
    public function setNext($next): void
    {
        $this->next = $next;
    }
    public function getNext()
    {
        return $this->next;
    }
}
class LinkedList
{
    public $head;
    public function __construct()
    {
        $this->head = null;
    }
    public function insertBack($data): void
    {
        $newNode = new Node();
        $newNode->setData($data);

        if($this->head)
        {
            $currentNode = $this->head;
            while($currentNode->getNext() != null)
            {
                $currentNode = $currentNode->getNext();
            }
            $currentNode->setNext($newNode);
        }else{
            $this->head = $newNode;
        }
        
    }
    public function deleteNode($n)
    {
       $temp1 = $this->head;
       if($n == 1)
       {
            $this->head = $temp1->next;
            unset($temp1);
            return;
       }else{
           for($i = 0; $i < $n - 2; $i++){
                $temp1 = $temp1->next;
           }
           $temp2 = $temp1->next;
           $temp1->next = $temp2->next;
           unset($temp2);
       }
    }
    public function display(){
        $currentNode = $this->head;
        while($currentNode !== NULL){
             echo $currentNode->data."\n";
             $currentNode = $currentNode->next;
        }
    }
}
$linkList = new LinkedList();
$linkList->insertBack(20);
$linkList->insertBack(300);
$linkList->insertBack(40);
$linkList->insertBack(50);
$linkList->display();
echo "\n";
$linkList->deleteNode(2);
$linkList->display();