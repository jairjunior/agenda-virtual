<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Agenda virtual para manter contatos">
    <meta name="author" content="Jair Junior">
    <meta name="keywords" content="HTML,CSS,PHP,JavaScript,jQuery,MySQL,Agenda Virtual,Contatos,Aplicação Web">

	<title>Agenda Virtual</title>

	<!-- Bootstrap 4.0.0 CSS (compiled and minified) -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!-- Meus estilos -->
    <link rel="stylesheet" type="text/css" href="_css/login.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<div class="outer">
<div class="middle">
	<div class="box-login">

		<h1 class="text-center" id="login-title">Login</h1>

		<form role="form" method="post" action="../_controller/LoginController.php">
			
			<!-- Verifica a existência de erro no processo de Login -->
			<?php if( isset($_GET["error"]) && $_GET["error"] == "LOGIN_ERROR" ){ ?>
				<div class="alert alert-danger" role="alert">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Erro:</span>
					Usuário e/ou senha inválidos!
				</div>
			<?php }else if( isset($_GET["error"]) && $_GET["error"] == "LOGIN_NEEDED" ){ ?>
				<div class="alert alert-danger" role="alert">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Erro:</span>
					Efetue o login!
				</div>
			<?php } ?>

			<!-- Email Field -->
			<div class="form-group">
				<label for="inputEmail" class="sr-only">E-mail:</label>
				<div class="input-group">
					<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Seu e-mail" required autofocus>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="input-group-addon" aria-hidden="true">@</span>
						</div>
					</div>
					<span class="input-group-addon" aria-hidden="true">@</span>
				</div>
			</div>

			<!-- Password Field -->
			<div class="form-group">
				<label for="inputPassword" class="sr-only">Senha:</label>
				<div class="input-group">
					<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Sua Senha" required>
					<div class="input-group-append">
						<div class="input-group-text">
							<span class="input-group-addon">
								<i class="fa fa-key" aria-hidden="true"></i>
							</span>
						</div>
					</div>
					<span class="input-group-addon">
						<i class="fa fa-key" aria-hidden="true"></i>
					</span>
				</div>
			</div>

			<!-- Checkbox - Remember User -->
			<div class="checkbox">
				<label><input type="checkbox" name="remember"> Lembrar login e senha</label>
				<label><input type="checkbox" name="remember">Lembrar login e senha</label>
			</div>
			<!-- Login Button -->
			<button type="submit" class="btn btn-primary btn-block">
				Entrar &nbsp;
				<span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
			</button>
			<!-- Signup Button -->
			<a class="btn btn-success btn-block" role="button" href="#">
				Cadastrar-se &nbsp;
				<i class="fa fa-user-plus" aria-hidden="true"></i>
			</a>
		</form>
		<!-- Remember password -->
		<p id="forget-password"><a href="#">Esqueceu sua senha?</a></p>
		<!-- Forgot password? -->
		<p id="forgot-password"><a href="#">Esqueceu sua senha?</a></p>

	</div><!-- /.box-login -->
</div><!-- /.middle -->
</div><!-- /.outer -->

	<!-- jQuery 3.2.1 library -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- Popper 1.12.9 library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Bootstrap JavaScript plugin (compiled and minified) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>