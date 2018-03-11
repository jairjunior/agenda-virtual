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

    <!-- Meus estilos -->
    <link rel="stylesheet" type="text/css" href="_css/agenda.css">

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
<!--******************  BARRA DE NAVEGAÇÃO SUPERIOR ********************-->
<!--********************************************************************-->
<div class="container-fluid my-navbar-container">

	<nav class="navbar navbar-expand-md my-top-navbar">
		<a class="navbar-brand" href="#">
			<img src="../_images/_icons/agenda-icon3.png" width="35" height="35" alt="Contact Book Icon">
			<span class="top-navbar-brand-name">&nbsp; Contact Book</span>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#topNavBar" aria-controls="topNavBar" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars" aria-hidden="true"></i>
	  	</button>

		<div class="collapse navbar-collapse" id="topNavBar">
		    <ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link nav-link-active" href="#">Contacts <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Notes</a>
				</li>
				<li class="nav-item dropdown">
		        	<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAddNew" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Add new </a>
		        		<div class="dropdown-menu" aria-labelledby="navbarDropdownAddNew">
	          				<a class="dropdown-item" href="#">
	          					<i class="fas fa-address-book" aria-hidden="true"></i> &nbsp; New contact</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-sticky-note" aria-hidden="true"></i> &nbsp; New note</a>
	        			</div>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAccount" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Account</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdownAccount">
		        			<a class="dropdown-item disabled" href="#"><?php echo($_SESSION["loggedInUserEmail"]) ?></a>
		        			<div class="dropdown-divider"></div>
	          				<a class="dropdown-item" href="#">
	          					<i class="fas fa-user-circle" aria-hidden="true"></i> &nbsp; Your profile</a>
	          				<a class="dropdown-item" href="#">
	          					<i class="fas fa-download" aria-hidden="true"></i> &nbsp; Download Contacts</a>
	          				<div class="dropdown-divider"></div>
	          				<a class="dropdown-item" href="#">
	          					<i class="fas fa-wrench" aria-hidden="true"></i> &nbsp; Settings</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-sign-out-alt" aria-hidden="true"></i> &nbsp; Logout</a>
	        			</div>
				</li>
			</ul>
		</div>
	</nav>
</div>

<!--********************************************************************-->
<!--************  CONTAINER PARA INFORMAÇÕES DO USUÁRIO ****************-->
<!--********************************************************************-->
<div class="container-fluid user-profile-wrapper">
	<div class="user-profile-box">
		
		<div class="user-profile-img-box">	
			<img src="<?php echo($_SESSION["loggedInUserPhoto"]) ?>" alt="..." class="user-profile-img">
		</div>
		
		<div class="user-profile-info-box">
			<div class="user-profile-name">
				<?php echo "<h3>".$_SESSION["loggedInUserName"]." ".$_SESSION["loggedInUserLastName"]."</h3>"; ?>
			</div>
			<div class="hline"></div>
			<div class="user-profile-info">
				<?php echo "<p>".$_SESSION["loggedInUserEmail"]."</p>"; ?>
				<p>125 Contatos</p>
				<p>12 notas</p>
				<p>Usuário desde 20XX.</p>
				<p>Usuário desde 20XX.</p>
				<p>Usuário desde 20XX.</p>
				<p>Usuário desde 20XX.</p>
			</div>
		</div>
	</div>
</div>

<!--********************************************************************-->
<!--*****************  CORPO PRINCIPAL DA PÁGINA ***********************-->
<!--********************************************************************-->
<div class="container-fluid my-main-container">
	<div class="row">
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4">
				<h2>Contatos!</h2>
		</div>
		<div class="col-xl-3 col-lg-6 col-md-6 col-sm-4">
				<h2>Informações dos Contatos</h2>
		</div>
		<div class="col-xl-3 col-lg-3 col-md-3 col-sm-4">
				<h2>Letras</h2>
		</div>
	</div>
	
</div>



	<!-- jQuery 3.2.1 library -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <!-- Popper 1.12.9 library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <!-- Bootstrap JavaScript plugin (compiled and minified) -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>





