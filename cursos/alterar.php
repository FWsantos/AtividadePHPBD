<?php include "../menu.php" ?>

<h2>Altere o Status</h2>

<?php 
require '../conexao.php';

$sqlIn="SELECT id,nome_curso,status_curso FROM cursos";

$result=$conn->query($sqlIn);
?>
<form method="post" action="">
	
	<?php
	if ($result->num_rows>0) {
		while ($row=$result->fetch_assoc()) {
			$status = "";
			if ($row["status_curso"] == 1)
				$status = "ativado";
			else
				$status = "desativado";
			echo "Nome do Curso: ".$row["nome_curso"]." - Status <input type='text' name='curso' value='".$status."''><input type='hidden' name='cursoid' value='".$row["id"]."'><input type='hidden' name='novo_status' value='".$row["status_curso"]."'><br>";
		}
	}
	else
		echo "0 resultados";
	?>

	<br>
	<button name="atualiza">Atualizar</button>

</form>
<?php 
if (isset($_POST["cursoid"])) {
	$cursoId   = $_POST["cursoid"];

	if ($_POST["novo_status"]) {
			# code...
		$newStatus = 0;
	}else{
		$newStatus = 1;
	}

	$sqlUp = "UPDATE cursos SET status_curso = $newStatus WHERE id = $_POST['cursoid']";
}
?>