<?php
class newNode{
    public $data;
    public $next;

    public function __construct($data)
    {
        $this->data = $data;
    }
}

class LinkList{
    public $_firstNode = null;
    public $_totalNode = 0;

    public function insert(int $data = null){
        $newNode = new newNode($data);
        if($this->_firstNode === null){
            $this->_firstNode = &$newNode;
        }else{
            $currentNode = $this->_firstNode;
            while($currentNode->next !== null){
                $currentNode = $currentNode->next;
            }
             $currentNode->next = $newNode;
        }
        print_r($this->_totalNode++);
        return true;
    }
    public function display(){
        echo "Total Book title: ".$this->_totalNode."\n";
        $currentNode = $this->_firstNode;
        while($currentNode !== NULL){
             echo $currentNode->data."\n";
             $currentNode = $currentNode->next;
        }
    }
}
$BookTitles = new LinkList();
$BookTitles->insert(200); 
$BookTitles->insert(20); 
$BookTitles->insert(200); 
$BookTitles->display();