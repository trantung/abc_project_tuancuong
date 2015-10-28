
<!DOCTYPE html>
<html>
	<head>
		<title>Add new user</title>
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
	{{ Form::open(array('route' => array('postcreate'))) }}
		<div class="container"> 					
			<table class="table">
	    		<thead>
	      			<tr>
	      				
	      				<td>Name</td>
	      				<td>Email</td>
	      				<td>Operation</td>
	      			</tr>
	      			
	      			<tr>					
	      			
	      			<td>{{ Form::text('name') }}</td>
	      			<td>{{ Form::text('email') }}</td>
	      			<td>
	      					{{ Form::submit('Add new') }}										
	      			</td>
	      			</tr>	      			
	      		</thead>
	      	</table>																
									
		</div>
		{{ Form::close() }}
	</body>
</html>

