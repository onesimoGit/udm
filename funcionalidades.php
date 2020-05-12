<?php

	if(isset($_GET['noticia'])) {
		$titulo = $_GET['titulo'];
		$subtitulo = $_GET['subtitulo'];
		$texto = $_GET['texto'];
		$adicionado_por = $_GET['adicionado_por'];
		$data = $_GET['data'];

	//	echo $titulo . " | " . $subtitulo . " | " . $texto. " | " . $adicionado_por . " | " . $data;

		include("mysql.php");

		$sql = new MySQL();
		$conn = $sql -> connection();

		$noticia = mysqli_query($conn, "insert into noticia (titulo, subtitulo, texto, adicionado_por, data) values ('". $titulo . "', '" . $subtitulo . "', '" . $texto . "', '" . $adicionado_por . "', '" . $data . "')");

		if($noticia) {
			echo "Noticia inserida com sucesso";
		}
		else {
			echo "Noticia pra teu mae. Veja se os dados estao aceitaveis";
		}
	}
	else if(isset($_GET['get_noticias'])){
		include("mysql.php");

		$sql = new MySQL();
		$conn = $sql -> connection();

		$ires = mysqli_query($conn, "select count(id) as num from noticia order by data DESC");

		$i = mysqli_fetch_assoc($ires);

		if($i['num'] > 0){

			$ires = mysqli_query($conn, "select * from noticia order by data DESC");
		
			if($ires){

				while($rowres = mysqli_fetch_assoc($ires)){

					$titulo = $rowres['titulo'];
					$subtitulo = $rowres['subtitulo'];
					$texto = $rowres['texto'];
					$adicionado_por = $rowres['adicionado_por'];
					$data = $rowres['data'];

					$myArray[] = $rowres;
				}

				echo(json_encode($myArray));

			//	echo $alias;
			}
			else {

				//	quebrar ciclo
				print("
						
				");
			}
		}
		else {
			echo "0";
		}
	}
?>