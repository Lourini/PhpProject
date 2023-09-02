<?php
session_start();
$panier = $_SESSION['panier'];
if (isset($_GET["ajout"])) {
    switch ($_GET["ajout"]) {
        case "SAMSUNG_GALAXY_S9":
            $panier["SAMSUNG_GALAXY_S9"]++;
            break;
        case "HUAWI_P30":
            $panier["HUAWI_P30"]++;
            break;
        case "Apple_iphone_8":
            $panier["Apple_iphone_8"]++;
            break;
    }
}
$_SESSION['panier'] = array("SAMSUNG_GALAXY_S9" => $panier["SAMSUNG_GALAXY_S9"], "HUAWI_P30" => $panier["HUAWI_P30"], "Apple_iphone_8" => $panier["Apple_iphone_8"]);
?>
<html>

<head>
    <title>Mon magazine de smartphones</title>
    <meta http-equiv="content-type" content="text/html ; charset=utf-8">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>

<body>
    <p align="right">
        <a href="logout.php" class="btn btn-danger">déconnexion</a>
    </p>
    <center>
        <table class="table">
            <tr>
                <th>Ajouter</th>
                <th>Votre commande de quantité</th>
            </tr>
            <tr>
                <td><a href="ajout_article.php?ajout=SAMSUNG_GALAXY_S9" class="btn btn-info">SAMSUNG_GALAXY_S9 NOIRE</a>(7000)dh</td>
                <td>
                    <font><b><?php echo $panier["SAMSUNG_GALAXY_S9"]; ?></b></font>
                </td>
            </tr>
            <tr>
                <td><a href="ajout_article.php?ajout=HUAWI_P30" class="btn btn-info">HUAWI_P30</a>(7000)dh</td>
                <td>
                    <font><b><?php echo $panier["HUAWI_P30"]; ?></b></font>
                </td>
            </tr>
            <tr>
                <td><a href="ajout_article.php?ajout=Apple_iphone_8" class="btn btn-info">Apple_iphone_8</a>(7000)dh</td>
                <td>
                    <font><b><?php echo $panier["Apple_iphone_8"]; ?></b></font>
                </td>
            </tr>
        </table>
    </center>
    <p align="center"><a href="inisitialisation.php" class="btn btn-default">vider mon panier</a><a href="calcul_total.php" class="btn btn-primary">calculer le total</a>
        <a href="accueil.php" class="btn btn-warning">Retour à la page d'accuiel</a></p>

</body>

</html>