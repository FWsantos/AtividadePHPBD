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
				<?php echo $_POST["nome_delete"];?>
			</td>	
		</tr>
		<tr>
			<td>
				Email: 
			</td>
			<td>
				<?php echo $_POST["email_delete"];?>
			</td>
		</tr>
		<tr>
			<td>
				<?php echo "<input type='hidden' name='form_id' value='".$_POST["id_delete"]."'>";?>
				
			</td>
			<td>
				<button>Deletar</button>
			</td>
		</tr>
	</form>
</table>

<?php 

if (isset($_POST["form_id"])) {

	$alunoId = $_POST["form_id"];

	$sqlDelete = "DELETE FROM aluno WHERE id = $alunoId";

	if ($conn->query($sqlDelete)===TRUE) {
		$pagina = 'buscar.php';
		echo "<script>alert('Aluno deletado.')</script>";
		echo "<meta http-equiv='refresh' content='0;URL=$pagina' /> ";
	}else{
		echo "Erro";
	}
}
?>