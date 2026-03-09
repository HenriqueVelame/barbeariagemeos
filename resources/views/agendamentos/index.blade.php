<!DOCTYPE html>
<html>

<head>

<title>Agendamentos</title>

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

<h2>Agendamentos</h2>

<table>

<tr>

<th>Cliente</th>
<th>Barbeiro</th>
<th>Serviço</th>
<th>Data</th>
<th>Hora</th>

</tr>

@foreach($agendamentos as $a)

<tr>

<td>{{ $a->cliente->nome }}</td>
<td>{{ $a->barbeiro }}</td>
<td>{{ $a->servico }}</td>
<td>{{ $a->data }}</td>
<td>{{ $a->hora }}</td>

</tr>

@endforeach

</table>

</body>

</html>