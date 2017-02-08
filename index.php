<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Atividade PHPBD</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
	<script src="javascript/jquery.min.js"></script>
	<script src="javascript/bootstrap.min.js"></script>
</head>
<body>
	<?php
	include_once "model/menu.php";

	require_once 'model/conexao.php'; 

	$sqlListaAlunos = "SELECT * FROM aluno ORDER BY nome_aluno";
	$sqlListaCursos = "SELECT * FROM curso ORDER BY nome_curso";

	$resultA = $conn->query($sqlListaAlunos);
	$resultB = $conn->query($sqlListaCursos);

	?>

	<div class="col-md-6">
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Alunos</th>
					<th>Email</th>
				</tr>
			</thead>
			<tbody>

				<?php 

				foreach ($resultA as $row) {
					echo "<tr>";
					echo "<td>".$row['nome_aluno']."</td>";
					echo "<td>".$row['email_aluno']."</td>";
					echo "</tr>";
				}

				?>
			</tbody>
		</table>
	</div>	
	<div class="col-md-6">
		
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>Cursos</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>

				<?php 
				foreach ($resultB as $row) {
					if ($row['status_curso'] == 1) {
						$status = "Ativo";
					}elseif ($row['status_curso'] == 0) {
						$status = "Inativo";
					}
					echo "<tr>";
					echo "<td>".$row['nome_curso']."</td>";
					echo "<td>".$status."</td>";
					echo "</tr>";
				}

				?>
			</tbody>
		</table>
	</div>

</body>
</html>