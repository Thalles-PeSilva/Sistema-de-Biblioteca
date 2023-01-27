<?php
	define('HOST', 'localhost');
	define('USER', 'root');
	define('PASS', '');
	define('BASE', 'biblioteca');
	
	$conn = new MySQLi(HOST,USER,PASS,BASE);

	function ExibeData($data){
		return date("d/m/Y", strtotime($data));
	}
