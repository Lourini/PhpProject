<?php
session_start();

$username = $_SESSION['username'];
?>
<html>

<head>
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/style1.css">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar navbar-inverse ">

            <div class="navbar-header">
                <!---Button block---->
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav1">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--/////////-->
                <a class="navbar-brand" href="#">Programmation_Web_Avancée</a>
            </div>
            <!--collapse div-->
            <div id="nav1" class="collapse navbar-collapse">
                <!--////////////////-->

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a class="dropdown-toggle navbar-brand" data-toggle="dropdown" href="#">
                            <?php echo $username; ?><span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="logout.php">déconnexion</a></li>
                        </ul>
                    </li>
                </ul>

            </div>

        </nav>
    </div>


    <div class="container">
        <div class="row col-md-10">
            <ul class="list-group">
                <a class="list-group-item list-group-item-success" href="xmlcours.php">Contenu relatif au XML<span class="badge">1</span></a>
                <a class="list-group-item list-group-item-warning" href="phpcours.php">Contenu relatif au PHP<span class="badge">3</span></a>
            </ul>
        </div>
    </div>

    <footer class="navbar navbar-inverse navbar-fixed-bottom">
        <center>
            <font color="white">copyright &copy; Othmane Lourini</font>
        </center>
    </footer>
</body>

</html>