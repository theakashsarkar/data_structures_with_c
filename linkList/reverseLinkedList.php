<?php 
class newNode{
    public $data;
    public $next;
    public function __construct($data)
    {
        $this->data = $data;
    }
}
class linkedList
{
    public $head = null;
    public function reverse($head)
    {
        $current = $head;
        $prev    = NULL;
        while($current != NULL){
            $next = $current->next;
            $current->next = $prev;
            $prev = $current;
            $current = $next;
        }; 
        $this->head = $prev;
        return $this->head;
    }
    public function Insert($head = null, int $data)
    {
        $newNode = new newNode($data);
        $newNode->data = $data;
        $newNode->next = $head;
        if($this->head == null){
            $this->head = &$newNode;
        }else{
            $temp = $this->head;
            while($temp->next != null)
            {
                $temp = $temp->next;
            }
            $temp->next = $newNode;
        }
       return $data;
        
    }
    public function display($head){
        $currentNode = $head;
        while($currentNode !== NULL){
             echo $currentNode->data."\n";
             $currentNode = $currentNode->next;
            //   $this->reverse($this->head);
        }
       
    }
}
$BookTitles = new LinkedList();
$head = $BookTitles->Insert($head,10);
//var_dump($head); 
$head = $BookTitles->Insert($head,20);
$head = $BookTitles->Insert($head,200); 
$BookTitles->display($head);
$BookTitles->reverse($head);
$BookTitles->display();