
@extends('admin.template.main')

@section('title', 'crear usuario')

@section('content')
<div class="container">
	<div class="col-sm-6 col-sm-offset-3">
		<div class="panel panel-default">
			<div class="panel-heading">
				
			</div>

			<div class="panel-body">
					{{-- {!! Form::open(['url' => 'foo/bar', 'method' => 'put']) !!} --}}
				{{--
					<div class="form-group">
						{!! Form::label('name','Nombre') !!}
						{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre Completo' ,'required']) !!}
					
					</div>
				--}}

					{{-- {!! Form::close() !!} --}}
			</div>
		</div>	
	</div>	
</div>	



@endsection 

