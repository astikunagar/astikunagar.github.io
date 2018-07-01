<?php
$unsorted_arr = array(11,13,12,14,9,7,6,8,3,1);
echo "<pre>"; print_r($unsorted_arr);echo "</pre>";
$max_size = count($unsorted_arr);
$total_cycle = 0;
for ($j=0; $j < $max_size ; $j++) 
{ 
	for($i = 0; $i < $max_size-1; $i ++)
	{
        if($unsorted_arr[$i] > $unsorted_arr[$i+1]) 
        {
            $temp = $unsorted_arr[$i+1];
            $unsorted_arr[$i+1]=$unsorted_arr[$i];
            $unsorted_arr[$i]=$temp;
			echo "---- $j -> $i -----<pre>"; print_r($unsorted_arr);echo "</pre><hr>";
        }       
	$total_cycle++;
    }
}
echo "<b>".$total_cycle;exit;
//echo "<pre>"; print_r($unsorted_arr);exit;

?>