<!DOCTYPE html>
<html>
<head>
	<title>Teste</title>
</head>
<body>
	@if (Auth::check())
		{{ Auth::user()->email }}
	@else
		Nada!
	@endif
	<a href="{{ URL::to('logout') }}">Logout</a>
</body>
</html>