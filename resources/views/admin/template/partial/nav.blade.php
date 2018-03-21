<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Colegio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('alumno.index') }}">Alumnos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('profesor.index') }}">Profesores</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ route('grado.index') }} ">Grado</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href=" {{ route('alumnogrado.index') }} ">Asignación</a>
          </li>
      </ul>
    </div>
  </nav>