<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<table class="table">
	<a href="{{route('home')}}" class="btn btn-danger">Clicme</a>

	<thead>
		<tr>
			<th>id</th>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Creado en</th>
			<th>Actualizado en</th>
		</tr>
	</thead>

	<tbody>
		@foreach($data as $key => $value)
		<tr>
			<td>{{$key+1}}</td>
			<th>{{ucfirst($value->nombre)}}</th>
			<th>{{$value->edad}}</th>
			<th>{{$value->created_at}}</th>
			<th>{{$value->updated_at}}</th>
		</tr>
		@endforeach
	</tbody>
	
</table>
</body>
</html>