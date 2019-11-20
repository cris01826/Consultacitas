@extends('layouts.app')

@section('content')
 <div class="container">
  <div class="row">
      <div class="col-md-12 mt-3">
      <h3 class="text-center mb-4">Actualizar Novedad {{$editarNovedad->id}}</h3>
            <form action="{{route('update',$editarNovedad->id)}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="Nombre_Paciente">{{'Nombre Paciente'}}</label>
                    <input id="Nombre_Paciente" class="form-control" type="text" name="Nombre_Paciente" value="{{$editarNovedad->Nombre_Paciente}}">
                </div>
                <div class="form-group">
                    <label for="Numero_Paciente">{{'Numero Paciente'}}</label>
                    <input id="Numero_Paciente" class="form-control" type="text" name="Numero_Paciente" value="{{$editarNovedad->Numero_Paciente}}">
                </div>
                <div class="form-group">
                    <label for="Observacion">{{'Observacion'}}</label>
                    <input id="Observacion" class="form-control" type="text" name="Observacion" value="{{$editarNovedad->Observacion}}">
                </div>
                <button type="submit" class="btn btn-success btn-block">Guardar Novedad</button>
            </form>
            </br>
            <a href="{{url('/citas/novedades')}}" class="btn btn-primary btn-block">Regresar</a>
            @if(session('update'))
            <div class="alert alert-success mt-3">
                {{session('update')}}
            </div>
            @endif
      </div>
  </div>   
 </div>
@endsection