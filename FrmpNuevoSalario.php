<html>
<head>
	<title> Calculo nuevo Salario </title>
</head>
<body>
<H1>Incremento salario </H1>
<?php echo $_POST['nombre']; 
$salActual=$_POST['salActual'];
$salNuevo = (($salActual *0.4) + $salActual);
?> 

Su salario anterior era <?php echo $salActual ?>, con el incremento  de ley, su nuevo salario es : <?php echo $salNuevo ?>
<br>
</body>
</html>




