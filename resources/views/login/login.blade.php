


 @extends('login.style.login')  


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <!-- From Uiverse.io by alexruix --> 
<div class="form-box">
<form class="form" action="{{route('login')}}" method="POST">
    @csrf
    <span class="title">Sua conta</span>
    <div class="form-container">
			<input type="email" class="input" placeholder="Email" name="email">
			<input type="password" class="input" placeholder="Senha" name="password">
    </div>
    <button>Login</button>
</form>

</div> 

    
</body>
</html>