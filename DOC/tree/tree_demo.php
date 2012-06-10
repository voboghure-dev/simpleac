<?php

// Build a random dataset
$maxNodes = 1000;
$dataset = array();
for ($i=0;$i<$maxNodes;$i++) {
	$parent = rand(-1,$i-1);	// We use $i rather than maxNodes here to avoid infinite loops
	if ($parent == -1) $parent = null;
	$dataset[$i] = array(
		'name'=>'Node '.$i,
		'parent'=>$parent
	);
}

// Initialize variables
$startTime = 10;
$endTime = 10;
$tree = array();

// Build tree
$startTime = microtime(true);
$tree = mapTree($dataset);
$endTime = microtime(true);

// Print benchmark
print '<h2>Benchmark</h2>';
print ($endTime-$startTime).' seconds<br>';

// Print tree
print '<h2>Tree</h2>';
display_tree($tree);

// Print dataset
print '<h2>Dataset '.(count($dataset>100)?'(partial)':'').'</h2>';
print '<pre>';
if (count($dataset>100)) {
	print_r(array_slice($dataset,0,100));
} else {
	print_r($dataset);
}



// Support Function

function display_tree($nodes, $indent=0) {
	if ($indent >= 20) return;	// Stop at 20 sub levels
	
	foreach ($nodes as $node) {
		print str_repeat('&nbsp;',$indent*4);
		print $node['name'];
		print '<br/>';
		if (isset($node['children']))
			display_tree($node['children'],$indent+1);
	}
}