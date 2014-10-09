<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>		
	<h2>Editar fotos</h2>
	{{ Form::model($photo, array('action' => array('PhotoController@update', $photo->id), 'method' => 'PUT')) }}

	name: <input type="text" name="name" value={{$photo->name}}><br>
  	description: <input type="text" name="description" value={{$photo->description}}><br>

	{{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
</body>
</html>