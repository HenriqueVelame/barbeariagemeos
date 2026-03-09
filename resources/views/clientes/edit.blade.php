@extends('layout')

@section('content')

<h2>Editar Cliente</h2>

<form action="/clientes/{{ $cliente->id }}" method="POST">

@csrf
@method('PUT')

<label>Nome</label>
<br>
<input type="text" name="nome" value="{{ $cliente->nome }}">

<br><br>

<label>Email</label>
<br>
<input type="email" name="email" value="{{ $cliente->email }}">

<br><br>

<label>Telefone</label>
<br>
<input type="text" name="telefone" value="{{ $cliente->telefone }}">

<br><br>

<button type="submit">Atualizar</button>

</form>

@endsection