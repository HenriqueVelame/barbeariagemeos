@extends('layout')

@section('content')

<h2>Cadastro de Cliente</h2>

<form action="/clientes" method="POST">

@csrf

<label>Nome</label>
<br>
<input type="text" name="nome" required>

<br><br>

<label>Email</label>
<br>
<input type="email" name="email" required>

<br><br>

<label>Telefone</label>
<br>
<input type="text" name="telefone">

<br><br>

<button type="submit">Cadastrar</button>

</form>

@endsection