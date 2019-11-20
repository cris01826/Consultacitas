@extends('layouts.app')
<style type="text/css">
	.tamaño {
		width: 100px;
	}
</style>
@section('content')
<div class="container pt-3">
	<div class="row">

		<div class="col-md-6">
			<h3 class="text-center mb-4">Historial Citas</h3>
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th scope="col">ID CITA</th>
						<th scope="col">Especialiad</th>
						<th scope="col">Fecha</th>
						<th scope="col">Hora</th>
					</tr>
				</thead>
				<tbody>
					@foreach($historial as $item)
					<tr>
						<th scope="row">{{$item->IdCita}}</th>
						<td>{{$item->Tipo_de_cita}}</td>
						<td>{{$item->Fecha_cita}}</td>
						<td>{{$item->Hora_cita}}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-md-6">



			<h3 class="text-center mb-4">Agendar Cita</h3>
			<form action="{{ url('citas')}}" method="post">
				<input type="hidden" name="docusu" value="">

				<h5>Seleccione una especialidad</h5>
				<select class="form-control tamaño" name="especialidad">
					<option>Seleccionar</option>
					<option>Medicina General</option>
					<option>Odontologia</option>
					<option>Medicina Interna</option>

				</select>
				<br>

				<h5>Seleccione un doctor</h5>
				<select class="form-control tamaño" name="doctor">
					<option>Seleccionar</option>

				</select>
				<br>

				<h5>Seleccione una fecha</h5>
				<input type="date" name="fecha" class="form-control form-control2">
				<br>

				<h5>Seleccione una hora</h5>
				<select class="form-control tamaño" name="hora">
					<option>Selecionar</option>
					<option>08:00 AM</option>
					<option>09:00 AM</option>
					<option>10:00 AM</option>
					<option>11:00 AM</option>
					<option>12:00 MM</option>
					<option>01:00 PM</option>
					<option>02:00 PM</option>
					<option>03:00 PM</option>
					<option>04:00 PM</option>
					<option>05:00 PM</option>
				</select></br>

				<button type="submit" class="btn btn-primary btn-block" name="submit" data-toggle="modal" data-target="#exampleModal">Agendar Cita</button>
			</form>
			<a href="{{url('/citas')}}" class="btn btn-success btn-block">Regresar</a></br>
		</div>
	</div>
</div>
@endsection