<html>
	<head>
		<title>Login system</title>
	</head>

	<body>

   
    @if (Session::has('message'))
        <div class="alert alert-success">
   <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   <strong><center>{{ Session::get('message') }}</center></strong>
     </div>
    @endif


		{{ Form::open(array('route' => array('post.login'))) }}
			email: {{ Form::text('email') }}<br/>
			Password: {{ Form::password('password') }}
			<br/>
			{{ Form::submit('login') }}
		{{ Form::close() }}
	</body>
</html>