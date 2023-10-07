<x-app-layout>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

{{-- Tabla que muestra los alumnos --}}
<div class="card ms-4 me-4 mt-4">
  <div class="card-body">
    <table class="table mt-3" border="0">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombres</th>
          <th scope="col">Apellidos</th>
          <th scope="col">Fecha Nacimiento</th>
          <th scope="col">Direccion</th>
          <th scope="col">Genero</th>
          <th scope="col">Telefono</th>
          <th scope="col">Email</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($alumnos as $alumno)
        <tr>
          <td>{{$alumno->id}}</td>
          <td>{{$alumno->nombre}}</td>
          <td>{{$alumno->apellido}}</td>
          <td>{{$alumno->fecha_nacimiento}}</td>
          <td>{{$alumno->direccion}}</td>
          <td>{{$alumno->genero}}</td>
          <td>{{$alumno->telefono}}</td>
          <td>{{$alumno->email}}</td>
          </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
<div class="ms-4 me-4 mt-2">
  {{ $alumnos->links('') }}
</div>
</x-app-layout>