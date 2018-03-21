@extends('admin.template.main')

@section('content')

    <h3>Editar Asignacion</h3>

    
    {!! Form::open(array('route'=>['alumnogrado.update', $asignacion->id], 'method'=>'PUT') )!!}

    <div class="form-group">
        {!! Form::label('alumno', 'Alumno') !!}
        {!! Form::select('alumno_id', $alumno, $asignacion->alumno_id, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('grado', 'Grado') !!}
        {!! Form::select('grado_id', $grado, $asignacion->grado_id, ['class' => 'form-control', 'disable']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('seccion', 'Sección') !!}
        {!! Form::select('seccion', ['a'=>"A", 'b'=>"B", 'c'=>"C"], $asignacion->seccion, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Editar asignacion', ['class' => 'btn btn-success']) !!}
        <a href="{{ route('alumnogrado.index') }}" class="btn btn-warning">Cancel</a>
    </div>


    {!! Form::close() !!}

@endsection