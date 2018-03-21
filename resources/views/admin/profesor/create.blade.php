@extends('admin.template.main')

@section('content')

    <h3>Crear Profesor</h3>

    {!! Form::open(['route'=>'profesor.store', 'method'=>'POST'] )!!}

        <div class="form-group">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre Profesor']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('apellidos', 'Apellidos') !!}
            {!! Form::text('apellidos', null, ['class' => 'form-control', 'placeholder' => 'Apellidos Profesor']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('genero', 'Género') !!}
            {!! Form::select('genero', ['M'=>'Masculino', 'F'=>'Femenino'], null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}
            <a href="{{ route('profesor.index') }}" class="btn btn-warning">Cancel</a>
        </div>


    {!! Form::close() !!}

@endsection