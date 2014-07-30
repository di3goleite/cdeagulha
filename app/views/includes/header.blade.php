<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Cacete de Agulha</a>
		</div>

		<div class="navbar-collapse collapse">
			@if (Auth::check())

				<div class="navbar-form navbar-right">
					Bem vindo, {{ Auth::user()->name }}
					<a href="{{ URL::to('logout') }}">
						<button type="submit" class="btn btn-danger">Sair</button>
					</a>
				</div>
			@else

				{{ Form::open(array('url' => 'login', 'class' => 'navbar-form navbar-right')) }}
					<div class="form-group">
						{{ Form::text('email', Input::old('email'), array('placeholder' => 'Email', 'class' => 'form-control')) }}
					</div>
					<div class="form-group">
						{{ Form::password('password', array('placeholder' => 'Senha', 'class' => 'form-control')) }}
					</div>
					{{ Form::submit('Entrar', array('class' => 'btn btn-success')) }}
				{{ Form::close() }}
			@endif
		</div>
	</div>
</div>