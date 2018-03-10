<?php
	session_start();
?>
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
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<!--********************************************************************-->
<!--************************  PERFIL DO USUÁRIO  ***********************-->
<!--********************************************************************-->
<div class="container-fluid my-top-container">

	<nav class="navbar navbar-expand-md navbar-light" style="background-color: #E6E6E6;">
		<a class="navbar-brand" href="#">
			<img src="../_images/_icons/agenda-icon3.png" width="35" height="35" alt="Ícone de agenda">
			Agenda <span class="sr-only">(current)</span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  	</button>

		<div class="collapse navbar-collapse" id="navbarNav">
		    <ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#">Contacts</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Notes</a>
				</li>
				<li class="nav-item dropdown">
		        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAddNew" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add new </a>
		        		<div class="dropdown-menu" aria-labelledby="navbarDropdownAddNew">
	          				<a class="dropdown-item" href="#">
	          					<i class="fas fa-sign-address-book" aria-hidden="true"></i> &nbsp; New contact</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-sign-sticky-note" aria-hidden="true"></i> &nbsp; New note</a>
	        			</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAccount" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownAccount">
		        			<a class="dropdown-item disabled" href="#"><?php echo($_SESSION["loggedInUserEmail"]) ?></a>
		        			<div class="dropdown-divider"></div>
	          				<a class="dropdown-item" href="#">
	          					<i class="fas fa-sign-user-circle" aria-hidden="true"></i> &nbsp; Your profile</a>
	          				<a class="dropdown-item" href="#">Bla bla bla</a>
	          				<div class="dropdown-divider"></div>
	          				<a class="dropdown-item" href="#">
	          					<i class="fas fa-sign-wrench" aria-hidden="true"></i> &nbsp; Settings</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-sign-in-alt" aria-hidden="true"></i> &nbsp; Logout</a>
	        			</div>
				</li>
			</ul>
		</div>
	</nav>





	<img src="<?php echo($_SESSION["loggedInUserPhoto"]) ?>" alt="..." class="img-thumbnail">

	<?php
	echo "<h1>Seja bem-vindo ".$_SESSION["loggedInUserName"]." ".$_SESSION["loggedInUserLastName"]."</h1>";
	?>

</div>




	<!-- jQuery 3.2.1 library -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- Popper 1.12.9 library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Bootstrap JavaScript plugin (compiled and minified) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>





