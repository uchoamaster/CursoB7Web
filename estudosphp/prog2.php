<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Estudando PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 

	$data_de_hoje = date("d/m/Y", time());


	 ?>
	 <h3 align="center">Hoje iremos ver exemplo de uma função que chama a data atual.</h3>
	 <p align="center">Hoje é dia <?php  echo $data_de_hoje; ?> </p>
</body>
</html>