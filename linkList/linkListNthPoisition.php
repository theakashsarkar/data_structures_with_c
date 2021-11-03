<?php
class NewNode{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
    }
}

class LinkList{
    public $temp = null;
    public function insert(int $data = null, int $n = null)
    {
        $newNode = new NewNode($data);
        $newNode->data = $data;
        $newNode->next = null;
        if($n == 1)
        {
            $newNode->next = $this->temp;
            $this->temp    = &$newNode;
            return;
        }else{
            $currentNode = $this->temp;
            for($i = 0; $i < $n-2; $i++){
                $currentNode = $currentNode->next;
            }
            $currentNode->next = $newNode;

        }
    }
    public function display(){
        $node = $this->temp;
        while($node !== NULL){
            echo $node->data."\n";
            $node = $node->next;
        }
    }
}
$linkList = new LinkList();
$linkList->insert(20, 1);
$linkList->insert(25, 2);
$linkList->insert(25, 1);

$linkList->display();

