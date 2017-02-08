<?php include "index.php" ?>
<h2>Insira um novo curso</h2>
<br>
<form method="POST" action="">
	<label for="nameCurso">Nome do novo Curso: </label>
	<input type="text" name="nameCurso" id="nameCurso">
	<button>Adicionar Curso</button>
</form>

<?php

if (isset($_POST["nameCurso"])) {

	$curso = $_POST["nameCurso"];

	$sql = "INSERT INTO curso(nome_curso) VALUES('$curso')";

	if ($conn->query($sql)===TRUE) {
		echo "Adicionado com Sucesso";
	}else{
		echo "Erro";
	}

	$conn->close();
}
?>