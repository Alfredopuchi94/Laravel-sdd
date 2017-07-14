@extends('admin.template.main')

@section('title','Listar Usuarios')

@section('content')

<div class="container">
	<div class="panel panel-default">
	  <div class="panel-heading">
	    <h3 class="panel-title"><strong>Users</strong>|<a type="button" class="btn btn-info "  href="{{ route('users.create') }}">Create User</a></h3>
	  </div>

	    <table class="table table-hover table-bordered">
		  <tr class="active">
		 	<th><em>#</em></th>
		 	<th>Nombre</th>
		 	<th>Email</th>
		 	<th>Tipo</th>
		 	<th>Accion</th>
		  </tr>
		@foreach($users as $user)
		  <tr class="text-center">
		    <th>{{ $user->id }}</th>
		    <td>{{ $user->name }}</td>
		    <td>{{ $user->email }}</td>
		    <td>
				@if($user->type == "admin")
					<span class="label label-success">{{ $user->type }}</span>
				@elseif($user->type == "member")
					<span class="label label-primary">{{ $user->type }}</span>
				@endif
		    </td>
		    <td>
			    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
			    <a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('¿esta seguro de elimar a un usuario?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a> 
		    </td>
		    
		  </tr>
		@endforeach
		</table>
		<div class="text-center">
			{!! $users->render() !!}
		</div>
	</div>
</div>
	
@endsection