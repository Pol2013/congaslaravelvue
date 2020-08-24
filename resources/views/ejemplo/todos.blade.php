<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Todos los libros</title>
</head>
<body>
	<?php foreach ($libros as $libro): ?>
		<p>
			<?=$libro['nombre']?><br>
			 <?=$libro['numero_administrado']?><br>
			 <?=$libro['direccion']?><br>
			 <?=$libro['telefono']?><br>
			 <?=$libro['id_tipo_documento']?><br>
			<br>
			
		</p>
	<?php endforeach ?>
</body>
</html>