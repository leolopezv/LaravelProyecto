<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyectos - Megamaxi</title>

    {{-- ARCHIVO CSS DE LA LIBRERIA BOOTSTRAP --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <!-- Barra de navegacion-->
    <nav class="navbar bg-body-tertiary">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="https://upload.wikimedia.org/wikipedia/commons/3/3a/Megamaxi_Logo.png" alt="Bootstrap" width="150" height="50">
        </a>
      </div>
    </nav>

  
    <div class="container mt-5">
        <!--Primera fila-->
        <div class="row">
          <div class="col-lg-12 margin-tb">
            <div class="pull-left">
              <h2>Proyectos - Megamaxi</h2>
            </div>
          </div>
        <!--alerta-->
        @if ($message = Session::get('success'))
          <div class="alert alert-primary">
            <p>{{ $message }}</p>
          </div>
        @endif

		<!--tabla hr row th columna-->
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Descripcion</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($proyectos as $proyecto)
              <tr>
                <th> {{ $proyecto->id}} </th>
                <th> {{ $proyecto->nombre}} </th>
                <th> {{ $proyecto->descripcion}} </th>
                <th>
                  <form action="{{ route('proyecto.destroy', $proyecto->id) }}" method="post">
                    <a class="btn btn-primary" href="{{route('proyecto.edit',$proyecto->id)}}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>                
                </th>
              </tr>
            @endforeach
          </tbody>
        </table>
        <div class="pull-right mb-2">
            <a class="btn btn-warning" href="{{ route('proyecto.create') }}" role="button">Crear proyecto</a>
        </div>
    </div>

    {{-- ARCHIVO JS DE LA LIBRERIA BOOTSTRAP --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>
</html>