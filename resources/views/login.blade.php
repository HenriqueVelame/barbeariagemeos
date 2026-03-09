<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login - Barbearia</title>

    <style>
        body{
            font-family: Arial;
            background:#111;
            color:white;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .login-box{
            background:#222;
            padding:40px;
            border-radius:8px;
            width:300px;
        }

        h2{
            text-align:center;
        }

        input{
            width:100%;
            padding:10px;
            margin-top:10px;
            margin-bottom:20px;
            border:none;
            border-radius:4px;
        }

        button{
            width:100%;
            padding:10px;
            background:#00c3ff;
            border:none;
            color:white;
            font-weight:bold;
            cursor:pointer;
        }

        button:hover{
            background:#0099cc;
        }

        a{
            color:#00c3ff;
            text-decoration:none;
        }

        .register{
            text-align:center;
            margin-top:15px;
        }
    </style>
</head>

<body>

<div class="login-box">

<h2>Login</h2>

<form method="POST" action="/login">

@csrf

<label>Email</label>
<input type="email" name="email" required>

<label>Senha</label>
<input type="password" name="password" required>

<button type="submit">Entrar</button>

</form>

<div class="register">
<p>Não tem conta?</p>
<a href="/register">Criar conta</a>
</div>

</div>

</body>
</html>