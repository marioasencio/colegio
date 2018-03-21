@extends('admin.template.main')

@section('content')

<h3>Lista de Grados</h3>
<br>



<a href="{{ route('grado.create') }}" class="btn btn-info" >Nuevo Grado</a>
<br>
<br>

<table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre</th>
        <th>Profesor</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
      
        @foreach($grados as $grado)
        <tr>
            <td>{{$grado->nombre}}</td>
            <td>{{$grado->profesor}}</td>
            
            <td>
                <a href=" {{ route('grado.edit', $grado->id) }}  " class="btn btn-warning">Editar</a>
                <a href=" {{ route('grado.destroy', $grado->id) }} " class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
        @endforeach
      
    </tbody>
  </table>

@endsection