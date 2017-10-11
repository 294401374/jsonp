<?php 
include('./Mysql.php');
$host  	= '127.0.0.1';
$user 	= 'root';
$pwd 	= '123456';
$dbname = 'test';
$mysql 	= new mysql($host,$user,$pwd,$dbname,'','UTF8');
$sql 	= 'select * from user';

$row 	= $mysql->query($sql);
while($result = $mysql->fetch_assoc()){
	print_r($result);echo '<br>';

}
