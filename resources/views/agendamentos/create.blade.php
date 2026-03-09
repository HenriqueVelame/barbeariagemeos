<!DOCTYPE html>
<html lang="pt-br">

<head>

<meta charset="UTF-8">
<title>Agendar Corte</title>

<style>

body{
background:#121212;
font-family:Arial;
color:white;
display:flex;
justify-content:center;
align-items:center;
height:100vh;
}

.container{
background:#1e1e1e;
padding:40px;
border-radius:10px;
width:350px;
}

label{
margin-top:10px;
display:block;
}

input,select{
width:100%;
padding:10px;
margin-top:5px;
background:#2a2a2a;
border:none;
color:white;
border-radius:5px;
}

button{
margin-top:20px;
width:100%;
padding:10px;
background:#00c2ff;
border:none;
color:black;
border-radius:5px;
}

</style>

</head>

<body>

<div class="container">

<h2>Agendar Corte</h2>

<p>Cliente: {{ session('user_name') }}</p>

<form method="POST" action="/agendar">

@csrf

<label>Barbeiro</label>

<select name="barbeiro">

<option value="João">João</option>
<option value="Carlos">Carlos</option>
<option value="Pedro">Pedro</option>

</select>

<label>Serviço</label>

<select name="servico">

<option value="Corte">Corte</option>
<option value="Barba">Barba</option>
<option value="Corte + Barba">Corte + Barba</option>

</select>

<label>Data</label>
<input type="date" name="data" required>

<label>Hora</label>
<input type="time" name="hora" required>

<button>Agendar</button>

</form>

</div>

</body>
</html>