<!DOCTYPE html>
<!-- cadastro.html -->
<html>
	<head>
	  <title>Cadastro de aluno</title>
	  <meta charset="utf-8">
	</head>
	<body>
	<h1>Cadastrar novo aluno</h1>
		<form action="insercao_curso.php" 
		      method="GET">
			<label for="id_curso">
				Nome:
			</label>
			<input type="text" name="id_curso" id="id_curso">
			<br>
			<label for="carga_hora">
				Carga Horária:
			</label>
			<input type="text" name="carga_hora" id="id_curso">
			<br>
			<label for="dt_inicio">
				Data de início:
			</label>
			<input type="date" name="dt_inicio" id="id_curso" value="<?php echo $al["dt_inicio"]; ?>">
			<br>
			<input type="submit" value="Ok">
		</form>
	</body>
</html>