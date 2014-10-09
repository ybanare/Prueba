<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>
	<h1>Todas las fotos</h1>
	<form action="photo/create" method="get">
	<button type="submit">Agregar</button>
	</form>

	<table style="width:50%">
	@foreach ($photos as $photo)
      <tr>
      	<!--td><a href="{{ route('photo.destroy', $photo->id) }}">Eliminar</a></td-->
      	<td>
		{{ Form::open(array('url' => 'photo/' . $photo->id, 'class' => 'pull-right')) }}
			{{ Form::hidden('_method', 'DELETE') }}
			{{ Form::submit('Eliminar', array('class' => 'btn btn-warning')) }}
		{{ Form::close() }}
		</td>
        <td>{{$photo->id}}</td>
        <td>{{$photo->name}}</td> 
        <td>{{$photo->description}}</td>
        <td>
	 		{{ Form::open(array('url' => 'photo/' . $photo->id. '/edit', 'class' => 'pull-right')) }}
				{{ Form::hidden('_method', 'GET') }}
				{{ Form::submit('Editar', array('class' => 'btn btn-warning')) }}
			{{ Form::close() }}       	
        </td>        
        <td><a href="{{ route('photo.show', $photo->id) }}">Show</a></td>
      </tr>
	@endforeach
	</table>
</body>
</html>