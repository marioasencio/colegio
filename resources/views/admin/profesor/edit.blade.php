@extends('admin.template.main')

@section('content')

    <h3>Editar Profesor</h3>

    {!! Form::open(array('route'=>['profesor.update', $profesor->id], 'method'=>'PUT') )!!}

        <div class="form-group">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre', $profesor->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre Alumno']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('apellidos', 'Apellidos') !!}
            {!! Form::text('apellidos', $profesor->apellidos, ['class' => 'form-control', 'placeholder' => 'Apellidos Alumno']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('genero', 'Género') !!}
            {!! Form::select('genero', ['M'=>'Masculino', 'F'=>'Femenino'], $profesor->genero, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Profesor', ['class' => 'btn btn-success']) !!}
            <a href="{{ route('profesor.index') }}" class="btn btn-warning">Cancel</a>
        </div>


    {!! Form::close() !!}

@endsection