<?php
error_reporting('All');
//echo "<hr /><h1>DEBUG</h1><pre>";print_r($_SERVER);echo "</pre>";exit;
$environment 	= 	$_SERVER['HTTP_HOST'];
$name 			=	$_REQUEST['Name'];
$subject 		=	$_REQUEST['Subject'];
$email 			=	$_REQUEST['Email'];
$phone 			=	$_REQUEST['Phone'];
$message 		=	$_REQUEST['Message'];

$body = "Name : ".$name;
$body .= "\nContact : ".$phone;
$body .= "\nMessage is as follows,\n\n\t".$message;

$headers = "From:" . $email;
if(mail("reachme@astik.tk" ,$subject, $body, $headers))
{
	//header("location:index/");
	echo '<form action="http://'.$environment.'" method="post">
		<input type="hidden" name="sender" value="' . $name . '" />
		<input type="hidden" name="email_status" value="1"/>
	</form>
	<script>
		document.forms[0].submit();
	</script>';
}
else
{
	echo '<form action="http://'.$environment.'/" method="post">
		<input type="hidden" name="sender" value="' . $name . '" />
		<input type="hidden" name="email_status" value="0"/>
	</form>
	<script>
		document.forms[0].submit();
	</script>';	
}

?>