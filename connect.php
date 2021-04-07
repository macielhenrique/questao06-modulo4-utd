<?php 
	
		#dados que eu preciso para fazer minha conexão com o banco de dados
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "apicurso";

	#criar conexão com o banco de dados
	$conn = mysqli_connect($host, $user, $pass,$db);

 ?>