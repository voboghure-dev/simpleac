<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

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

print_r($dataset);

?>
