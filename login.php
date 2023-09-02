<?php
//session_start();
include 'Authentification.php';
?>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
</head>

<body>
    <div class="container">
        <div class="row col-md-12">
            <h3>Login </h3>
            <form role="form" method="post" action="login.php">
                <?php if (!empty($erreur)) {
                    echo "<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert'>&times;</a><strong>$erreur</strong></div>";
                }
                ?>
                <div class="form-group">
                    <label for="login">Username :</label>
                    <input id="login" class="form-control" type="text" name="login" placeholder="Enter Username">
                </div>
                <div class="form-group">
                    <label for="pwd">Password :</label>
                    <input id="pwd" class="form-control" type="password" name="pwd" placeholder="Enter password">
                </div>
                <center><button type="submit" class="btn btn-primary">submit</button></center>
                <a href="Inscription.php" class="btn btn-warning">inscription</a>
            </form>
        </div>
    </div>
</body>

</html>