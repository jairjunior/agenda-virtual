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

	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

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

		<form role="form" method="post" action="_scripts/LoginProcessamento.php">
			<!-- Email Field -->
			<div class="form-group">
				<label for="inputEmail" class="sr-only">E-mail:</label>
				<div class="input-group">
					<input type="email" name="email" id="inputEmail" class="form-control" placeholder="Seu e-mail" required autofocus>
					<span class="input-group-addon" aria-hidden="true">@</span>
				</div>
			</div>
			<!-- Password Field -->
			<div class="form-group">
				<label for="inputPassword" class="sr-only">Senha:</label>
				<div class="input-group">
					<input type="password" name="password" id="inputPassword" class="form-control" placeholder="Sua Senha" required>
					<span class="input-group-addon">
						<i class="fa fa-key" aria-hidden="true"></i>
					</span>
				</div>
			</div>
			<!-- Checkbox - Remember User -->
			<div class="checkbox">
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

	</div><!-- /.box-login -->
</div><!-- /.middle -->
</div><!-- /.outer -->

	<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>