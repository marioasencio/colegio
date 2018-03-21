@extends('admin.template.main')

@section('content')

    <h3>Crear Grado</h3>

    {!! Form::open(array('route'=>['grado.update', $grado->id], 'method'=>'PUT') )!!}

        <div class="form-group">
            {!! Form::label('nombre', 'Nombre') !!}
            {!! Form::text('nombre', $grado->nombre, ['class' => 'form-control', 'placeholder' => 'Nombre Grado']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('profesorid', 'Profesor') !!}
            {!! Form::select('profesor_id', $profesores, $grado->profesor_id, ['class' => 'form-control']) !!}
        </div>

        
        <div class="form-group">
            {!! Form::submit('Editar Grado', ['class' => 'btn btn-success']) !!}
            <a href="{{ route('grado.index') }}" class="btn btn-warning">Cancel</a>
        </div>


    {!! Form::close() !!}

@endsection