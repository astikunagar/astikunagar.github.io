<?php
$log_file = "download_track.txt";
$fname = $log_file;
$fhandle = fopen($fname,"r")or die("Unable to open file!");;
$content = fread($fhandle,filesize($fname));
$data = (int)$content;
$data = $data+1;
$fhandle = fopen($fname,"w");
fwrite($fhandle,$data);
fclose($fhandle);
echo $data;
/*fwrite($myfile, "\n\n ---- ".$method_name." ----- \n\n");
fwrite($myfile, json_encode($excp_str));
fwrite($myfile, "\n\n ---- \n\n");
fwrite($myfile, json_encode($_REQUEST));
fclose($myfile);*/
?>