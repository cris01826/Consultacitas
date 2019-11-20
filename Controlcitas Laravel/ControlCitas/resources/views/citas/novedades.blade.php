@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-7">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre Paciente</th>
                        <th scope="col">Numero Paciente</th>
                        <th scope="col">Observacion</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($novedad as $item)
                    <tr>
                        <th scope="row">{{$item->id}}</th>
                        <td>{{$item->Nombre_Paciente}}</td>
                        <td>{{$item->Numero_Paciente}}</td>
                        <td>{{$item->Observacion}}</td>
                        <td><a href="{{route('editar',$item->id)}}" class="btn btn-success">Editar</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-md-5">
            <h3 class="text-center mb-4">Agregar Novedades</h3>
            <form action="{{route('store')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="Nombre_Paciente">{{'Nombre Paciente'}}</label>
                    <input id="Nombre_Paciente" class="form-control" type="text" name="Nombre_Paciente">
                </div>
                <div class="form-group">
                    <label for="Numero_Paciente">{{'Numero Paciente'}}</label>
                    <input id="Numero_Paciente" class="form-control" type="text" name="Numero_Paciente">
                </div>
                <div class="form-group">
                    <label for="Observacion">{{'Observacion'}}</label>
                    <input id="Observacion" class="form-control" type="text" name="Observacion">
                </div>
                <button type="submit" class="btn btn-success btn-block">Guardar Novedad</button>
            </form>
            </br>
            <a href="{{url('/citas')}}" class="btn btn-primary btn-block">Regresar</a>
            @if(session('agregar'))
            <div class="alert alert-success mt-3">
                {{session('agregar')}}
            </div>
            @endif
        </div>
    </div>
</div>

@endsection