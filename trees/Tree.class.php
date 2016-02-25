<?php 

/**
 * 
 */
class Tree
{
    public $root = "";
    public $left = null ;
    public $rigth = null;

    public function __construct($root, Tree $left = null, Tree $rigth = null)
    {
        $this->root  = $root;
        $this->left  = $left;
        $this->rigth = $rigth;

    }

    /**
     * printPreOrder
     *
     * Exercise 1 .- Print a tree (root, left, rigth)
     *
     * @param Tree Tree
     *
     * @return void
     */
    public static function printPreOrder(Tree $tree = null)
    {
        if (is_null($tree)) {
            return;
        }

        $nodeValue = $tree->root;

        print("The value is: " . $nodeValue . PHP_EOL);
        self::printPreOrder($tree->left);
        self::printPreOrder($tree->rigth);

        return;
    }

    /**
     * printInOrder
     *
     * Exercise 1 .- Print a tree (left, root, rigth
     *
     * @param Tree Tree
     *
     * @return void
     */
    public static function printInOrder(Tree $tree = null)
    {
        if (is_null($tree)) {
            return;
        }

        self::printPreOrder($tree->left);

        $nodeValue = $tree->root;
        print("The value is: " . $nodeValue . PHP_EOL);

        self::printPreOrder($tree->rigth);



        return;
    }

    /**
     * reBuildTree
     *
     * @return Tree Binary Tree
     *
     */
    public static function reBuildTree(array $preorder, array $inorder)
    {


    }

}
