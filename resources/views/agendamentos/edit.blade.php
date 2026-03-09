@extends('layout')

@section('content')

<h2>Editar Agendamento</h2>

<form action="/agendamentos/{{ $agendamento->id }}" method="POST">

@csrf
@method('PUT')

<label>Cliente</label>
<br>

<select name="cliente_id">

@foreach($clientes as $cliente)

<option value="{{ $cliente->id }}"
@if($cliente->id == $agendamento->cliente_id) selected @endif>

{{ $cliente->nome }}

</option>

@endforeach

</select>

<br><br>

<label>Data</label>
<br>
<input type="date" name="data" value="{{ $agendamento->data }}">

<br><br>

<label>Hora</label>
<br>
<input type="time" name="hora" value="{{ $agendamento->hora }}">

<br><br>

<button type="submit">Atualizar</button>

</form>

@endsection