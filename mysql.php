<?php

class MySQL{

	private $user;
	private $password;
	private $host;
	private $port;
	private $conn;

	function MySQL(){

	}

	//	no servidor local

	function connection(){

		$host = 'localhost';
		$user = 'root';	//	id12184165_root
		$password = '';	//	dimamsql
		$db = 'central';	//	id12184165_perfil

		$conn = mysqli_connect($host, $user, $password, $db);

		if(!$conn){

			die('<i>Could not connect: ' . mysqli_connect_error($conn) . '</i><br>');

		}

		else{

		}

		return $conn;

	}

	//	no servidor local

	function dbSelect(){

		$host = 'localhot'; // sql303.epizy.com
		$user = 'root'; // epiz_25039228 
		$password = '';	// d3Q8qkbxlGTc
		$db = 'central'; // epiz_25039228_onesimometro

		$conn=mysqli_connect($host, $user, $password);

		$dbSel=mysqli_select_db($db,$conn);

		if($dbSel){

		}

		else{

			die("<i>Cannot use " . "$db: " . mysqli_connect_error($conn) . "</i><br>");

		}

		return $dbSel;

	}

	function setUser($user){

		$user = $user;

	}

	function setPassword($password){

		$password = $password;

	}

	function setHost($host){

		$host = $host;

	}

	function setPort($port){

		$port = $port;

	}

}

?>