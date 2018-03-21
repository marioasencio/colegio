@extends('admin.template.main')

@section('content')

    <h3>Crear Grado</h3>

    {!! Form::open(['route'=>'grado.store', 'method'=>'POST'] )!!}

        <div class="form-group">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre Grado']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('profesorid', 'Profesor') !!}
            {!! Form::select('profesor_id', $profesores, null, ['class' => 'form-control']) !!}
        </div>

        
        <div class="form-group">
            {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}
            <a href="{{ route('grado.index') }}" class="btn btn-warning">Cancel</a>
        </div>


    {!! Form::close() !!}

@endsection