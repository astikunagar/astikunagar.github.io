<?php
/**
 *  Dijkstra's algorithm in PHP by zairwolf
 * 
 *  Demo: http://www.you4be.com/dijkstra_algorithm.php
 *
 *  Source: https://github.com/zairwolf/Algorithms/blob/master/dijkstra_algorithm.php
 *
 *  Author: Hai Zheng @ https://www.linkedin.com/in/zairwolf/
 *
 */

//set the distance array
$_distArr = array();
$_distArr[1][2] = 7;
$_distArr[1][3] = 9;
$_distArr[1][6] = 14;
$_distArr[2][1] = 7;
$_distArr[2][3] = 10;
$_distArr[2][4] = 15;
$_distArr[3][1] = 9;
$_distArr[3][2] = 10;
$_distArr[3][4] = 11;
$_distArr[3][6] = 2;
$_distArr[4][2] = 15;
$_distArr[4][3] = 11;
$_distArr[4][5] = 6;
$_distArr[5][4] = 6;
$_distArr[5][6] = 9;
$_distArr[6][1] = 14;
$_distArr[6][3] = 2;
$_distArr[6][5] = 9;

//the start and the end
$a = 1;
$b = 5;

//initialize the array for storing
$S = array();//the nearest path with its parent and weight
$Q = array();//the left nodes without the nearest path
foreach(array_keys($_distArr) as $val) $Q[$val] = 99999;
$Q[$a] = 0;
$deadlock = false;
//start calculating
while(!empty($Q)){
    $min = array_search(min($Q), $Q);//the most min weight
    if($min == $b) break;
    if(isset($_distArr[$min]))
    {
	    foreach($_distArr[$min] as $key=>$val) 
	    {
	    	if(!empty($Q[$key]) && $Q[$min] + $val < $Q[$key]) 
		    {
		        $Q[$key] = $Q[$min] + $val;
		        $S[$key] = array($min, $Q[$key]);
		    }
		}
	    unset($Q[$min]);
    }
    else
    {
    	echo "Irrelevant Path, might enter deadlock";
    	$deadlock = true;
    	break;
    }
}

//list the path
if($deadlock==false)
{
	echo "<hr /><h1>Q</h1><pre>";print_r($Q);echo "</pre>";
	echo "<hr /><h1>S</h1><pre>";print_r($S);echo "</pre>";
	$path = array();
	$pos = $b;
	while($pos != $a)
	{
	    $path[] = $pos;
	    $pos = $S[$pos][0];
	}
	$path[] = $a;
	echo "<hr /><h1>DEBUG</h1><pre>";print_r($path);echo "</pre>";
	$path = array_reverse($path);

	//print result
	echo "<img src='http://www.you4be.com/dijkstra_algorithm.png'>";
	echo "<br />From $a to $b";
	echo "<br />The length is ".$S[$b][1];
	echo "<br />Path is ".implode('->', $path);
}
?>