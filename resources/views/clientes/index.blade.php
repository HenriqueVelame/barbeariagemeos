<!DOCTYPE html>
<html>

<head>

<title>Clientes</title>

<style>

body{
font-family:Arial;
background:#121212;
color:white;
padding:40px;
}

.topo{
margin-bottom:20px;
}

a{
background:#00c2ff;
padding:8px 15px;
color:black;
text-decoration:none;
border-radius:5px;
}

table{
width:100%;
border-collapse:collapse;
}

th,td{
padding:10px;
border:1px solid #444;
text-align:center;
}

th{
background:#1e1e1e;
}

</style>

</head>

<body>

<div class="topo">

<a href="/dashboard">⬅ Voltar ao Dashboard</a>

</div>

<h2>Clientes</h2>

<table>

<tr>

<th>Nome</th>
<th>Email</th>
<th>Telefone</th>

</tr>

@foreach($clientes as $cliente)

<tr>

<td>{{ $cliente->nome }}</td>
<td>{{ $cliente->email }}</td>
<td>{{ $cliente->telefone }}</td>

</tr>

@endforeach

</table>

</body>
</html>