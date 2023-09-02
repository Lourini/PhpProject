<?php
session_start();

$username = $_SESSION['username'];
?>
<html>

<head>
    <title>Cours Php</title>
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
            <li class="active"><a data-toggle="tab" href="#link1">TP2</a></li>
            <li><a data-toggle="tab" href="#link2">TP3</a></li>
            <li><a data-toggle="tab" href="#link3">TP4</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade in active" id="link1">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#demo">demo</a></li>
                    <li><a data-toggle="tab" href="#CR">Compte Rendu</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="demo">
                        <h1>demo</h1>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="TP/TP2-2/Forum.php" frameborder="0" width="90%" height="auto"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade in active" id="CR">
                        <h1>Compte Rendu</h1>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="../../C_R/Othmane_Lourini_PHP_CR2.pdf" frameborder="0" width="90%" height="auto"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade in active" id="link2">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#demo1">demo</a></li>
                    <li><a data-toggle="tab" href="#CR1">Compte Rendu</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="demo1">
                        <h1>demo</h1>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="TP/TP3/Listes-Etudiants.php" frameborder="0" width="90%" height="auto"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade in active" id="CR1">
                        <h1>Compte Rendu</h1>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="../../C_R/Othmane_Lourini_PHP_CR3.pdf" frameborder="0" width="90%" height="auto"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade in active" id="link3">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#demo2">demo</a></li>
                    <li><a data-toggle="tab" href="#CR2">Compte Rendu</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="demo2">
                        <h1>demo</h1>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="TP/TP4/auth.php" frameborder="0" width="90%" height="auto"></iframe>
                        </div>
                    </div>
                    <div class="tab-pane fade in active" id="CR2">
                        <h1>Compte Rendu</h1>
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" class="embed-responsive-item" src="../../C_R/Othmane_Lourini_PHP_CR4.pdf" frameborder="0" width="90%" height="auto"></iframe>
                        </div>
                    </div>
                </div>
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