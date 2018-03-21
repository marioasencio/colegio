@extends('admin.template.main')

@section('content')

<h3>Lista de Profesores</h3>
<br>

<a href="{{ route('profesor.create') }}" class="btn btn-info" >Nuevo Profesor</a>
<br>
<br>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Genero</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach($profesores as $profesor)
        <tr>
            <td>{{$profesor->nombre}}</td>
            <td>{{$profesor->apellidos}}</td>
            <td>
                @if($profesor->genero == 'M')
                    Masculino
                @else
                    Femenino
                @endif
                
            </td>
            <td>
                <a href=" {{ route('profesor.edit', $profesor->id) }} " class="btn btn-warning">Editar</a>
                <a href=" {{ route('profesor.eliminar', $profesor->id) }} " class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach
      
    </tbody>
  </table>

@endsection