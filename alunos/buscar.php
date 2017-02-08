
<?php
include_once "index.php";

?>

<h2>Pesquise por alunos</h2>
<form method="post" action="">
	<input type="text" name="busca" placeholder="Nome ou Email"><button>Pesquisar</button>
</form>

<?php 

if (isset($_POST["busca"])) {

	$busca  = $_POST["busca"];

	$sqlBusca="SELECT * FROM aluno WHERE nome_aluno LIKE '%$busca%' OR email_aluno LIKE '%$busca%'";

	$result=$conn->query($sqlBusca);
	foreach ($result as $row ) {
		echo $row["nome_aluno"];
		echo " - ";
		echo ($row["email_aluno"]);
		// echo " - ";
		echo "<form method='post' action='atualizar.php'>";
		echo "<input type='hidden' name='id_update' value='".$row["id"]."'>";
		echo "<input type='hidden' name='nome_update' value='".$row["nome_aluno"]."'>";
		echo "<input type='hidden' name='email_update' value='".$row["email_aluno"]."'>";
		echo "<input type='submit' value='Atualizar dados'>";
		echo "</form>";

		// echo " - ";
		echo "<form method='post' action='deletar.php'>";
		echo "<input type='hidden' name='nome_delete' value='".$row["nome_aluno"]."'>";
		echo "<input type='hidden' name='email_delete' value='".$row["email_aluno"]."'>";
		echo "<input type='hidden' name='id_delete' value='".$row["id"]."'>";
		echo "<input type='submit' value='Remover aluno'>";
		echo "</form>";
		echo "<hr>";

		echo "<table class='table'>";
		echo "<tr>";
		echo "<th>Aluno</th><th>Email</th><th></th><th></th>";
		echo "</tr>";
		echo "<tr>";
		echo "<form method='post' action='atualizar.php'>";
		echo "</form>";
		echo "<input type='hidden' name='id_update' value='".$row["id"]."'>";
		echo "<input type='hidden' name='nome_update' value='".$row["nome_aluno"]."'>";
		echo "<input type='hidden' name='email_update' value='".$row["email_aluno"]."'>";
		echo "<td>";
		echo "<input type='submit' value='Atualizar dados'>";
		echo "</td>";
		echo "</tr>";
		echo "</table>";
	}
}


?>