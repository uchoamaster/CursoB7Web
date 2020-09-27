<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Estudando PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>



<h2>Estudando Cálculo com o PHP , aqui um exemplo de multiplicação </h2>
	<?php 

	$data_de_hoje = date("d/m/Y", time());

	$base = 5.5;

	$altura = 10;

	$area = $base * $altura;


	 ?>


<p> <?php echo "calculando a base = $base x(vezes) altura = $altura é igual à = ".$area; ?> </p>
<p> <?php echo "A data de hoje é ".$data_de_hoje ?>.</p>
</body>
</html>