<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>		
	<h2>Ver fotos</h2>
	<!--a href="" method = "PUT">Editar photo/{{$photo->id}}/edit </a-->		
	<form action="" method="pacth">
	name: <input type="text" name="name" value={{$photo->name}} readonly><br>
  	description: <input type="text" name="description" value={{$photo->description}} readonly><br>
  	<button type="submit">Guardar</button>
	</form>	
</body>
</html>