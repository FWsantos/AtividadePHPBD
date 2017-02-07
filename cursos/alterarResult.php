<?php
require '../model/conexao.php';

if ($_POST['novo_status']){
	$cursoId = $_POST["cursoid"];
    ECHO $cursoId ;
	if ($_POST["novo_status"]) {
			# code...
		$newStatus = 0;
		ECHO "a" ;
	}else{
		$newStatus = 1;
		ECHO "b" ;
	}

	$sqlUp = "UPDATE cursos SET status_curso = $newStatus WHERE id = $cursoId";

	
	if ($conn->query($sqlUp)===TRUE) {
		echo "Atualizado com Sucesso";
	}else{
		echo "Erro";
	}
		
	
}
?>