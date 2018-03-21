@extends('admin.template.main')

@section('content')

    <h3>Editar Alumno</h3>

    {!! Form::open(array('route'=>['alumno.update', $alumno->id], 'method'=>'PUT') )!!}

        <div class="form-group">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre', $alumno->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre Alumno']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('apellidos', 'Apellidos') !!}
            {!! Form::text('apellidos', $alumno->apellidos, ['class' => 'form-control', 'placeholder' => 'Apellidos Alumno']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('genero', 'Género') !!}
            {!! Form::select('genero', ['M'=>'Masculino', 'F'=>'Femenino'], $alumno->genero, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('fecha_nac', 'Fecha Nacimiento') !!}
            {!! Form::text('fecha_nac', $alumno->fecha_nac, ['class' => 'form-control', 'placeholder' => 'AAAA-MM-DD']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Alumno', ['class' => 'btn btn-success']) !!}
            <a href="{{ route('alumno.index') }}" class="btn btn-warning">Cancel</a>
        </div>


    {!! Form::close() !!}

@endsection