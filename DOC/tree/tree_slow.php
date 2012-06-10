<?php

function mapTree($dataset, $parent=null, $levels=0) {
	if ($levels > 100) {
		print ('Possible infinite recursion');
		return;
	}
	
	$tree = array();
	foreach ($dataset as $id=>$node) {
		if ($node['parent'] !== $parent) continue;
		$node['children'] = mapTree($dataset, $id, $levels+1);
		$tree[$id] = $node;
	}
	
	return $tree;
}

include_once('tree_demo.php');