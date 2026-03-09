<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Barbearia</title>

    <style>
        body{
            font-family: Arial;
            background:#111;
            color:white;
            margin:0;
        }

        nav{
            background:#222;
            padding:15px;
        }

        nav a{
            color:white;
            margin-right:20px;
            text-decoration:none;
            font-weight:bold;
        }

        nav a:hover{
            color:#00c3ff;
        }

        .container{
            padding:30px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
        }

        th,td{
            border:1px solid #444;
            padding:10px;
            text-align:left;
        }

        th{
            background:#333;
        }

        button{
            padding:8px 12px;
            cursor:pointer;
        }
    </style>
</head>

<body>

<nav>

<a href="/dashboard">Dashboard</a>

@auth
@if(auth()->user()->role == 'admin')
<a href="/clientes">Clientes</a>
@endif
@endauth

<a href="/agendamentos">Agendamentos</a>

@auth
<form action="/logout" method="POST" style="display:inline;">
@csrf
<button type="submit">Sair</button>
</form>
@endauth

</nav>

<div class="container">
@yield('content')
</div>

</body>
</html>