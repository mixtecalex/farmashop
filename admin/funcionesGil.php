<?php
	function conexionBase(){
		$dsn='mysql:host=localhost;dbname=farmashop';
		$username='root';
		$password='';
		$db= new PDO ($dsn, $username,$password);
		return $db;
	}
	function desconexionBase($db){
		$db=null;
	}

?>