@extends('layout')

@section('content')

<h2>Novo Cliente</h2>

<form method="POST" action="/clientes">

@csrf

<label>Nome</label>
<input type="text" name="nome">

<br><br>

<label>Email</label>
<input type="email" name="email">

<br><br>

<br><br>

<label>Telefone</label>
<br>
<input type="text" name="telefone">

<br><br>

<button type="submit">Salvar</button>

</form>

@endsection