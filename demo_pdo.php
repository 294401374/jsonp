<?php 
include('./test_pdo.php');
$config  = array(
	'host' 		=> '127.0.0.1',
	'port' 		=> '3306',
	'user' 		=> 'root',
	'passwd'	=> '123456',
	'dbname' 	=> 'test'
);
$pdo = new MMysql($config);
echo '<pre>';
print_r($pdo->where('id>4')->select('user'));
echo '</pre>';
