<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crear un libro</title>
</head>
<body>
	<h1>Crear un libro</h1>
	@if(count($errors) > 0)
		<div class="errors">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	@endif
	<form action="/libros/crear" method="post">
		Nombre: <input type="text" name="name" value="{{old('name')}}">
		<br>
		Autor: <input type="text" name="author" value="{{old('author')}}">
		<br>
		ISBN: <input type="text" name="isbn" value="{{old('isbn')}}">
		<br>
		<input type="submit" value="Crear">
	</form>
</body>
</html>