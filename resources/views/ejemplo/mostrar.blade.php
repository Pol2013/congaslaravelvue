<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar un libro</title>
</head>
<body>
	<h1>
		<?=$libro['id_administrado']?>
		<?=$libro['nombre']?>
	</h1>
	<p>
		 <?=$libro['numero_administrado']?>
		<br>
	    <?=$libro['direccion']?>
	     <?=$libro['telefono']?>
	      <?=$libro['id_tipo_documento']?>
	</p>
</body>
</html>