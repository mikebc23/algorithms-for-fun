<?php

class Node {

	private $value;
	private $next;

	 function __construct($value) {
        $this->value = $value;
        $this->next = 0;
    }

    public function set_data($value): void {
        $this->value = $value;
    }
    public function get_data(): int {
    	return $this->value;
    }

    public function set_next($next): void {
    	$this->next = $next;
    }

    public function get_next() {
	     if($this->next == null) return 0;
	     else return $this->next;
	 }
}

class LinkedList {

    private $head;
    private $count;

    function __construct() {
        #$this->head = null;
        $this->count = 0;
    }

    public function get_count(){
        return $this->count;
    }

    public function insert($data) {
        echo "Inserting new node: $data \n";
        $new_node = new Node($data);
        $new_node->set_next($this->head);
        $this->head = $new_node;
        $this->count+=1;
    }

    public function deleteAtPosition($idx)  {

        if($idx > $this->count) {
            return false;
        }else {
            echo "Removing node at position: $idx \n";
            $temp_idx = 0;
            $node = $this->head;

            while($temp_idx < $idx-1){
                $node->get_next();
                $temp_idx +=1;
            }

            try {
                $node->set_next($node->get_next()->get_next());
            }catch (Exception $e ) {
                echo "Empty list";
            }

        }

    }
}

$x = new LinkedList();
$x->insert(1);
$x->insert(2);
$x->insert(3);

$x->deleteAtPosition(2);

print_r($x);