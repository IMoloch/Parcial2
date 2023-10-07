<x-app-layout>
   {{-- Importamos con el CDN a bootstrap --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

{{-- Tabla que muestra las Notas --}}
<div class="card ms-4 me-4 mt-4">
  <div class="card-body">
    <table class="table mt-3" border="1">
      <thead>
        <tr>
          <th scope="col">Estudiante</th>
          <th scope="col">Curso</th>
          <th scope="col">Ciclo</th>
          <th scope="col">Año</th>
          <th scope="col">Nota 1</th>
          <th scope="col">Nota 2</th>
          <th scope="col">Nota 3</th>
          <th scope="col">Nota 4</th>
          <th scope="col">Parcial</th>
          <th scope="col">Promedio</th>
          <th scope="col">Profesor</th>
        </tr>
      </thead>
      <tbody>
      @foreach ($notas as $nota)
        <tr>
          <td>{{$nota->estudiante}}</td>
          <td>{{$nota->curso}}</td>
          <td>{{$nota->ciclo}}</td>
          <td>{{$nota->año}}</td>
          <td>{{$nota->nota1}}</td>
          <td>{{$nota->nota2}}</td>
          <td>{{$nota->nota3}}</td>
          <td>{{$nota->nota4}}</td>
          <td>{{$nota->parcial}}</td>
          <td>{{$nota->promedio}}</td>
          <td>{{$nota->profesor}}</td>
          </tr>
      @endforeach
      </tbody>
    </table>
  </div>
</div>
{{-- Atributo de la variable que contiene el modelo que permite mostrar la paginacion --}}
<div class="me-4 ms-4 mt-2">
  {{ $notas->links('') }}
</div>
</x-app-layout>