<?php
	if(isset($_POST["Enviar"]) && !empty($_POST["Enviar"]))
	{
		$mensaje='\n';
		
		if (isset($_POST['opcion1']))
		{
			$vsuma=($_POST['valor1'] + $_POST['valor2']);
			$mensaje=$mensaje.'La suma es '.  $vsuma .'\n';
			
		}
		if(isset($_POST['opcion2']))
		{
			$vresta=$_POST['valor1'] - $_POST['valor2'];
			$mensaje=$mensaje.'La suma es '. $vresta;
			
		}
	 
		echo "<script type 'text/javascripr'> alert('Los resultados son :$mensaje'); </script>";
	}
	




?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ejemplo 7</title>
</head>

<body>
	<h1>Uso de Formularios con PHP</h1>
	<form method="post">
		Ingrese Primer valor:
		<input type="text" name="valor1">
		<br><br>
		Ingrese Segundo valor:
		<input type=text name="valor2"
		<br><br>
		
		Seleccione las operaciones que desea realizar.
		<br>
		<input type="checkbox" name="opcion1">Sumar
		<br>
		<input type="checkbox" name="opcion2">Restar
		
		<br><br>
		<input type="submit" name="Enviar" value="Procesar">
		<input type="reset" name="Borrar" >
 	
	</form>
</body>
</html>
