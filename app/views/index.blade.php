<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
				<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<style type="text/css">
			.container{
				margin-top: 50px;
			}
		</style>
	</head>
	<body>
		<div class="container"> 
			<div style="float:right;">
				<a href="{{ route('create') }}">Add</a>	
				<a href="{{ route('logout') }}">Logout</a>	
			</div>
		
			<table class="table">
	    		<thead>
	      			<tr>
	      				<td>Row num</td>
	      				<td>Name</td>
	      				<td>Email</td>
	      				<td>Operation</td>
	      			</tr>
	      			@foreach($users as $user)
	      			<tr>					
	      			<td>{{ $user->id }}</td>
	      			<td>{{ $user->name }}</td>
	      			<td>{{ $user->email }}</td>
	      			<td>
	      				<a class="btn btn-default btn-circle" href="{{ route('edit', $user->id) }}"><i class="fa fa-pencil">Edit</i></a>
	      				 &nbsp
						<a class="btn btn-default btn-circle" href="{{ route('remove', $user->id) }}"><i class="fa fa-pencil">Delete</i></a>

	      			</td>
	      			</tr>
	      				@endforeach
	      		</thead>
	      	</table>																
									
		</div>
	</body>
</html>

