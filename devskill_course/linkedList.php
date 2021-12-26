<?php
class linke{
    public $data;
    public $next;   
}
class twoNodeLink{
    public $head = NULL;
    public function linked()
    {
        $tmp = new linke;
        $tmp->data = 20;
        $tmp->next = null;

        $tmp1 = new linke();
        $tmp1->data = 21;
        $tmp1->next = NULL;
        $tmp->next  = $tmp1;

        $this->head = $tmp;
        while($this->head != NULL)
        {
            echo " ". $this->head->data;
            $this->head = $this->head->next;
        }

    }
    
}
$two = new twoNodeLink();
$two->linked();