<?php
session_start();

$username = $_SESSION['username'];
?>
<html>

<head>
    <title>Cours Xml</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
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
                <a class="navbar-brand" href="Accueil.php">Programmation_Web_Avancée</a>
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
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#link1">Xquery</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="link1">
                <h1>Xquery</h1>
                <div class="container">
                    <iframe src="../../C_R/Lourini_Othmane_CR2.pdf" frameborder="0" width="100%" height="700px"></iframe>
                </div>
            </div>
        </div>

        <footer class="navbar navbar-inverse navbar-fixed-bottom">
            <center>
                <font color="white">copyright &copy; Othmane Lourini</font>
            </center>
        </footer>
</body>

</html>