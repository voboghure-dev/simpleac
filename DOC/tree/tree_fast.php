<?php

function mapTree($dataset) {
	$tree = array();
	foreach ($dataset as $id=>&$node) {
		if ($node['parent'] === null) {
			$tree[$id] = &$node;
		} else {
			if (!isset($dataset[$node['parent']]['children'])) $dataset[$node['parent']]['children'] = array();
			$dataset[$node['parent']]['children'][$id] = &$node;
		}
	}
	
	return $tree;
}

include_once('tree_demo.php');