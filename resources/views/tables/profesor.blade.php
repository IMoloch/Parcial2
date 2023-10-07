<x-app-layout>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

{{-- Tabla que muestra los profesores --}}
<div class="card ms-4 me-4 mt-4">
  <div class="card-body">
    <table class="table mt-3" border="1">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombres</th>
          <th scope="col">Apellidos</th>
          <th scope="col">DUI</th>
          <th scope="col">telefono</th>
          <th scope="col">email</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($profesors as $profesor)
        <tr>
          <td>{{$profesor->id}}</td>
          <td>{{$profesor->nombre}}</td>
          <td>{{$profesor->apellido}}</td>
          <td>{{$profesor->dui}}</td>
          <td>{{$profesor->telefono}}</td>
          <td>{{$profesor->email}}</td>
          </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
<div class="me-4 ms-4 mt-2">
  {{ $profesors->links('') }}
</div>
</x-app-layout>