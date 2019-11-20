@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Documento</th>
            <th scope="col">Primer Nombre</th>
            <th scope="col">Segundo Nombre</th>
            <th scope="col">Primer Apellido</th>
            <th scope="col">Segundo Apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          @foreach($pacientes as $item)
          <tr>
            <th scope="row">{{$item->Documento}}</th>
            <td>{{$item->Primer_Nombre}}</td>
            <td>{{$item->Primer_Apellido}}</td>
            <td>{{$item->Segundo_Nombre}}</td>
            <td>{{$item->Segundo_Apellido}}</td>
            <td>{{$item->Telefono}}</td>
            <td>{{$item->correo}}</td>
            <td>
              <a href="{{ url('/citas/novedades')}}" class="btn btn-primary">Agregar Novedad</a>
              <a href="{{route('agenda',$item->Documento)}}" class="btn btn-success">Citas Agendadas</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

@endsection