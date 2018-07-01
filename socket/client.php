<?php
// set some variables
$host    = "127.0.0.1";
$port    = 25003;
$message = $_REQUEST["msg"];
echo "Message To server :".$message;
// create socket
$socket = socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
// connect to server
$result = socket_connect($socket, $host, $port) or die("Could not connect to server\n");  
// send string to server
socket_write($socket, $message, strlen($message)) or die("Could not send data to server\n");
// get server response
$result = socket_read ($socket, 1024) or die("Could not read server response\n");
echo "Reply From Server  :".$result."<hr>";
$url1=$_SERVER['REQUEST_URI'];
header("Refresh: 1; URL=$url1");
// close socket
//socket_close($socket);

?>