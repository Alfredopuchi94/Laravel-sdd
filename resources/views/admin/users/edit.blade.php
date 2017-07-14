
@extends('admin.template.main')

@section('title', 'Editar usuario :' . $user->name)

@section('content')
<div class="container">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
					Nuevo Usuario
			</div>

			<div class="panel-body">
				{!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}
					<div class="form-group">
						{!! Form::label('name','nombre') !!}
						{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre']) !!}
					</div>

					<div class="form-group">
						{!! Form::label('email','Email') !!}
						{!! Form::text('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@gmail.com']) !!}
					</div>


					<div class="form-group">
						{!! Form::label('type','Tipo') !!}
						{!! Form::select('type', [''=>'Seleccione un nivel','member'=>'Miembro','admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
					</div>

					<div class="form-group">
						{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>



@endsection
