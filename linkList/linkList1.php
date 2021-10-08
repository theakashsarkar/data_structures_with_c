<?php

class LinkedList{

    private $_head = null;
    private $_list = array();

    public function addNode($val) {

        // add the first element
        if(empty($this->_list)) {
            $this->_head = $val;
            $this->_list[$val] = null;
            $this->_list[$val];
            return;
        }

        $curr = $this->_head;

        while ($curr != null || $curr === 0) {

            // end of the list
            if($this->_list[$curr] == null) {
                $this->_list[$curr] = $val;
                $this->_list[$val] = null;
                return;
            }

            if($this->_list[$curr] < $val) {
                $curr = $this->_list[$curr];
                continue;
            }
            $this->_list[$val] = $this->_list[$curr];
            $this->_list[$curr] = $val;
            return;

        }

    }
    function showList(){
        $curr = $this->_head;
        while ($curr != null || $curr === 0) {
            echo "-" . $curr;
            $curr = $this->_list[$curr];
        }
    }
}
$list = new LinkedList();

$list->addNode(0);
$list->addNode(3);
$list->addNode(7);
$list->addNode(5);
$list->addNode(2);
$list->addNode(4);
$list->addNode(10);

$list->showList();    