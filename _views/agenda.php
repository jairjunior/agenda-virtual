<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Agenda de Contatos</title>
</head>

<body>
<?php
	echo "<h1>Seja bem-vindo ".$_SESSION["loggedUserName"]." ".$_SESSION["loggedUserLastName"]."</h1>";
?>
</body>
</html>



