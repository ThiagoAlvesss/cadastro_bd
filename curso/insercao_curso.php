<!DOCTYPE html>
<!-- insercao_aluno.php -->
<html>
	<head>
	  <title>Cadastro de aluno - Inclusão</title>
	  <meta charset="utf-8">
	</head>
	<body>
<?php 
// efetua inclusao do aluno informado em cadastro_aluno.php

  $id_curso = $_GET["id_curso"];
  $hora_curso = $_GET["hora_curso"];
  $data_inicio = $_GET["dt_inicio"];
  
  include_once "../inc/conectabd.inc.php";

  $query = "INSERT INTO tb_curso 
            (ds_curso, nr_carga_horaria, dt_inicio) 
	    VALUES
            ('$id_curso', '$hora_curso', '$data_inicio');";
  if ($result = mysqli_query($link, $query)) {
	  echo "Inclusão efetuada com sucesso";
  }
  
  // fecha a conexão
  mysqli_close($link);
?>  
 <br>
 <a href="consulta_curso.php">Ver alunos cadastrados</a>
 
 </body>
</html>