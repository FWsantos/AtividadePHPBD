
<?php
include "buscar.php";
?>

<table>
	<form method="post" action="">
		<tr>
			<td>
				Nome: 
			</td>
			<td>
				<?php echo "<input type='text' name='form_nome' value='".$_POST["nome_update"]."'>";?>
			</td>	
		</tr>
		<tr>
			<td>
				Email: 
			</td>
			<td>
				<?php echo "<input type='text' name='form_email' value='".$_POST["email_update"]."'>";?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "<input type='hidden' name='form_id' value='".$_POST["id_update"]."'>";?>
				
			</td>
			<td>
				<button>Atualizar</button>
			</td>
		</tr>
	</form>
</table>

<?php 

if (isset($_POST["form_id"])) {

	$alunoId    = $_POST["form_id"];
	$alunoNome  = $_POST["form_nome"];
	$alunoEmail = $_POST["form_email"];

	$sqlUpdate = "UPDATE aluno SET nome_aluno = '$alunoNome',email_aluno = '$alunoEmail' WHERE id = $alunoId";

	if ($conn->query($sqlUpdate)===TRUE) {
		$pagina = 'buscar.php';
		echo "<script>alert('Atualizado com Sucesso')</script>";
		echo "<meta http-equiv='refresh' content='0;URL=$pagina' /> ";
	}else{
		echo "Erro";
	}
}
?>
