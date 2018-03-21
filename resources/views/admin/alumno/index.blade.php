@extends('admin.template.main')

@section('content')

<h3>Lista de Alumnos</h3>
<br>

<a href="{{ route('alumno.create') }}" class="btn btn-info" >Nuevo Alumno</a>
<br>
<br>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Genero</th>
        <th>Fecha Nacimiento</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach($alumnos as $alumno)
        <tr>
            <td>{{$alumno->nombre}}</td>
            <td>{{$alumno->apellidos}}</td>
            <td>
                @if($alumno->genero == 'M')
                    Masculino
                @else
                    Femenino
                @endif
            </td>
            <td>{{$alumno->fecha_nac}}</td>
            <td>
                <a href=" {{ route('alumno.edit', $alumno->id) }} " class="btn btn-warning">Editar</a>
                <a href=" {{ route('alumno.destroy', $alumno->id) }}" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach
      
    </tbody>
  </table>

@endsection