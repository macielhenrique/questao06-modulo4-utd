<?php 
	
	function insert($table, $data = array()){
		global $conn;	

		#1ª parte da query
		$query = "INSERT INTO $table(";

		#2ª parte da query
		$campos = array_keys($data);
		$campos = implode(",", $campos);

		#3ª parte da query
		$valores;
		foreach ($data as $key => $value) {
			# code...
			$valores = "'$value', ";
		}	

		$valores = substr($valores, 0, -2);

		$query .= "$campos ) VALUES ($valores)";

		//echo $query;

		$ret = mysqli_query($conn, $query) or die (mysqli_error($conn));

		#testando se deu certo
			if($ret){
				echo "enviado pro banco";
			}else{
				echo "erro ao enviar";
			}

	}

	
	
?>