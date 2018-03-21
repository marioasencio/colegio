@extends('admin.template.main')

@section('content')

    <h3>Crear Asignacion</h3>

    {!! Form::open(['route'=>'alumnogrado.store', 'method'=>'POST'] )!!}

        <div class="form-group">
            {!! Form::label('alumno', 'Alumno') !!}
            {!! Form::select('alumno_id', $alumno, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('grado', 'grado') !!}
            {!! Form::select('grado_id', $grado, null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('seccion', 'Sección') !!}
            {!! Form::select('seccion', ['a'=>"A", 'b'=>"B", 'c'=>"C"], null, ['class' => 'form-control']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Crear', ['class' => 'btn btn-success']) !!}
            <a href="{{ route('alumnogrado.index') }}" class="btn btn-warning">Cancel</a>
        </div>


    {!! Form::close() !!}

@endsection