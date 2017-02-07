<?php include "../model/menu.php" ?>

<h2>Altere o Status</h2>

<?php 
require '../model/conexao.php';

$sqlIn="SELECT * FROM cursos";

$result=$conn->query($sqlIn);
?>

	
	<?php
	// if ($result->num_rows>0) {
	// 	while ($row=$result->fetch_assoc()) {
	// 		$status = "";
	// 		if ($row["status_curso"] == 1)
	// 			$status = "ativado";
	// 		else
	// 			$status = "desativado";
	// 		echo "Nome do Curso: ".$row["nome_curso"]." - Status <button name='curso'>$status</button><input type='hidden' name='cursoid' value='".$row["id"]."'><input type='hidden' name='novo_status' value='".$row["status_curso"]."'><br>";
	// 	}
	// }
	// else
	// 	echo "0 resultados";

	foreach ($result as $ro ) {
		echo " Nome do Curso: ".$ro["nome_curso"] ."<br>";
		echo " Status".$ro["id"]."<br>";
		echo " Status".$ro["status_curso"]."<br>";
		echo	"<form method='post' action=''>" ;
		echo " <input type='hidden' name='cursoid' value='".$ro['id']."'>";
		echo " <input type='hidden' name='novo_status' value='".$ro["status_curso"]."'>";
		echo " Status <input type='submit' value='".$ro['status_curso']."' name='curso'><br>";		
	echo	"</form>";
		echo "<hr>";
	}

	?>

	<br>
<!-- 	<button name="atualiza">Atualizar</button> -->


<?php

if (isset($_POST['cursoid'])){

	$cursoId = $_POST['cursoid'];

	if ($_POST["novo_status"] == 1) {
		$newStatus = 0;
	}else{
		$newStatus = 1;
	}

	$sqlUp = "UPDATE cursos SET status_curso = $newStatus WHERE id = $cursoId";

	echo "<meta HTTP-EQUIV='refresh' CONTENT='1'>";
	
	if ($conn->query($sqlUp)===TRUE) {
		echo "Atualizado com Sucesso";
	}else{
		echo "Erro";
	}
		
	
}
?>