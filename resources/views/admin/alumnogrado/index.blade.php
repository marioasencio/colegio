@extends('admin.template.main')

@section('content')

<h3>Lista de Asignaciones</h3>
<br>



<a href="{{ route('alumnogrado.create') }}" class="btn btn-info" >Nuevo Asignación</a>
<br>
<br>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Alumno</th>
        <th>Grado</th>
        <th>Sección</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach($asignados as $asignado)
        <tr>
            <td>{{$asignado->alumno}}</td>
            <td>{{$asignado->grado}}</td>
            <td>{{$asignado->seccion}}</td>
            
            <td>
                <a href=" {{ route('alumnogrado.edit', $asignado->id) }}  " class="btn btn-warning">Editar</a>
                <a href=" {{ route('alumnogrado.destroy', $asignado->id) }} " class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach
      
    </tbody>
  </table>

@endsection