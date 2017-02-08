<?php include "index.php" ?>

<h2>Altere o Status</h2>

<?php 

$sqlIn="SELECT * FROM curso";

$result=$conn->query($sqlIn);
?>


<?php
	// if ($result->num_rows>0) {
	// 	while ($row=$result->fetch_assoc()) {
	// 		echo "Nome do Curso: ".$row["nome_curso"]." - Status <button name='curso'>$status</button><input type='hidden' name='cursoid' value='".$row["id"]."'><input type='hidden' name='novo_status' value='".$row["status_curso"]."'><br>";
	// 	}
	// }
	// else
	// 	echo "0 resultados";
    
	foreach ($result as $row ) {

		if ($row["status_curso"] == 1)
			$status = "ativado";
		else if ($row["status_curso"] == 0)
			$status = "desativado";

		
		echo " <form method='post' action=''>" ;
		echo " <input type='hidden' name='cursoid' value='".$row['id']."'>";
		echo " <input type='hidden' name='novo_status' value='".$row["status_curso"]."'>";
		echo $row["nome_curso"]." <input type='submit' value='".$status."' name='curso'>";		
		echo " </form>";
		echo " <hr>";
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

	$sqlUp = "UPDATE curso SET status_curso = $newStatus WHERE id = $cursoId";

	echo "<meta HTTP-EQUIV='refresh' CONTENT='1'>";
	
	if ($conn->query($sqlUp)===TRUE) {
		echo "<script>alert('Atualizado com Sucesso')</script>";
	}else{
		echo "Erro";
	}

	
}
?>