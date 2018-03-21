@extends('admin.template.main')

@section('content')

    <h3>Crear Alumno</h3>

    {!! Form::open(['route'=>'alumno.store', 'method'=>'POST'] )!!}

        <div class="form-group">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre Alumno']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('apellidos', 'Apellidos') !!}
            {!! Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => 'Apellidos Alumno']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('genero', 'Género') !!}
            {!! Form::select('genero', ['M'=>'Masculino', 'F'=>'Femenino'], null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('fecha_nac', 'Fecha Nacimiento') !!}
            {!! Form::text('fecha_nac', null, ['class' => 'form-control', 'placeholder' => 'AAAA-MM-DD']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}
            <a href="{{ route('alumno.index') }}" class="btn btn-warning">Cancel</a>
        </div>


    {!! Form::close() !!}

@endsection