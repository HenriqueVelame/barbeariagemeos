@extends('layout')

@section('content')

<h2>Cadastrar</h2>

<form method="POST" action="/register">
@csrf

<label>Nome</label>
<input type="text" name="name">

<label>Email</label>
<input type="email" name="email">

<label>Senha</label>
<input type="password" name="password">

<button type="submit">Cadastrar</button>

</form>

@endsection