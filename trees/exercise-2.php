<?php 

require_once "Tree.class.php";

print("Exercise 2" . PHP_EOL);

$preorder = ['F', 'B', 'A', 'D', 'G', 'I'];
$inorder  = ['A', 'B', 'D', 'F', 'G', 'I'];

Tree::reBuildTree($preorder, $inorder);
