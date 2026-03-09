<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<title>Dashboard Barbearia</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial;
}

body{
display:flex;
background:#121212;
color:white;
height:100vh;
}

/* SIDEBAR */

.sidebar{
width:240px;
background:#1e1e1e;
padding:20px;
}

.sidebar h2{
margin-bottom:30px;
text-align:center;
color:#00c2ff;
}

.menu a{
display:block;
padding:12px;
margin-bottom:10px;
background:#2a2a2a;
color:white;
text-decoration:none;
border-radius:6px;
}

.menu a:hover{
background:#00c2ff;
color:black;
}

/* MAIN */

.main{
flex:1;
display:flex;
flex-direction:column;
}

.header{
background:#1f1f1f;
padding:15px 25px;
display:flex;
justify-content:space-between;
align-items:center;
}

.logout button{
background:#ff4d4d;
border:none;
padding:8px 14px;
color:white;
border-radius:5px;
cursor:pointer;
}

.content{
padding:30px;
}

.card{
background:#1e1e1e;
padding:25px;
border-radius:10px;
width:300px;
}

.card h4{
color:#00c2ff;
margin-bottom:10px;
}

</style>

</head>

<body>

<div class="sidebar">

<h2>Barbearia</h2>

<div class="menu">

@if(session('user_role') == 'admin')

<a href="/dashboard">Dashboard</a>
<a href="/clientes">Clientes</a>
<a href="/agendamentos">Agendamentos</a>

@else

<a href="/dashboard">Dashboard</a>
<a href="/agendar">Agendar Corte</a>

@endif

</div>

</div>

<div class="main">

<div class="header">

<h3>Bem vindo, {{ session('user_name') }}</h3>

<form class="logout" method="POST" action="/logout">
@csrf
<button>Sair</button>
</form>

</div>

<div class="content">

@if(session('user_role') == 'admin')

<div class="card">
<h4>Painel Admin</h4>
<p>Use o menu lateral para gerenciar clientes e agendamentos.</p>
</div>

@else

<div class="card">
<h4>Área do Cliente</h4>
<p>Use o menu lateral para agendar seu corte.</p>
</div>

@endif

</div>

</div>

</body>
</html>