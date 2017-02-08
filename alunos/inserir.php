<?php include "index.php" ?>
<h2>Insira um novo aluno</h2>
<br>
<form method="POST" action="">
	<label for="nome">nome do novo Aluno: </label>
	<input type="text" name="nome" id="nome">
	<br>
	<label for="email">email do novo Aluno: </label>
	<input type="email" name="email" id="email">
	<br>
	<button>Adicionar Aluno</button>
</form>

<?php

if (isset($_POST["nome"])) {

	$nome  = $_POST["nome"];
	$email = $_POST["email"];

	$sql = "INSERT INTO aluno(nome_aluno,email_aluno) VALUES('$nome','$email')";

	if ($conn->query($sql)===TRUE) {
		echo "Adicionado com Sucesso";
	}else{
		echo "Erro";
	}

	$conn->close();
}
?>