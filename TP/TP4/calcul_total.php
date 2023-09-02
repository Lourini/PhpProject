<?php
session_start();
$panier = $_SESSION['panier'];
$total = 0;
$total += $panier["SAMSUNG_GALAXY_S9"] * 7000;
$total += $panier["HUAWI_P30"] * 3000;
$total += $panier["Apple_iphone_8"] * 6500;
?>
<html>

<head>
    <title>Mon magazine de Smartphones</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
    <p align="center">
        le totale de panier est <?php echo $total; ?>DH.

    </p>
    <p align="center">
        <a href="ajout_article.php" class="btn btn-warning">Modifier mon panier</a>
    </p>
    <p align="center">
        <a href="initialisation.php" class="btn btn-danger">Vider mon panier</a>
    </p>
    <p align="center">
        <a href="#" class="btn btn-primary">Confirmer la commande</a>
    </p>
</body>

</html>