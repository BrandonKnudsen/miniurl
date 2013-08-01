<?php

$link = mysql_connect('localhost', 'username', 'password');
$link2 = mysql_select_db('host_miniurl');

if($link == false)
{

echo "no connection";
	
	
}

if($link2 == FALSE){
	
echo "no connection to db";	
}

?>
