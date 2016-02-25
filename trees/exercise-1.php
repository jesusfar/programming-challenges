<?php 
require_once "Tree.class.php";

/*
 * Create a function printPreOrder(Tree T)
 * the function in order to print out the object Tree by pre-order (root, left, right)
 */



$treeA = new Tree("A", null, null);
$treeD = new Tree("D", null, null);
$treeB = new Tree("B", $treeA, $treeD);
$treeI = new Tree("I", null, null);
$treeG = new Tree("G", null, $treeI);
$treeF = new Tree("F", $treeB, $treeG);

print("Exercise - 1 :: Trees" . PHP_EOL);

print("PrintPreorder: " . PHP_EOL);
Tree::printPreOrder($treeF);


print("PrintInorder: " . PHP_EOL);
Tree::printInOrder($treeF);

