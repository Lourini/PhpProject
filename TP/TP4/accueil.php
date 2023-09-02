<?php
session_start();

$username = $_SESSION['username'];
?>
<html>

<head>
    <title>Accueil</title>
    <meta http-equiv="content-type" content="text/html ; charset=utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
    <p align="right">
        <a href="logout.php" class="btn btn-danger">déconnexion</a>
    </p>
    <p align="center">
        <b>Bienvenu,<font size="3" color="blue"><?php echo $username; ?></font>, chez SMI E-Co!!!</b>
    </p>
    <p align="center">Votre panier est vide !?</p>
    <p align="center"><a href="initialisation.php" class="btn btn-primary">cliquer ici</a>pour le remplir</p>
</body>

</html>