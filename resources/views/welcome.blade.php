@extends('admin.template.main')



@section('content')

<br>
    <div class="card">
    <div class="card-header">
            <h3>Administración de Colegio</h3>
    </div>
    <div class="card-body">
        <p class="card-text">
                Se requiere una solución para la administración datos de un colegio, es decir que se necesitan
                operaciones CRUD (crear, leer, actualizar y eliminar) para las entidades de:
                <br><br>
                ● Alumno: Id, Nombre, Apellidos, Género, Fecha Nacimiento
                <br>
                ● Profesor: Id, Nombre Apellidos, Género
                <br>
                ● Grado: Id, Nombre, ProfesorId
                <br>
                ● AlumnoGrado: Id, AlumnoId, GradoId, Sección.
                <br>   
                <br> 
                El sistema debe proveer operaciones CRUD para cada entidad.
        </p>
    </div>
    </div>

@endsection