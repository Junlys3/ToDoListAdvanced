
    
 @extends('login.style.register')  




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
     <!-- From Uiverse.io by alexruix --> 
<div class="form-box">
<form class="form" method="POST" action="{{route('register')}}">
    <span class="title">Registrar</span>
    <span class="subtitle">Crie uma conta gruita com seu email.</span>
    <div class="form-container">
     @csrf
      <input type="text" class="input" placeholder="Seu Nome" name="name">
			<input type="email" class="input" placeholder="Email" name="email">
			<input type="password" class="input" placeholder="Senha" name="password">
    </div>
    <button>Registrar</button>
</form>
<div class="form-section">
  <p>Tem uma conta? <a href="{{route('login.index')}}">Login</a> </p>
</div>
</div>

</body>
</html>