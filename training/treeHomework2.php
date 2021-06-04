<?php

/**
* A node of Binary Tree (BT)
*/
class Node {
    /** @var int */
    private $data;

    /** @var Node left subtree */
    private $left;

    /** @var Node right subtree */
    private $right;

    public function __construct($data, $left = null, $right = null)
    {
        $this->data = $data;
        $this->left = $left;
        $this->right = $right;
    }

    /**
    * get data
    * @return int
    */
    public function getData()
    {
        return $this->data;
    }

    /**
    * set data
    * @param int $data
    */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
    * get left
    * @return Node
    */
    public function getLeft()
    {
        return $this->left;
    }

    /**
    * set left
    * @param Node $left
    */
    public function setLeft($left)
    {
        $this->left = $left;
    }

    /**
    * get right
    * @return Node
    */
    public function getRight()
    {
        return $this->right;
    }

    /**
    * set right
    * @param Node $right
    */
    public function setRight($right)
    {
        $this->right = $right;
    }
}

/**
* Binary Tree Class
*/
class BinaryTree {
    /** @var Node */ 
    protected $root;

    public function __construct($root = null)
    {
        $this->root = $root;
    }

	public function isEmpty() {
        return $this->root === null;
    }

    /**
    * get root
    * @return Node
    */
    public function getRoot()
    {
        return $this->root;
    }

    /**
    * set root
    * @param Node $root
    */
    public function setRoot($root)
    {
        $this->root = $root;
    }


        /**
    * set root
    * @param Node $root
    */
    public function addNodeToTree($newNode)
    {
        $array = array($this->getRoot());

        while(true){

            if($array[0]->getLeft()){
                array_push($array, $array[0]->getLeft());
            }else{
                $array[0]->setLeft($newNode);
                echo "result: "."/n";
                print_r($this->getRoot());
                return;
            }

            if($array[0]->getRight()){
                array_push($array, $array[0]->getRight());
            }else{
                $array[0]->setRight($newNode);
                echo "result: "."/n";
                print_r($this->getRoot());
                return;
            }
            // unset($array[0]);
            // $array = array_values($array);

            array_shift($array);
        }

    }

}


// three leaves
$left1 = new Node(7);
$left2 = new Node(15);
$left3 = new Node(8);
// parent nodes
$parent1 = new Node(11, $left1); //its child is 5 (left child)
$parent2 = new Node(9, $left2, $left3); //its children are 7(left) and 15 (right)
//root
$root = new Node(10, $parent1, $parent2); //root node
//tree
$bt = new BinaryTree($root);

$bt->addNodeToTree(new Node(12));
