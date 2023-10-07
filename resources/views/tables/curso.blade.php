<x-app-layout>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

{{-- Tabla que muestra los cursos --}}
<div class="card mt-4 me-4 ms-4">
  <div class="card-body">
    <table class="table mt-2" border="1">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Nombre del Curso</th>
          <th scope="col">Año</th>
          <th scope="col">Ciclo</th>
          <th scope="col">Profesor</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($cursos as $curso)
        <tr>
          <td>{{$curso->id}}</td>
          <td>{{$curso->nombrecurso}}</td>
          <td>{{$curso->año}}</td>
          <td>{{$curso->ciclo}}</td>
          <td>{{$curso->profesor}}</td>
          </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
<div class="ms-4 me-4 mt-2">
  {{ $cursos->links('') }}  
</div>

</x-app-layout>