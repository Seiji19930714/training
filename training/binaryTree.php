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
    protected $root;//4
    public $parentNode;//4
    public $stop;

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

    public function addElement($data)
    {
        $node = new Node($data);//インスタンス化
        $this->makeTree($data,$node);
        $this->stop = true;
    }

    public function makeTree($data,$node)
    {
        if($this->isEmpty())
        {
            $this->setRoot($node);//一番上に来るところ
            $this->parentNode = $node;
            echo "root:".$data."\n";
        }
        else{
            if($this->parentNode == null){
                $parent = $this->getRoot();
            }
            else
            {
                $parent = $this->parentNode;
            }
            while(true)
            {
                $leftNode = $parent->getLeft();
                $rightNode = $parent->getRight();
                echo "----------------------------------------------------------------"."\n";
                echo "node data = ".$data."\n";
                if($node->getData() < $parent->getData())//左の中身を見る
                {
                    if($leftNode == null)//nullなら現在のノードを親の左にセット
                    {
                        $parent->setLeft($node);
                        echo "set to the left of the parent(parent node date : ".$parent->getData().")"."\n";
                        echo "set left:".$parent->getLeft()->getData()."\n";
                        break;
                    }
                    else if ($node == $leftNode)
                    {
                        echo "Finished due to duplication"."\n";
                        break;
                    }
                    $this->parentNode = $leftNode;//今度は左にあったノードを親とする
                    echo "move to the left"."\n";
                    $this->makeTree($data,$node);
                    break;
                }
                else if($node->getData() > $parent->getData())//右の中身を見る
                {
                    if($rightNode == null)//nullなら現在のノードを親の右にセット
                    {
                        $parent->setRight($node);
                        echo "set to the right of the parent(parent node date : ".$parent->getData().")"."\n";
                        echo "set right:".$parent->getRight()->getData()."\n";
                        break;
                    }
                    else if ($node == $rightNode)//重複しているため終了
                    {
                        echo "Finished due to duplication"."\n";
                        break;
                    }
                    $this->parentNode =$rightNode;//makeTree
                    echo "move to the right"."\n";
                    $this->makeTree($data,$node);
                    break;
                }
                else{
                    echo "Finished due to duplication"."\n";
                    break;
                }
            }
            $this->parentNode = null;
        }
    }
}

//addElementはbinary treeを作成するためのファンクションで、カッコ内の数字を木の上から順に入れていく。
$bt = new BinaryTree();
$bt->addElement(4);//最初に入る数字がrootになる
$bt->addElement(3);//あとは子や孫、、、、になっていく
$bt->addElement(6);
$bt->addElement(1);
$bt->addElement(1);//重複は新たには追加されない
$bt->addElement(2);
?>